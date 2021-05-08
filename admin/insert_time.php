<?php 
include("../database/connect.php");

$time_start = $_POST["time_start"];
$time_end = $_POST["time_end"];

$sql = "INSERT INTO booking_time (time_start,time_end) VALUE ('$time_start','$time_end')"  ;
$query = mysqli_query($conn, $sql);

if($query){

    echo "OK";

}else{

    echo "Fail";
}

$conn->close();

?>