<!DOCTYPE html>
<html>
<body>
<center><h2>Rajya Sabha Members from Jharkhand</h2></center>
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
Gupta, Shri Prem Chand	- RJD
</li>
<li>
Naqvi, Shri Mukhtar Abbas - BJP
</li>
<li>
Nathwani, Shri Parimal - IND.
</li>
<li>
Oraon, Shri Samir - BJP
</li>
<li>
Poddar, Shri Mahesh	- BJP
</li>
<li>
Sahu, Shri Dhiraj Prasad - INC
</li>
</ul>
</body>
</html>