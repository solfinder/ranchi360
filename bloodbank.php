<!DOCTYPE html>
<html>
<body>
<center><h2>BloodBanks in Ranchi</h2></center>
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
<li>Name: Nagarmal Modi Seva Sadan Address: Seva Sadan Road, Upper Bazar, Ranchi - 834001, Opp Bara Talab Phone: 0651-2207406 </li>
<li>Name: RIMS Blood Bank Address: Bariatu, Ranchi - 834009 Phone: 0651-2542928 </li>
<li>Name: Archi Jharkhand Blood Bank Address: Near Petrol Pump, Bariatu, Ranchi - 834009, R I M S Phone: 0651-2541862 </li>
<li>Name: CCL Blood Bank Address: C C L Hospital, Kanke Road, Ranchi - 834008, Gandhinagar  Phone: 0651-2230355 </li>
<li>Name: Blood Bank H E C Hospital Address: H E C Plant, Dhurwa, Ranchi - 834004  Phone: +91-9835539866 </li>
</ul>
</body>
</html>