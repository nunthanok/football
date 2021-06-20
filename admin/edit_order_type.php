<?php 
include("../database/connect.php");

if(isset($_POST["orId"])){

    $order_id = $conn -> real_escape_string($_POST['orId']);

$sql = "SELECT * FROM (order_type) WHERE or_type_id ='$order_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>