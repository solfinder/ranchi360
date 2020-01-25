<!DOCTYPE html>
<html>
<body>
<center><h2>Households per ward in Ranchi</h2></center>
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
<li>Ward# - # of poles - LED POles</li>
<li>WARD 01	626	431</li>
<li>WARD 02	1347	1116</li>
<li>WARD 26	813	746</li>
<li>WARD 27	496	424</li>
<li>WARD 28	1085	912</li>
<li>WARD 29	1655	1390</li>
<li>WARD 30	1035	862</li>
<li>WARD 31	1587	1468</li>
<li>WARD 32	608	476</li>
<li>WARD 33	1071	895</li>
<li>WARD 34	1291	842</li>
<li>WARD 35	1091	785</li>
<li>WARD 36	1101	950</li>
<li>WARD 03	1043	843</li>
<li>WARD 04	1200	1029</li>
<li>WARD 05	1383	1211</li>
<li>WARD 06	778	610</li>
<li>WARD 07	2122	1581</li>
<li>WARD 08	1747	1652</li>
<li>WARD 09	662	601</li>
<li>WARD 10	1268	1003</li>
<li>WARD 11	922	829</li>
<li>WARD 12	610	505</li>
<li>WARD 18	541	458</li>
<li>WARD 19	1022	940</li>
<li>WARD 47	642	498</li>
<li>WARD 13	765	688</li>
<li>WARD 14	1004	774</li>
<li>WARD 15	631	511</li>
<li>WARD 16	433	370</li>
<li>WARD 17	405	323</li>
<li>WARD 20	772	565</li>
<li>WARD 21	797	608</li>
<li>WARD 22	594	366</li>
<li>WARD 23	575	449</li>
<li>WARD 24	630	529</li>
<li>WARD 25	757	565</li>
<li>WARD 45	711	574</li>
<li>WARD 46	1130	984</li>
<li>WARD 37	1834	1750</li>
<li>WARD 38	2077	1563</li>
<li>WARD 39	701	585</li>
<li>WARD 40	898	723</li>
<li>WARD 41	916	764</li>
<li>WARD 42	1108	859</li>
<li>WARD 43	958	732</li>
<li>WARD 44	1153	905</li>
<li>WARD 48	1160	1022</li>
<li>WARD 49	745	511</li>
<li>WARD 50	1018	899</li>
<li>WARD 51	1014	847</li>
<li>WARD 52	1118	881</li>
<li>WARD 53	935	702</li>


</ul>
</body>
</html>