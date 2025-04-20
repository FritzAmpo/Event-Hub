"<?php

function create_connection() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "socmed_eventhub";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}




