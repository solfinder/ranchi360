<!DOCTYPE html>
<html>
<body>
<center><h2>Tourist Sites in/around Ranchi</h2></center>
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
<li>Ranchi Lake - 4 KM</li>
<li>Ranchi Hill - 4 KM</li>
<li>Jagannath Temple - 6 KM</li>
<li>Hatiya Dam - 8 KM</li>
<li>Kanke Dam - 10 KM</li>
<li>Rock Garden - 10 KM</li>
<li>Tagore Hill - 10 KM</li>
<li>Birsa Jaiwik Udyan - 25 KM</li>
<li>Hundru Fall - 45 KM</li>
<li>Johna Fall - 45 KM</li>
<li>Dassam Fall - 45 KM</li>
<li>Hirni Fall - 75 KM</li>
<li>Rajrappa Temple - 90 KM</li>
<li>Hazaribagh National Park - 115 KM</li>
<li>Netarhat - 156 KM</li>
<li>Betla National Park - 215 KM</li>
</ul>
</body>
</html>