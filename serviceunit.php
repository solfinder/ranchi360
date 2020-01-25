<!DOCTYPE html>
<html>
<body>
<center><h2>Registered Service Units in Ranchi</h2></center>
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
Total - 14386 (micro - 12714, small - 1618, medium - 54)
</li>
<li>
General - 7187
</li>
<li>
SC - 388
</li>
<li>
ST - 1745
</li>
<li>
OBC - 5066
</li>
</ul>
</body>
</html>