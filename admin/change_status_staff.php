<?php 
include("../database/connect.php");

  $status = $conn -> real_escape_string( $_POST["status"]);
  $staff_id = $conn -> real_escape_string( $_POST["staff_id"]);

$sql = "UPDATE staffs SET staff_status = '$status' WHERE staff_id = '$staff_id' ";

if(mysqli_query($conn, $sql)){

    echo "Record updated successfully".$status.$staff_id;

}else{

    echo "Error updating record : ". mysqli_error($conn);
}

mysqli_close($conn);

?>