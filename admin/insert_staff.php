<?php
include("../database/connect.php");

 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $phone = $_POST['phone'];

 
 $sql = "INSERT INTO staffs (staff_name, staff_phone, staff_username, staff_password, staff_status, staff_role )
 VALUE ('$name', '$phone', '$username', '$password', 'ON', '0')";

 if(mysqli_query($conn, $sql)){
    echo "OK";
 }else{
     echo "Fail";
 }

 $conn->close();


?>