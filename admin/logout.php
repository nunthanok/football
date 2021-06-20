<?php

session_start();
// unset($_SESSION["username"]);
// unset($_SESSION["logged_in"]);

if(session_destroy()){
    header("location: login.php");
    exit();
}

?>