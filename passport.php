<!DOCTYPE html>
<html>
<body>
<center><h2>Passport in Ranchi</h2></center>
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

<u>Address of Passport Seva Kendra:</u>

Passport Seva Kendra, 2nd floor,

The Galaxia Mall, Ratu Road,

Ranchi, Jharkhand, Pin-834005

Email id :

rpo.ranchi@mea.gov.in

Phone :

0651-2282122,2282080,2282088

Fax

0651- 2282030,2284014
Website: https://portal1.passportindia.gov.in/AppOnlineProject/rpo/rpoPages/rpoRanchi/ranchiRPO.html
</body>
</html>