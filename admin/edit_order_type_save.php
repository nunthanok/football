<?php 
include("../database/connect.php");

$order_type_id = $_POST["edit_order_type_id"];
$order_type_name = $_POST["edit_orderType_name"];

$sql = "UPDATE order_type SET or_type_name = '$order_type_name' WHERE or_type_id = '$order_type_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>