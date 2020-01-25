<!DOCTYPE html>
<html>
<body>
<center><h2>Highways in Ranchi</h2></center>
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
<li>NH20 - Bakhtiyarpur in Bihar to Satabhaya in Odisha via Ranchi in Jharkhand.</li>
<li>NH39 - passes through Jhansi, Chhatarpur, Panna, Satna, Rewa, Sidhi, Singrauli, Renukut, Shaktinagar, Garhwa, Daltonganj, Latehar, Chandwa, Ranchi</li>
<li>NH43 - Gulganj in Madhya Pradesh, through Chhattisgarh to Chaibasa in Jharkhand via Ranchi. </li>
<li>NH49 - Bilaspur in the Indian state of Chhattisgarh to Kharagpur in West Bengal via Behragoda in Jharkhand</li>
</ul>
</body>
</html>