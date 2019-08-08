<?php include("config.php"); ?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css"></HEAD>

 


		

<script language="JavaScript">

function caste_disable(obj){
	if(obj.options[obj.selectedIndex].text != 'Hindu' &&
		obj.options[obj.selectedIndex].text != 'Muslim' &&
		obj.options[obj.selectedIndex].text != 'Christian' &&
		obj.options[obj.selectedIndex].text != 'Jain' &&
		obj.options[obj.selectedIndex].text != 'Sikh'){
	document.MatriForm.caste.disabled = true;
	}
	else {
		document.MatriForm.caste.disabled = false;
		get_caste(obj.form.religion,0);
	}
}
//-->
</script>


	<script language="javascript">

	var caste=new Array();
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","Nadar","Nagar Brahmin","Naidu","Nair","Nair Vaniya","Nambiar","Nepali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav","Devanga chettier", "24 manai chettier","Vaniya chettier", "Jangumar", "Andipandaram", "Ariyavaisiyar","Vannar","Others"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni","Others"];
caste["Christian"] = ["Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","Nadar","Protestant","Syrian","Others"];
caste["Jain"] = ["Digambar","Shewetamber","Vania","Others"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia","Others"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Any","Any",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Any"?"Any":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

	}

	</script>
	 <script>
function check_Age(field_name)
{
	var i, max, field_info
	field_info = eval("document.MatriForm." + field_name);
	max = field_info.value.length;
	
	for (i = 0; i < max; i++)
	{
		if(isNaN(field_info.value.charAt(i)))
		{
			alert("Age must be numeric.");
			field_info.value = "";
			field_info.focus();
			return false;
		}
	}
			return true;
}
</script>


<BODY class="body">
<DIV align="center">
<TABLE width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Regular Search </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="5" cellspacing="4" id="content">
      <tr>
        <td colspan="2"><p align="justify"><img src="pics/searchlense.gif" width="28" height="28" align="left"> Search based on a few basic criteria one would look for in a   partner. If you like a profile you can Express Interest or Send Mail.</p></td>
      </tr>
      
      <tr>
        <td colspan="2">
		
		<form action="advsearch_results.php" method="get" name="MatriForm" id="MatriForm" >
		
		<table width="100%" border="0" cellpadding="3" cellspacing="3">
          <tr>
            <td height="20" colspan="2"><div align="right">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
          </tr>
          <tr>
            <td width="22%"><div align="left">Looking for </div></td>
            <td width="78%"><div align="left">
              <input name="gender" type="radio" class="forminput" value="Male" checked>
Male 
					&nbsp;
                    <input name="gender" type="radio" class="forminput" value="Female">
Female </div></td>
          </tr>
          <tr>
            <td>Marital Status </td>
            <td><input name="ms" type="radio" class="forminput"  value="Unmarried" checked="checked" />
              Unmarried   
                <input name="ms" type="radio" class="forminput"  value="Widow/Widower" />
Widow/Widower  
<input name="ms" type="radio" class="forminput"  value="Divorcee" />
Divorcee  
<input name="ms" type="radio" class="forminput"  value="Separated" />
Separated </td>
          </tr>
          <tr>
            <td><div align="left">Age</div></td>
            <td><div align="left">From
                <INPUT name="age1" class="forminput" id="age1" value="20" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">
