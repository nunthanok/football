<?php 
include("../database/connect.php");

$name = $_POST["m_name"];
$phone = $_POST["m_phone"];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO members (mem_name, mem_phone, mem_match, mem_date) VALUE ('$name', '$phone', '0', '$date' )";

if(mysqli_query($conn, $sql)){
    echo "OK";
}else{
    echo "Fail";
}

mysqli_close($conn);

?>