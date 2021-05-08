<?php

include("../database/connect.php");

$phone = $_POST["mPhone"];

$sql = "SELECT mem_phone FROM members  WHERE mem_phone ='$phone' ";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);

if ($row > 0){

    echo "have";
    
}else{
    
    echo "nohave";
};



?>