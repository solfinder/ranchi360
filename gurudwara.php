<!DOCTYPE html>
<html>
<body>
<center><h2>Gurudwaras in Ranchi</h2></center>
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
<li>Gurudwara - Mahatma Gandhi Main Rd, Lower Bazaar, Ranchi - 96439 05208</li>

<li>Gurudwara Shri Guru Nanak Satsang Sabha - Metro Gali, Krishna Nagar Colony, Ranchi - 094303 79291</li>
<li>Gurudwara Kishan Singh Colony - Station Rd, Sirom Toly, Kishan Singh Colony, Gosaintola, Ranchi</li>

<li>Gurudwara Sahib - Kadru, Ashok Nagar, Ranchi - 098002 33645</li>
<li>Gurdwara Sri Guru Singh Sahib - Mahatma Gandhi Main Rd, Lower Bazaar, Ranchi</li>
<li>Gurdwara Sri Guru Singh Sahib - Ratu Rd, CCL Colony, Pisca More, Ranchi</li>
<li>Hatia Gurudwara - Choybasatoli, Hatia, Ranchi-834003</li>
<li>Guru Nanak Bhavan - Ratu Rd, Krishna Nagar Colony, Ranchi, Jharkhand 834005 - 094303 79291</li>
<li>CRPF Gurudwara - CRPF Campus, Tiril, Ranchi, Jharkhand 834004</li>
</ul>
</body>
</html>