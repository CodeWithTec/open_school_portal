<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit;
}
?>
<h1>Welcome Student</h1>
<a href="logout.php">Logout</a>