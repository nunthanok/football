<?php  
include("../database/connect.php");

$order_id = $conn -> real_escape_string( $_POST["order_id"]);
$sql = "UPDATE orders SET order_status = 'reject' WHERE order_id = '$order_id' ";
$query = $conn->query($sql);
if($query){
    echo "OK";
}else{
    echo "Fail";
}
?>