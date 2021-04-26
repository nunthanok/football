<?php  
session_start();
include("../database/connect.php");

$dateText = $_POST["dateText"];
$time = $_POST["time"];
$stadium = $_POST["stadium"];
$staff_id = $_SESSION["staff_id"];
$date = date('Y-m-d H:i:s');

$sql1 = "SELECT pro_price FROM products WHERE pro_id = '$stadium' ";
$query1 = $conn->query($sql1);
$od_price = $query1->fetch_row()[0] ?? false;

$sql = "INSERT INTO orders (order_date, or_type_id, staff_id, order_status, order_price) VALUE ('$date', '', '$staff_id','pending', '$od_price' ) ";
$query = $conn->query($sql);
$order_id = $conn->insert_id;

$sql11 = "INSERT INTO order_details (order_id, pro_id, od_qty, od_price, time_id) VALUE ('$order_id', '$stadium', '1','$od_price', '$time' ) ";
$query11 = $conn->query($sql11);
if($query11){
    echo "OK";
}else{
    echo "Fail";
}
?>