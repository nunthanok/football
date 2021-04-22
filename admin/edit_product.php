<?php 
include("../database/connect.php");

if(isset($_POST["proId"])){

$sql = "SELECT * FROM (products) WHERE pro_id='".$_POST["proId"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>