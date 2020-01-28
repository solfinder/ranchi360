<!DOCTYPE html>
<html>
<body>
<center><h2>Police Stations in Ranchi</h2></center>
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
<li>POLICE STATION	LANDLINE NUMBER	MOBILE NUMBER</li>
<li>Angara PS	06522-272024	9431706180</li>
<li>Argora PS	0651-2242132	9431706170</li>
<li>Bariyatu PS	0651-2542660	9431706161</li>
<li>Bero PS	06529-277376	9431706179</li>
<li>BIT Mesra OP	0651-2276565	9955911474</li>
<li>Bundu PS	06530-222251	9431706191</li>
<li>Burmu PS	06531-274110	9431706190</li>
<li>Chanho PS	06531-274362	9431706189</li>
<li>Chutia PS	0651-2461880	9431706165</li>
<li>Daily Market PS	0651-2308685	9431706163</li>
<li>Dhurwa PS	0651-2408299	9431706166</li>
<li>Doranda PS	0651-2481057	9431706168</li>
<li>Gonda PS	0651-2281266	9431706162</li>
<li>Hindipiri PS	0651-2205409	9431706164</li>
<li>Itki PS	06529-227243	9431706177</li>
<li>Jagnnathpur PS	0651-2442692	9431706169</li>
<li>Kanke PS	0651-2230734	9431706185</li>
<li>Khelari PS	06531-246410	9431706188</li>
<li>Kotwali PS	0651-2200968	9431706158</li>
<li>Lalpur PS	0651-2203754	9431706159</li>
<li>Lapung PS	06529-271010	9431706178</li>
<li>Lower Bazar PS	0651-2351002	9431706171</li>
<li>Mackluskiganj PS	–	9608316771</li>
<li>Mahila PS	0651-2210533	8102302402</li>
<li>Mandar PS	06531-224581	9431706187</li>
<li>Muri OP	06522-290277	8051206731</li>
<li>Nagri PS	0651-2775702	9431706176</li>
<li>Namkum PS	0651-2261900	9431706173</li>
<li>Narkopi PS	–	9934313367</li>
<li>Oramanjhi PS	0651-2576523	9431706183</li>
<li>Pandra OP	0651-2510002	9431706878</li>
<li>Pithoria PS	0651-2475432	9431706186</li>
<li>Pundag PS	–	9431163177</li>
<li>Rahe OP	06530-271077	9431706194</li>
<li>Ratu PS	0651-2521424	9431706175</li>
<li>Sadar PS	0651-2544625	9431706160</li>
<li>Sikidiri PS	06530-252472	9431706184</li>
<li>Silli PS	06522-222700	9431164807</li>
<li>Sonahatu PS	06530-274043	9431706192</li>
<li>ST/SC PS	0651-2217993	9431103958</li>
<li>Sukhdeo Nagar PS	0651-2284509	9431788800</li>
<li>Tamar PS	06530-252472	9431706193</li>
<li>Tatisilway PS	0651-2265789	9431706174</li>
<li>Traffic PS	0651-2317774	9431706172</li>
<li>Tupudana OP	0651-2291903	9431706167</li>

</ul>
</body>
</html>