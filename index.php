<?php
$servername = "172.30.251.114";
$username = "ose";
$password = "openshift";
$dbname = "quotes";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
