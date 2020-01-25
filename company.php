<!DOCTYPE html>
<html>
<body>
<center><h2>Registered Companies in Ranchi</h2></center>
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

$sql = "SELECT * FROM company where REGISTERED_OFFICE_ADDRESS like '%Ranchi%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<br> <u>CIN:</u> ". $row["CORPORATE_IDENTIFICATION_NUMBER"]. " - <u>DOR:</u> ". $row["DATE_OF_REGISTRATION"]. " - <u>Name:</u> ". $row["COMPANY_NAME"]. " - <u>Address:</u> ". $row["REGISTERED_OFFICE_ADDRESS"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>