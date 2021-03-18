<?php 
include("../database/connect.php");

if(isset($_POST["cat_id"])){

$sql = "SELECT * FROM (category) WHERE cat_id='".$_POST["cat_id"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>