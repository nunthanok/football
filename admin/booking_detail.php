<?php 
include("../database/connect.php");

$sql="	SELECT 
			o.order_id, 
			o.order_date,
			m.mem_name,
			m.mem_phone,
			p.pro_name,
			o.order_price,
			o.order_status
		FROM orders o 
			INNER JOIN order_details od ON o.order_id = od.order_id
			INNER JOIN products p ON od.pro_id = p.pro_id
			INNER JOIN members m ON o.mem_id = m.mem_id 
			INNER JOIN category c ON p.cat_id = c.cat_id
		WHERE c.cat_name = 'STADIUM' AND o.order_status = 'pending' ";

$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);

?>