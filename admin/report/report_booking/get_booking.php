<?php 

include_once("../../../database/connect.php");

$from = $_POST["from"];
$to = $_POST["to"];

$sql ="SELECT o.order_id
            ,o.order_date
            ,o.book_date
            ,o.order_price
            ,o.total_discount
            ,o.or_desc
            ,o.order_status
            ,IFNULL(m.mem_name,'-') AS mem_name
            ,IFNULL(m.mem_phone,'-') AS mem_phone 
FROM orders o INNER JOIN order_details od  ON o.order_id=od.order_id 
LEFT JOIN members m ON o.mem_id=m.mem_id 
INNER JOIN products p ON od.pro_id=p.pro_id WHERE p.cat_id = '00000000018' 
AND DATE_FORMAT(o.book_date,'%d-%m-%Y') BETWEEN '$from' AND '$to'";
$query = $conn->query($sql);

$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);



?>