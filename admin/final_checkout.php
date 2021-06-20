<?php  
include("../database/connect.php");

$total = $conn -> real_escape_string($_POST["total"]);
$order_id = $conn -> real_escape_string($_POST["order_id"]);
$discount = $conn -> real_escape_string($_POST["discount"]);

$sql = "UPDATE orders SET total_discount = '$discount', order_price = '$total', order_status = 'success' WHERE order_id = '$order_id' ";
$query = $conn->query($sql);
if($query){
    echo "OK";
}else{
    echo "Fail";
}
?>