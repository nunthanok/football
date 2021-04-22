<?php  
include("../database/connect.php");

$od_id = $_POST["od_id"];



$sql = ("DELETE FROM order_details WHERE od_id = '$od_id' ");
$query = $conn->query($sql);
echo $query;
?>