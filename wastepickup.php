<!DOCTYPE html>
<html>
<body>
<center><h2>Waste Pickup Vehicles per ward in Ranchi</h2></center>
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
<li>Ward No.	Nos of Vehicle</li>
<li>1	4</li>
<li>2	5</li>
<li>3	6</li>
<li>4	7</li>
<li>5	3</li>
<li>6	5</li>
<li>7	3</li>
<li>8	5</li>
<li>9	4</li>
<li>10	7</li>
<li>11	6</li>
<li>12	3</li>
<li>13	7</li>
<li>14	5</li>
<li>15	8</li>
<li>16	5</li>
<li>17	4</li>
<li>18	6</li>
<li>19	6</li>
<li>20	7</li>
<li>21	6</li>
<li>22	5</li>
<li>23	6</li>
<li>24	5</li>
<li>25	6</li>
<li>26	7</li>
<li>27	3</li>
<li>28	4</li>
<li>29	4</li>
<li>30	5</li>
<li>31	5</li>
<li>32	2</li>
<li>33	2</li>
<li>34	2</li>
<li>35	2</li>
<li>36	4</li>
<li>37	2</li>
<li>38	2</li>
<li>39	2</li>
<li>40	2</li>
<li>41	2</li>
<li>42	2</li>
<li>43	2</li>
<li>44	2</li>
<li>45	2</li>
<li>46	2</li>
<li>47	3</li>
<li>48	2</li>
<li>49	2</li>
<li>50	2</li>
<li>51	2</li>
<li>52	2</li>
<li>53	2</li>
<li>54	2</li>
<li>55	2</li>

</ul>
</body>
</html>