<!DOCTYPE html>
<html>
<body>
<center><h2>RTO in Ranchi</h2></center>
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
<li>Number : JH-01</li> 
<li>Phone : +(91)-651-2443608 / 2444044</li>
<li>Address : HEC Colony, Sector-2, Near Sahid Maidan, Dhurwa, Ranchi - 834004</li>
</ul>
</body>
</html>