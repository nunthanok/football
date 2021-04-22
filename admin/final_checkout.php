<?php  
include("../database/connect.php");

$total = $_POST["total"];
$order_id = $_POST["order_id"];
$discount = $_POST["discount"];

$sql = "UPDATE orders SET total_discount = '$discount', order_price = '$total', order_status = 'success' WHERE order_id = '$order_id' ";
$query = $conn->query($sql);
if($query){
    echo "OK";
}else{
    echo "Fail";
}
?>