
// State, District and crop Options
var state_arr = new Array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir ", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Puducherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu","Telangana ", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal");



var s_a = new Array();
s_a[0]="";
s_a[1]=" NICOBARS | NORTH AND MIDDLE ANDAMAN |SOUTH ANDAMANS ";
s_a[2]=" ANANTAPUR | CHITTOOR | EAST GODAVARI | GUNTUR | KADAPA | KRISHNA | KURNOOL | PRAKASAM | SPSR NELLORE | SRIKAKULAM | VISAKHAPATANAM | VIZIANAGARAM | WEST GODAVARI ";
s_a[3]=" ANJAW | CHANGLANG | DIBANG VALLEY | EAST KAMENG | EAST SIANG | KURUNG KUMEY | LOHIT | LONGDING | LOWER DIBANG VALLEY | LOWER SUBANSIRI | NAMSAI | PAPUM PARE | TAWANG | TIRAP | UPPER SIANG | UPPER SUBANSIRI | WEST KAMENG | WEST SIANG ";
s_a[4]=" BAKSA | BARPETA | BONGAIGAON | CACHAR | CHIRANG | DARRANG | DHEMAJI | DHUBRI | DIBRUGARH | DIMA HASAO | GOALPARA | GOLAGHAT | HAILAKANDI | JORHAT | KAMRUP | KAMRUP METRO | KARBI ANGLONG | KARIMGANJ | KOKRAJHAR | LAKHIMPUR | MARIGAON | NAGAON | NALBARI | SIVASAGAR | SONITPUR | TINSUKIA | UDALGURI ";
s_a[5]=" ARARIA | ARWAL | AURANGABAD | BANKA | BEGUSARAI | BHAGALPUR | BHOJPUR | BUXAR | DARBHANGA | GAYA | GOPALGANJ | JAMUI | JEHANABAD | KAIMUR (BHABUA) | KATIHAR | KHAGARIA | KISHANGANJ | LAKHISARAI | MADHEPURA | MADHUBANI | MUNGER | MUZAFFARPUR | NALANDA | NAWADA | PASHCHIM CHAMPARAN | PATNA | PURBI CHAMPARAN | PURNIA | ROHTAS | SAHARSA | SAMASTIPUR | SARAN | SHEIKHPURA | SHEOHAR | SITAMARHI | SIWAN | SUPAUL | VAISHALI ";
s_a[6]=" CHANDIGARH ";
s_a[7]=" BALOD | BALODA BAZAR | BALRAMPUR | BASTAR | BEMETARA | BIJAPUR | BILASPUR | DANTEWADA | DHAMTARI | DURG | GARIYABAND | JANJGIR-CHAMPA | JASHPUR |KABIRDHAM | KANKER | KONDAGAON | KORBA | KOREA | MAHASAMUND | MUNGELI | NARAYANPUR | RAIGARH | RAIPUR | RAJNANDGAON | SUKMA | SURAJPUR | SURGUJA ";
s_a[8]=" DADRA AND NAGAR HAVELI ";
s_a[9]=" NORTH GOA | SOUTH GOA ";
s_a[10]=" AHMADABAD | AMRELI | ANAND | BANAS KANTHA | BHARUCH | BHAVNAGAR | DANG | DOHAD | GANDHINAGAR | JAMNAGAR | JUNAGADH | KACHCHH | KHEDA | MAHESANA | NARMADA | NAVSARI | PANCH MAHALS | PATAN | PORBANDAR | RAJKOT | SABAR KANTHA | SURAT | SURENDRANAGAR | TAPI | VADODARA | VALSAD ";
s_a[11]=" AMBALA | BHIWANI | FARIDABAD | FATEHABAD | GURGAON | HISAR | JHAJJAR | JIND | KAITHAL | KARNAL | KURUKSHETRA | MAHENDRAGARH | MEWAT | PALWAL | PANCHKULA | PANIPAT | REWARI | ROHTAK | SIRSA | SONIPAT |YAMUNANAGAR ";
s_a[12]=" BILASPUR | CHAMBA | HAMIRPUR | KANGRA | KINNAUR | KULLU | LAHUL AND SPITI | MANDI | SHIMLA | SIRMAUR | SOLAN | UNA ";
s_a[13]=" ANANTNAG | BADGAM | BANDIPORA | BARAMULLA | DODA | GANDERBAL | JAMMU | KARGIL | KATHUA | KISHTWAR | KULGAM | KUPWARA | LEH LADAKH | POONCH | PULWAMA | RAJAURI | RAMBAN | REASI | SAMBA | SHOPIAN | SRINAGAR | UDHAMPUR ";
s_a[14]=" BOKARO | CHATRA | DEOGHAR | DHANBAD | DUMKA | EAST SINGHBUM | GARHWA | GIRIDIH | GODDA | GUMLA | HAZARIBAGH | JAMTARA | KHUNTI | KODERMA | LATEHAR | LOHARDAGA | PAKUR | PALAMU | RAMGARH | RANCHI | SAHEBGANJ | SARAIKELA KHARSAWAN | SIMDEGA | WEST SINGHBHUM ";
s_a[15]=" BAGALKOT | BANGALORE RURAL | BELGAUM | BELLARY | BENGALURU URBAN | BIDAR | BIJAPUR | CHAMARAJANAGAR | CHIKBALLAPUR | CHIKMAGALUR | CHITRADURGA | DAKSHIN KANNAD | DAVANGERE | DHARWAD | GADAG | GULBARGA | HASSAN | HAVERI | KODAGU | KOLAR | KOPPAL | MANDYA | MYSORE | RAICHUR | RAMANAGARA | SHIMOGA | TUMKUR | UDUPI | UTTAR KANNAD | YADGIR ";
s_a[16]=" ALAPPUZHA | ERNAKULAM | IDUKKI | KANNUR | KASARAGOD | KOLLAM | KOTTAYAM | KOZHIKODE | MALAPPURAM | PALAKKAD | PATHANAMTHITTA | THIRUVANANTHAPURAM | THRISSUR | WAYANAD ";
s_a[17]=" AGAR MALWA | ALIRAJPUR | ANUPPUR | ASHOKNAGAR | BALAGHAT | BARWANI | BETUL | BHIND | BHOPAL | BURHANPUR |CHHATARPUR | CHHINDWARA | DAMOH | DATIA | DEWAS | DHAR | DINDORI | GUNA | GWALIOR | HARDA | HOSHANGABAD | INDORE | JABALPUR | JHABUA | KATNI | KHANDWA | KHARGONE | MANDLA | MANDSAUR | MORENA | NARSINGHPUR | NEEMUCH | PANNA | RAISEN | RAJGARH | RATLAM | REWA | SAGAR | SATNA | SEHORE | SEONI | SHAHDOL | SHAJAPUR | SHEOPUR | SHIVPURI | SIDHI | SINGRAULI | TIKAMGARH | UJJAIN | UMARIA | VIDISHA ";
s_a[18]=" AHMEDNAGAR | AKOLA | AMRAVATI | AURANGABAD | BEED | BHANDARA | BULDHANA | CHANDRAPUR | DHULE | GADCHIROLI | GONDIA | HINGOLI | JALGAON | JALNA | KOLHAPUR | LATUR | MUMBAI | NAGPUR | NANDED | NANDURBAR | NASHIK | OSMANABAD | PALGHAR | PARBHANI | PUNE | RAIGAD | RATNAGIRI | SANGLI | SATARA | SINDHUDURG | SOLAPUR | THANE | WARDHA | WASHIM | YAVATMAL ";
s_a[19]=" BISHNUPUR | CHANDEL | CHURACHANDPUR | IMPHAL EAST | SENAPATI | TAMENGLONG | THOUBAL | UKHRUL ";
s_a[20]=" EAST GARO HILLS | EAST JAINTIA HILLS | EAST KHASI HILLS | NORTH GARO HILLS | RI BHOI | SOUTH GARO HILLS | SOUTH WEST GARO HILLS | WEST GARO HILLS | WEST JAINTIA HILLS | WEST KHASI HILLS ";
s_a[21]=" AIZAWL | CHAMPHAI | KOLASIB | LAWNGTLAI | LUNGLEI | MAMIT | SAIHA | SERCHHIP ";
s_a[22]=" DIMAPUR | KIPHIRE | KOHIMA | LONGLENG | MOKOKCHUNG | MON | PEREN | PHEK | TUENSANG | WOKHA | ZUNHEBOTO ";
s_a[23]=" ANUGUL | BALANGIR | BALESHWAR | BARGARH | BHADRAK | BOUDH | CUTTACK | DEOGARH |DHENKANAL | GAJAPATI | GAJAPATI | GANJAM | JAGATSINGHAPUR | JAJAPUR | JHARSUGUDA | KALAHANDI | KANDHAMAL | KENDRAPARA | KENDUJHAR | KHORDHA | KORAPUT | MALKANGIRI | MAYURBHANJ | NABARANGPUR | NAYAGARH | NUAPADA | PURI | RAYAGADA |SAMBALPUR |SONEPUR | SUNDARGARH ";
s_a[24]=" KARAIKAL | MAHE | PONDICHERRY | YANAM ";
s_a[25]=" AMRITSAR | BARNALA |BATHINDA | FARIDKOT | FATEHGARH SAHIB | FAZILKA | FIROZEPUR | GURDASPUR | HOSHIARPUR | JALANDHAR |KAPURTHALA | LUDHIANA | MANSA | MOGA | MUKTSAR | NAWANSHAHR | PATHANKOT |PATIALA | RUPNAGAR | S.A.S NAGAR | SANGRUR | TARN TARAN ";
s_a[26]=" AJMER | ALWAR | BANSWARA | BARAN | BARMER | BHARATPUR | BHILWARA | BIKANER | BUNDI |CHITTORGARH | CHURU | DAUSA | DHOLPUR | DUNGARPUR | GANGANAGAR | HANUMANGARH | JAIPUR | JAISALMER | JALORE | JHALAWAR | JHUNJHUNU | JODHPUR | KARAULI | KOTA | NAGAUR | PALI | PRATAPGARH | RAJSAMAND | SAWAI MADHOPUR | SIKAR | SIROHI | TONK | UDAIPUR ";
s_a[27]=" EAST DISTRICT | NORTH DISTRICT |SOUTH DISTRICT | WEST DISTRICT ";
s_a[28]=" ARIYALUR | COIMBATORE | CUDDALORE | DHARMAPURI | DINDIGUL | ERODE | KANCHIPURAM | KANNIYAKUMARI | KARUR | KRISHNAGIRI | MADURAI | NAGAPATTINAM | NAMAKKAL | PERAMBALUR | PUDUKKOTTAI | RAMANATHAPURAM | SALEM | SIVAGANGA | THANJAVUR | THE NILGIRIS | THENI | THIRUVALLUR | TIRUCHIRAPPALLI | TIRUNELVELI | TIRUPPUR | TIRUVANNAMALAI | TUTICORIN | VELLORE | VILLUPURAM | VIRUDHUNAGAR ";
s_a[29]=" ADILABAD | HYDERABAD | KARIMNAGAR | KHAMMAM | MAHBUBNAGAR | MEDAK | NALGONDA | NIZAMABAD | RANGAREDDI | WARANGAL ";
s_a[30]=" DHALAI | GOMATI | KHOWAI | NORTH TRIPURA | SEPAHIJALA | SOUTH TRIPURA | UNAKOTI | WEST TRIPURA ";
s_a[31]=" AGRA | ALIGARH | ALLAHABAD | AMBEDKAR NAGAR | AMETHI | AMROHA | AURAIYA | AZAMGARH | BAGHPAT | BAHRAICH | BALLIA | BALRAMPUR | BANDA | BARABANKI | BAREILLY | BASTI | BIJNOR | BUDAUN | BULANDSHAHR | CHANDAULI | CHITRAKOOT | DEORIA | ETAH | ETAWAH | FAIZABAD | FARRUKHABAD | FATEHPUR | FIROZABAD | GAUTAM BUDDHA NAGAR | GHAZIABAD | GHAZIPUR | GONDA | GORAKHPUR | HAMIRPUR | HAPUR | HARDOI | HATHRAS | JALAUN | JAUNPUR | JHANSI | KANNAUJ | KANPUR DEHAT | KANPUR NAGAR | KASGANJ | KAUSHAMBI | KHERI | KUSHI NAGAR | LALITPUR | LUCKNOW | MAHARAJGANJ | MAHOBA | MAINPURI | MATHURA | MAU | MEERUT | MIRZAPUR | MORADABAD | MUZAFFARNAGAR | PILIBHIT | PRATAPGARH | RAE BARELI | RAMPUR | SAHARANPUR | SAMBHAL | SANT KABEER NAGAR | SANT RAVIDAS NAGAR | SHAHJAHANPUR | SHAMLI | SHRAVASTI | SIDDHARTH NAGAR | SITAPUR | SONBHADRA | SULTANPUR | UNNAO | VARANASI ";
s_a[32]=" ALMORA | BAGESHWAR | CHAMOLI | CHAMPAWAT | DEHRADUN | HARIDWAR | NAINITAL | PAURI GARHWAL | PITHORAGARH | RUDRA PRAYAG | TEHRI GARHWAL | UDAM SINGH NAGAR | UTTAR KASHI ";
s_a[33]=" 24 PARAGANAS NORTH | 24 PARAGANAS SOUTH | BANKURA | BARDHAMAN | BIRBHUM | COOCHBEHAR | DARJEELING | DINAJPUR DAKSHIN | DINAJPUR UTTAR | HOOGHLY | HOWRAH | JALPAIGURI | MALDAH | MEDINIPUR EAST | MEDINIPUR WEST | MURSHIDABAD | NADIA | PURULIA ";


