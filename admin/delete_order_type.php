<?php

include("../database/connect.php");

 $orId = $conn -> real_escape_string( $_POST["orId"]);

 $sql = "DELETE FROM order_type WHERE or_type_id = '$orId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>