<!DOCTYPE html>
<html>
<body>
<center><h2>Geography of Ranchi</h2></center>
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
<li>Ranchi is the capital of Jharkhand State. </li>
<li>This state came into existence on 15th November 2000 as a 28th State of Union of India after being bifurcated from Bihar State.</li>
<li>It isgeographically situated in north eastern part of peninsular plateau of India (also known as Chhotanagpur Plateau).</li>
<li>Ranchi is one among the 24 districts of Jharkhand.</li> 
<li>Geographical area of Ranchi District is 7,593 sq. km.</li>
<li>The climate is generally dry with average rainfall 1500 mm. </li>
<li>The average temperature varies between 18 degrees to 29 degrees.</li>
<li>The fertile land comprises of red and yellow soil with some amount of sand. </li>
<li>Ranchi district is surrounded by Purulia district (West Bengal) in east, by Lohardaga, Gumla,
and Palamau in west, by Hazaribagh in north and by Singhbhum and Khunti districts in
south.</li>
<li>The rivers like Swarnrekha,Koyal, and Damodar flow through the district.</li>
<li>Ranchi is located between latitude 22o 30’ North - 23o 36’ and longitude 84o 54 East –
85o 54’.</li>
<li>The tropic of CANCER at 231/2o North passes through Ranchi District (at Ormanjhi).</li>
<li>The average altitude of Ranchi is 600 meters above the sea level.</li>
<li>Ranchi district is endowed with forest in an area of 3,25,603 Acres, which is 17.38%
out of total area. </li>
</ul>
</body>
</html>