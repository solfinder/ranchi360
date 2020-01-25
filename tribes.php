<!DOCTYPE html>
<html>
<body>
<center><h2>Tribes in Ranchi</h2></center>
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
<li>Asur</li>
<li>Baiga</li>
<li>Banjara</li>
<li>Bathudi</li>
<li>Bedia</li>
<li>Binjhia</li>
<li>Birhor</li>
<li>Birjia</li>
<li>Chero</li>
<li>Chik Baraik</li>
<li>Gond</li>
<li>Gorait</li>
<li>Ho</li>
<li>Karmali</li>
<li>Kharia</li>
<li>Kharwar</li>
<li>Khond</li>
<li>Kisan</li>
<li>Kora</li>
<li>Korwa</li>
<li>Lohra</li>
<li>Mahli</li>
<li>Mal Pahariya</li>
<li>Munda</li>
<li>Oraon</li>
<li>Parhaiya</li>
<li>Santhal</li>
<li>Sauria Paharia</li>
<li>Savar</li>
<li>Bhumij</li>
<li>Kol</li>
<li>Kanwar</li>
</ul>
</body>
</html>