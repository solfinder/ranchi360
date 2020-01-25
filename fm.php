<!DOCTYPE html>
<html>
<body>
<center><h2>FM Channels in Ranchi</h2></center>
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
BIG 92.7 FM
From: 2011 | Bitrate: 128 Kbps
Genre: bollywood, pop.
Frequency: 92.7 FM
Language: hindi.
</li><li>
Radio City 91.9 FMRadio City 91.9 FM
From: 2001 | Bitrate: 96 Kbps
Genre: news, talk, pop.
Frequency: 91.9 FM
Language: hindi.
</li><li>
Radio Vividh Bharati 103.3 FMRadio Vividh Bharati 103.3 FM
From: 2 October 1957 | Bitrate: 49 Kbps
Genre: classic, old songs, news.
Frequency: 103.3 FM
Language: kannada, hindi, gujarati.
</li><li>
All India Radio Air Akashvani 100.5 FMAll India Radio Air Akashvani 100.5 FM
From: 2002
Genre: news, talk.
Frequency: 100.5 FM
Language: multilingual, international, hindi.
</li><li>
Radio Dhamaal 24 106.4 FMRadio Dhamaal 24 106.4 FM
Genre: bollywood, news, bhangara.
Frequency: 106.4 FM
Language: english.
</li>
</ul>
</body>
</html>