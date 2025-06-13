<?php
session_start();
require 'config/db.php';

// Redirect if not admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Fetch stats from DB
$student_count = $teacher_count = $class_count = $subject_count = 0;

// Get user counts
$result = $conn->query("SELECT role, COUNT(*) as count FROM users GROUP BY role");
while ($row = $result->fetch_assoc()) {
    if ($row['role'] === 'student') $student_count = $row['count'];
    if ($row['role'] === 'teacher') $teacher_count = $row['count'];
}

// Example placeholders
$class_count = 24;
$subject_count = 12;

// Fetch recent registrations
$registrations = $conn->query("SELECT full_name, role, created_at FROM users ORDER BY created_at DESC LIMIT 5");
?>
