<?php
    define('DB_SERVER', "localhost");
    define('DB_USERNAME', "root");
    define('DB_PASSWORD', "");
    define('DB_DATABASE', "44mafia");

    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if(!$conn){
        die("Connection Failed:". mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS 44mafia";
    if(!mysqli_query($conn, $sql)){
        die('Error: Unable to connect to the server');
    }


?>