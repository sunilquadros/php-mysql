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

$sql = "SELECT id, msg from quote";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo "id: " . $row["id"]. " - Message: " . $row["msg"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
