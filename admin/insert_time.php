<?php 
include("../database/connect.php");

$time_start = $conn -> real_escape_string($_POST["time_start"]);
$time_end = $conn -> real_escape_string($_POST["time_end"]);

$sql = "INSERT INTO booking_time (time_start,time_end) VALUE ('$time_start','$time_end')"  ;
$query = mysqli_query($conn, $sql);

if($query){

    echo "OK";

}else{

    echo "Fail";
}

$conn->close();

?>