<?php  
include("../database/connect.php");

$mem_id = $_POST["mem_id"];
$mem_id2 = $_POST["mem_id2"];
$order_id = $_POST["order_id"];
$discount = 0;
// team1 count match
$sql1 = "SELECT mem_match FROM members WHERE mem_id = '$mem_id' ";
$query1 = $conn->query($sql1);
$mem_match = $query1->fetch_row()[0] ?? false;
// get price to insert discount
$sql3 = "SELECT o.order_price FROM orders o WHERE o.order_id = '$order_id' ";
$query3 = $conn->query($sql3);
$disc = $query3->fetch_row()[0] ?? false;

if($mem_id != "00000000010"){
    if($mem_match >= 6){
        $mem_match = 0;
        $discount = $disc;
    }else{
        $mem_match = $mem_match + 1;
    }
}

// team2 count match
$sql_team2 = "SELECT mem_match FROM members WHERE mem_id = '$mem_id2' ";
$query_team2 = $conn->query($sql_team2);
$mem_match_team2 = $query_team2->fetch_row()[0] ?? false;
if($mem_id2 != "00000000010"){
    if($mem_match_team2 >= 6){
        $mem_match_team2 = 0;
    }else{
        $mem_match_team2 = $mem_match_team2 + 1;
    }
}

// insert member to match
$sql_i = "INSERT INTO matchs (order_id,mem_id1,mem_id2) VALUES ('$order_id','$mem_id','$mem_id2') ";
$query_i = $conn->query($sql_i);

// update match team1
$sql2 = "UPDATE members SET mem_match = '$mem_match' WHERE mem_id = '$mem_id' ";
$query2 = $conn->query($sql2);

// update match team2
$sql2_team2 = "UPDATE members SET mem_match = '$mem_match_team2' WHERE mem_id = '$mem_id2' ";
$query2_team = $conn->query($sql2_team2);

// update discount and status order to success
$sql = "UPDATE orders SET total_discount = '$discount', mem_id = '$mem_id', order_status = 'success' WHERE order_id = '$order_id' ";
$query = $conn->query($sql);
if($query){
    echo "OK";
}else{
    echo "Fail";
}
?>