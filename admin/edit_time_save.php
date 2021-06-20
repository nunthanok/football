<?php 
include("../database/connect.php");

$time_id = $conn -> real_escape_string($_POST["time_id"]);
$edit_time_start = $conn -> real_escape_string($_POST["edit_time_start"]);
$edit_time_end = $conn -> real_escape_string($_POST["edit_time_end"]);

$sql = "UPDATE booking_time SET time_start = '$edit_time_start', time_end = '$edit_time_end' WHERE time_id = '$time_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>