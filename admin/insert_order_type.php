<?php 
include("../database/connect.php");

$name = $_POST["order_type_name"];

$sql = "INSERT INTO order_type (or_type_name) VALUE ('$name')"  ;
$query = mysqli_query($conn, $sql);

if($query){

    echo "OK";

}else{

    echo "Fail";
}

$conn->close();

?>