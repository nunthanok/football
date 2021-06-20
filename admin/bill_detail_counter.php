<?php 
include("../database/connect.php");
$order_id = $conn -> real_escape_string($_POST['bill_id']);
$sql = ("SELECT * FROM order_details od INNER JOIN products p ON od.pro_id = p.pro_id INNER JOIN units u ON p.u_id = u.u_id WHERE od.order_id = '$order_id' ");
$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);
?>
