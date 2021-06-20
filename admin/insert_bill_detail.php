<?php  
include("../database/connect.php");

$order_id = $conn -> real_escape_string($_POST["order_id"]);
$pro_id = $conn -> real_escape_string($_POST["pro_id"]);
$od_qty = $conn -> real_escape_string($_POST["od_qty"]);

$sql = ("SELECT * FROM products WHERE pro_id = '$pro_id' ");
$query = $conn->query($sql);

if(mysqli_num_rows($query) > 0 ){ 

    $row = $query->fetch_assoc();
    $od_price = $row["pro_price"];

    $sql2 = ("SELECT od_id, od_qty FROM order_details WHERE pro_id = '$pro_id' AND order_id = '$order_id' ");
    $query2 = $conn->query($sql2);
    if (mysqli_num_rows($query2) > 0 ) {
        $row2 = $query2->fetch_assoc();
        $od_qty = $od_qty + $row2["od_qty"];
        $sql3 = "UPDATE order_details SET od_qty = '$od_qty' WHERE order_id = '$order_id' AND pro_id = '$pro_id' ";
        $query3 = $conn->query($sql3);
        if($query3){
            echo "OK";
        }else{
            echo "Fail";
        }
    }else{
        $sql1 = "INSERT INTO order_details (order_id, pro_id, od_qty, od_price) VALUE ('$order_id', '$pro_id', '$od_qty','$od_price' ) ";
        $query1 = $conn->query($sql1);
        if($query1){
            echo "OK";
        }else{
            echo "Fail";
        }
    }
}else{
    echo "Fail";
}
?>