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
Ward name	Number of HH
<li>1	2679</li>
<li>2	6941</li>
<li>3	3419</li>
<li>4	8628</li>
<li>5	3835</li>
<li>6	3000</li>
<li>7	5635</li>
<li>8	7417</li>
<li>9	2191</li>
<li>10	3264</li>
<li>11	3195</li>
<li>12	1975</li>
<li>13	2966</li>
<li>14	3438</li>
<li>15	2921</li>
<li>16	1378</li>
<li>17	2260</li>
<li>18	1307</li>
<li>19	4501</li>
<li>20	3320</li>
<li>21	3688</li>
<li>22	3409</li>
<li>23	2826</li>
<li>24	2497</li>
<li>25	2860</li>
<li>26	1933</li>
<li>27	3310</li>
<li>28	1756</li>
<li>29	5327</li>
<li>30	3643</li>
<li>31	4380</li>
<li>32	2979</li>
<li>33	3503</li>
<li>34	3685</li>
<li>35	3212</li>
<li>36	3210</li>
<li>37	7962</li>
<li>38	6006</li>
<li>39	2032</li>
<li>40	2563</li>
<li>41	1787</li>
<li>42	2116</li>
<li>43	4228</li>
<li>44	2222</li>
<li>45	3831</li>
<li>46	1388</li>
<li>47	3902</li>
<li>48	4007</li>
<li>49	1958</li>
<li>50	1726</li>
<li>51	849</li>
<li>52	3661</li>
<li>53	2914</li>
<li>54	6954</li>
<li>55	3415</li>

</ul>
</body>
</html>