<!DOCTYPE html>
<html>
<body>
<center><h2>LPG Distributors in Ranchi</h2></center>
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
<li>Jayant Gas Company - Circular Rd, Opposite ICICI Bank Ph: 095070 35277</li>
<li>Indane Gas - R.R. Tower, Ratu Rd - Ph: 1800 233 3555</li>
<li>Rk Gas Agency - Ahirtoli,Ranchi Ph: 1800 11 8801</li>
</ul>
</body>
</html>