<?php

$mysqli = new mysqli (

    $host = "localhost",
    $username = "root",
    $password = null,
    $dbname = "football_stadium"

);


    // Check connection 

    if($mysqli -> connect_errno){

        echo "Fail to connect to mysql : ". mysqli -> connect_error;
        exit();
    }else{
        echo "Connected";
    }

?>