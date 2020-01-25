<!DOCTYPE html>
<html>
<body>
<center><h2>Public Toilets per ward in Ranchi</h2></center>
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
<li>Ward No.	Number of paid public toilets - Female	Number of paid public toilets - Male</li><li>
<li>1	10	10</li>
<li>2	NA	NA</li>
<li>3	9	12</li>
<li>4	NA	NA</li>
<li>5	2	3</li>
<li>6	NA	NA</li>
<li>7	NA	NA</li>
<li>8	20	20</li>
<li>9	4	5</li>
<li>10	NA	NA</li>
<li>11	NA	NA</li>
<li>12	NA	NA</li>
<li>13	8	8</li>
<li>14	NA	NA</li>
<li>15	10	10</li>
<li>16	2	3</li>
<li>17	NA	NA</li>
<li>18	NA	NA</li>
<li>19	NA	NA</li>
<li>20	NA	NA</li>
<li>21	NA	NA</li>
<li>22	12	15</li>
<li>23	13	17</li>
<li>24	10	10</li>
<li>25	NA	NA</li>
<li>26	NA	NA</li>
<li>27	NA	NA</li>
<li>28	NA	NA</li>
<li>29	NA	NA</li>
<li>30	5	5</li>
<li>31	NA	NA</li>
<li>32	32	33</li>
<li>33	NA	NA</li>
<li>34	NA	NA</li>
<li>35	5	5</li>
<li>36	NA	NA</li>
<li>37	NA	NA</li>
<li>38	2	2</li>
<li>39	NA	NA</li>
<li>40	10	10</li>
<li>41	NA	NA</li>
<li>42	NA	NA</li>
<li>43	NA	NA</li>
<li>44	NA	NA</li>
<li>45	NA	NA</li>
<li>46	5	5</li>
<li>47	NA	NA</li>
<li>48	NA	NA</li>
<li>49	NA	NA</li>
<li>50	4	6</li>
<li>51	NA	NA</li>
<li>52	10	10</li>
<li>53	NA	NA</li>
<li>54	NA	NA</li>
<li>55	NA	NA</li>
</ul>
</body>
</html>