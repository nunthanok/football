<?php

include("../database/connect.php");

 $catId = $conn -> real_escape_string( $_POST["catId"]);

 $sql = "DELETE FROM category WHERE cat_id = '$catId' ";

 if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Fail" . mysqli_error($conn);
  }


?>