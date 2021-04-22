<?php 
include("../database/connect.php");

$pro_id = $_POST["edit_product_id"];
$pro_code = $_POST["edit_pro_code"];
$pro_name = $_POST["edit_pro_name"];
$pro_price = $_POST["edit_pro_price"];
$pro_unit = $_POST["edit_unit"];
$pro_cat = $_POST["edit_cat_name2"];

$sql = "UPDATE products SET pro_code = '$pro_code', pro_name='$pro_name', pro_price='$pro_price', u_id='$pro_unit', cat_id='$pro_cat' WHERE pro_id = '$pro_id' ";
$result = mysqli_query($conn, $sql);

if($result){

    echo "OK";

}else{

    echo "Fail";

}

$conn->close();

?>