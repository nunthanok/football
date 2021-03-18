<?php 
include("../database/connect.php");

if(isset($_POST["u_id"])){

$sql = "SELECT * FROM (units) WHERE u_id='".$_POST["u_id"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>