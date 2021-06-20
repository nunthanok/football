<?php 
include("../database/connect.php");

$cat_id = $conn -> real_escape_string($_POST["cat_id"]);
$cat_name = $conn -> real_escape_string($_POST["edit_cat_name"]);

$sql = "UPDATE category SET cat_name = '$cat_name' WHERE cat_id = '$cat_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>