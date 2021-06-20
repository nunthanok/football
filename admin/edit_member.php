<?php 
include("../database/connect.php");

if(isset($_POST["memberId"])){

    $member_id = $conn -> real_escape_string($_POST['memberId']);

$sql = "SELECT * FROM `members` WHERE `mem_id`='$member_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);
}

?>