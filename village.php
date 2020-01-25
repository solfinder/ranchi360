<!DOCTYPE html>
<html>
<body>
<center><h2>Villages in Ranchi</h2></center>
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
Ranchi district has 1311 villages.Block level distribution of villages:
<ul>
<li>Angara - 83</li>
<li>Bero - 84</li> 
<li>Bundu - 88</li> 
<li>Burmu - 77</li> 
<li>Chanho - 67</li>
<li>Itki - 46</li> 
<li>Kanke - 135</li>
<li>Khelari - 25</li>
<li>Lapung - 79</li> 
<li>Mandar - 69</li>
<li>Nagri - 46</li> 
<li>Namkum - 119</li>
<li>Ormanjhi - 91</li>
<li>Rahe - 59</li>
<li>Ratu - 51</li>
<li>Silli - 102</li> 
<li>Sonahatu - 64</li>
<li>Tamar - 144</li>
</ul>
</body>
</html>