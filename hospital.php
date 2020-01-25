<!DOCTYPE html>
<html>
<body>
<center><h2>Hospitals in Ranchi</h2></center>
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
<li>Sadar Hospital</li>
<li>Rajendra Institute of Medical Sciences(RIMS)</li>
<li>Central Instituteof Psychiatry, Kanke</li>
<li>Medanta Hospital (formerly knwon as Apollo-Abdul Razzaque Ansari Memorial Weaver's Hospital) </li>
<li>Bhagwan Mahavir Medica Superspecialty Hospital</li>
<li>Santevita Hospital</li>
<li>Orchid Medical Centre</li>
<li>Ranchi Institute of Neuro-Psychiatry & Allied Sciences (RINPAS)</li>
</ul>
</body>
</html>