<!DOCTYPE html>
<html>
<body>
<center><h2>PropertyTax per ward in Ranchi</h2></center>
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
<li>WardNo.	2017-18-PropertyTaxCollection(incrores)-Residential	2017-18-PropertyTaxCollection(incrores)-Commercial</li>

<li>1	5184846.28	1794595.94</li>
<li>2	9182836.13	1890040.91</li>
<li>3	5557330.48	1544668.35</li>
<li>4	11253128.54	3771583.23</li>
<li>5	3910188.35	1839411.84</li>
<li>6	4640464.73	2450942.5</li>
<li>7	5546440.5	1507310.96</li>
<li>8	10211429.45	2052103.94</li>
<li>9	2936264.68	597910.54</li>
<li>10	4326716.27	2597729.47</li>
<li>11	2660553.59	1930457.5</li>
<li>12	2268268.65	1034046.59</li>
<li>13	4310728.19	1027888.57</li>
<li>14	3505889.3	3789335.33</li>
<li>15	1935922.76	8744545.69</li>
<li>16	949039.09	401207.49</li>
<li>17	2192182.05	1716951.95</li>
<li>18	1295454.01	2860333.2</li>
<li>19	5657631.26	8698246.75</li>
<li>20	5388097.56	2873836.4</li>
<li>21	6323068.21	3491873.31</li>
<li>22	2922581.96	10877931.35</li>
<li>23	2048797.8	10035274.27</li>
<li>24	2460291.56	3662125.89</li>
<li>25	2125585.14	291344.12</li>
<li>26	1358648.08	309927.38</li>
<li>27	3637541.95	10457530.3</li>
<li>28	5112089.44	765280.03</li>
<li>29	10955915.15	3573209.85</li>
<li>30	3764729.45	3344021.02</li>
<li>31	4339989.33	1286239.46</li>
<li>32	3980792.12	1217832.35</li>
<li>33	4095424.03	827708.17</li>
<li>34	4372048.66	1200959.94</li>
<li>35	4121096.04	2172775.94</li>
<li>36	3438331.95	1724681.55</li>
<li>37	8130173.91	2502341.7</li>
<li>38	6567487.6	1046331.13</li>
<li>39	584751.82	68522.77</li>
<li>40	866871.72	38557.64</li>
<li>41	786942.73	202609.32</li>
<li>42	1384183.76	571086.78</li>
<li>43	4325524.15	266155.72</li>
<li>44	1990592.69	219329.76</li>
<li>45	5370313.2	3323729.4</li>
<li>46	659758.43	425442.91</li>
<li>47	6001133.49	2558899.92</li>
<li>48	5374408.88	476949.62</li>
<li>49	1893596.13	1527841.9</li>
<li>50	1816007.73	1159054.32</li>
<li>51	1264666.27	190289.88</li>
<li>52	3246433.23	330829.56</li>
<li>53	3760063.09	1527619.67</li>
<li>54	11013044.44	2134899</li>
<li>55	2895162.43	1163808.13</li>
</ul>
</body>
</html>