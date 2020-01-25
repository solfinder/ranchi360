<!DOCTYPE html>
<html>
<body>
<center><h2>Blocks in Ranchi</h2></center>
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
Ranchi district is divided into 2 sub-divisions - Ranchi and Bundu.
Ranchi sub-division is further divided into 11 blocks: 
<ul>
<li>Angara</li>
<li>Burmu</li> 
<li>Bero</li> 
<li>Chanho</li> 
<li>Kanke</li>
<li>Lapung</li> 
<li>Mandar</li> 
<li>Namkum</li>
<li>Ormanjhi</li>
<li>Ratu</li>
<li>Silli</li> 
</ul>
Bundu sub-division comprises 3 blocks: 
<ul>
<li>Bundu</li> 
<li>Sonahatu</li>
<li>Tamar</li>
</ul>
</body>
</html>