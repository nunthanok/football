<?php

include("../database/connect.php");

 $unitId = $_POST["unitId"];

 $sql = "DELETE FROM units WHERE u_id = '$unitId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>