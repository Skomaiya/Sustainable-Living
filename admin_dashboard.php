<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: admin_login.html");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="course.css">
</head>
<body>
    <h2>Admin Dashboard</h2>
    <form id="add-course-form">
        <h3>Add New Course</h3>
        <input type="text" id="course-name" placeholder="Course Name" required>
        <textarea id="course-description" placeholder="Course Description" required></textarea>
        <button type="button" onclick="addCourse()">Add Course</button>
    </form>
    <h3>Existing Courses</h3>
    <div id="courses-list" class="course-list"></div>
    <script src="admin.js"></script>
</body>
</html>

