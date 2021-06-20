<?php 
include("../database/connect.php");

if(isset($_POST["proId"])){

    $pro_id = $conn -> real_escape_string($_POST['proId']);

$sql = "SELECT * FROM (products) WHERE pro_id='$pro_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>