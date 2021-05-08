<?php 
include("../database/connect.php");

$time_id = $_POST["time_id"];
$edit_time_start = $_POST["edit_time_start"];
$edit_time_end = $_POST["edit_time_end"];

$sql = "UPDATE booking_time SET time_start = '$edit_time_start', time_end = '$edit_time_end' WHERE time_id = '$time_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>