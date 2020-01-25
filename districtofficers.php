<!DOCTYPE html>
<html>
<body>
<center><h2>District Officers in Ranchi</h2></center>
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
<li>Designation: Deputy Commissioner Email: dc-ran@nic.in  Phone: 9431708333</li>
<li>Designation: Deputy Development Commissioner  Email: ddc-ran@nic.in	Phone: 9431367720</li>
<li>Designation: S. S. P. Ranchi  Email: ssp-ranchi@jhpolice.gov.in Phone: 9431706136</li>
<li>Designation: DISTRICT AGRICULTURE OFFICER Email: daoranchi1@gmail.com Phone: 9973779188</li>
<li>Designation: Civil Surgeon	Email: csofficeranchi@yahoo.com	Phone: 8521192217
<li>Designation: Additional Collector	Email: ac-ranchi@jharkhandmail.gov.in	Phone: 9431170128</li>
<li>Designation: Sub Divisional Officer	Email: sdoranchi@gmail.com Phone: 9431701700</li>
<li>Designation: District Transport Officer	Email: dto-ranchi@jharkhandmail.gov.in	Phone: 9973815743</li>
<li>Designation: District Panchayati Raj Officer Email:ranchi.dpro@gmail.com	Phone:9431381161</li>
<li>Designation: Nazarat Deputy Collector Email: ndc.ranchi@yahoo.com	Phone: 9431985019</li>
<li>Designation: ADM Naxal Email: poonamjhajas@gmail.com Phone: 9431147144</li>
<li>Designation: Director DRDA	Email:drda2017@gmail.com Phone: 9431394854</li>
</ul>
</body>
</html>