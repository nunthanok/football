

<?php 

include_once("../../../database/connect.php");

$from = $_POST["from"];
$to = $_POST["to"];

$sql ="SELECT o.order_id,
    o.order_date,
    o.total_discount,
    o.order_price,
    st.staff_name, 
    st.staff_phone FROM orders o 
   INNER JOIN staffs st ON o.staff_id=st.staff_id 
   INNER JOIN order_details od ON od.order_id=o.order_id 
   INNER JOIN products p ON od.pro_id=p.pro_id 
   WHERE p.cat_id != '00000000018'
   AND DATE_FORMAT(o.order_date,'%d-%m-%Y') BETWEEN '$from' AND '$to'";
$query = $conn->query($sql);

$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);




?>