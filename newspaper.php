<!DOCTYPE html>
<html>
<body>
<center><h2>Newspapers in Ranchi</h2></center>
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
<li>Times Of India</li>
<li>Hindustan Times</li>
<li>Ranchi Express</li>
<li>Prabhat Khabar</li>
<li>Economic Times</li>
<li>Dainik Jagran</li>
<li>Sanmarg</li>
<li>Rashtriya Khabar Hamari Nazar</li>
<li>Dainik Bhaskar</li>
<li>Khabar Express</li>
<li>Rastriya Naveen Mail</li>
<li>Aj</li>
<li>I Next</li>
<li>Taneem</li>
<li>Ek Sandesh</li>
<li>Qaumi Nara</li> 
<li>Naya India</li>
<li>Indian Punch</li>
<li>Aawami News</li>
<li>Siyasi Ufuque</li>
<li>Farooqui Tanzeem</li>
<li>Roznama Rashtriya Sahara</li>
<li>Roznama Al Hayat</li>
<li>Akhbar-E-Mashriq</li>
<li>Ranchi Weekly</li>
<li>News Wing</li>
<li>Taasir</li>
<li>The Pioneer</li>
<li>Hindustan</li>
<li>In-Dinon</li>
<li>These Days</li>
</ul>
</body>
</html>