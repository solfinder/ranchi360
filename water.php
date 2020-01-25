<!DOCTYPE html>
<html>
<body>
<center><h2>Water Supply in Ranchi</h2></center>
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
<li>The water supply of Ranchi city is being made from three surface sources i.e.: Kank Dam, Hatia Dam, Rukka dam. </li>
<li>The combined capacity of these sources is 246 MLD .</li>
<li>There are approximately 13710 domestic connections in the city out of total estimated houses of 1,74,750.</li>
<li>Other sources of water supply in the city include 1718 tube wells, 510 stand post and 35 wells.</li> 
<li>Only 8.30 percent of agricultural use land has proper irrigation facilities.</li>
<li>River and canal are major sources of irrigation.</li>
</ul>
</body>
</html>