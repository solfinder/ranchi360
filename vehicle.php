<!DOCTYPE html>
<html>
<body>
<center><h2>Registered Vehicles in Ranchi</h2></center>
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
Total Vehicles - 547036  (2014-15)
</li>
<li>
Transport Vehicles - 75704
</li>
<li>
Non Transport Vehicles - 471332
</li>
</ul>
<u>Transport vehicle classification:</u>
<ul>
<li>
Multiaxled/Articulated vehicles	0
</li>
<li>
Trucks & Lorries	19720
</li>
<li>
Light Motor Vehicles (Goods) - Four wheelers	7110
</li>
<li>
Light Motor Vehicles (Goods) - Three wheelers	8089
</li>
<li>
Light Motor Vehicles (Goods) - Total	15199
</li>
<li>
Buses - Stage carriages	4434
</li>
<li>
Buses - Contract carriages	0
</li>
<li>
Buses - Private Service Vehicles	0
</li>
<li>
Buses - Other buses	543
</li>
<li>
Buses - Total	4977
</li>
<li>
Taxis - Motor cabs	1217
</li>
<li>
Taxis - Maxi cabs	6251
</li>
<li>
Taxis - Other taxis	4996
</li>
<li>
Taxis - Total	12464
</li>
<li>
Light Motor Vehicles (Passengers) - Three seaters	23344
</li>
<li>
Light Motor Vehicles (Passengers) - Four to six seaters	0
</li>
<li>
Light Motor Vehicles (Passengers) - Total	23344
</li>
<li>
Motor cycles On Hire	0
</li>
</ul>
<u>Non-Transport vehicle classification:</u>
<ul>
<li>
Two wheelers - Scooters	68665
</li>
<li>
Two wheelers - Mopeds	6842
</li>
<li>
Two wheelers - Motor cycles	280560
</li>
<li>
Two wheelers - Total	356067
</li>
<li>
Cars	65434
</li>
<li>
Jeeps	23908
</li>
<li>
Omni buses	4737
</li>
<li>
Tractors	14183
</li>
<li>
Trailers	7003
</li>
<li>
Other vehicles not covered	0
</li>
</ul>
</body>
</html>