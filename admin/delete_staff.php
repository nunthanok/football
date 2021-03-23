<?php

include("../database/connect.php");

 $staffId = $_POST["staffId"];

 $sql = "DELETE FROM staffs WHERE staff_id = '$staffId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>