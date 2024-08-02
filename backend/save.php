<?php
include 'connection.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

if (!empty($name) && !empty($msg)) {
    $stmt = $con->prepare("INSERT INTO discussion (parent_comment, student, post) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $id, $name, $msg);
        if ($stmt->execute()) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo json_encode(array("statusCode" => 202, "error" => $stmt->error));
        }
        $stmt->close();
    } else {
        echo json_encode(array("statusCode" => 203, "error" => $con->error));
    }
} else {
    echo json_encode(array("statusCode" => 201, "message" => "Name or message cannot be empty"));
}

mysqli_close($con);
?>
