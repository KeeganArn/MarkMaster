<?php
// Database connection
$host = 'localhost';
$dbname = 'markmaster';
$username = 'root'; // Default for XAMPP
$password = ''; // Default for XAMPP

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die(json_encode(["error" => "Database connection failed: " . mysqli_connect_error()]));
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST['schoolname']) || empty(trim($_POST['schoolname']))) {
        die(json_encode(["error" => "No school name provided."]));
    }

    $schoolname = mysqli_real_escape_string($conn, $_POST['schoolname']);

    $sql = "SELECT DISTINCT schoolname FROM student WHERE schoolname LIKE '%$schoolname%'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(json_encode(["error" => "Error querying database: " . mysqli_error($conn)]));
    }

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($data);

    mysqli_close($conn);
} else {
    die(json_encode(["error" => "Invalid request method."]));
}
?>