<!DOCTYPE html>
<html>
<body>
<center><h2>Infant/Maternal Metrics in Ranchi(December 2018-19)</h2></center>
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
<li><u>Parameter	Metric</u></li>
<li>Total number of pregnant women registered for ANC	7839</li>
<li>Out of the total ANC registered, number registered within 1st trimester (within 12 weeks)	4353</li>
<li>Number of PW given TT1	5888</li>
<li>Number of PW given TT2	4452</li>
<li>Number of PW given TT Booster	1148</li>
<li>Number of PW given 180 Iron Folic Acid (IFA) tablets	21572</li>
<li>Number of PW given 360 Calcium tablets	2381</li>
<li>Number of PW given one Albendazole tablet after 1st trimester	1802</li>
<li>Number of PW received 4 or more ANC check ups	6201</li>
<li>Number of PW given ANC Corticosteroids in Pre Term Labour	31</li>
<li>New cases of PW with hypertension detected	73</li></li>
<li>Out of the new cases of PW with hypertension detected, cases managed at institution	64</li>
<li>Number of Eclampsia cases managed during delivery	18</li>
<li>Number of PW tested for Haemoglobin (Hb ) 4 or more than 4 times for respective ANCs	4703</li>
<li>Number of PW having Hb level<11 (tested cases)(7.1 to 10.9)	4096</li>
<li>Number of PW having Hb level<7 (tested cases)	88</li>
<li>Number of PW having severe anaemia (Hb<7) treated	56</li>
<li>Number of PW tested for blood sugar using OGTT (Oral Glucose Tolerance Test)	614</li>
<li>Number of PW tested positive for GDM	9</li>
<li>Number of PW given insulin out of total tested positive for GDM	0</li>
<li>Number of PW tested using POC test for Syphilis	2</li>
<li>Out of above, number of PW found sero positive for syphilis	2</li>
<li>Number of pregnant women tested for Syphilis	404</li>
<li>Number of pregnant women tested found sero positive for Syphilis	0</li>
<li>Number of syphilis positive pregnant women treated for Syphilis	0</li>
<li>Number of babies diagnosed with Congenital Syphilis	0</li>
<li>Number of babies treated for congenital Syphilis	0</li>
<li>Number of Home Deliveries attended by Skill Birth Attendant(SBA) (Doctor/Nurse/ANM)	37</li>
<li>Number of Home Deliveries attended by Non SBA (Trained Birth Attendant(TBA) /Relatives/etc.)	113</li>
<li>Number of PW given Tablet Misoprostol during home delivery	36</li>
<li>Number of newborns received 7 Home Based Newborn Care (HBNC) visits in case of Home delivery	158</li>
<li>Number of Institutional Deliveries conducted (Including C-Sections)	6349</li>
<li>Out of total institutional deliveries number of women discharged within 48 hours of delivery	5509</li>
<li>Number of newborns received 6 HBNC  visits after Institutional Delivery	1491</li>
<li>Total C -Section deliveries performed	687</li>
<li>C-sections, performed at night (8 PM- 8 AM)	83</li>
<li>Live Birth - Male	3342</li>
<li>Live Birth - Female	3123</li>
<li>Number of Pre term newborns ( < 37 weeks of pregnancy)	6</li>
<li>Still Birth	31</li>
<li>Abortion (spontaneous)	41</li>
<li>MTP up to 12 weeks of pregnancy	39</li>
<li>MTP more than 12 weeks of pregnancy	3</li>
<li>Post Abortion/ MTP Complications Identified	0</li>
<li>Post Abortion/ MTP Complications Treated	0</li>
<li>Number of women provided with post abortion/ MTP contraception	17</li>
<li>Number of newborns weighed at birth	6350</li>
<li>Number of newborns having weight less than 2.5 kg	494</li>
<li>Number of Newborns breast fed within 1 hour of birth 	6417</li>
<li>Number of cases of pregnant women with Obstetric Complications attended (Antepartum haemorrhage (APH), Post-Partum Hemorrhage (PPH), Sepsis, Eclampsia and others)	51</li>
<li>Number of Complicated pregnancies treated with Blood Transfusion	108</li>
<li>Women receiving 1st post partum checkup within 48 hours of home delivery	992</li>
<li>Women receiving 1st post partum checkup between 48 hours and 14 days	2047</li>
<li>Number of mothers provided full course of 180 IFA tablets after delivery	2716</li>
<li>Number of mothers provided 360 Calcium tablets after delivery	2239</li>
<li>New RTI/STI cases identified - Male	140</li>
<li>New RTI/STI cases identified - Female	223</li>
<li>RTI/STI for which treatment initiated - Male	30</li>
<li>RTI/STI for which treatment initiated -Female	46</li>
<li>Number of Non Scalpel Vasectomy (NSV) / Conventional Vasectomy conducted	13</li>
<li>Number of Laparoscopic sterilizations (excluding post abortion) conducted	46</li>
<li>Number of Interval Mini-lap (other than post-partum and post abortion) sterilizations conducted	433</li>
<li>Number of Postpartum sterilizations (within 7 days of delivery by minilap or concurrent with caesarean section) conducted	103</li>
<li>Number of Post Abortion sterilizations (within 7 days of spontaneous or surgical abortion) conducted	13</li>
<li>Number of Interval IUCD Insertions (excluding PPIUCD and PAIUCD)	593</li>
<li>Number of Postpartum (within 48 hours of delivery) IUCD insertions	1054</li>
<li>Number of Post Abortion (within 12 days of spontaneous or surgical abortion) IUCD insertions	617</li>
<li>Number of IUCD Removals	177</li>
<li>Number of complications following IUCD Insertion	16</li>
<li>Injectable Contraceptive-Antara Program- First Dose	28</li>
<li>Injectable Contraceptive-Antara Program- Second Dose	13</li>
<li>Injectable Contraceptive-Antara Program- Third Dose	1</li>
<li>Injectable Contraceptive-Antara Program- Fourth or more than fourth	6</li>
<li>Number of Combined Oral Pill cycles distributed	10960</li>
<li>Number of Condom pieces distributed	46462</li>
<li>Number of Centchroman (weekly) pill strips distributed	939</li>
<li>Number of Emergency Contraceptive Pills (ECP) given	516</li>
<li>Number of Pregnancy Test Kits (PTK) used	2564</li>
<li>Complications following male sterilization	0</li>
<li>Complications following female sterilization	1</li>
<li>Failures following male sterilization	0</li>
<li>Failures following female sterilization	0</li>
<li>Deaths following male sterilization	0</li>
<li>Deaths following female sterilization	0</li>
<li>Child immunisation - Vitamin K1 (Birth Dose)	1168</li>
<li>Child immunisation - BCG	7298</li>
<li>Child immunisation - DPT1	1</li>
<li>Child immunisation - DPT2	0</li>
<li>Child immunisation - DPT3	0</li>
<li>Child immunisation - Pentavalent 1	7192</li>
<li>Child immunisation - Pentavalent 2	6885</li>
<li>Child immunisation - Pentavalent 3	6719</li>
<li>Child immunisation - OPV 0 (Birth Dose)	2845</li>
<li>Child immunisation - OPV1	7255</li>
<li>Child immunisation - OPV2	7019</li>
<li>Child immunisation - OPV3	6741</li>
<li>Child immunisation - Hepatitis-B0 (Birth Dose)	2463</li>
<li>Child immunisation - Hepatitis-B1	0</li>
<li>Child immunisation - Hepatitis-B2	0</li>
<li>Child immunisation - Hepatitis-B3	0</li>
<li>Child immunisation - Inactivated Polio Vaccine 1 (IPV 1)	4283</li>
<li>Child immunisation - Inactivated Polio Vaccine 2 (IPV 2)	3784</li>
<li>Child immunisation - Rotavirus 1	4018</li>
<li>Child immunisation - Rotavirus 2	3768</li>
<li>Child immunisation - Rotavirus 3	3626</li>
<li>Child immunisation (9-11months) - Measles & Rubella (MR)- 1st Dose	4838</li>
<li>Child immunisation (9-11months) - Measles 1st dose	46</li>
<li>Child immunisation (9-11months) - JE 1st dose	120</li>
<li>Children aged between 9 and 11 months fully immunized- Male	2555</li>
<li>Children aged between 9 and 11 months fully immunized - Female	2317</li>
<li>Child immunisation - Measles & Rubella (MR)- 1st Dose	0</li>
<li>Child immunisation - Measles-1st dose	6</li>
<li>Child immunisation - JE 1st dose	35</li>
<li>Child immunisation - Measles & Rubella (MR)- 2nd Dose (16-24 months)	58</li>
<li>Child immunisation - Measles 2nd dose (More than 16 months)	100</li>
<li>Child immunisation - DPT 1st Booster	7142</li>
<li>Child immunisation - OPV Booster	7145</li>
<li>Child immunisation - Measles, Mumps, Rubella (MMR) Vaccine	2</li>
<li>Number of children more than 16 months of age who received Japanese Encephalitis (JE) vaccine	21</li>
<li>Child immunisation - Typhoid	9</li>
<li>Children more than 5 years received DPT5 (2nd Booster)	2338</li>
<li>Children more than 10 years received TT10	2010</li>
<li>Children more than 16 years received TT16	2528</li>
<li>Number of cases of AEFI - Abscess	0</li>
<li>Number of cases of AEFI - Death	0</li>
<li>Number of cases of AEFI - Others	71</li>
<li>Immunisation sessions planned	2732</li>
<li>Immunisation sessions held	2700</li>
<li>Number of Immunisation sessions where ASHAs were present	2172</li>
<li>Child immunisation - Vitamin A Dose - 1	1993</li>
<li>Child immunisation - Vitamin A Dose - 5	1297</li>
<li>Child immunisation - Vitamin A Dose - 9	1119</li>
<li>Number of children (6-59 months) provided 8-10 doses (1ml) of IFA syrup (Bi weekly)	1429</li>
<li>Number of children (12-59 months) provided Albendazole	679</li>
<li>Number of severely underweight children provided Health Checkup (0-5 yrs)	97</li>
<li>Childhood Diseases - Pneumonia	0</li>
<li>Childhood Diseases - Asthma	0</li>
<li>Childhood Diseases - Sepsis	0</li>
<li>Childhood Diseases - Diphtheria	0</li>
<li>Childhood Diseases - Pertussis	0</li>
<li>Childhood Diseases - Tetanus Neonatorum	0</li>
<li>Childhood Diseases - Tuberculosis (TB)	0</li>
<li>Childhood Diseases - Acute Flaccid Paralysis(AFP)	0</li>
<li>Childhood Diseases - Measles	0</li>
<li>Childhood Diseases - Malaria	3</li>
<li>Childhood Diseases - Diarrhoea	32</li>
<li>Childhood Diseases - Diarrhoea treated in Inpatients	16</li>
<li>Children admitted with upper respiratory infections	35</li>
<li>Childhood Diseases - Severe Acute Malnutrition (SAM)	0</li>
<li>Total Blood Smears Examined for Malaria	7350</li>
<li>Malaria (Microscopy Tests ) - Plasmodium Vivax test positive	21</li>
<li>Malaria (Microscopy Tests ) - Plasmodium Falciparum test positive	12</li>
<li>RDT conducted for Malaria	989</li>
<li>Malaria (RDT) - Plasmodium Vivax test positive	8</li>
<li>Malaria (RDT) - Plamodium Falciparum test positive	4</li>
<li>Kala Azar (RDT) - Tests Conducted	0</li>
<li>Kala Azar Positive Cases	0</li>
<li>Post-kala-azar dermal leishmaniasis (PKDL) cases	0</li>
<li>Dengue - RDT Test Positive	0</li>
<li>Dengue - Enzyme- Linked Immuno Sorbent Assay (ELISA) Test Positive	0</li>
<li>Tests Conducted for JE	0</li>
<li>Tests Positive for JE	0</li>
<li>Girls registered in AFHC	446</li>
<li>Boys registered in AFHC	302</li>
<li>Out of registered, Girls received clinical services	456</li>
<li>Out of registered, Boys received clinical services	220</li>
<li>Out of registered, Girls received counselling	453</li>
<li>Out of registered, Boys received counselling	311</li>
<li>Number of on-going DOTS patients registered	58</li>
<li>Number of DOTS cases completed successfully	40</li>
<li>Outpatient - Diabetes	3187</li>
<li>Outpatient - Hypertension	2795</li>
<li>Outpatient - Stroke (Paralysis)	13</li>
<li>Outpatient - Acute Heart Diseases	11</li>
<li>Outpatient - Mental illness	8</li>
<li>Outpatient - Epilepsy	14</li>
<li>Outpatient - Ophthalmic Related	2053</li>
<li>Outpatient - Dental	1029</li>
<li>Outpatient - Oncology	0</li>
<li>Allopathic- Outpatient attendance	178120</li>
<li>Ayush - Outpatient attendance	3245</li>
<li>Inpatient (Male)- Children<18yrs	60</li>
<li>Inpatient (Male)- Adults	292</li>
<li>Inpatient (Female)- Children<18yrs	80</li>
<li>Inpatient (Female)- Adults	1748</li>
<li>Number of Left Against Medical Advice (LAMA) cases	0</li>
<li>Inpatient - Malaria	35</li>
<li>Inpatient - Dengue	0</li>
<li>Inpatient - Typhoid	6</li>
<li>Inpatient - Asthma, Chronic Obstructive Pulmonary Disease (COPD), Respiratory infections	5</li>
<li>Inpatient - Tuberculosis	0</li>
<li>Inpatient - Pyrexia of unknown origin (PUO)	66</li>
<li>Inpatient - Diarrhea with dehydration	144</li>
<li>Inpatient - Hepatitis	0</li>
<li>Patients registered at Emergency Department	1874</li>
<li>Emergency - Trauma ( accident, injury, poisoning etc)	74</li>
<li>Emergency - Burn	2</li>
<li>Emergency - Obstetrics complications	6</li>
<li>Emergency - Snake Bite	0</li>
<li>Emergency - Acute Caridiac Emergencies	0</li>
<li>Emergency - CVA ( Cerebovascular Disease)	0</li>
<li>Number of deaths occurring at Emergency Department	0</li>
<li>Operation major (General and spinal anaesthesia)	4256</li>
<li>Out of Operation major, Gynecology- Hysterectomy surgeries	3014</li>
<li>Major Surgeries excluding Obstetrics, Gynaecology and Opthalmology etc.	NA</li>
<li>Operation minor (No or local anaesthesia)	2246</li>
<li>Number of post operative Surgical Site infection	NA</li>
<li>Number of blood units issued	0</li>
<li>Number of blood transfusions done	0</li>
<li>Inpatient Deaths - Male	2</li>
<li>Inpatient Deaths - Female	0</li>
<li>In-Patient Head Count at midnight	11416</li>
<li>Number of Admission in NBSU ( New Born Stabilisation Unit)	0</li>
<li>Special Newborn Care Unit (SNCU Admissions) - Inborn Male	0</li>
<li>Special Newborn Care Unit (SNCU Admissions) - Inborn Female	0</li>
<li>Outborn – Male	0</li>
<li>Outborn - Female	0</li>
<li>Number of newborns admitted in SNCU - referred by ASHA	0</li>
<li>Number of deaths occurring at SNCU	0</li>
<li>Number of children admitted in NRC	14</li>
<li>Number of children discharged with target weight gain from the NRCs	0</li>
<li>Number of Rogi Kalyan Samiti (RKS) meetings held	2</li>
<li>Number of Anganwadi centres/ UPHCs reported to have conducted Village Health & Nutrition Day (VHNDs)/ Urban Health & Nutrition Day (UHNDs)/ Outreach / Special Outreach	1776</li>
<li>Stock out rate of essential Drugs	NA</li>
<li>Blood Units Issued on replacement (Family Donors to be considered as replacement donations)	NA</li>
<li>Total number of blood units issued in year	NA</li>
<li>Patient Satisfaction Score of the facility in percentage (from Mera Aspatal)	NA</li>
<li>Number of Lab Tests done	17685</li>
<li>Number of Hb tests conducted	8897</li>
<li>Out of the total number of Hb tests done, Number having Hb < 7 mg	125</li>
<li>Male HIV - Number Tested	655</li>
<li>Male HIV - Number Positive	2</li>
<li>Female Non ANC HIV - Number Tested	944</li>
<li>Female Non ANC HIV - Number Positive	1</li>
<li>Number of pregnant women screened for HIV	2977</li>
<li>Out of the above, number screened positive	2</li>
<li>Out of the above number screened positive, number confirmed with HIV infection at Integrated Counselling and Testing Centre (ICTC)	4</li>
<li>Number of Male STI/RTI attendees tested for syphilis	44</li>
<li>Number of Male STI/RTI attendees found sero Positive for syphilis	0</li>
<li>Number of Female (Non ANC)STI/RTI attendees tested for syphilis	264</li>
<li>Number of Female (Non ANC) STI/RTI attendees found sero Positive for syphilis	0</li>
<li>Widal tests - Number Tested	677</li>
<li>Widal tests - Number Positive	65</li>
<li>Radiology - X-ray	1213</li>
<li>Radiology - Ultrasonography (USG)	1172</li>
<li>Infant deaths within 24 hrs(1 to 23 Hrs) of birth	4</li>
<li>Infant Deaths up to 4 weeks due to Sepsis	1</li>
<li>Infant Deaths up to 4 weeks due to Asphyxia	0</li>
<li>Infant Deaths up to 4 weeks due to Other causes	10</li>
<li>Number of Infant Deaths (1 -12 months) due to Pneumonia	2</li>
<li>Number of Infant Deaths (1 -12 months) due to Diarrhoea	0</li>
<li>Number of Infant Deaths (1 -12 months) due to Fever related	1</li>
<li>Number of Infant Deaths (1 -12 months) due to Measles	0</li>
<li>Number of Infant Deaths (1 -12 months) due to Others	9</li>
<li>Number of Child Deaths (1 -5 years) due to Pneumonia	0</li>
<li>Number of Child Deaths (1 -5 years) due to Diarrhoea	0</li>
<li>Number of Child Deaths (1 -5 years) due to Fever related	0</li>
<li>Number of Child Deaths (1 -5 years) due to Measles	0</li>
<li>Number of Child Deaths (1 -5 years) due to Others	2</li>
<li>Number of Maternal Deaths due to Bleeding	1</li>
<li>Number of Maternal Deaths due to High fever	0</li>
<li>Number of Maternal Deaths due to Abortion	0</li>
<li>Number of Maternal Deaths due to Obstructed/prolonged labour	0</li>
<li>Number of Maternal Deaths due to Severe hypertesnion/fits	0</li>
<li>Number of Maternal Deaths due to Other Causes (including causes not known)	1</li>
<li>Total Facility Based Maternal Death Reviews (FBMDR) done	15</li>
<li>Number of Adolscent / Adult deaths due to Diarrhoeal diseases	0</li>
<li>Number of Adolscent / Adult deaths due to Tuberculosis	0</li>
<li>Number of Adolscent / Adult deaths due to Respiratory diseases including infections (other than TB)	1</li>
<li>Number of Adolscent / Adult deaths due to Other Fever Related	0</li>
<li>Number of Adolscent / Adult deaths due to HIV/AIDS	0</li>
<li>Number of Adolscent / Adult deaths due to Heart disease/Hypertension related	0</li>
<li>Number of Adolscent / Adult deaths due to Cancer	1</li>
<li>Number of Adolscent / Adult deaths due to Neurological disease including strokes	0</li>
<li>Number of Adolscent / Adult deaths due to Accidents/Burn cases	0</li>
<li>Number of Adolscent / Adult deaths due to Suicide	0</li>
<li>Number of Adolscent / Adult deaths due to Animal bites and stings	0</li>
<li>Number of Adolscent / Adult deaths due to Known Acute Disease	0</li>
<li>Number of Adolscent / Adult deaths due to Known Chronic Disease	0</li>
<li>Number of Adolscent / Adult deaths due to Causes not known	4</li>
<li>Number of Deaths due to Malaria- Plasmodium Vivax	0</li>
<li>Number of Deaths due to Malaria- Plasmodium Falciparum	0</li>
<li>Number of Deaths due to Kala Azar	0</li>
<li>Number of Deaths due to Dengue	0</li>
<li>Number of Deaths due to Acute Encephelitis Syndrome (AES)	0</li>
<li>Number of Deaths due to Japanese Encephalitis (JE)	0</li>
</ul>
</body>
</html>