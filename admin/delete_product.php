<?php

include("../database/connect.php");

 $proId = $conn -> real_escape_string($_POST["proId"]);

 $sql = "DELETE FROM products WHERE pro_id = '$proId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>