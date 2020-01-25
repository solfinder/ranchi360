<!DOCTYPE html>
<html>
<body>
<center><h2>Banks in Ranchi</h2></center>
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
<li>Axis Bank - Ranchi Main Road - Email : ranchi.branchhead@axisbank.com </li>

<li>Bandhan Bank - Ranchi Main Road - Email : bh.ranchi@bandhanbank.com </li>

<li>Bank of Baroda - Ranchi Main Road</li>

<li>Bank of India - Upper Bazar Ranchi - Email : UpperBazar.Ranchi@bankofindia.co.in</li>

<li>Bank of Maharatra - Ranchi Main Road - Email : brmgr1233@mahabank.co.in</li>

<li>Dena Bank - Upper Bazar Ranchi - Email : ranchi@denabank.co.in</li>

<li>FEDRAL BANK - Ranchi Main Road - Email : rhi@federlbank.co.in</li>

<li>HDFC - Ranchi main road - Email : Bhattacharjee.Sudipta@hdfcbank.com</li>

<li>ICICI Bank - Ratu Road Ranchi - Email : rajasekhar.babu@icicibank.com</li>

<li>IDBI Bank - IDBI Bank Kataruka House Ranchi - Email : somenath_kundu@idbi.co.in</li>

<li>Indusind Bank - Ranchi Main road - Email : amit.skumar@indusind.com</li>

<li>Jharkhand Gramin Bank - Kadru Main Road, Ranchi, Jharkhand 834001 - Website : http://www.jharkhandgraminbank.com/ </li>
</ul>
</body>
</html>