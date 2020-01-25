<!DOCTYPE html>
<html>
<body>
<center><h2>History of Ranchi</h2></center>
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
<li>Ranchi was under the control of Magadha Empire. </li>
<li>Subsequently it was part of the Mauryan empire(King Ashoka).</li>
<li>Later it was part of the Gupta empire.</li>
<li>Phanimukut was a legendary king who established the Nagvanshi dynasty in Chota Nagpur plateau region.</li> 
<li>The Nagavanshi dynasty ruled over Chotanagpur for several centuries thereafter.</li>
<li>In the year 1585, Akbar's forces defeated the Raja of Kokrah Madhu Singh and exploited the resources of the region. Nagvanshi dynasty became vassal of Mughal Empire. </li>
<li>In 1765 Chotanagpur came under the British rule.</li>
<li>In 1817 the Ranchi district along with the adjoining territories were directly administrated by the Magistrate of Ramgarh. </li>
<li>A separate province named South-Western Frontier Agency was formed in 1833 which included the Chota Nagpur region.</li>
<li>At this time Ranchi was part of the Lohardaga district.</li>
<li>In 1840, the district headquarters were moved to Ranchi.</li>
<li>The Ramgarh Battalion at Ranchi participated in the revolt of 1857.</li>
<li>In 1899, an uprising was initiated by Birsa Munda, who encouraged the people to revolt against the British.</li>
<li>In 1899, the name of the Lohardaga district was changed to Ranchi district.</li>
<li>Under the guidance of Ganesh Chandra Ghosh Ranchi became an epicenter of activities for the followers of Revolutionary campaigns.  </li>
<li>Ranchi was the venue of two meetings between Mahatma Gandhi and Sir Edward Albert Gait,Lieutenant Governor of Bihar and Orissa in the aftermath of Champaran agitation.</li>
<li>After independence Ranchi district was included in the state of Bihar.</li>
<li>Jharkhand became a separate state on 15 November,2000 and Ranchi became its capital</li>
</ul>
</body>
</html>