<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "g11_vehical_systems";

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if(!$conn){
        die("database connection failed.".mysqli_connect_error());
    }


?>