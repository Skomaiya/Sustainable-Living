<?php
include 'connection.php';

$data = array();
$sql = "SELECT * FROM `discussion` ORDER BY id DESC";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data, $row);
    }
} else {
    echo "Error: " . mysqli_error($con);
    exit();
}

echo json_encode($data);
mysqli_close($con);
exit();
?>
