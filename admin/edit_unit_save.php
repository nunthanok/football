<?php 
include("../database/connect.php");

$u_id = $_POST["u_id"];
$u_name = $_POST["edit_u_name"];

$sql = "UPDATE units SET u_name = '$u_name' WHERE u_id = '$u_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>