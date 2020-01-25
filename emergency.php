<!DOCTYPE html>
<html>
<body>
<center><h2>Emergency Numbers in Ranchi</h2></center>
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
Police - 100
</li>
<li>
Ambulance - 108
</li>
<li>
Emergency - 112
</li>
<li>
Railways - 139
</li>
<li>
Highway emergency - 1033
</li>
<li>
Rail accident - 1072
</li>
<li>
Women helpline - 1091
</li>
<li>
Child helpline - 1098
</li>
</ul>
</body>
</html>