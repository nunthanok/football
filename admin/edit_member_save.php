<?php 
include("../database/connect.php");

$mem_id = $_POST["mem_id"];
$name = $_POST["edit_m_name"];
$phone = $_POST["edit_m_phone"];

$sql = "UPDATE members SET mem_name = '$name', mem_phone = '$phone' WHERE mem_id = '$mem_id' ";

$result = mysqli_query($conn, $sql);

if($result){
    
    echo "OK";

}else{

    echo "Fail";
}

$conn->close();

?>