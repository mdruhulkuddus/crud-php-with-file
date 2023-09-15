<?php

//user mysqli_connect for database connection
//
//$databaseHost = 'localhost';
//$databaseName = 'reginfo';
//$databaseUsername = 'root';
//$databasePassword = '';
//
//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
//



    $databaseHost = 'localhost';
    $databaseName = 'reginfo';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }


    // $mysqli = new mysqli("localhost", "username", "password", "database_name");
    // $mysqli->close();