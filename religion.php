<!DOCTYPE html>
<html>
<body>
<center><h2>Religions in Ranchi</h2></center>
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
<li>Hinduism - 64.31%</li>
<li>Islam - 16.42%</li>
<li>Sarna - 9.72%</li>
<li>Christianity - 8.52%</li>
<li>Sikhism - 0.39%</li>
<li>Jainism - 0.22%</li>
<li>Buddhism - 0.06%</li>
</ul>
</body>
</html>