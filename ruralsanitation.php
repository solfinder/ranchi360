<!DOCTYPE html>
<html>
<body>
<center><h2>Rural Sanitation (IHHL scheme) in Ranchi</h2></center>
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
</li>
<li>
Block GramPanchayat No_of_units
<li>
ANGARA	ANGARA	967
</li>
<li>
ANGARA	BARWADAG	938
</li>
<li>
ANGARA	BISA	902
</li>
<li>
ANGARA	BONGAIBERA	745
</li>
<li>
ANGARA	CHATRA	553
</li>
<li>
ANGARA	CHILDAG	854
</li>
<li>
ANGARA	GETALSUD	965
</li>
<li>
ANGARA	GURIDIH	990
</li>
<li>
ANGARA	HARATU	883
</li>
<li>
ANGARA	HESAL	845
</li>
<li>
ANGARA	HESATU	684
</li>
<li>
ANGARA	JONHA	901
</li>
<li>
ANGARA	KUCCHU	790
</li>
<li>
ANGARA	LUPUNG	668
</li>
<li>
ANGARA	NAWAGARH	953
</li>
<li>
ANGARA	PAIKA	718
</li>
<li>
ANGARA	RAJADERA	938
</li>
<li>
ANGARA	SALHAN	731
</li>
<li>
ANGARA	SIRKA	1043
</li>
<li>
ANGARA	SURSU	714
</li>
<li>
ANGARA	TATI	947
</li>
<li>
BERO	BERO	1017
</li>
<li>
BERO	CHACHKAPI	913
</li>
<li>
BERO	DIGHIA	841
</li>
<li>
BERO	DORANDA	1246
</li>
<li>
BERO	GHAGHRA	1180
</li>
<li>
BERO	HARIHARPUR JAMTOLI	1413
</li>
<li>
BERO	ITA	1199
</li>
<li>
BERO	JARIA	1042
</li>
<li>
BERO	KARANJI	1066
</li>
<li>
BERO	KARKARI	1049
</li>
<li>
BERO	KESHA	818
</li>
<li>
BERO	KHUKHRA	1077
</li>
<li>
BERO	MURTO	986
</li>
<li>
BERO	NEHALUKAPARIYA	1082
</li>
<li>
BERO	PURIO	797
</li>
<li>
BERO	TERO	1050
</li>
<li>
BERO	TUTLO	1086
</li>
<li>
BUNDU	BARUHATU	466
</li>
<li>
BUNDU	CHURGI	167
</li>
<li>
BUNDU	EDALHATU	863
</li>
<li>
BUNDU	GABHEDYA	972
</li>
<li>
BUNDU	HUMTA	873
</li>
<li>
BUNDU	KANCHI	890
</li>
<li>
BUNDU	RELADIH	855
</li>
<li>
BUNDU	SUMANDIH	817
</li>
<li>
BUNDU	TAIMARA	676
</li>
<li>
BUNDU	TAU	881
</li>
<li>
BUNDU	TUNJU	848
</li>
<li>
BURMU	BADE	1010
</li>
<li>
BURMU	BURMU	1172
</li>
<li>
BURMU	CHAINGARA	1038
</li>
<li>
BURMU	CHAKME	1174
</li>
<li>
BURMU	CHAPPER	1170
</li>
<li>
BURMU	GINJOTHAKURGAON	812
</li>
<li>
BURMU	GURGAIN	847
</li>
<li>
BURMU	HESALPIRI	980
</li>
<li>
BURMU	KHAKHRA	942
</li>
<li>
BURMU	MAKKA	1118
</li>
<li>
BURMU	MURUPIRI	1013
</li>
<li>
BURMU	OJHASARAM	1105
</li>
<li>
BURMU	SARLE	1095
</li>
<li>
BURMU	UMEDANDA	927
</li>
<li>
CHANHO	BALSOKRA	825
</li>
<li>
CHANHO	BEYASI	1009
</li>
<li>
CHANHO	CHAMA	1087
</li>
<li>
CHANHO	CHATWAL	689
</li>
<li>
CHANHO	CHOREYA	581
</li>
<li>
CHANHO	KARKAT	727
</li>
<li>
CHANHO	LUNDRI	791
</li>
<li>
CHANHO	MURTO	942
</li>
<li>
CHANHO	PANDRI	921
</li>
<li>
CHANHO	PATRATU	1348
</li>
<li>
CHANHO	RAGHUNATHPUR	1245
</li>
<li>
CHANHO	ROLL	1305
</li>
<li>
CHANHO	SILAGAIN	1013
</li>
<li>
CHANHO	SONS	1424
</li>
<li>
CHANHO	TALA	1183
</li>
<li>
CHANHO	TANGER	1456
</li>
<li>
CHANHO	TARANGA	1304
</li>
<li>
ITKI	CHINARO PURIO	926
</li>
<li>
ITKI	GARGAON	775
</li>
<li>
ITKI	ITKI (EAST)	517
</li>
<li>
ITKI	ITKI (WEST)	591
</li>
<li>
ITKI	KULLI	907
</li>
<li>
ITKI	KUNDI	945
</li>
<li>
ITKI	KURGI	940
</li>
<li>
ITKI	MALTI	967
</li>
<li>
ITKI	RANIKHATANGA	733
</li>
<li>
KANKE	ARSANDE	785
</li>
<li>
KANKE	BADHU	964
</li>
<li>
KANKE	BOREYA	600
</li>
<li>
KANKE	CHANDWE	666
</li>
<li>
KANKE	CHUTU	726
</li>
<li>
KANKE	DUMARDAGA	663
</li>
<li>
KANKE	GAGI	1382
</li>
<li>
KANKE	HOCHAR	460
</li>
<li>
KANKE	HUNDUR	832
</li>
<li>
KANKE	HUSIR	738
</li>
<li>
KANKE	ICHAPIRI	572
</li>
<li>
KANKE	JAIPUR	765
</li>
<li>
KANKE	KANKE(NORTH)	156
</li>
<li>
KANKE	KANKE(SOUTH)	155
</li>
<li>
KANKE	KANKE(WEST)	54
</li>
<li>
KANKE	KATAMKULI	1079
</li>
<li>
KANKE	KEDAL	510
</li>
<li>
KANKE	KHATANGA	420
</li>
<li>
KANKE	KOKDORO	824
</li>
<li>
KANKE	MALSIRING	762
</li>
<li>
KANKE	MANATU	645
</li>
<li>
KANKE	MESRA (EAST)	365
</li>
<li>
KANKE	MESRA (WEST)	400
</li>
<li>
KANKE	NEORI	559
</li>
<li>
KANKE	PITHORIA	402
</li>
<li>
KANKE	RARHA	901
</li>
<li>
KANKE	SATAKNADU	988
</li>
<li>
KANKE	SUKURHUTU (NORTH)	503
</li>
<li>
KANKE	SUKURHUTU (SOUTH)	301
</li>
<li>
KANKE	ULATU	1067
</li>
<li>
KANKE	UPARKONKI	833
</li>
<li>
KANKE	URUGUTU	730
</li>
<li>
KHELARI	BAMNE	440
</li>
<li>
KHELARI	BISHRAMPUR	228
</li>
<li>
KHELARI	BUKBUKA	999
</li>
<li>
KHELARI	CHURI (MIDDLE)	399
</li>
<li>
KHELARI	CHURI (NORTH)	246
</li>
<li>
KHELARI	CHURI (NORTH-EAST)	223
</li>
<li>
KHELARI	CHURI (NORTH-WEST)	321
</li>
<li>
KHELARI	CHURI (SOUTH)	507
</li>
<li>
KHELARI	HUTAP	442
</li>
<li>
KHELARI	KHELARI	594
</li>
<li>
KHELARI	LAPRA	1133
</li>
<li>
KHELARI	MAYAPUR	603
</li>
<li>
KHELARI	RAY	560
</li>
<li>
KHELARI	TUMANG	347
</li>
<li>
LAPUNG	BOKRANDA	1050
</li>
<li>
LAPUNG	DADI	1111
</li>
<li>
LAPUNG	DANEKERA	1109
</li>
<li>
LAPUNG	DEOGAON	999
</li>
<li>
LAPUNG	DOLAICHA	1221
</li>
<li>
LAPUNG	HULSU	819
</li>
<li>
LAPUNG	KAKARIA	1023
</li>
<li>
LAPUNG	LATRATU	829
</li>
<li>
LAPUNG	MAHUGAON	756
</li>
<li>
LAPUNG	MALGO	1072
</li>
<li>
LAPUNG	SAPUKERA	930
</li>
<li>
MANDAR	BANJHILA	777
</li>
<li>
MANDAR	BARGARI	833
</li>
<li>
MANDAR	BISHAKHATANGA	687
</li>
<li>
MANDAR	BRAMBEY	975
</li>
<li>
MANDAR	JHINJHRI	995
</li>
<li>
MANDAR	KAIMBO	1245
</li>
<li>
MANDAR	KANJIA	1131
</li>
<li>
MANDAR	KARGE	960
</li>
<li>
MANDAR	LOYO	1218
</li>
<li>
MANDAR	MAHUAJARI	976
</li>
<li>
MANDAR	MALTI	603
</li>
<li>
MANDAR	MANDAR	594
</li>
<li>
MANDAR	MANDRO	976
</li>
<li>
MANDAR	MURMA	724
</li>
<li>
MANDAR	NAGRA	653
</li>
<li>
MANDAR	SARWA	920
</li>
<li>
MANDAR	SURSA	786
</li>
<li>
MANDAR	TANGARBASLI	961
</li>
<li>
MANDAR	TIGOIAMBATOLI	792
</li>
<li>
NAGRI	BALALONG	918
</li>
<li>
NAGRI	CHETE	852
</li>
<li>
NAGRI	CHIPRA	694
</li>
<li>
NAGRI	DEWRI	673
</li>
<li>
NAGRI	EDCHERO	769
</li>
<li>
NAGRI	KUDLONG	739
</li>
<li>
NAGRI	LALGUTUA	740
</li>
<li>
NAGRI	NAGRI	802
</li>
<li>
NAGRI	NARO	920
</li>
<li>
NAGRI	SAHER	1098
</li>
<li>
NAGRI	SAPAROM	1253
</li>
<li>
NAGRI	TUNDUL (NORTH)	1095
</li>
<li>
NAGRI	TUNDUL (SOUTH)	733
</li>
<li>
NAMKUM	AARA	520
</li>
<li>
NAMKUM	BANDHUWA	838
</li>
<li>
NAMKUM	BARAM	695
</li>
<li>
NAMKUM	BARGAWAN	1296
</li>
<li>
NAMKUM	CHANDAGHASI	1089
</li>
<li>
NAMKUM	DUNGRI	832
</li>
<li>
NAMKUM	HAHAP	1273
</li>
<li>
NAMKUM	HARDAG	957
</li>
<li>
NAMKUM	HUDWA	1010
</li>
<li>
NAMKUM	HUWANGHATU	862
</li>
<li>
NAMKUM	KHIJRI	617
</li>
<li>
NAMKUM	KUTIYATU	862
</li>
<li>
NAMKUM	LALI	880
</li>
<li>
NAMKUM	LALKHATANGA	748
</li>
<li>
NAMKUM	MAHILONG	725
</li>
<li>
NAMKUM	RAJAULATU	1024
</li>
<li>
NAMKUM	RAMPUR	1052
</li>
<li>
NAMKUM	SIDROLL	709
</li>
<li>
NAMKUM	SILWAY	782
</li>
<li>
NAMKUM	SITHIO	948
</li>
<li>
NAMKUM	SODAG	912
</li>
<li>
NAMKUM	TATI (EAST)	394
</li>
<li>
NAMKUM	TATI (WEST)	50
</li>
<li>
ORMANJHI	BARIDIH	1105
</li>
<li>
ORMANJHI	BARWE	749
</li>
<li>
ORMANJHI	CHADU	910
</li>
<li>
ORMANJHI	CHAKLA	568
</li>
<li>
ORMANJHI	CHANDRA	956
</li>
<li>
ORMANJHI	CHUTUPALU	922
</li>
<li>
ORMANJHI	GAGARI	848
</li>
<li>
ORMANJHI	HENDEBILI	677
</li>
<li>
ORMANJHI	ICHADAG	1037
</li>
<li>
ORMANJHI	IRBA	610
</li>
<li>
ORMANJHI	JAIDIHA	623
</li>
<li>
ORMANJHI	KARMA	715
</li>
<li>
ORMANJHI	KUCCHU	602
</li>
<li>
ORMANJHI	KUTE	1022
</li>
<li>
ORMANJHI	ORMANJHI	608
</li>
<li>
ORMANJHI	PAANCHA	860
</li>
<li>
ORMANJHI	SADMA	745
</li>
<li>
ORMANJHI	TUNDAHULI	472
</li>
<li>
RAHE	AMBAJHARIA	710
</li>
<li>
RAHE	BANSIA	743
</li>
<li>
RAHE	BASANTPUR	886
</li>
<li>
RAHE	DOKAD	1004
</li>
<li>
RAHE	HOTLO	1001
</li>
<li>
RAHE	LOWAHATU	849
</li>
<li>
RAHE	NAWADIH	1054
</li>
<li>
RAHE	RAHE	1140
</li>
<li>
RAHE	SATAKI	922
</li>
<li>
RATU	BAJPUR	856
</li>
<li>
RATU	BANAPIRI	618
</li>
<li>
RATU	BIJULIA	995
</li>
<li>
RATU	CHATAKPUR	530
</li>
<li>
RATU	FUTKALTOLI	770
</li>
<li>
RATU	GUDU	727
</li>
<li>
RATU	HURHURI	831
</li>
<li>
RATU	KAMRE	457
</li>
<li>
RATU	LAHNA	852
</li>
<li>
RATU	PALI	1030
</li>
<li>
RATU	PANDRA	51
</li>
<li>
RATU	PURIO	635
</li>
<li>
RATU	RATU (EAST)	381
</li>
<li>
RATU	RATU (NORTH)	964
</li>
<li>
RATU	RATU (SOUTH)	718
</li>
<li>
RATU	RATU (WEST)	404
</li>
<li>
RATU	SIMALIA	686
</li>
<li>
RATU	SUNDIL	874
</li>
<li>
RATU	TARUP	1022
</li>
<li>
RATU	TIGRA	699
</li>
<li>
SILLI	BADACHANGRU	608
</li>
<li>
SILLI	BANSARULI	892
</li>
<li>
SILLI	BANTAHAJAM (NORTH)	567
</li>
<li>
SILLI	BANTAHAJAM (SOUTH)	735
</li>
<li>
SILLI	BISARIA	1075
</li>
<li>
SILLI	DOBADU	898
</li>
<li>
SILLI	GORADIH	921
</li>
<li>
SILLI	HAKEDAG	1003
</li>
<li>
SILLI	HALMADA	884
</li>
<li>
SILLI	KOCHO	750
</li>
<li>
SILLI	LOTA	867
</li>
<li>
SILLI	LOWADAG	899
</li>
<li>
SILLI	LUPUNG	825
</li>
<li>
SILLI	MURI (EAST)	236
</li>
<li>
SILLI	MURI (WEST)	677
</li>
<li>
SILLI	NAGEDIH	700
</li>
<li>
SILLI	PATRAHATU	754
</li>
<li>
SILLI	PISKA	999
</li>
<li>
SILLI	SILLI	700
</li>
<li>
SILLI	TUTKI	807
</li>
<li>
SONAHATU	BARENDA	832
</li>
<li>
SONAHATU	BARUHATU	777
</li>
<li>
SONAHATU	DULMI	883
</li>
<li>
SONAHATU	GALAU	801
</li>
<li>
SONAHATU	HARIN	935
</li>
<li>
SONAHATU	HESADIH	956
</li>
<li>
SONAHATU	JAMUDAG	862
</li>
<li>
SONAHATU	JILINGSERENG	369
</li>
<li>
SONAHATU	JINTU	891
</li>
<li>
SONAHATU	LANDUPDIH	886
</li>
<li>
SONAHATU	PANDADIH	659
</li>
<li>
SONAHATU	SONAHATU	1089
</li>
<li>
SONAHATU	TELWADIH	904
</li>
<li>
SONAHATU	TETLA	845
</li>
<li>
TAMAR	AARAHANGA	1057
</li>
<li>
TAMAR	AMLESHA	887
</li>
<li>
TAMAR	BIRGAON	754
</li>
<li>
TAMAR	DIMBUJARDA	940
</li>
<li>
TAMAR	HADAMLOHAR	820
</li>
<li>
TAMAR	JANUMPIRI	827
</li>
<li>
TAMAR	JARGO	900
</li>
<li>
TAMAR	KUNDLA	842
</li>
<li>
TAMAR	KURKUTTA	375
</li>
<li>
TAMAR	LUNGTU	753
</li>
<li>
TAMAR	MALHAN (BHUIYANDIH)	999
</li>
<li>
TAMAR	MANKIDIH	741
</li>
<li>
TAMAR	MARDHAN	1021
</li>
<li>
TAMAR	PARASI	956
</li>
<li>
TAMAR	PERAIDIH	1025
</li>
<li>
TAMAR	PUNDIDIRI	910
</li>
<li>
TAMAR	RAGRABARAM	815
</li>
<li>
TAMAR	RARGAON	859
</li>
<li>
TAMAR	SARJAMDIH	649
</li>
<li>
TAMAR	TAMAR (E)	684
</li>
<li>
TAMAR	TAMAR (W)	738
</li>
<li>
TAMAR	ULIDIH	1028
</li>
<li>
TAMAR	ULILOHAR	725
</li>
</ul>
</body>
</html>