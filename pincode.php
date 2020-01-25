<!DOCTYPE html>
<html>
<body>
<center><h2>Pincodes in Ranchi</h2></center>

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

$sql = "SELECT pincode,area FROM pincode ORDER BY pincode";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Pincode: ". $row["pincode"]. " - Area: ". $row["area"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>