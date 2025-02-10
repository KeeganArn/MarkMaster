<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome, " . htmlspecialchars($_SESSION['username']) . " (Teacher)</h1>";
echo "<p>This is your teacher dashboard.</p>";
?>
<a href="logout.php">Logout</a>