<!DOCTYPE html>
<html>
<body>
<center><h2>Centers of Higher Education in Ranchi</h2></center>
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
Birla Institute of Technology, Mesra
BIT Mesra Campus Birla Institute of Technology, Mesra Ranchi, Jharkhand 835215
Website Link : https://www.bitmesra.ac.in/
</li>
<li>
Birsa Agricultural University
BirsaAgriculturalUniversity Kanke,Ranchi–834006 Jharkhand, India
Website Link : http://bauranchi.org
</li>
<li>
Cambrigde Institue of Technology
Cambridge Village, Tatisilwai Ranchi- 835103
</li>
<li>
Email : info[at]citranchi[dot]ac[dot]in
Phone : 0651-6566121
Website Link : http://www.citranchi.ac.in/
</li>
<li>
Central University, Jharkhand
Central University of Jharkhand Ratu-Lohardaga Road Brambe, Ranchi - 835 205 Jharkhand, India
</li>
<li>
Doranda College Ranchi
Near AG. Colony,Doranda Ranchi
Email : principal[dot]dorandacollege[at]gmail[dot]com
Phone : 0651-2250337
Website Link : http://www.dorandacollege.com/
</li>
<li>
Gossner College
Club Road, Ranchi, Jharkhand
Email : gcranprincipal[at]gmail[dot]com
</li>
<li>
IIM Ranchi
Suchana Bhawan, 5th Floor, Audrey House Campus, Meur’s Road, Ranchi, Jharkhand 834008
Website Link : http://www.iimranchi.ac.in
</li>
<li>
Marwari College Ranchi
Lake Road Ranchi
Email : marwaricollegeranchi[at]gmail[dot]com
Website Link : http://www.marwaricollegeranchi.com/
</li>
<li>
Ranchi University
Registrar, Ranchi University, Ranchi Shahid Chowk, Ranchi - 834001, Jharkhand
Email : registrar[at]ranchiuniversity[dot]ac[dot]in
</li>
<li>
Ranchi Women’s College
Circular Road, Ranchi-834001 Jharkhand, India
Website Link : http://www.ranchiwomenscollege.org/
</li>
<li>
St. Xavier’s College, Ranchi
Doctor Camil Bulcke Path, Nayatoli, Ranchi, Jharkhand 834001
</li>
<li>
Xavier Institute of Social Service
XISS Dr. Camil Bulcke Path (Purulia Road) Ranchi, Jharkhand 834001
Phone : 0651-2200873
Website Link : http://xiss.ac.in/
</li>
</ul>
</body>
</html>