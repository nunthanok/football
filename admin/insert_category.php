<?php 
include("../database/connect.php");

$cat_name = $conn -> real_escape_string($_POST["cat_name"]);

$sql = "INSERT INTO category (cat_name) VALUE ('$cat_name')"  ;
$query = mysqli_query($conn, $sql);

if($query){

    echo "OK";

}else{

    echo "Fail";
}

$conn->close();

?>