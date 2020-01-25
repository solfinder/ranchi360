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
<li>Ward# - Total waste - Number of HH with waste segregation
<li>1	5.358	804</li>
<li>2	13.882	2083</li>
<li>3	6.838	1020</li>
<li>4	17.256	2580</li>
<li>5	7.67	1145</li>
<li>6	6	886</li>
<li>7	11.27	1685</li>
<li>8	14.834	2215</li>
<li>9	4.382	650</li>
<li>10	6.528	972</li>
<li>11	6.39	945</li>
<li>12	3.95	580</li>
<li>13	5.932	885</li>
<li>14	6.876	1030</li>
<li>15	5.842	870</li>
<li>16	2.756	410</li>
<li>17	4.52	670</li>
<li>18	2.614	390</li>
<li>19	9.002	1350</li>
<li>20	6.64	996</li>
<li>21	7.376	1102</li>
<li>22	6.818	1020</li>
<li>23	5.652	840</li>
<li>24	4.994	746</li>
<li>25	5.72	858</li>
<li>26	3.866	570</li>
<li>27	6.62	990</li>
<li>28	3.512	523</li>
<li>29	10.654	1597</li>
<li>30	7.286	1087</li>
<li>31	8.76	1303</li>
<li>32	5.958	893</li>
<li>33	7.006	1047</li>
<li>34	7.37	1103</li>
<li>35	6.424	963</li>
<li>36	6.42	953</li>
<li>37	15.924	2373</li>
<li>38	12.012	1793</li>
<li>39	4.064	603</li>
<li>40	5.126	753</li>
<li>41	3.574	533</li>
<li>42	4.232	631</li>
<li>43	8.456	1264</li>
<li>44	4.444	661</li>
<li>45	7.662	1143</li>
<li>46	2.776	415</li>
<li>47	7.804	1167</li>
<li>48	8.014	1189</li>
<li>49	3.916	583</li>
<li>50	3.452	513</li>
<li>51	1.698	254</li>
<li>52	7.322	1093</li>
<li>53	5.828	871</li>
<li>54	13.908	2083</li>
<li>55	6.83	1024</li>


</ul>
</body>
</html>