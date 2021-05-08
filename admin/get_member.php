<?php 
include("../database/connect.php");
$phone = $_POST["cphone"];
$sql="	SELECT * FROM members s WHERE s.mem_phone LIKE '%$phone%' LIMIT 1";

$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);

?>