<?php

include("../database/connect.php");

 $proId = $_POST["proId"];

 $sql = "DELETE FROM products WHERE pro_id = '$proId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>