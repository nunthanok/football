<?php 
include("../database/connect.php");


if(isset($_POST["staff_id"])){

    $staff_id = $conn -> real_escape_string($_POST['staff_id']);

// $sql = "SELECT * FROM staffs WHERE staff_id = '".$_POST[staff_id]."' ";
 $sql = "SELECT * FROM `staffs` WHERE `staff_id`='".$_POST["staff_id"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);

}

?>