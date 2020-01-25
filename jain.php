<!DOCTYPE html>
<html>
<body>
<center><h2>Jain Temples in Ranchi</h2></center>
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
<li>Jain Mandir - 16, Baralal St, Saraswati Market, Upper Bazar - 079848 46616</li>
<li>Neminath Shwetambar Jain Mandir - Doranda, Ranchi, Jharkhand 834002</li>
<li>Jain Temple - NH 75, Kumhartoli, Ranchi</li>
<li>Sri Mahavir Mandir - Kadru, Ashok Nagar, Ranchi-2</li>
<li>Sri Digambar Jain Mandir - Saraswati Market, Upper Bazar, Ranchi</li>
</ul>
</body>
</html>