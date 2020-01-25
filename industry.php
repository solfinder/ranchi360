<!DOCTYPE html>
<html>
<body>
<center><h2>Industry in Ranchi</h2></center>
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
<li>SAIL-R&D</li> 
<li>MECON.Ltd</li> 
<li>Garden Reach Shipbuilders & Engineers (Marine Diesel Engine Project)</li>
<li>Central Coalfields</li> 
<li>CMPDI.Ltd</li> 
<li>Subarnarekha Hydel Project (JSEB)</li> 
<li>Usha Martin.Ltd (Wire Rope Division)</li> 
<li>DVC</li> 
<li>STPI-Ranchi</li> 
<li>Heavy Engineering Corp.</li> 
<li>Palriwal Industries</li> 
<li>Pensol India</li> 
<li>Waxpol Industries</li> 
<li>Jharkhand Mega Food Park</li>
</ul>
</body>
</html>