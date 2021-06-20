<?php 
session_start();
 
 include("../database/connect.php");

 $staff_id = $_SESSION["staff_id"];
 $order_type_id = $conn -> real_escape_string($_POST["order_type_id"]);
 $date = date('Y-m-d H:i:s');

 $sql = "INSERT INTO orders (order_date, or_type_id, staff_id, order_status) VALUE ('$date', '$order_type_id', '$staff_id','pending' ) ";
 $query = $conn->query($sql);

 if($query){

    echo "OK";

 }else{

    echo "Fail";

 }


?>