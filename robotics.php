<!DOCTYPE html>
<html>
<body>
<center><h2>Robotics training in Ranchi</h2></center>
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
<li>
Prayog India - 4th Floor, City Center Near Gossner College, 7th Club Rd, Kanka, Ranchi, Jharkhand 834001 - 084094 98926
</li>
<li>
SolFinder Research - 712/D,Circular Road, Lalpur,Ranchi,Jharkhand-834001 - 09886074340
</li>
<li>
OTS World - Near Sadar Thana, beside hindustan press, Kokar, Ranchi, Jharkhand 834001 - 094711 20678
</li>
<li>
SP Robotics Maker Lab - Chaurasia Bhavan, J.C.Road, Burdwan Compound, Lalpur, Ranchi, Jharkhand 834001 - 091231 70063
</li>
</ul>
</body>
</html>