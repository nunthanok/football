<?php

include("../database/connect.php");

 $time_id = $_POST["time_id"];

 $sql = "DELETE FROM booking_time WHERE time_id = '$time_id' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>