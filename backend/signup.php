<?php 
session_start();

header('Content-Type: application/json');

require 'connection.php';


// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user (user_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_name, $email, $hashed_password);

    if ($stmt->execute()) {
        // Set session variables
        $_SESSION['username'] = $user_name;
        $_SESSION['email'] = $email;
        
        // Redirect to index.html
        echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
        header('Location: ../login.html');
        exit();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
        header('Location: ../login.html');
    }

    $stmt->close();
    $conn->close();
} else {
    // Not a POST request
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    header('Location: ../login.html');
}
?>