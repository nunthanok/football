<?php 
include("../database/connect.php");

$unit_name = $conn -> real_escape_string($_POST["unit_name"]);

$sql = "INSERT INTO units (u_name) VALUE ('$unit_name')"  ;
$query = mysqli_query($conn, $sql);

if($query){

    echo "OK";

}else{

    echo "Fail";
}

$conn->close();

?>