<!DOCTYPE html>
<html>
<body>
<center><h2>Constituencies in Ranchi</h2></center>
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
Ranchi district has One Parliamentary Constituency(Ranchi) and Seven Assembly Constituencies listed below.
<ul>
<li>58-Tamar</li>	
<li>61-Silli</li>	
<li>62-Khijri</li>	
<li>63-Ranchi</li>
<li>64-Hatia</li>		
<li>65-Kanke</li>
<li>66-Mandar</li>
</ul>
</body>
</html>