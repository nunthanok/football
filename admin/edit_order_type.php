<?php 
include("../database/connect.php");

if(isset($_POST["orId"])){

$sql = "SELECT * FROM (order_type) WHERE or_type_id ='".$_POST["orId"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>