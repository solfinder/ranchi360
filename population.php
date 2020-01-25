<!DOCTYPE html>
<html>
<body>
<center><h2>Population of Ranchi</h2></center>
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
<li>Ranchi district had a population of 2,914,253 as per 2011 census. </li>
<li>This implies a population density of 557 inhabitants per square kilometre.</li>
</ul>
<table>
<tr><td>Year</td><td>Population</td><td>% change</td></tr>
<tr><td>1901</td><td>477,249</td><td>—</td></tr>    
<tr><td>1911</td><td>557,488</td><td>+1.57%</td></tr>
<tr><td>1921</td><td>536,346</td><td>−0.39%</td></tr>
<tr><td>1931</td><td>629,863</td><td>+1.62%</td></tr>
<tr><td>1941</td><td>673,376</td><td>+0.67%</td></tr>
<tr><td>1951</td><td>748,050</td><td>+1.06%</td></tr>
<tr><td>1961</td><td>894,921</td><td>+1.81%</td></tr>
<tr><td>1971</td><td>1,164,661</td><td>+2.67%</td></tr>
<tr><td>1981</td><td>1,489,303</td><td>+2.49%</td></tr>
<tr><td>1991</td><td>1,827,718</td><td>+2.07%</td></tr>
<tr><td>2001</td><td>2,350,245</td><td>+2.55%</td></tr>
<tr><td>2011</td><td>2,914,253</td><td>+2.17%</td></tr>
</table>
</body>
</html>