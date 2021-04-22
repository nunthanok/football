<?php  
include("../database/connect.php");

$order_id = $_POST["order_id"];
$sql = ("DELETE FROM orders WHERE order_id = '$order_id' ");
$sql1 = ("DELETE FROM order_details WHERE order_id = '$order_id' ");
$query = $conn->query($sql);
$query1 = $conn->query($sql1);
if($query && $query1){
    echo "OK";
}else{
    echo $query + " | " + $query1;
}

?>