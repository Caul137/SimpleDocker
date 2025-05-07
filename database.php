<?php
    $servername = "db";
    $username = "caul";
    $password = "root";
    $dbname = "caul";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if($connection -> connect_error){
        die('Conection failed:'. $connection->connect_error);
    };
    echo "Connection Successfuly!
    ";
 ?>