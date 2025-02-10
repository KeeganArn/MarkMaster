<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome, " . htmlspecialchars($_SESSION['username']) . " (Student)</h1>";
echo "<p>This is your student dashboard.</p>";
?>
<a href="logout.php">Logout</a>