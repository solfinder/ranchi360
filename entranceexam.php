<!DOCTYPE html>
<html>
<body>
<center><h2>Entrance Exams in Ranchi</h2></center>
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
Jharkhand Polytechnic Rntrance Competitive Examinationn (JPECE) - May 2020 - jceceb.jharkhand.gov.in
</li>
<li>
Jharkhand Engineering Entrance Competitive Exam (JEECE) - May 2020 -  jceceb.cbtexam.in
</li>
<li>
Jharkhand Combined Entrance Competitive Examination (JCECE) - June 2020 - jceceb.cbtexam.in 
</li>
<li>
JEE Advanced - May 2020 - May 2020 
</li>

</ul>
</body>
</html>