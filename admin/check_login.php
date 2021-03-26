<?php
session_start();
include("../database/connect.php");
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM staffs WHERE staff_username = '$username' AND staff_password = '$password' ";
$result = $conn->query($sql);

if(mysqli_num_rows($result) > 0 )
{ 
     echo "1";
     $_SESSION["logged_in"] = true; 
     $_SESSION["username"] = $username; 
}
else
{
    
    echo 'The username or password are incorrect!';
}





?>