<?php
    session_start();
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'booking';
    
    $connect = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($connect, "utf8");
?>