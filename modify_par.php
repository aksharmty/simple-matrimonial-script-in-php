<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>

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
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","adar","agar Brahmin","aidu","air","air Vaniya","ambiar","epali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Born Again","Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","adar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Does not matter","Does not matter",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Does not matter"?"Does not matter":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

	}

	</script>



<BODY class="body">
<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
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
<?php while($row = mysql_fetch_array($memcontrol)) { ?>
 
  
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Modify Profile    </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><br>

	  <form action="edit_par.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Partner Preference </span><span class="bodysg"><a href="modify_fam.php"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Looking for    : </td>
          <td width="78%"><select name="txtLooking" class="forminput" id="txtLooking" style="width:200px;">
            <option value="<? echo $row['Looking']; ?>"><? echo $row['Looking']; ?></option>
            <option value="Unmarried">Unmarried</option>
            <option value="Widow/Widower">Widow/Widower</option>
            <option value="Divorcee">Divorcee</option>
            <option value="Separated">Separated</option>
          </select></td>
        </tr>
        <tr>
          <td>Age   : </td>
          <td>From
            <input name="Fromage" type="text" class="forminput" id="Fromage"  value="<? echo $row['PE_FromAge']; ?>" size="2" maxlength="5">
&nbsp;to
<input name="Toage" type="text" class="forminput" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="<? echo $row['PE_ToAge']; ?>" size="2" maxlength="5" ></td>
        </tr>
        <tr>
          <td>Expectations : </td>
          <td><textarea name="txtPPE" cols="30" rows="5" id="txtPPE"><? echo $row['PartnerExpectations']; ?></textarea></td>
        </tr>
        <tr>
          <td>Country Living in   : </td>
          <td><span class="formselect">
            <select name="txtPcountry" class="forminput" id="txtPcountry" style="width:200px;">
              <option value="<? echo $row['PE_Countrylivingin']; ?>">&lt;? echo $row['PE_Countrylivingin']; ?&gt;</option>
              <option value="Does not Matter" selected>- Does not Matter -</option>
              <option>Pakistan</option>
              <option>USA</option>
              <option>United Kingdom</option>
              <option>United Arab Emirates</option>
              <option>Canada</option>
              <option>Australia</option>
              <option selected>India</option>
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
          </span></td>
        </tr>
        <tr>
          <td>Height  : </td>
          <td><select name="txtPHeight" class="forminput" id="txtPHeight" style="width:200px;">
		   <option value="<? echo $row['PE_Height']; ?>"><? echo $row['PE_Height']; ?></option>
            <option value="Does not Matter" selected>- Does not Matter -</option>
            <option value="Below 4ft">Below 4ft</option>
            <option value="4-6">4ft 6in</option>
            <option value="4-7">4ft 7in</option>
            <option value="4-8">4ft 8in</option>
            <option value="4-9">4ft 9in</option>
            <option value="4-10">4ft 10in</option>
            <option value="4-11">4ft 11in</option>
            <option value="5">5ft</option>
            <option value="5-1">5ft 1in</option>
            <option value="5-2">5ft 2in</option>
            <option value="5-3">5ft 3in</option>
            <option value="5-4">5ft 4in</option>
            <option value="5-5">5ft 5in</option>
            <option value="5-6">5ft 6in</option>
            <option value="5-7">5ft 7in</option>
            <option value="5-8">5ft 8in</option>
            <option value="5-9">5ft 9in</option>
            <option value="5-10">5ft 10in</option>
            <option value="5-11">5ft 11in</option>
            <option value="6">6ft</option>
            <option value="6-1">6ft 1in</option>
            <option value="6-2">6ft 2in</option>
            <option value="6-3">6ft 3in</option>
            <option value="6-4">6ft 4in</option>
            <option value="6-5">6ft 5in</option>
            <option value="6-6">6ft 6in</option>
            <option value="6-7">6ft 7in</option>
            <option value="6-8">6ft 8in</option>
            <option value="6-9">6ft 9in</option>
            <option value="6-10">6ft 10in</option>
            <option value="6-11">6ft 11in</option>
            <option value="7">7ft</option>
            <option value="Above 7ft">Above 7ft</option>
          </select></td>
        </tr>
        
        <tr>
          <td>Complexion  : </td>
          <td><select name="txtPComplexion" class="forminput" id="txtPComplexion" style="width:200px;">
		  <option value="<? echo $row['PE_Complexion']; ?>"><? echo $row['PE_Complexion']; ?></option>
            <option value="Does not Matter" selected>- Does not Matter -</option>
            <option value="Very Fair">Very Fair</option>
            <option value="Fair">Fair</option>
            <option value="Wheatish">Wheatish</option>
            <option value="Wheatish Medium">Wheatish Medium</option>
            <option value="Wheatish Brown">Wheatish Brown</option>
            <option value="Dark">Dark</option>
          </select></td>
        </tr>
        <tr>
          <td>Education : </td>
          <td><select name="txtPEdu" class="forminput" id="txtPEdu" style="width:200px;">
		   <option value="<? echo $row['PE_Education']; ?>"><? echo $row['PE_Education']; ?></option>
            <option value="Does not Matter" selected>- Does not Matter -</option>
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
          </select></td>
        </tr>
        <tr>
          <td>Religion  :</td>
          <td><select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:200px;">
            <option value="---" selected>- Select -</option>
			 <option value="<? echo $row['PE_Religion']; ?>"><? echo $row['PE_Religion']; ?></option>
            <option>Hindu</option>
            <option>Christian</option>
            <option>Muslim</option>
            <option>Sikh</option>
            <option>Jain</option>
            <option>Parsi</option>
            <option>Buddhist</option>
            <option>Bahai</option>
            <option>Inter-Religion</option>
            <option>Others</option>
          </select></td>
        </tr>
        <tr>
          <td>Caste  : </td>
          <td><select name="caste" class="forminput" id="caste" style="width:200px;">
		   <option value="<? echo $row['PE_Caste']; ?>"><? echo $row['PE_Caste']; ?></option>
          </select></td>
        </tr>
        <tr>
          <td>Resident Status  :</td>
          <td><select name="txtPReS" class="forminput" id="txtCitizen" style="width:200px;">
		   <option value="<? echo $row['PE_Residentstatus']; ?>"><? echo $row['PE_Residentstatus']; ?></option>
            <option value="Does not Matter" selected>- Does not Matter -</option>
            <option value="Citizen">Citizen</option>
            <option value="Permanent Resident">Permanent Resident</option>
            <option value="Student Visa">Student Visa</option>
            <option value="Temporary Visa">Temporary Visa</option>
            <option value="Work permit">Work permit</option>
          </select></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">
            <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	  </form>
	   </td>
    </tr>
  </table>
  <? } ?>
  <p>&nbsp;</p></TD>
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
