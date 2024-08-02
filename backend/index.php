<?php
include 'connection.php';

// Initialize response array
$response = array();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

if (!empty($name) && !empty($msg)) {
    $stmt = $con->prepare("INSERT INTO discussion (student, post) VALUES (?, ?)");
    if ($stmt === false) {
        $response['statusCode'] = 201;
        $response['error'] = 'Prepare failed: ' . htmlspecialchars($con->error);
        echo json_encode($response);
        exit();
    }

    $bind = $stmt->bind_param("ss", $name, $msg);
    if ($bind === false) {
        $response['statusCode'] = 201;
        $response['error'] = 'Bind failed: ' . htmlspecialchars($stmt->error);
        echo json_encode($response);
        exit();
    }

    $execute = $stmt->execute();
    if ($execute) {
        $response['statusCode'] = 200;
    } else {
        $response['statusCode'] = 201;
        $response['error'] = 'Execute failed: ' . htmlspecialchars($stmt->error);
    }

    $stmt->close();
} else {
    $response['statusCode'] = 201;
    $response['error'] = "Invalid input";
}

$con->close();

// Ensure no other output and return JSON
header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
