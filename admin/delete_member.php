<?php

include("../database/connect.php");

 $memberId = $conn -> real_escape_string( $_POST["memberId"]);

 $sql = "DELETE FROM members WHERE mem_id = '$memberId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>