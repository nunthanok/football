<?php

$conn = new mysqli (

    $host = "localhost",
    $username = "root",
    $password = null,
    $dbname = "football_stadium"

);


    // Check connection 

    if($conn -> connect_errno){

        echo "Fail to connect to mysql : ". mysqli -> connect_error;
        exit();
    };

?>