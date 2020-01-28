<!DOCTYPE html>
<html>
<body>
<center><h2>Museums in Ranchi</h2></center>
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
<li>RANCHI SCIENCE CENTRE , Tagore Hill Road, Near, Temple Road, Chiraundi, Morabadi, Ranchi, JH 834008 , Ph: 18003456523  [9:30 am - 8 pm] (Tuesday closed)</li>
<li>STATE MUSEUM HOTWAR , Hotwar Khelgaon Mega Sports Complex, Ranchi, JH 834009 , Ph: 06512270011 [10 am - 5 pm] (Monday Closed)</li>
<li>TRIBAL MUSEUM , Near Museum Tagore Hill Road, Morabadi Tagore Hill Road, Morabadi, Ranchi, JH 834008 , Ph: 06512551824 [10:30 am - 5 pm] (Monday Closed)</li>
</ul>
</body>
</html>