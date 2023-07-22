<?php
$host = "localhost"; 
$port = 3306;
$username = "root"; 
$password = ""; 
$database = "sassy-style"; 

// Create a connection
$con = mysqli_connect($host, $username, $password, $database, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>