&nbsp; to &nbsp;
<INPUT name="age2" class="forminput" id="age2" value="90" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >
years</div></td>
          </tr>
          
          <tr>
            <td>Height</td>
            <td>From 
              <select name="height1" class="forminput" id="height1" style="width:100px;">
                <option value="">- Select -</option>
                <option value="1">Below 4ft</option>
                <option value="2" selected>4ft 6in</option>
                <option value="3">4ft 7in</option>
                <option value="4">4ft 8in</option>
                <option value="5">4ft 9in</option>
                <option value="6">4ft 10in</option>
                <option value="7">4ft 11in</option>
                <option value="8">5ft</option>
                <option value="9">5ft 1in</option>
                <option value="10">5ft 2in</option>
                <option value="11">5ft 3in</option>
                <option value="12">5ft 4in</option>
                <option value="13">5ft 5in</option>
                <option value="14">5ft 6in</option>
                <option value="15">5ft 7in</option>
                <option value="16">5ft 8in</option>
                <option value="17">5ft 9in</option>
                <option value="18">5ft 10in</option>
                <option value="19">5ft 11in</option>
                <option value="20">6ft</option>
                <option value="21">6ft 1in</option>
                <option value="22">6ft 2in</option>
                <option value="23">6ft 3in</option>
                <option value="24">6ft 4in</option>
                <option value="25">6ft 5in</option>
                <option value="26">6ft 6in</option>
                <option value="27">6ft 7in</option>
                <option value="28">6ft 8in</option>
                <option value="29">6ft 9in</option>
                <option value="30">6ft 10in</option>
                <option value="31">6ft 11in</option>
                <option value="32">7ft</option>
                <option value="33">Above 7ft</option>
              </select> 
              &nbsp;&nbsp;to&nbsp; <select name="height2" class="forminput" id="height2" style="width:100px;">
                <option value="">- Select -</option>
                <option value="1">Below 4ft</option>
                <option value="2">4ft 6in</option>
                <option value="3">4ft 7in</option>
                <option value="4">4ft 8in</option>
                <option value="5">4ft 9in</option>
                <option value="6">4ft 10in</option>
                <option value="7">4ft 11in</option>
                <option value="8">5ft</option>
                <option value="9">5ft 1in</option>
                <option value="10">5ft 2in</option>
                <option value="11">5ft 3in</option>
                <option value="12">5ft 4in</option>
                <option value="13">5ft 5in</option>
                <option value="14">5ft 6in</option>
                <option value="15">5ft 7in</option>
                <option value="16">5ft 8in</option>
                <option value="17">5ft 9in</option>
                <option value="18">5ft 10in</option>
                <option value="19">5ft 11in</option>
                <option value="20">6ft</option>
                <option value="21">6ft 1in</option>
                <option value="22">6ft 2in</option>
                <option value="23">6ft 3in</option>
                <option value="24">6ft 4in</option>
                <option value="25">6ft 5in</option>
                <option value="26">6ft 6in</option>
                <option value="27">6ft 7in</option>
                <option value="28">6ft 8in</option>
                <option value="29">6ft 9in</option>
                <option value="30">6ft 10in</option>
                <option value="31" selected>6ft 11in</option>
                <option value="32">7ft</option>
                <option value="33">Above 7ft</option>
                                          </select></td>
          </tr>
          
          <tr>
            <td><div align="left">Religion</div></td>
            <td><div align="left">
              <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:215px;">
                <option value="Any" selected="selected">Any</option>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Jain">Jain</option>
                <option value="Parsi">Parsi</option>
                <option value="Buddhist">Buddhist</option>
                <option value="Bahai">Bahai</option>
                <option value="Inter-Religion">Inter-Religion</option>
                <option value="Others">Others</option>
              </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="left">Caste</div></td>
            <td><div align="left">
              <select name="caste" class="forminput" id="caste" style="width:215px;">
              <option value="Any" selected="selected">Any</option>
              </select>
            </div></td>
          </tr>
          
          <tr>
            <td><div align="left">
              <p>Language</p>
              </div></td>
            <td><div align="left"><span style="HEIGHT: 24px">
              <select name="language" class="forminput" id="language" maxlength="2" style="width:220px;">
                <option value="Any" selected="selected">Any</option>
                <option value="Tamil">Tamil</option>
                <option value="Hindi">Hindi</option>
                <option value="Gujarati">Gujarati</option>
                <option value="Urdu">Urdu</option>
                <option value="English">English</option>
                <option value="Punjabi">Punjabi</option>
                <option value="Marathi">Marathi</option>
                <option value="Telugu">Telugu</option>
                <option value="Malayalam">Malayalam</option>
                <option value="Bengali">Bengali</option>
                <option value="Kannada">Kannada</option>
                <option value="Sindhi">Sindhi</option>
                <option value="Konkani">Konkani</option>
                <option value="Oriya">Oriya</option>
                <option value="Arabic">Arabic</option>
                <option value="Marwari">Marwari</option>
                <option value="Aka">Aka</option>
                <option value="Assamese">Assamese</option>
                <option value="Awadhi">Awadhi</option>
                <option value="Bhojpuri">Bhojpuri</option>
                <option value="Bhutia">Bhutia</option>
                <option value="Chatlisgarhi">Chatlisgarhi</option>
                <option value="Chinese">Chinese</option>
                <option value="Dogri">Dogri</option>
                <option value="French">French</option>
                <option value="Garhwali">Garhwali</option>
                <option value="Garo">Garo</option>
                <option value="Haryanvi">Haryanvi</option>
                <option value="Kakbarak">Kakbarak</option>
                <option value="Kanauji">Kanauji</option>
                <option value="Kashmiri">Kashmiri</option>
                <option value="Khandesi">Khandesi</option>
                <option value="Khasi">Khasi</option>
                <option value="Koshali">Koshali</option>
                <option value="Kumoani">Kumoani</option>
                <option value="Kutchi">Kutchi</option>
                <option value="Lepcha">Lepcha</option>
                <option value="Magahi">Magahi</option>
                <option value="Maithili">Maithili</option>
                <option value="Malay">Malay</option>
                <option value="Manipuri">Manipuri</option>
                <option value="Miji">Miji</option>
                <option value="Mizo">Mizo</option>
                <option value="Monpa">Monpa</option>
                <option value="Nepali">Nepali</option>
                <option value="Persian">Persian</option>
                <option value="Rajasthani">Rajasthani</option>
                <option value="Russian">Russian</option>
                <option value="Sanskrit">Sanskrit</option>
                <option value="Santhali">Santhali</option>
                <option value="Spanish">Spanish</option>
                <option value="Swedish">Swedish</option>
                <option value="Tagalog">Tagalog</option>
                <option value="Tulu">Tulu</option>
                <option value="Other">Other</option>
              </select>
            </span></div></td>
          </tr>
          <tr>
            <td>Education</td>
            <td><div align="left">
              <select name="edu" class="forminput" id="edu" style="width:215px;">
                <option value="Any" selected="selected">Any</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Masters">Masters</option>
                <option value="Doctorate">Doctorate</option>
                <option value="Diploma">Diploma</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Associates degree">Associates degree</option>
                <option value="Honours degree">Honours degree</option>
                <option value="Trade school">Trade school</option>
                <option value="High school">High school</option>
                <option value="Less than high school">Less than high school</option>
              </select>
            </div></td>
          </tr>
          <tr>
            <td>Occupation</td>
            <td><div align="left">
              <select name="occu" class="forminput" id="occu" style="width:215px;">
               <option value="Any" selected="selected">Any</option>
                <option value="Not working">Not working</option>
                <option value="Non-mainstream professional">Non-mainstream professional</option>
                <option value="Accountant">Accountant</option>
                <option value="Acting Professional">Acting Professional</option>
                <option value="Actor">Actor</option>
                <option value="Administration Professional">Administration Professional</option>
                <option value="Advertising Professional">Advertising Professional</option>
                <option value="Air Hostess">Air Hostess</option>
                <option value="Architect">Architect</option>
                <option value="Artisan">Artisan</option>
                <option value="Audiologist">Audiologist</option>
                <option value="Banker">Banker</option>
                <option value="Beautician">Beautician</option>
                <option value="Biologist / Botanist">Biologist / Botanist</option>
                <option value="Business Person">Business Person</option>
                <option value="Chartered Accountant">Chartered Accountant</option>
                <option value="Civil Engineer">Civil Engineer</option>
                <option value="Clerical Official">Clerical Official</option>
                <option value="Commercial Pilot">Commercial Pilot</option>
                <option value="Company Secretary">Company Secretary</option>
                <option value="Computer Professional">Computer Professional</option>
                <option value="Consultant">Consultant</option>
                <option value="Contractor">Contractor</option>
                <option value="Cost Accountant">Cost Accountant</option>
                <option value="Creative Person">Creative Person</option>
                <option value="Customer Support Professional">Customer Support Professional</option>
                <option value="Defense Employee">Defense Employee</option>
                <option value="Dentist">Dentist</option>
                <option value="Designer">Designer</option>
                <option value="Doctor">Doctor</option>
                <option value="Economist">Economist</option>
                <option value="Engineer">Engineer</option>
                <option value="Engineer (Mechanical)">Engineer (Mechanical)</option>
                <option value="Engineer (Project)">Engineer (Project)</option>
                <option value="Entertainment Professional">Entertainment Professional</option>
                <option value="Event Manager">Event Manager</option>
                <option value="Executive">Executive</option>
                <option value="Factory worker">Factory worker</option>
                <option value="Farmer">Farmer</option>
                <option value="Fashion Designer">Fashion Designer</option>
                <option value="Finance Professional">Finance Professional</option>
                <option value="Flight Attendant">Flight Attendant</option>
                <option value="Government Employee">Government Employee</option>
                <option value="Health Care Professional">Health Care Professional</option>
                <option value="Home Maker">Home Maker</option>
                <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>
                <option value="Human Resources Professional">Human Resources Professional</option>
                <option value="Interior Designer">Interior Designer</option>
                <option value="Investment Professional">Investment Professional</option>
                <option value="IT / Telecom Professional">IT / Telecom Professional</option>
                <option value="Journalist">Journalist</option>
                <option value="Lawyer">Lawyer</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Legal Professional">Legal Professional</option>
                <option value="Manager">Manager</option>
                <option value="Marketing Professional">Marketing Professional</option>
                <option value="Media Professional">Media Professional</option>
                <option value="Medical Professional">Medical Professional</option>
                <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                <option value="Merchant Naval Officer">Merchant Naval Officer</option>
                <option value="Nurse">Nurse</option>
                <option value="Occupational Therapist">Occupational Therapist</option>
                <option value="Optician">Optician</option>
                <option value="Pharmacist">Pharmacist</option>
                <option value="Physician Assistant">Physician Assistant</option>
                <option value="Physicist">Physicist</option>
                <option value="Physiotherapist">Physiotherapist</option>
                <option value="Pilot">Pilot</option>
                <option value="Politician">Politician</option>
                <option value="Production professional">Production professional</option>
                <option value="Professor">Professor</option>
                <option value="Psychologist">Psychologist</option>
                <option value="Public Relations Professional">Public Relations Professional</option>
                <option value="Real Estate Professional">Real Estate Professional</option>
                <option value="Research Scholar">Research Scholar</option>
                <option value="Retired Person">Retired Person</option>
                <option value="Retail Professional">Retail Professional</option>
                <option value="Sales Professional">Sales Professional</option>
                <option value="Scientist">Scientist</option>
                <option value="Self-employed Person">Self-employed Person</option>
                <option value="Social Worker">Social Worker</option>
                <option value="Software Consultant">Software Consultant</option>
                <option value="Sportsman">Sportsman</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                <option value="Technician">Technician</option>
                <option value="Training Professional">Training Professional</option>
                <option value="Transportation Professional">Transportation Professional</option>
                <option value="Veterinary Doctor">Veterinary Doctor</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Writer">Writer</option>
                <option value="Zoologist">Zoologist</option>
              </select>
            </div></td>
          </tr>
          <tr>
            <td>Country Living in </td>
            <td><div align="left"><span class="forminput">
              <select name="country" class="forminput" id="country" style="width:215px;">
			  <option value="Any" selected="selected">Any</option>
			  <option value="India">India</option>
                <option>USA</option>
                <option>United Kingdom</option>
                <option>United Arab Emirates</option>
                <option>Canada</option>
                <option>Australia</option>
                <option >Pakistan</option>
                <option>Saudi Arabia</option>
                <option>Kuwait</option>
                <option>South Africa</option>
                <option>Afghanistan</option>
                <option>Albania</option>
                <option>Algeria</option>
                <option>American Samoa</option>
                <option>Andorra</option>
                <option>Angola</option>
                <option>Anguilla</option>
                <option>Antigua &amp; Barbuda</option>
                <option>Argentina</option>
                <option>Armenia</option>
                <option>Australia</option>
                <option>Austria</option>
                <option>Azerbaijan</option>
                <option>Bahamas</option>
                <option>Bahrain</option>
                <option>Bangladesh</option>
                <option>Barbados</option>
                <option>Belarus</option>
                <option>Belgium</option>
                <option>Belize</option>
                <option>Bermuda</option>
                <option>Bhutan</option>
                <option>Bolivia</option>
                <option>Bosnia and Herzegovina</option>
                <option>Botswana</option>
                <option>Brazil</option>
                <option>Brunei</option>
                <option>Bulgaria</option>
                <option>Burkina Faso</option>
                <option>Burundi</option>
                <option>Cambodia</option>
                <option>Cameroon</option>
                <option>Canada</option>
                <option>Cape Verde</option>
                <option>Cayman Islands</option>
                <option>Central African Republic</option>
                <option>Chad</option>
                <option>Chile</option>
                <option>China</option>
                <option>Colombia</option>
                <option>Comoros</option>
                <option>Congo</option>
                <option>Congo (DRC)</option>
                <option>Cook Islands</option>
                <option>Costa Rica</option>
                <option>Cote d'Ivoire</option>
                <option>Croatia (Hrvatska)</option>
                <option>Cuba</option>
                <option>Cyprus</option>
                <option>Czech Republic</option>
                <option>Denmark</option>
                <option>Djibouti</option>
                <option>Dominica</option>
                <option>Dominican Republic</option>
                <option>East Timor</option>
                <option>Ecuador</option>
                <option>Egypt</option>
                <option>El Salvador</option>
                <option>Equatorial Guinea</option>
                <option>Eritrea</option>
                <option>Estonia</option>
                <option>Ethiopia</option>
                <option>Falkland Islands</option>
                <option>Faroe Islands</option>
                <option>Fiji Islands</option>
                <option>Finland</option>
                <option>France</option>
                <option>French Guiana</option>
                <option>French Polynesia</option>
                <option>Gabon</option>
                <option>Gambia</option>
                <option>Georgia</option>
                <option>Germany</option>
                <option>Ghana</option>
                <option>Gibraltar</option>
                <option>Greece</option>
                <option>Greenland</option>
                <option>Grenada</option>
                <option>Guadeloupe</option>
                <option>Guam</option>
                <option>Guatemala</option>
                <option>Guinea</option>
                <option>Guinea-Bissau</option>
                <option>Guyana</option>
                <option>Haiti</option>
                <option>Honduras</option>
                <option>Hong Kong SAR</option>
                <option>Hungary</option>
                <option>Iceland</option>
                <option>India</option>
                <option>Indonesia</option>
                <option>Iran</option>
                <option>Iraq</option>
                <option>Ireland</option>
                <option>Israel</option>
                <option>Italy</option>
                <option>Jamaica</option>
                <option>Japan</option>
                <option>Jordan</option>
                <option>Kazakhstan</option>
                <option>Kenya</option>
                <option>Kiribati</option>
                <option>Korea</option>
                <option>Kuwait</option>
                <option>Kyrgyzstan</option>
                <option>Laos</option>
                <option>Latvia</option>
                <option>Lebanon</option>
                <option>Lesotho</option>
                <option>Liberia</option>
                <option>Libya</option>
                <option>Liechtenstein</option>
                <option>Lithuania</option>
                <option>Luxembourg</option>
                <option>Macao SAR</option>
                <option>Macedonia</option>
                <option>Madagascar</option>
                <option>Malawi</option>
                <option>Malaysia</option>
                <option>Maldives</option>
                <option>Mali</option>
                <option>Malta</option>
                <option>Martinique</option>
                <option>Mauritania</option>
                <option>Mauritius</option>
                <option>Mayotte</option>
                <option>Mexico</option>
                <option>Micronesia</option>
                <option>Moldova</option>
                <option>Monaco</option>
                <option>Mongolia</option>
                <option>Montserrat</option>
                <option>Morocco</option>
                <option>Mozambique</option>
                <option>Myanmar</option>
                <option>Namibia</option>
                <option>Nauru</option>
                <option>Nepal</option>
                <option>Netherlands</option>
                <option>Netherlands Antilles</option>
                <option>New Caledonia</option>
                <option>New Zealand</option>
                <option>Nicaragua</option>
                <option>Niger</option>
                <option>Nigeria</option>
                <option>Niue</option>
                <option>Norfolk Island</option>
                <option>North Korea</option>
                <option>Norway</option>
                <option>Oman</option>
                <option>Pakistan</option>
                <option>Panama</option>
                <option>Papua New Guinea</option>
                <option>Paraguay</option>
                <option>Peru</option>
                <option>Philippines</option>
                <option>Pitcairn Islands</option>
                <option>Poland</option>
                <option>Portugal</option>
                <option>Puerto Rico</option>
                <option>Qatar</option>
                <option>Reunion</option>
                <option>Romania</option>
                <option>Russia</option>
                <option>Rwanda</option>
                <option>Samoa</option>
                <option>San Marino</option>
                <option>Sao Tome and Principe</option>
                <option>Saudi Arabia</option>
                <option>Senegal</option>
                <option>Serbia and Montenegro</option>
                <option>Seychelles</option>
                <option>Sierra Leone</option>
                <option>Singapore</option>
                <option>Slovakia</option>
                <option>Slovenia</option>
                <option>Solomon Islands</option>
                <option>Somalia</option>
                <option>South Africa</option>
                <option>Spain</option>
                <option>Sri Lanka</option>
                <option>St. Helena</option>
                <option>St. Kitts and Nevis</option>
                <option>St. Lucia</option>
                <option>St. Pierre and Miquelon</option>
                <option>St. Vincent &amp; Grenadines</option>
                <option>Sudan</option>
                <option>Suriname</option>
                <option>Swaziland</option>
                <option>Sweden</option>
                <option>Switzerland</option>
                <option>Syria</option>
                <option>Taiwan</option>
                <option>Tajikistan</option>
                <option>Tanzania</option>
                <option>Thailand</option>
                <option>Togo</option>
                <option>Tokelau</option>
                <option>Tonga</option>
                <option>Trinidad and Tobago</option>
                <option>Tunisia</option>
                <option>Turkey</option>
                <option>Turkmenistan</option>
                <option>Turks and Caicos Islands</option>
                <option>Tuvalu</option>
                <option>Uganda</option>
                <option>Ukraine</option>
                <option>United Arab Emirates</option>
                <option>United Kingdom</option>
                <option>Uruguay</option>
                <option>USA</option>
                <option>Uzbekistan</option>
                <option>Vanuatu</option>
                <option>Venezuela</option>
                <option>Vietnam</option>
                <option>Virgin Islands</option>
                <option>Virgin Islands (British)</option>
                <option>Wallis and Futuna</option>
                <option>Yemen</option>
                <option>Yugoslavia</option>
                <option>Zambia</option>
                <option>Zimbabwe</option>
              </select>
            </span></div></td>
          </tr>
          
          <tr>
            <td><div align="left">Show <span class="Alert">*</span></div></td>
            <td><div align="left">
              <input name="photo" type="checkbox" id="photo" value="photo">
            Profiles with Photo</div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left"></div></td>
            <td><div align="left">
              <input name="Submit" type="image" value="Submit" src="pics/search-button.gif" onClick="return validate3();">
            </div></td>
          </tr>
        </table>
		</form>
		</td>
        </tr>
      
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table></TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
