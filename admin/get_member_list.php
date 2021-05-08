<?php 
include("../database/connect.php");
if(isset($_REQUEST['term'])){
    $search = mysqli_real_escape_string($conn,$_REQUEST['term']);
   
    $sql = "SELECT mem_name, mem_phone FROM members s WHERE s.mem_phone like'%".$search."%'";
$query = $conn->query($sql);
   
    $response = array();
    while($row = mysqli_fetch_array($query) ){
        $response[] = array("label"=>$row['mem_name']. ": " .$row['mem_phone'],"id"=>$row['mem_phone']);
    }
   
    echo json_encode($response);
   }
/*   
$phone = $_POST["item"];
$sql="	SELECT * FROM members s WHERE s.mem_phone LIKE '%$phone%' LIMIT 1";

$query = $conn->query($sql);
$result = array();

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $result[] = $row;
    }
}
print json_encode($result);
*/
?>