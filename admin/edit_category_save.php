<?php 
include("../database/connect.php");

$cat_id = $_POST["cat_id"];
$cat_name = $_POST["edit_cat_name"];

$sql = "UPDATE category SET cat_name = '$cat_name' WHERE cat_id = '$cat_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>