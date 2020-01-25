<!DOCTYPE html>
<html>
<body>
<center><h2>Forest in Ranchi</h2></center>
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
<li> 29% of the area of Ranchi is covered by forest. </li>
<li>The forest type is chiefly deciduous in nature.</li>
<li> Forests are rich in the tree Soria robusta, which is a valuable hardwood. Other trees include Asana (Terminalia Tomatosa),Bamboo and Bhabar.</li> 
<li>The tree known as Mahua (Madhuka Langifolia) produces sweet food flowers, which is used for making liquor. </li>
</ul>
</body>
</html>