<!DOCTYPE html>
<html>
<body>
<center><h2>Government Health Centers in Ranchi</h2></center>
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
<li>Karam Toli Chowk</li>
<li>Karbla Chowk Bahu Bazar Road</li>
<li>Tupudana Chowk</li>
<li>Ward Office, Nayak Mohalla</li>
<li>T.V Tower , Ratu Road</li>
<li>Lower Chutia , Kamlu Toli</li>
<li>Makchund Toli ,Kanta Toli Bus Stand</li>
<li>Tupudana Satranzi</li>
<li>DibhiDih Bridge</li>
<li>Bada Ghagra Jagran Toli</li>
<li>Kusai chowk , Kusai Basti</li>
<li>Namkum Auto Stand</li>
<li>Harmu , Panch Mandir</li>
<li>Lowadih Chowk.</li>
<li>Lanka Toli , Sector-II</li>
<li>Hesag</li>
<li>Kadhgadha , Kumhar Toli, Chunna Bhatta</li>
<li>JP Market , Dhurwa Bus Stand</li>
<li>Aidhalhatu</li>
<li>M Ali Road Lane, HB Road.</li>
<li>Sakhuwa Bagan , Dhurwa</li>
<li>Jagarnathpur , Mausi Badi.</li>
</ul>
</body>
</html>