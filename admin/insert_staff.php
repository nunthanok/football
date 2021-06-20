<?php
include("../database/connect.php");

 $name = $conn -> real_escape_string($_POST['name']);
 $username = $conn -> real_escape_string($_POST['username']);
 $password = $conn -> real_escape_string($_POST['password']);
 $phone = $conn -> real_escape_string($_POST['phone']);

 
 $sql = "INSERT INTO staffs (staff_name, staff_phone, staff_username, staff_password, staff_status, staff_role )
 VALUE ('$name', '$phone', '$username', '$password', 'ON', '0')";

 if(mysqli_query($conn, $sql)){
    echo "OK";
 }else{
     echo "Fail";
 }

 $conn->close();


?>