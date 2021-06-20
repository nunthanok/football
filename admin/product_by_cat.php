<?php 
include("../database/connect.php");
$cat_id = $conn -> real_escape_string($_POST["cat_id"]);
if(trim($cat_id) == ""){
    $sql = ("SELECT * FROM products INNER JOIN units ON products.u_id = units.u_id WHERE products.cat_id NOT IN('00000000018') ");
}else{
    $sql = ("SELECT * FROM products INNER JOIN units ON products.u_id = units.u_id WHERE cat_id = '".$cat_id."' "); 
}

$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);
?>
