<?php 
include("../database/connect.php");

if(isset($_POST["memberId"])){

$sql = "SELECT * FROM `members` WHERE `mem_id`='".$_POST["memberId"]."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>