function print_state(state_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(state_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select State','');
	option_str.selectedIndex = 0;
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function print_city(city_id, city_index){
	var option_str = document.getElementById(city_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select District','');
	option_str.selectedIndex = 0;
	var city_arr = s_a[city_index].split("|");
	for (var i=0; i<city_arr.length; i++) {
		option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
	}
}


// var crop_list_india = ["Apple", "Arcanut (Processed)", "Arecanut", "Arhar/Tur", "Ash Gourd", "Atcanut (Raw)", "Bajra", "Banana", "Barley", "Bean", "Beans & Mutter(Vegetable)", "Beet Root", "Ber", "Bhindi", "Bitter Gourd", "Black pepper", "Blackgram", "Bottle Gourd", "Brinjal", "Cabbage", "Cardamom", "Carrot", "Cashewnut", "Cashewnut Processed", "Cashewnut Raw", "Castor seed", "Cauliflower", "Citrus Fruit", "Coconut", "Coffee", "Colocosia", "Cond-spcs other", "Coriander", "Cotton(lint)", "Cowpea(Lobia)", "Cucumber", "Drum Stick", "Dry chillies", "Dry ginger", "Garlic", "Ginger", "Gram", "Grapes", "Groundnut", "Guar seed", "Horse-gram", "Jack Fruit", "Jobster", "Jowar", "Jute", "Jute & mesta", "Kapas", "Khesari", "Korra", "Lab-Lab", "Lemon", "Lentil", "Linseed", "Litchi", "Maize", "Mango", "Masoor", "Mesta", "Moong(Green Gram)", "Moth", "Niger seed", "Oilseeds total", "Onion", "Orange", "Other  Rabi pulses", "Other Cereals & Millets", "Other Citrus Fruit", "Other Dry Fruit", "other fibres", "Other Fresh Fruits", "Other Kharif pulses", "other misc. pulses", "other oilseeds", "Other Vegetables", "Paddy", "Papaya", "Peach", "Pear", "Peas  (vegetable)", "Peas & beans (Pulses)", "Perilla", "Pineapple", "Plums", "Pome Fruit", "Pome Granet", "Potato", "Pulses total", "Pump Kin", "Ragi", "Rajmash Kholar", "Rapeseed &Mustard", "Redish", "Ribed Guard", "Rice", "Ricebean (nagadal)", "Rubber", "Safflower", "Samai", "Sannhamp", "Sapota", "Sesamum", "Small millets", "Snak Guard", "Soyabean", "Sugarcane", "Sunflower", "Sweet potato", "Tapioca", "Tea", "Tobacco", "Tomato", "Total foodgrain", "Turmeric", "Turnip", "Urad", "Varagu", "Water Melon", "Wheat", "Yam"];

var crop_list_karnataka = ["Arecanut","Arcanut (Processed)","Atcanut (Raw)","Banana","Bajra","Beans & Mutter(Vegetable)","Black pepper","Brinjal","Cardamom","Cashewnut","Cashewnut Processed","Cashewnut Raw","Castor seed","Citrus Fruit","Coconut ","Coriander","Cowpea(Lobia)","Cotton(lint)","Dry chillies","Dry ginger","Garlic","Gram","Grapes","Groundnut","Horse-gram","Jowar","Linseed","Maize","Mango","Mesta","Moong(Green Gram)","Niger seed","Onion","Other  Rabi pulses","Other Fresh Fruits","Other Kharif pulses","Paddy","Papaya","Peas & beans (Pulses)","Pome Fruit","Potato","Rapeseed &Mustard","Rice","Safflower","Sannhamp","Sesamum","Small millets","Soyabean","Sugarcane","Sunflower","Sweet potato","Tapioca","Tomato","Tur","Turmeric","Urad","Wheat"]


function print_crop_options(crop_dropdown_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_crops = document.getElementById(crop_dropdown_id);
	option_crops.length=0;
	option_crops.options[0] = new Option('Select Crop','');
	option_crops.selectedIndex = 0;
	for (var i=0; i<crop_list_karnataka.length; i++) {
		option_crops.options[option_crops.length] = new Option(crop_list_karnataka[i],crop_list_karnataka[i]);
	}
}


var karnataka_districts = ["BAGALKOT", "BANGALORE RURAL", "BELGAUM", "BELLARY", "BENGALURU URBAN", "BIDAR", "BIJAPUR", "CHAMARAJANAGAR", "CHIKBALLAPUR", "CHIKMAGALUR", "CHITRADURGA", "DAKSHIN KANNAD", "DAVANGERE", "DHARWAD", "GADAG", "GULBARGA", "HAVERI", "HASSAN", "KODAGU", "KOLAR", "KOPPAL", "MANDYA", "MYSORE", "RAMANAGARA", "RAICHUR", "SHIMOGA", "TUMKUR", "UDUPI", "UTTAR KANNAD", "YADGIR"];

function print_karnataka_districts(district_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_districts = document.getElementById(district_id);
	option_districts.length=0;
	option_districts.options[0] = new Option('Select District','');
	option_districts.selectedIndex = 0;
	for (var i=0; i<karnataka_districts.length; i++) {
		option_districts.options[option_districts.length] = new Option(karnataka_districts[i],karnataka_districts[i]);
	}
}


var months = ["ANNUAL", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC", "Jan-Feb", "Mar-May", "Jun-Sep", "Oct-Dec"]; 

function print_months(month_id) {
    var option_months = document.getElementById(month_id);
    option_months.length = 0;
    option_months.options[0] = new Option('Select Month', '');
    option_months.selectedIndex = 0;
    for (var i = 0; i < months.length; i++) {
        option_months.options[option_months.length] = new Option(months[i], months[i]);
    }
}


var region = ["ANDAMAN & NICOBAR ISLANDS", "ARUNACHAL PRADESH", "ASSAM & MEGHALAYA", "NAGA MANI MIZO TRIPURA", "SUB HIMALAYAN WEST BENGAL & SIKKIM", "GANGETIC WEST BENGAL", "ORISSA", "JHARKHAND", "BIHAR", "EAST UTTAR PRADESH", "WEST UTTAR PRADESH", "UTTARAKHAND", "HARYANA DELHI & CHANDIGARH", "PUNJAB", "HIMACHAL PRADESH", "JAMMU & KASHMIR", "WEST RAJASTHAN", "EAST RAJASTHAN", "WEST MADHYA PRADESH", "EAST MADHYA PRADESH", "GUJARAT REGION", "SAURASHTRA & KUTCH", "KONKAN & GOA", "MADHYA MAHARASHTRA", "MATATHWADA", "VIDARBHA", "CHHATTISGARH", "COASTAL ANDHRA PRADESH", "TELANGANA", "RAYALSEEMA", "TAMIL NADU", "COASTAL KARNATAKA", "NORTH INTERIOR KARNATAKA", "SOUTH INTERIOR KARNATAKA", "KERALA", "LAKSHADWEEP"];

function print_region(region_id) {
    var option_region = document.getElementById(region_id);
    option_region.length = 0;
    option_region.options[0] = new Option('Select Region', '');
    option_region.selectedIndex = 0;
    for (var i = 0; i < region.length; i++) {
        option_region.options[option_region.length] = new Option(region[i], region[i]);
    }
}