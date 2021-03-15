<?php 
include("../database/connect.php");

$staff_id = $_POST["staff_id"];
$staff_name = $_POST["edit_name"];
$staff_username = $_POST["edit_username"];
$staff_phone = $_POST["edit_phone"];
$staff_password = $_POST["edit_password"];

$sql = "UPDATE staffs SET staff_name = '$staff_name', staff_phone='$staff_phone', staff_username='$staff_username', staff_password='$staff_password' WHERE staff_id = '$staff_id'";

if(mysqli_query($conn, $sql)){

    echo "Record updated successfully";
}else{

    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>