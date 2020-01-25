<!DOCTYPE html>
<html>
<body>
<center><h2>Ranchi Smart City</h2></center>
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
A greenfield area of 656 Acres is being development as part of the Ranchi Smart City initiative.
</li>
<li>
This area in located in HEC, Dhurwa 5kms distance from the central business district (CBD) and in close proximity to the Proposed Capital Complex, Airport and Hatia railway station.
</li>
<li>
A Smart City Special Purpose Vehicle (SPV) has been formed called Ranchi Smart City Corporation Limited for the implementation of the Smart City Project.
</li>
<li>
The total implementation time of smart city project is 5 years.
</li>
<li>
134 acres if land has been allocated for institutional purpose.
</li>
<li>
86 acres of land has been allocated for residential purpose.
</li>
<li>
67 acres of land has been allocated for commercial entities.
</li>
<li>
69 acres of land is meant for mixed use.
</li>
<li>
244 acres has been retained as open space.
</li>
</ul>
</body>
</html>