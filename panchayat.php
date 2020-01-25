<!DOCTYPE html>
<html>
<body>
<center><h2>Panchayats in Ranchi</h2></center>
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
Ranchi district has 305 panchayats.Block level distribution of panchayats:
<ul>
<li>Angara - 21</li>
<li>Bero - 17</li> 
<li>Bundu - 11</li> 
<li>Burmu - 14</li> 
<li>Chanho - 17</li>
<li>Itki - 9</li> 
<li>Kanke - 32</li>
<li>Kanke - 32</li>
<li>Khelari - 14</li>
<li>Lapung - 11</li> 
<li>Mandar - 19</li>
<li>Nagri - 13</li> 
<li>Namkum - 23</li>
<li>Ormanjhi - 18</li>
<li>Rahe - 9</li>
<li>Ratu - 20</li>
<li>Silli - 20</li> 
<li>Sonahatu - 14</li>
<li>Tamar - 23</li>
</ul>
</body>
</html>