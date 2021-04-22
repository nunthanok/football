<?php 
include("../database/connect.php");
$sql = ("SELECT * FROM orders o INNER JOIN order_type ot ON o.or_type_id = ot.or_type_id  WHERE order_status = 'pending' ");
$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);
?>
