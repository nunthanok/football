<?php 
include("../database/connect.php");
$dateText = $conn -> real_escape_string($_POST["dateText"]);
$time = $conn -> real_escape_string( $_POST["time"]);
$sql="
SELECT pd.pro_id,pd.pro_name FROM products pd WHERE pd.cat_id = '00000000018' AND pd.pro_id NOT IN(

    SELECT p.pro_id FROM products p INNER JOIN order_details od ON p.pro_id = od.pro_id 
                            INNER JOIN orders o ON od.order_id = o.order_id
    WHERE DATE_FORMAT(o.book_date,'%Y-%m-%d') = STR_TO_DATE('".$dateText."','%d-%m-%Y')
            AND o.order_status = 'pending'
            AND p.cat_id = '00000000018'
            AND od.time_id = '".$time."' )
";

$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);

?>