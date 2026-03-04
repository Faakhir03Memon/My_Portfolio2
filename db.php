<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "portfolio_db";

// Connection create karna
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check karna
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>