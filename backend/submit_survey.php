<?php
session_start();
include 'connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $course_id = isset($_SESSION['course_id']) ? $_SESSION['course_id'] : 1;
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1; 
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];

    // Insert survey responses into the database
    $query = "INSERT INTO survey_responses (course_id, user_id, q1, q2, q3, q4, q5) 
              VALUES ('$course_id', '$user_id', '$q1', '$q2', '$q3', '$q4', '$q5')";

    if (mysqli_query($conn, $query)) {
        // Redirect to success page
        header('Location: ../learning.html');
        exit();
    } else {
        // Redirect to error page
        header('Location: ../survey.html');
        exit();
    }

    mysqli_close($conn);
} else {
    // Redirect to error page if the request method is not POST
    header('Location: ../learning.html');
    exit();
}
?>

