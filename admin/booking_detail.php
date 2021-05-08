<?php 
include("../database/connect.php");

$sql="	SELECT 
			o.order_id, 
			o.order_date,
			ifnull(m.mem_name,'-') as mem_name,
			ifnull(m.mem_phone,'-') as mem_phone,
			p.pro_name,
			o.order_price,
			o.order_status,
			bt.time_start,
			bt.time_end,
			o.or_desc,
			o.book_date
		FROM orders o 
			INNER JOIN order_details od ON o.order_id = od.order_id
			INNER JOIN products p ON od.pro_id = p.pro_id
			LEFT JOIN members m ON o.mem_id = m.mem_id 
			INNER JOIN category c ON p.cat_id = c.cat_id
			INNER JOIN booking_time bt ON od.time_id = bt.time_id
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