<?php 
include("../database/connect.php");

 echo  $status = $_POST["status"];
  $staff_id = $_POST["staff_id"];

$sql = "UPDATE staffs SET staff_status = '$status' WHERE staff_id = '$staff_id' ";

if(mysqli_query($conn, $sql)){

    echo "Record updated successfully";

}else{

    echo "Error updating record : ". mysqli_error($conn);
}

mysqli_close($conn);

?>