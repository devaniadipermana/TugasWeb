<?php
include 'connection.php';
header('Content-Type: application/json');
$query = mysqli_query($conn,"SELECT * FROM `photo`");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    // $data = json_encode($row);
	array_push($data, $row);
    // print_r($row);
}
$value = json_encode($data);
echo $value;