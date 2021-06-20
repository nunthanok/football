<?php 
include("../database/connect.php");

if(isset($_POST["time_id"])){

    $time_id = $conn -> real_escape_string($_POST['time_id']);

$sql = "SELECT * FROM (booking_time) WHERE time_id='".$_POST["time_id"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>