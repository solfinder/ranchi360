<!DOCTYPE html>
<html>
<body>
<center><h2>Wards in Ranchi</h2></center>
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
There are 55 wards in Ranchi. The details of wards and councilors are listed below:
</li>
<li>1 - Shri Nakul Tirkey Kanke Road Gonda Town, Ranchi 9835534556,9470978148</li>
<li>2 - Shri Gundra Oraon Misir Gonda Niche Basti Kanke Road,Ranchi 8002732995</li>
<li>3 - Smt. Basanti Lakra Sindwar Toli, Morabadi Ranchi 9608530500</li>
<li>4 - Smt. Husna Aara Baragain Dihwar Mohalla Ranchi 9798127913</li>
<li>5 - Smt. Gayatri Devi Near Gulmohar Hospital Booty Basti Ranchi 8709022053</li>
<li>6 - Smt. Monika Khalkho Bandhgari, Akhra, Dipa Toli Ranchi 7319604074</li>
<li>7 - Smt. Sujata Kachhap Kokar Khorha Toli, Gali no. 2 Ranchi 9973284993</li>
<li>8 - Smt. Vina Agrawal Mandhawan Dresses, Near SBI, Kokar Ranchi 7209506991</li>
<li>9 - Smt. Preety Ranjan Indraprasth Colony, Near Jora Talab,Ranchi 7739307282</li>
<li>10 - Shri Arjun Kumar Yadav Haider Ali Road, Kokar Ranchi 9905504112</li>
<li>11 - Smt. Ranju Singh J.C. Road, Lalpur Ranchi 9798592700</li>
<li>12 - Shri Kulbhushan Dungdung Lowadih, Namkum, Ranchi 7979970195 9608982422</li>
<li>13 - Smt. Punam Devi Samlong, Bel Bagan, Namkum, Ranchi 9162594033</li>
<li>14 - Shri Dinesh Ram Lower Chutia 9334436384</li>
<li>15 - Smt. Jermin Kujur Konka Road Near Anjuman Hospital Ranchi 9709239911</li>
<li>16 - Smt. Nazima Raja Karbala chowk Church Road Ranchi 9835999333</li>
<li>17 - Smt. Shabana Khan K M Road Gudri Chowk Ranchi 6201260688</li>
<li>18 - Smt. Asha Devi Gupta Tharpakhna Road Lohra Kocha Ranchi 9334796053</li>
<li>19 - Smt. Roshni Khalkho 61, Nagra Toli , Circular Road Ranchi 8102780708 7870087345</li>
<li>20 - Shri Sunil Kumar Yadav Gopal Ganj, Gorakhnath Lane,Tharpakhna Ranchi 9835339903</li>
<li>21 - Md Ehtesham Purani Ranchi Abdul Karim Lane Ranchi 9835721093</li>
<li>22 - Smt. Naziya Aslam Mojahid Nagar Khet Mohalla Ranchi 9304172450</li>
<li>23 - Smt. Sajda Khatoon Nala Road Hindpiri Ranchi 9431565427</li>
<li>24 - Smt. Vijay Laxmi Soni Near Savera Hotel, Kadru Bridge Ranchi 7808224555</li>
<li>25 - Shri Arjun Ram Flat No 201, Arjana Appt. Basant Bihar Kadru Ranchi. 9835111699</li>
<li>26 - Shri Arun Kumar Jha H I 249, Harmu Housing Colony Ranchi 9431169798</li>
<li>27 - Shri OM Prakash Anand Nagar Road No 1 Ranchi 9835340068</li>
<li>28 - Smt. Rashmi Choudhary Irgu Road, Kailash Nagar Harmu Road Ranchi 9835168657</li>
<li>29 - Smt. Soni Perween Nawa Toli, sharda Charan Mitra Lane Pahari Mandir Harmu Road Ranchi 9931814228</li>
<li>30 - Smt. Reema Devi Alkapuri, Dhobi Ghat Ratu Road Ranchi 9386421138</li>
<li>31 - Shri Ashok Yadav indrpuri Road no. 1 Ratu Road, Ranchi 9431583737</li>
<li>32 - Smt. Sunita Devi Qtr. No. 19, Staff Bank Colony, Tel Mil Gali Piska More Ranchi 8969998550</li>
<li>33 - Smt. Pushpa Toppo Dwisud Banhora Ranka Toli Ranchi 7870498372</li>
<li>34 - Shri Vinod Kumar Singh Vidya Nagar Road No. 3 Harmu Ranchi 9431326340</li>
<li>35 - Shri Jhari Linda Linda Multi Gym , Dipa Toli Pundag 7979702654</li>
<li>36 - Smt. Savita Kujur Pragati Vihar Dibadih Ranchi 9334159212</li>
<li>37 - Shri Anand Murti HEC Qtr No. B 560, Sec 2, Near Rajendra Bhawan Ranchi 9430324324</li>
<li>38 - Shri Deepak Kumar Lohra Ghansi Muhalla Aadarsh NagarDhurwa Ranchi 8210659986, 8051200120</li>
<li>39 - Shri Ved Prakash Singh Dhurwa Bus Stand, Qtr No. 398 Ranchi 7857637666</li>
<li>40 - Smt. Suchita Rani Ray DT/1805 Tunki Side Dhurwa Ranchi 9973760039</li>
<li>41 - Smt. Urmila Yadav Qtr. No. 19, C D-569, Dhurwa Ranchi 9334441555</li>
<li>42 - Shri Krishna Mahto Birsa Chowk Govind Nagar, Near VMart Ranchi 9431191400,9431362748</li>
<li>43 - Smt. Shashi Singh N O P Doranda Ranchi 9835504927</li>
<li>44 - Shri Firoz Alam New Paras Toli Darzi Muhalla Doranda Ranchi 9931644004</li>
<li>45 - Shri Nasim Gaddi Doranda Gwala Toli Near Baba Pharma Ranchi 8002329152</li>
<li>46 - Smt. Reeta Munda Chutia Power House Colony Ranchi 7549043181</li>
<li>47 - Smt. Kavita Sanga Jorar Namkum Pahan Toli Ranchi 8084172907</li>
<li>48 - Ms. Marget Minz Kusai Colony Doranda Ranchi 9798143526</li>
<li>49 - Smt. Jamila Khatoon Mani Tola Hazrat Ali Chowk Doranda Ranchi 7488456046</li>
<li>50 - Smt. Pushpa Tirkey Hundru Basti Airport Road Ranchi 9570031963</li>
<li>51 - Smt. Savita Linda Singh More Hesag Ranchi 9905151381</li>
<li>52 - Shri Niranjan Kumar Patel Nagar , Between Road No. 17 -18, Hatiya Ranchi 7488413730,9835976667</li>
<li>53 - Smt. Nirmala Kachhap Pugru Kuba Toli Hatia Ranchi 8969507228 , 8521980266</li>
<li>54 - </li>
<li>55 - </li>
</ul>
</body>
</html>