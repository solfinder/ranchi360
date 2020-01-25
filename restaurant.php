<!DOCTYPE html>
<html>
<body>
<center><h2>Restaurants in Ranchi</h2></center>
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
<li>Kaveri Restaurant
</li>
<li>
Capitol Residency
</li>
<li>
Punjab Sweets
</li>
<li>
The Oriental Kitchen
</li>
<li>
Yellow Sapphire
</li>
<li>
Krsna the Veg Restaurant
</li>
<li>
Radisson Blu Hotel
</li>
<li>
The Cake Shop Bakery
</li>
<li>
Waterfront Restaurant
</li>
<li>
Seventh Heaven
</li>
<li>
KFC
</li>
<li>
Punjab Sweet House
</li>
<li>
Kav's Restaurant
</li>
<li>
Uday Misthan Bhandar
</li>
<li>
Bharat Bakery
</li>
<li>
The Great Kabab Factory
</li>
<li>
Domino's Pizza
</li>
<li>
Prana Lounge
</li>
<li>
Moti Mahal Delux Tandoori Trail
</li>
<li>
Pizza Amore Mio
</li>
<li>
Hot Lips
</li>
<li>
The Best
</li>
<li>
Dosa Plaza
</li>
<li>
Anand Vatika
Jungli Moon Dance Restaurant
</li>
<li>
Chaat Xpress
</li>
<li>
Angithi Restaurant
</li>
<li>
Kathi Kabab
</li>
<li>
Samrat Restaurant
</li>
<li>
Chennai Kitchen
</li>
</ul>
</body>
</html>