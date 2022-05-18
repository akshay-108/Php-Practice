<?php

    $host = 'localhost';
    $user = 'akshay';
    $password = 'akshay@123';
    $database = 'phppractice';
    $conn = mysqli_connect($host, $user, $password, $database);

    if(!$conn)
    {
        die("Connection failed");
    }

?>