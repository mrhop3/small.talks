<?php

$servername = "localhost";  //127.0.0.1
$username = "root"; 
$password = ""; 
$dbname = "smalltalks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
