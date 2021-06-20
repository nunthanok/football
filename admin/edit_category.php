<?php 
include("../database/connect.php");

if(isset($_POST["cat_id"])){

    $cat_id = $conn -> real_escape_string($_POST["cat_id"]);

$sql = "SELECT * FROM (category) WHERE cat_id=' $cat_id ' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>