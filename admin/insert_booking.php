<?php  
session_start();
include("../database/connect.php");

//$dateText = $_POST["dateText"];

$staff_id = "13"; // ກຳນົດຄ່າ id= 13 (ລູກຄ້າທົ່ວໄປ)

if (isset($_SESSION["staff_id"])) {
    
    $staff_id = $_SESSION["staff_id"];
}



$date = strtotime(date("Y-m-d", strtotime("+3 day")));
$dateText = strtotime($conn -> real_escape_string($_POST["dateText"]));
$dateText = date("Y-m-d", $dateText);

if(strtotime($dateText) <= $date 
    && strtotime($dateText) > strtotime(date("Y-m-d"))
    || (strtotime($dateText) == strtotime(date("Y-m-d") && strtotime(date("Y-m-d")) < strtotime('16:00:00')))
    ){
    $desc = $conn -> real_escape_string($_POST["desc"]);
    $time = $conn -> real_escape_string($_POST["time"]);
    $stadium = $conn -> real_escape_string($_POST["stadium"]);
    
    $date = date('Y-m-d H:i:s');
    
    $sql1 = "SELECT pro_price FROM products WHERE pro_id = '$stadium' ";
    $query1 = $conn->query($sql1);
    $od_price = $query1->fetch_row()[0] ?? false;
    
    $c_sql="SELECT COUNT(0) FROM orders o 
            INNER JOIN order_details od ON (o.order_id = od.order_id)
            INNER JOIN booking_time t ON (od.time_id = t.time_id)
            WHERE DATE_FORMAT(o.book_date,'%Y-%m-%d') = DATE_FORMAT('".$dateText."', '%Y-%m-%d')
                    AND t.time_id = '".$time."' AND od.pro_id = '".$stadium."' AND o.order_status = 'pending' ";
    $c_query = $conn->query($c_sql);
    $c_count = $c_query->fetch_row()[0] ?? false;
    
    if($c_count == 0){
        $sql = "INSERT INTO orders (order_date, or_type_id, staff_id, order_status, order_price,or_desc,book_date) VALUE ('$date', '', '$staff_id','pending', '$od_price', '$desc', '$dateText' ) ";
        $query = $conn->query($sql);
        $order_id = $conn->insert_id;
        
        $sql11 = "INSERT INTO order_details (order_id, pro_id, od_qty, od_price, time_id) VALUE ('$order_id', '$stadium', '1','$od_price', '$time' ) ";
        $query11 = $conn->query($sql11);
        if($query11){
            echo "OK";
        }else{
            echo "Fail";
        }
    }else{
        echo "Wrong value input";
    }
}else{
    echo "ການຈອງແມ່ນເລີ່ມຈາກມື້ປັດຈຸບັນ ແລະ ບໍ່ອານຸຍາດໃຫ້ເກິີນ 3 ມື້. (ມື້ປັດຈຸບັນແມ່ນຕ້ອງຈອງກ່ອນ 16:00 ໂມງ.)";
}
?>