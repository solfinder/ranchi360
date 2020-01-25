<!DOCTYPE html>
<html>
<body>
<center><h2>Schools in Ranchi</h2></center>
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
Aditya Birla High School, Muri
Singhpur, Chota Muri , Ranchi, Jharkhand-835101
Phone: 06522 244147
</li>
<li> 
Alpha International School, Ranchi
Boarding School
Kathal More Road, Chapu Toli, Argora , Ranchi, Jharkhand-834004
General HELPLINE NO.: 9971516996
</li>
<li>
Army Public School, Ranchi
Dipatoli Cantt., NVV, Hotwar , Ranchi, Jharkhand-834017
Phone: 0651 2273354 
</li>
<li>
Bishop Westcott Boys School, Ranchi
Namkum ,  , Ranchi, Jharkhand-834010
Phone: 0651 6565004, 6565005 
</li>
<li>
Bridgeford School, Ranchi
Tupudana , Ranchi, Jharkhand-834003
Phone: 0651 6999444, 6999555 
</li>
<li>
Cambrian Public School, Ranchi
Kanke Road , Ranchi, Jharkhand-834008
Phone: 7631000024
</li>
<li> 
Cambrian Public School, Ranchi
Kanke Road , Ranchi, Jharkhand-834008
Phone: 7631000024 
</li>
<li>
Cambrian Public School, Ranchi
Radio Station Road, Kathitand, Ratu , Ranchi, Jharkhand-835222
Phone: 7677878910 
</li>
<li>
DAV Alok Public School, Ranchi
Pundag,  , Ranchi, Jharkhand-834002
Phone: 9234300830
</li>
<li> 
DAV Co Operative Sr Secondary School, Ranchi
Khalari , Ranchi, Jharkhand-809205
Phone: 06531 246234, 246447
</li>
<li> 
DAV Kapil Dev Public School, Ranchi
New AG Co-Operative Colony, Kadru , Ranchi, Jharkhand-834002
Phone: 0651 655530 
</li>
<li>
DAV Modern Public School, Ranchi
Main Road, Mander Brame , Ranchi, Jharkhand-835214
Phone: 9905700594
</li> 
<li>
DAV Nandraj Public School, Bariatu
Marwari Arogya Bhawan No 3, Bariatu , Ranchi, Jharkhand-834009
Phone: 0651 2545489, 3208328 
</li>
<li>
DAV Public School, Bariatu
Opp. Bariatu Housing, Bariatu Road , Ranchi, Jharkhand-834009
Phone: 0651 6555582, 2541191
</li>
<li> 
DAV Public School, Gandhi Nagar
Gandhi Nagar, CCL Kanke Road , Ranchi, Jharkhand-834008
Phone: 0651 2231183, 6571875
</li>
<li> 
DAV Public School, Hehal
Itki Road, Hehal , Ranchi, Jharkhand-834005
Phone: 0651 3206920, 6900840
</li>
<li> 
DAV Public School, Ranchi
Itki Road, Hehal , Ranchi, Jharkhand-834005
Phone: 0651 2511825
</li>
<li> 
DAV Public School, Ranchi
Boarding School
Sector 3, Dhurwa , Ranchi, Jharkhand-834004
</li>
<li>
Delhi Public School, Greater Ranchi
Village: Mesra, Neori Vikas , Ranchi, Jharkhand-835217
Phone: 9430000038, 7004600441 
</li>
<li>
Delhi Public School, Ranchi
SAIL Township, PO Dhurwa , Ranchi, Jharkhand-834004
Phone: 0651 2440707 
</li>
<li>
Delhi Public School, Sail Township Ranchi
Sail Township, PO Dhurva , Ranchi, Jharkhand-834004
Phone: 0651 2440707
</li>
<li> 
Don Bosco Academy, Ranchi
Boarding School
P.O. McCluskiegunj,  , Ranchi, Jharkhand-829208
General HELPLINE NO.: 9971516996
</li>
<li>
EuroKids Booty More, Ranchi
Behind New Gumla Petrol Pump, Booty More , Ranchi, Jharkhand-835217
Phone: 9334383168 
</li>
<li>
EuroKids Kanke Road II, Ranchi
Indraroop D 5, Sarovar Enclave, RAPCO Colony, Kanke Road , Ranchi, Jharkhand-834008
Phone: 8084994139
</li>
<li> 
EuroKids Pre School, Kadru
Plot No 80, New AG Co-operative Colony, Kadru , Ranchi, Jharkhand-834002
Phone: 8987588000
</li>
<li>
EuroKids Pre School, Morabadi
Shanghi Villa Sindwar , Tolli Road, New Area Morabadi , Ranchi, Jharkhand-834008
Phone: 9835161094 
</li>
<li>
EuroKids Upper Bazar, Ranchi
Arjun Mansion, Bansidhar Adukia Road, Upper Bazar , Ranchi, Jharkhand-834001
Phone: 9386399472 
</li>
<li> 
Firayalal Public School, Ranchi
5, Main Road, Near Overbridge , Ranchi, Jharkhand-834001
Phone: 0651 2208260 
</li>
<li>
Firstmark Public School, Ranchi
Booty Road, Bariatu , Ranchi, Jharkhand-834009
Phone: 0651 2544545 
</li>
<li>
Gauri Dutt Mandelia High School, Ranchi
Ratu Road, PO. GPO-Ranchi, Sukhdev Nagar , Ranchi, Jharkhand-834001
Phone: 9430127888
</li>
<li> 
Gobind Ram Kataruka School, Ranchi
Pundag Kathal More Road, PO Pundag , Ranchi, Jharkhand-834004
Phone: 7294987790, 9835224517
</li>
<li> 
Grace Heart School, Ranchi
Boarding School
AT-Anigara, Chaibasa Road, Khunti , Ranchi, Jharkhand-834003
General HELPLINE NO.: 9971516996
</li>
<li>
Greenland Public School, Ranchi
Prem Nagar, Hesag Hatia , Ranchi, Jharkhand-834003
Phone: 0651 6455443
</li>
<li> 
Guru Nanak High Secondary School, Ranchi
Pee Pee Compound , Ranchi, Jharkhand-834001
Phone: 0651 2331784, 2332550 
</li>
<li>
Guru Nanak Higher Secondary School, Ranchi
Pee Pee Compound , Ranchi, Jharkhand-834001
Phone: 0651 2331784, 2332550
</li>
<li> 
Holy Cross Girls High School, Ranchi
Near Chattoraj Tour And Travels, Peace Road, Lalpur , Ranchi, Jharkhand-834001
Phone: 0651 2530412
</li>
<li> 
International Public School, Ranchi
Boarding School
Near IICM Kanke Road, Kanke , Ranchi, Jharkhand-834006
General HELPLINE NO.: 9971516996
</li>
<li>
Jawahar Vidya Mandir, Ranchi
Shyamali, Doranda , Ranchi, Jharkhand-834002
Phone: 0651 2411221 
</li>
<li>
Jharkhand Public School, Ranchi
Lower Chutia, Near Kali Mandir , Ranchi, Jharkhand-834001
Phone: 0651 6570334 
</li>
<li>
Kairali School, Ranchi
Sector 2, HEC Township , Ranchi, Jharkhand-834004
Phone: 0651 2442484, 2443016 
</li>
<li>
Kangaroo Kids, Ranchi
Lake Avenue, Kanke Road , Ranchi, Jharkhand-834008
Phone: 8790894329 
</li>
<li>
Kendriya Vidyalaya HEC No.1
HEC Campus , Sector II, Dhurwa , Ranchi, Jharkhand-834004
Phone: 0651 2443548 
</li>
<li> 
Kendriya Vidyalaya, CCL Rajendra Nagar
Rajendra Nagar, PO Hehal, Ratu Road , Ranchi, Jharkhand-834005
Phone: 0651 6520330
</li>
<li> 
Kendriya Vidyalaya, Chandrapura CTPS
CTPS Chandarpura, Bokaro , Ranchi, Jharkhand-828403
Phone: 06549 242259
</li>
<li> 
Kendriya Vidyalaya, Dipatoli
Dipatoli, PO RMCH , Ranchi, Jharkhand-834009
Phone: 0651 2265292 
</li>
<li>
Kendriya Vidyalaya, Hinoo
Hinoo Shift 1, Near AG More, Doranda , Ranchi, Jharkhand-834002
Phone: 0651 2482242 
</li>
<li>
Kendriya Vidyalaya, Hinoo 2nd Shift
Hinoo 2nd Shift, Near AG More , Ranchi, Jharkhand-834004
Phone: 0651 2482242 
</li>
<li>
Kendriya Vidyalaya, Namkum
Namkum , Ranchi, Jharkhand-834010
Phone: 0651 2260171, 2261652 
</li>
<li>
Kids Zone, Ranchi
Vidya Nagar , Road no. 3 , Ranchi, Jharkhand-834012
Phone: 0651 3212111 
</li>
<li>
LA Garden High School, Ranchi
Samlong Ghat Road , Ranchi, Jharkhand-834010
Phone: 9102997029, 9102997030 
</li>
<li>
Lady KC Roy Memorial School, Ranchi
Village Tender, Ratu, Near Kathitar , Ranchi, Jharkhand-835222
Phone: 0651 6453409 
</li>
<li>
Loreto Convent School, Ranchi
Shyamali Colony, Doranda , Ranchi, Jharkhand-834002
Phone: 0651 2410042 
</li>
<li>
Nirja Sahay DAV Public School, Kanke, Ranchi
Goshala Complex, Kanke , Ranchi, Jharkhand-834006
Phone: 0651 2450456 
</li>
<li>
Oxford Public School, Ranchi
Old HB Road, Pragati Path , Ranchi, Jharkhand-834001
Phone: 7485096731, 7485096732 
</li>
<li>
Ram Tahal Choudhary High School, Ranchi
Phed Kh Tola, Booti , Ranchi, Jharkhand-834009
Phone: 0651 2542114 
</li>
<li>
Sachidanand Gyan Bharti Model School, Ranchi
108, Kusai, Doranda , Ranchi, Jharkhand-834002
Phone: 9334714607, 8102997994 
</li>
<li>
Sadaf Public School, Ranchi
KM Road, NK Compund, Kantatoli , Ranchi, Jharkhand-834001
Phone: 0651 2532731 
</li>
<li>
Sapphire International School, Ranchi
Boarding School
12th Milestone, Ranchi-Khunti Road, Hardag , Ranchi, Jharkhand-835321
General HELPLINE NO.: 9971516996
</li>
<li>
Sarala Birla Public School, Ranchi
Boarding School
Mahilong, Ranchi Purulia Highway , Ranchi, Jharkhand-835103
General HELPLINE NO.: 9971516996
</li>
<li>
Saraswati Shishu Vidya Mandir, Ranchi
Boarding School
HEC Colony, Dhurwa , Ranchi, Jharkhand-834004
General HELPLINE NO.: 9971516996
</li>
<li>
Shemrock Champs, Ranchi
Sudha Villa, Westend Park, , Ranchi , Jharkhand-834005
Phone: 0651-2510232 
</li>
<li>
Shemrock Little Achievers, Ranchi
H I / 129,Harmu Housing Colony,  , Ranchi, Jharkhand-834005
Phone: 8002703700, 9431584999 
</li>
<li>
SR DAV Public School, Pundag
Pundag , Ranchi, Jharkhand-834004
Phone: 0651 2241997, 6570647 
</li>
<li>
SS DAV Centenary Public School, Khunti
DAV Road, Khunti , Ranchi, Jharkhand-835210
Phone: 06528 220676 
</li>
<li>
St Arvindo Academy, Ranchi
Behind Argora Housing Colony, Argora , Ranchi, Jharkhand-834002
Phone: 0651 2243615 
</li>
<li>
St Columbus School, Ranchi
Murgu, Ratu , Ranchi, Jharkhand-835222
Phone: 9097681099, 9576190299 
</li>
<li>
St Francis School, Ranchi
Harmu , Ranchi, Jharkhand-834012
Phone: 0651 2246549, 2234515 
</li>
<li>
St George School, Ranchi
Hawai Nagar, Road No. 12, Hatia , Ranchi, Jharkhand-834003
Phone: 7488524191 
</li>
<li>
St Jagat Gyan Public School, Ranchi
Boarding School
Village Naro, PO Piska Nagari , Ranchi, Jharkhand-835303
General HELPLINE NO.: 9971516996
</li>
<li>
St Johns High School, Ranchi
Purulia Road, Pathalkudwa, Nayatoli , Ranchi, Jharkhand-834001
Phone: 0651 2213602 
</li>
<li>
St Johns School, Ranchi
Karbala Tank Road , Ranchi, Jharkhand-834001
Phone: 0651 2350072 
</li>
<li>
St Michaels Public School, Ranchi
Road No 48, Ashok Nagar , Ranchi, Jharkhand-834002
Phone: 0651 2246098 
</li>
<li>
St Thomas School, Ranchi
HEC Colony, Sector 3, Dhurwa , Ranchi, Jharkhand-834004
Phone: 0651 2446649 
</li>
<li>
St Xaviers School, Ranchi
PO. Doranda, Post Box No. 16 , Ranchi, Jharkhand-834002
Phone: 0651 2253777, 2252444 
</li>
<li>
Step By Step School, Ranchi
Arvind Marg, Bariatu Road , Ranchi, Jharkhand-834009
Phone: 9334727084 
</li>
<li>
Sunshine Nursery School, Ranchi
Near Shukla Colony, Hinoo Main Road , Ranchi, Jharkhand-834002
Phone: 9431109390 
</li>
<li>
Surendranath Centenary School, Ranchi
HB Road, Dipatoli , Ranchi, Jharkhand-834009
Phone: 0651 2902701, 2543887 
</li>
<li>
Taurian World School, Ranchi
Boarding School
Knowledge City, Village Hazam, PO Dundigara, Sanatorium , Ranchi, Jharkhand-835221
General HELPLINE NO.: 9971516996
</li>
<li>
Tender Heart School, Ranchi
Tupudana, Behind Adwait Ashram, PO. Hatia, National Highway-75, Bogaicholi , Ranchi, Jharkhand-835221
Phone: 0651 3208106, 3203187 
</li>
<li>
Vikas Vidyalaya, Ranchi
Boarding School
School Complex, Neori , Ranchi, Jharkhand-835217
General HELPLINE NO.: 9971516996
</li>
<li>
W John Multipurpose Boarding School, Ranchi
Boarding School
Piska Nagri,  , Ranchi, Jharkhand-835303
General HELPLINE NO.: 9971516996
</li>
<li>
</ul>
</body>
</html>