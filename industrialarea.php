<!DOCTYPE html>
<html>
<body>
<center><h2>Industrial Areas in/around Ranchi</h2></center>
<?php
$servername = "sql203.freesite.vip";
$username = "frsiv_25075995";
$password = "password";
$dbname = "frsiv_25075995_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, registration, address, sectors FROM ngo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    }
} else {
    echo "0 results";
}
$conn->close();
?>
<ul>
<li>Tupudana</li> 
<li>Kokar</li> 
<li>Getalsud</li>
<li>Namkum</li> 
<li>Tatisilwai(Phase 1)</li> 
<li>Tatisilwai(Phase 2)</li> 
</ul>
</body>
</html>