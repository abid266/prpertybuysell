<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cse-482";
    // Create connection, $conn var will be used globally to execute sql queries
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

?>