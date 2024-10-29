<?php
    $servername ="localhost:3306";
    $username="u0_a577";
    $password="allen";
    $dbname="attendance";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die ("Connection failed". $conn->connect_error);
    }
?>