<?php 
 
 include("../database/connect.php");

 $proCode = $_POST["pro_code"];
 $proName = $_POST["pro_name"];
 $proPrice = $_POST["pro_price"];
 $unitId = $_POST["unit"];
 $catName = $_POST["cat_name"];

 $sql = "INSERT INTO products (pro_code, pro_name, pro_price, u_id, cat_id) VALUE ('$proCode', '$proName', '$proPrice', '$unitId', '$catName' ) ";
 $query = $conn->query($sql);

 if($query){

    echo "OK";

 }else{

    echo "Fail";

 }


?>