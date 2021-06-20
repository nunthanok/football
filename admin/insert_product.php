<?php 
 
 include("../database/connect.php");

 $proCode = $conn -> real_escape_string($_POST["pro_code"]);
 $proName = $conn -> real_escape_string($_POST["pro_name"]);
 $proPrice = $conn -> real_escape_string($_POST["pro_price"]);
 $unitId = $conn -> real_escape_string($_POST["unit"]);
 $catName = $conn -> real_escape_string($_POST["cat_name"]);

 $sql = "INSERT INTO products (pro_code, pro_name, pro_price, u_id, cat_id) VALUE ('$proCode', '$proName', '$proPrice', '$unitId', '$catName' ) ";
 $query = $conn->query($sql);

 if($query){

    echo "OK";

 }else{

    echo "Fail";

 }


?>