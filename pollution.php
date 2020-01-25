<!DOCTYPE html>
<html>
<body>
<center><h2>Public Toilets per ward in Ranchi</h2></center>
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
<li>Month andYear	Monthly mean concentration NO2	Monthly mean concentration  SO2</li>
<li>Dec-18	35.8	17.07</li>
<li>Nov-18	36	17.05</li>
<li>Oct-18	35.9	17.16</li>
<li>Sep-18	35.9	17.14</li>
<li>Aug-18	35.8	17.35</li>
<li>Jul-18	35.8	17.34</li>
<li>Jun-18	36.6	17.98</li>
<li>May-18	36.4	18.13</li>
<li>Apr-18	36.7	18.17</li>
<li>Mar-18	36.8	18.62</li>
<li>Feb-18	36.8	18.62</li>
<li>Jan-18	36.8	18.62</li>
<li>Dec-17	37	18.81</li>
<li>Nov-17	36.6	18.84</li>
<li>Oct-17	40	22.31</li>
<li>Sep-17	36.5	18.88</li>
<li>Aug-17	36.5	18.88</li>
<li>Jul-17	36.5	18.88</li>
<li>Jun-17	36.5	18.88</li>
<li>May-17	36.6	19.05</li>
<li>Apr-17	36.8	18.7</li>
<li>Mar-17	36.8	18.7</li>
<li>Feb-17	37	18.81</li>
<li>Jan-17	36.8	18.83</li>
</ul>
</body>
</html>