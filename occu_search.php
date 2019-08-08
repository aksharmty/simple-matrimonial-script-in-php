<?php include("config.php"); ?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css"></HEAD>
<SCRIPT language="javascript">
	function validate()
  {
  		 if ( MatriForm.txtSAge.value == "" )
		 {
			alert( "Please enter minimum age." );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtSAge.value < 18 )
		 {
			alert( "Minimum age should be above 18" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		
		if ( MatriForm.txtSAge.value > 40 )
		 {
			alert( "Minimum age should not be above 40" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtEAge.value == "" )
		 {
			alert( "Please enter maximum Age" );
			MatriForm.ta.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value > 40 )
		 {
			alert( "Maximum Age should be below 40" );
			MatriForm.txtEAge.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value < 18 )
		 {
			alert( "Maximum Age should not be below 18" );
			MatriForm.txtEAge.focus( );
			return false;
		}
	
		if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Please select Religion." );	
			MatriForm.religion.focus( );
			return false;
		}
		
			
}

 </SCRIPT>
 
 


		
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
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","Nadar","Nagar Brahmin","Naidu","Nair","Nair Vaniya","Nambiar","Nepali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","Nadar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


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
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Occupational Search </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="5" cellspacing="4" id="content">
      <tr>
        <td colspan="2"><p align="justify"><img src="pics/searchlense.gif" width="28" height="28" align="left"> Search based on a Occupation criteria one would look for in a   partner. Results can be viewed as Thumbnail View, Full View. If you like a profile you can Express Interest or Send Mail.</p></td>
      </tr>
      
      <tr>
        <td colspan="2">
		
		<form action="occusearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
		
		<table width="100%" border="0" cellpadding="3" cellspacing="2">
          <tr>
            <td height="20" colspan="2"><strong><a href="#">Reach out to your spouse with a click of the mouse</a></strong></td>
          </tr>
          <tr>
            <td width="25%"><div align="left">Looking for </div></td>
            <td width="75%"><div align="left">
              <input name="txtGender" type="radio" class="forminput" value="Male">
Male 
					&nbsp;
                    <input name="txtGender" type="radio" class="forminput" value="Female" checked>
Female </div></td>
          </tr>
          <tr>
            <td><div align="left">Age</div></td>
            <td><div align="left">From
                <INPUT name="txtSAge" class="forminput" id="txtSAge" value="20" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">
&nbsp; to &nbsp;
<INPUT name="txtEAge" class="forminput" id="txtEAge" value="30" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >
years </div></td>
          </tr>
          
          <tr>
            <td><div align="left">Occupation</div></td>
            <td><div align="left">
              <select name="txtOccu" class="forminput" id="txtOccu" style="width:180px;">
                <option value="Any" selected>Any</option>
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
                <option value="Hotel &amp; Restaurant Professional">Hotel &amp; Restaurant Professional</option>
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
            <td><div align="left">Show</div></td>
            <td><div align="left">
              <input name="txtphoto" type="checkbox" id="txtphoto" value="Show profiles with Photo">
            Profiles with Photo </div></td>
          </tr>
          <tr>
            <td><div align="left"></div></td>
            <td><div align="left">
              <input name="Submit" type="image" value="Submit" src="pics/search-button.gif">
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
