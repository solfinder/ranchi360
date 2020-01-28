<!DOCTYPE html>
<html>
<body>
<center><h2>Crematoriums in Ranchi</h2></center>
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
<li>Noor Nagar Kabrishtan - Muslim Burial Ground - Ph: 083407 15242</li>
<li>Harmu Muktidham - Hindu Burial Ground</li>
<li>Aadiwasi Masna - Aadiwasi Cemetry - Ph: 090970 19810
</li>
</ul>
</body>
</html>