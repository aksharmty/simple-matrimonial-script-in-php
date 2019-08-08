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

<script language="javascript" src="includes/timepicker.js"></script> 
<SCRIPT language=javascript src="city.js"></SCRIPT>
<SCRIPT language=javascript src="category.js"></SCRIPT>


<script language="JavaScript">
function ValidateNo( NumStr, String ) 
	{
 		for( var Idx = 0; Idx < NumStr.length; Idx ++ )
 		{
			 var Char = NumStr.charAt( Idx );
			 var Match = false;

				for( var Idx1 = 0; Idx1 < String.length; Idx1 ++) 
				{
					 if( Char == String.charAt( Idx1 ) ) 
					 Match = true;
				}
				
				if ( !Match ) 
					return false;
 		}

        	return true;
	}


	function ValidateEmail( Email )
	{
		var atCharPresent = false;
		var dotPresent = false;

		for ( var Idx = 0; Idx < Email.length; Idx++ )
		{
			if ( Email.charAt ( Idx ) == '@' )
				atCharPresent = true;
			if ( Email.charAt ( Idx ) == '.' )
				dotPresent = true;
		}

		if ( !atCharPresent || !dotPresent )
			return false;

		return true;
	}

	
function Validate()
	{
	var MatriFormbasic = this.document.MatriFormbasic;
		// Check the Name field
		if ( MatriFormbasic.txtName.value == "" )
		{
			alert( "Please Enter your name." );
			MatriFormbasic.txtName.focus( );
			return false;
		}
		
	
		// Check E-mail field
		if ( MatriFormbasic.EMAIL.value == "" )
		{
			alert( "Please enter a valid E-mail ID." );
			MatriFormbasic.EMAIL.focus( );
			return false;
		}
		else
		{
			if ( !ValidateEmail( MatriFormbasic.EMAIL.value ) )
			{
				alert( "Invalid E-mail " + MatriFormbasic.EMAIL.value );
				MatriFormbasic.EMAIL.focus( );
				return false;
			}
			for ( var Idx = 0; Idx < MatriFormbasic.EMAIL.value.length; Idx++ )
			{
				if ( MatriFormbasic.EMAIL.value.charAt(Idx) == '	' 
					|| MatriFormbasic.EMAIL.value.charAt(Idx) == ' ' 
					|| MatriFormbasic.EMAIL.value.charAt(Idx) == ',' 
					|| MatriFormbasic.EMAIL.value.charAt(Idx) == '/' 
					|| MatriFormbasic.EMAIL.value.charAt(Idx) == '\\' 
					|| MatriFormbasic.EMAIL.value.charAt(Idx) == ';' )
				{
					alert( "Blanks or other invalid characters are not allowed in the e-mail ID.\n Please enter only one E-mail ID." );
					MatriFormbasic.EMAIL.focus( );
					return false;
				}
			}
		}

		if ( MatriFormbasic.EMAILconfirm.value != "" && MatriFormbasic.EMAILconfirm.value == "" )
		{
			alert( "Please confirm E-mail address" );
			MatriFormbasic.EMAILconfirm.focus( );
			return false;
		}

		if ( MatriFormbasic.EMAIL.value != MatriFormbasic.EMAILconfirm.value )
		{
			alert( "E-mail address did not match, Email and Confirm Email Should be match." );
			MatriFormbasic.EMAILconfirm.focus( );
			return false;
		}

		
return true;
	}
</script>


<script language="JavaScript">

function caste_disable(obj){
	if(obj.options[obj.selectedIndex].text != 'Hindu' &&
		obj.options[obj.selectedIndex].text != 'Muslim' &&
		obj.options[obj.selectedIndex].text != 'Christian' &&
		obj.options[obj.selectedIndex].text != 'Jain' &&
		obj.options[obj.selectedIndex].text != 'Sikh'){
	document.MatriFormbasic.caste.disabled = true;
	}
	else {
		document.MatriFormbasic.caste.disabled = false;
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
    <style type="text/css">
<!--
.style1 {	font-size: 10px;
	color: #333333;
}
.style2 {color: #FF0000}
-->
    </style>
</HEAD>
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
      <td>
	  <form action="edit_basic.php" method="post" name="MatriFormbasic" id="MatriFormbasic" onSubmit="return Validate()" >
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q1" id="q1"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "bisuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}
else if ($StrAction == "emailtaken")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Email Id you entered already taken. Please enter a New Email.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}
?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Basic Information</span><span class="bodysg">&nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%"><span class="Alert">* </span>Name</td>
          <td width="78%"><input name="txtName" type="text" class="forminput" id="txtName" style="width:215px;" value="<? echo $row['Name']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Mother tongue </td>
          <td><span style="HEIGHT: 24px">
            <select name="Language" class="forminput" id="Language" maxlength="2" style="width:215px;">
              <option value="<? echo $row['Language']; ?>"><? echo $row['Language']; ?></option>
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
          </span></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Religion</td>
          <td><select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:215px;">
              <option value="<? echo $row['Religion']; ?>" selected><? echo $row['Religion']; ?></option>
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
          <td><span class="Alert">* </span>Caste</td>
          <td><select name="caste" class="forminput" id="caste" style="width:215px;">
		  <option value="<? echo $row['Caste']; ?>" selected><? echo $row['Caste']; ?></option>
                                                  </select></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;Sub Caste </td>
          <td><input name="txtSubcaste" type="text" class="forminput" id="txtSubcaste" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();" value="<? echo $row['Subcaste']; ?>" size="40" maxlength="50"></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Email</td>
          <td><input name="EMAIL" type="text" class="forminput" id="EMAIL" style="width:215px;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Confirm Email</td>
          <td><input name="EMAILconfirm" type="text" class="forminput" id="EMAILconfirm" style="width:215px;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40"></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
      </table>
	  </form>
	  <br>
	  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td bgcolor="#6ACDF7"></td>
        </tr>
      </table>
	  <br>
	  <form action="edit_socio.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q2" id="q2"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "srsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Socio Religious Attributes</span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Gothra(m)</td>
          <td width="78%"><input name="txtGothra" type="text" class="forminput" id="txtGothra" style="width:215px;" value="<? echo $row['Gothram']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td>Star(Nakshatra)</td>
          <td><span style="DISPLAY: block">
            <select name="txtStar" class="forminput" id="txtStar" style="width:215px;">
			 <option value="<? echo $row['Star']; ?>" selected><? echo $row['Star']; ?></option>
              <option value="Does not matter">Does not matter</option>
              <option value="ASHWINI">ASHWINI</option>
              <option value="BHARANI">BHARANI</option>
              <option value="KRITIKA">KRITIKA</option>
              <option value="ROHINI">ROHINI</option>
              <option value="MRIGASHIRA">MRIGASHIRA</option>
              <option value="AARDRA">AARDRA</option>
              <option value="PUNARVASU">PUNARVASU</option>
              <option value="PUSHYA">PUSHYA</option>
              <option value="AASLESHA">AASLESHA</option>
              <option value="MAGHA">MAGHA</option>
              <option value="PURVA PHALGUNI">PURVA PHALGUNI</option>
              <option value="UTTARA PHALGUNI">UTTARA PHALGUNI</option>
              <option value="HASTA">HASTA</option>
              <option value="CHITRA">CHITRA</option>
              <option value="SWATI">SWATI</option>
              <option value="VISHAKHA">VISHAKHA</option>
              <option value="ANURADHA">ANURADHA</option>
              <option value="JYESHTHA">JYESHTHA</option>
              <option value="MOOLA">MOOLA</option>
              <option value="POORVAASHADHA">POORVAASHADHA</option>
              <option value="UTTARAASHADHA">UTTARAASHADHA</option>
              <option value="SHRAVANI">SHRAVANI</option>
              <option value="DHANISTHA">DHANISTHA</option>
              <option value="SHATABHISHA">SHATABHISHA</option>
              <option value="PURVA BHADRAPADA">PURVA BHADRAPADA</option>
              <option value="UTTARA BHADRAPADA">UTTARA BHADRAPADA</option>
              <option value="REVATI">REVATI</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td>Moonsign</td>
          <td><select name="txtMoon" class="forminput" id="txtMoon" style="width:215px;">
		   <option value="<? echo $row['Moonsign']; ?>" selected><? echo $row['Moonsign']; ?></option>
            <option value="Does not matter">Does not matter</option>
            <option value="Mesh (Aries)">Mesh (Aries)</option>
            <option value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
            <option value="Mithun (Gemini)">Mithun (Gemini)</option>
            <option value="Karka (Cancer)">Karka (Cancer)</option>
            <option value="Simha (Leo)">Simha (Leo)</option>
            <option value="Kanya (Virgo)">Kanya (Virgo)</option>
            <option value="Tula (Libra)">Tula (Libra)</option>
            <option value="Vrischika (Scorpio)">Vrischika (Scorpio)</option>
            <option value="Dhanu (Sagittarious)">Dhanu (Sagittarious)</option>
            <option value="Makar (Capricorn)">Makar (Capricorn)</option>
            <option value="Kumbha (Aquarious)">Kumbha (Aquarious)</option>
            <option value="Meen (Pisces)">Meen (Pisces)</option>
          </select></td>
        </tr>
        <tr>
          <td>Horoscope Match </td>
          <td><select name="txtHorosMatch" class="forminput" id="txtHorosMatch" style="width:215px;">
            <option value="<? echo $row['Horosmatch']; ?>"><? echo $row['Horosmatch']; ?></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
            <option value="Does not matter">Does not matter</option>
                    </select></td>
        </tr>
        <tr>
          <td>Manglik</td>
          <td><select name="txtManglik" class="forminput" id="txtManglik" style="width:215px;">
            <option value="<? echo $row['Manglik']; ?>"><? echo $row['Manglik']; ?></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
            <option value="Do not know">Do not know</option>
            <option value="Not applicable">Not applicable</option>
                    </select></td>
        </tr>
        <tr>
          <td><span class="bodywk">Place of Birth </span></td>
          <td><input name="txtPb" type="text" class="forminput" id="txtPb" style="width:215px;" value="<? echo $row['POB']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td><span class="bodywk">Time of Birth </span></td>
          <td><table cellpadding="0" cellspacing="0">
            <tr valign=center>
              <td><div align="left">
                  <input name="txtTb" type='text' class="forminput" id='timepicker1' onBlur="validateDatePicker(this)" value='<? echo $row['TOB']; ?>' size=8 maxlength=8>
              </div></td>
              <td><div align="left"><img src="timePickerImages/timepicker.gif" alt="Pick a Time!" width="30" height="20" border="0" style="cursor:hand" onClick="selectTime(this,timepicker1)"></div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit2" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
      </table>
	  </form>
	  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td bgcolor="#6ACDF7"></td>
        </tr>
      </table>
	  <br>
	  <br>
	  <form action="edit_eduocc.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q3" id="q3"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "edusuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Education and Occupation</span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%"><span class="Alert">* </span>Education</td>
          <td width="78%"><select name="txtEdu" class="forminput" id="txtEdu" style="width:215px;">
            <option value="<? echo $row['Education']; ?>" selected><? echo $row['Education']; ?></option>
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
          <td><span class="Alert">* </span>Edu Details </td>
          <td><select name="txtEdudetails" class="forminput" id="txtEdudetails" style="width:215px;">
            <option value="<? echo $row['EducationDetails']; ?>" selected><? echo $row['EducationDetails']; ?></option>
            <option value="Advertising/ Marketing">Advertising/ Marketing</option>
            <option value="Administrative services">Administrative services</option>
            <option value="Architecture">Architecture</option>
            <option value="Armed Forces">Armed Forces</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
            <option value="Computers/ IT">Computers/ IT</option>
            <option value="Education">Education</option>
            <option value="Engineering/ Technology">Engineering/ Technology</option>
            <option value="Fashion">Fashion</option>
            <option value="Finance">Finance</option>
            <option value="Fine Arts">Fine Arts</option>
            <option value="Home Science">Home Science</option>
            <option value="Journalism/Media">Journalism/Media</option>
            <option value="Law">Law</option>
            <option value="Management">Management</option>
            <option value="Medicine">Medicine</option>
            <option value="Nursing/ Health Sciences">Nursing/ Health Sciences</option>
            <option value="Office administration">Office administration</option>
            <option value="Science">Science</option>
            <option value="Shipping">Shipping</option>
            <option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert"> </span><span class="Alert"> </span><span class="bodysg" >&nbsp;</span>&nbsp;Annual income </td>
          <td><select name="txtIncome" class="forminput" id="txtIncome" style="width:215px;">
            <option value="<? echo $row['Occupation']; ?>" selected><? echo $row['Occupation']; ?></option>
            <optgroup label=""></optgroup>
            <optgroup label="Income in Indian Rupees">
            <option value="Under   Rs.50,000">Under   Rs.50,000</option>
            <option value="Rs.50,001 - 1,00,000">Rs.50,001 - 1,00,000</option>
            <option value="Rs.1,00,001 - 2,00,000">Rs.1,00,001 - 2,00,000</option>
            <option value="Rs.2,00,001 -   3,00,000">Rs.2,00,001 -   3,00,000</option>
            <option value="Rs.3,00,001 - 4,00,000">Rs.3,00,001 - 4,00,000</option>
            <option value="Rs.4,00,001 - 5,00,000">Rs.4,00,001 - 5,00,000</option>
            <option value="Rs.5,00,001 -   7,50,000">Rs.5,00,001 -   7,50,000</option>
            <option value="Rs.7,50,001 - 10,00,000">Rs.7,50,001 - 10,00,000</option>
            <option value="Rs.10,00,001 and above">Rs.10,00,001 and above</option>
            </optgroup>
            <optgroup label=""></optgroup>
            <optgroup label="Income in US Dollars">
            <option value="Under $25,000">Under $25,000</option>
            <option value="$25,001 - 50,000">$25,001 - 50,000</option>
            <option value="$50,001 - 75,000">$50,001 - 75,000</option>
            <option value="$75,001 - 100,000">$75,001 - 100,000</option>
            <option value="$100,001 - 150,000">$100,001 - 150,000</option>
            <option value="$150,001 -   200,000">$150,001 -   200,000</option>
            <option value="$200,001 and above">$200,001 and above</option>
            </optgroup>
            <optgroup label=""></optgroup>
            <option value="No Income">No Income</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> Occupation </td>
          <td><select name="txtOccu" class="forminput" id="txtOccu" style="width:215px;">
            <option value="<? echo $row['Annualincome']; ?>" selected><? echo $row['Annualincome']; ?></option>
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
            <option value="Physicist"></option>
            <option value="Physiotherapist"></option>
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
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Employed in </td>
          <td><select name="txtEmp" class="forminput" id="txtEmp" style="width:215px;">
            <option value="<? echo $row['Employedin']; ?>" selected><? echo $row['Employedin']; ?></option>
            <option value="Business">Business</option>
            <option value="Defence">Defence</option>
            <option value="Government">Government</option>
            <option value="Not Employed in">Not Employed in</option>
            <option value="Private">Private</option>
            <option value="Others">Others</option>
          </select></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit22" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
      </table>
	  </form>
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>
	  <br>
	  <form action="edit_phy.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q4"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "physuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Physical Attributes </span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%"><span class="Alert">*</span> Height </td>
          <td width="78%"><select name="txtHeight" class="forminput" id="txtHeight" style="width:215px;">
           <option value="<? echo $row['Height']; ?>" selected><? echo $row['Height']; ?></option>
            <option value="Below 4ft">Below 4ft</option>
            <option value="4ft 6in">4ft 6in</option>
            <option value="4ft 7in">4ft 7in</option>
            <option value="4ft 8in">4ft 8in</option>
            <option value="4ft 9in">4ft 9in</option>
            <option value="4ft 10in">4ft 10in</option>
            <option value="4ft 11in">4ft 11in</option>
            <option value="5ft">5ft</option>
            <option value="5ft 1in">5ft 1in</option>
            <option value="5ft 2in">5ft 2in</option>
            <option value="5ft 3in">5ft 3in</option>
            <option value="5ft 4in">5ft 4in</option>
            <option value="5ft 5in">5ft 5in</option>
            <option value="5ft 6in">5ft 6in</option>
            <option value="5ft 7in">5ft 7in</option>
            <option value="5ft 8in">5ft 8in</option>
            <option value="5ft 9in">5ft 9in</option>
            <option value="5ft 10in">5ft 10in</option>
            <option value="5ft 11in">5ft 11in</option>
            <option value="6ft">6ft</option>
            <option value="6ft 1in">6ft 1in</option>
            <option value="6ft 2in">6ft 2in</option>
            <option value="6ft 3in">6ft 3in</option>
            <option value="6ft 4in">6ft 4in</option>
            <option value="6ft 5in">6ft 5in</option>
            <option value="6ft 6in">6ft 6in</option>
            <option value="6ft 7in">6ft 7in</option>
            <option value="6ft 8in">6ft 8in</option>
            <option value="6ft 9in">6ft 9in</option>
            <option value="6ft 10in">6ft 10in</option>
            <option value="6ft 11in">6ft 11in</option>
            <option value="7ft">7ft</option>
            <option value="Above 7ft">Above 7ft</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> Weight </td>
          <td><select name="txtWeight" class="forminput" id="txtWeight" style="width:215px;">
            <option value="<? echo $row['Weight']; ?>" selected><? echo $row['Weight']; ?></option>
            <option value="41 kg">41 kg</option>
            <option value="42 kg">42 kg</option>
            <option value="43 kg">43 kg</option>
            <option value="44 kg">44 kg</option>
            <option value="45 kg">45 kg</option>
            <option value="46 kg">46 kg</option>
            <option value="47 kg">47 kg</option>
            <option value="48 kg">48 kg</option>
            <option value="49 kg">49 kg</option>
            <option value="50 kg">50 kg</option>
            <option value="51 kg">51 kg</option>
            <option value="52 kg">52 kg</option>
            <option value="53 kg">53 kg</option>
            <option value="54 kg">54 kg</option>
            <option value="55 kg">55 kg</option>
            <option value="56 kg">56 kg</option>
            <option value="57 kg">57 kg</option>
            <option value="58 kg">58 kg</option>
            <option value="59 kg">59 kg</option>
            <option value="60 kg">60 kg</option>
            <option value="61 kg">61 kg</option>
            <option value="62 kg">62 kg</option>
            <option value="63 kg">63 kg</option>
            <option value="64 kg">64 kg</option>
            <option value="65 kg">65 kg</option>
            <option value="66 kg">66 kg</option>
            <option value="67 kg">67 kg</option>
            <option value="68 kg">68 kg</option>
            <option value="69 kg">69 kg</option>
            <option value="70 kg">70 kg</option>
            <option value="71 kg">71 kg</option>
            <option value="72 kg">72 kg</option>
            <option value="73 kg">73 kg</option>
            <option value="74 kg">74 kg</option>
            <option value="75 kg">75 kg</option>
            <option value="76 kg">76 kg</option>
            <option value="77 kg">77 kg</option>
            <option value="78 kg">78 kg</option>
            <option value="79 kg">79 kg</option>
            <option value="80 kg">80 kg</option>
            <option value="81 kg">81 kg</option>
            <option value="82 kg">82 kg</option>
            <option value="83 kg">83 kg</option>
            <option value="84 kg">84 kg</option>
            <option value="85 kg">85 kg</option>
            <option value="86 kg">86 kg</option>
            <option value="87 kg">87 kg</option>
            <option value="88 kg">88 kg</option>
            <option value="89 kg">89 kg</option>
            <option value="90 kg">90 kg</option>
            <option value="91 kg">91 kg</option>
            <option value="92 kg">92 kg</option>
            <option value="93 kg">93 kg</option>
            <option value="94 kg">94 kg</option>
            <option value="95 kg">95 kg</option>
            <option value="96 kg">96 kg</option>
            <option value="97 kg">97 kg</option>
            <option value="98 kg">98 kg</option>
            <option value="99 kg">99 kg</option>
            <option value="100 kg">100 kg</option>
            <option value="101 kg">101 kg</option>
            <option value="102 kg">102 kg</option>
            <option value="103 kg">103 kg</option>
            <option value="104 kg">104 kg</option>
            <option value="105 kg">105 kg</option>
            <option value="106 kg">106 kg</option>
            <option value="107 kg">107 kg</option>
            <option value="108 kg">108 kg</option>
            <option value="109 kg">109 kg</option>
            <option value="110 kg">110 kg</option>
            <option value="111 kg">111 kg</option>
            <option value="112 kg">112 kg</option>
            <option value="113 kg">113 kg</option>
            <option value="114 kg">114 kg</option>
            <option value="115 kg">115 kg</option>
            <option value="116 kg">116 kg</option>
            <option value="117 kg">117 kg</option>
            <option value="118 kg">118 kg</option>
            <option value="119 kg">119 kg</option>
            <option value="120 kg">120 kg</option>
            <option value="121 kg">121 kg</option>
            <option value="122 kg">122 kg</option>
            <option value="123 kg">123 kg</option>
            <option value="124 kg">124 kg</option>
            <option value="125 kg">125 kg</option>
            <option value="126 kg">126 kg</option>
            <option value="127 kg">127 kg</option>
            <option value="128 kg">128 kg</option>
            <option value="129 kg">129 kg</option>
            <option value="130 kg">139 kg</option>
            <option value="132 kg">130 kg</option>
            <option value="131 kg">131 kg</option>
            <option value="132 kg">132 kg</option>
            <option value="133 kg">133 kg</option>
            <option value="134 kg">134 kg</option>
            <option value="135 kg">135 kg</option>
            <option value="136 kg">136 kg</option>
            <option value="137 kg">137 kg</option>
            <option value="138 kg">138 kg</option>
            <option value="139 kg">139 kg</option>
            <option value="140 kg">140 kg</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Blood Group </td>
          <td><select  name="txtBlood" class="forminput" id="txtBlood" style="width:215px;">
           <option value="<? echo $row['BloodGroup']; ?>" selected><? echo $row['BloodGroup']; ?></option>
            <option>A+</option>
            <option>A-</option>
            <option>A1 +</option>
            <option>A1 -</option>
            <option>A1B +</option>
            <option>A1B -</option>
            <option>A2 +</option>
            <option>A2 -</option>
            <option>A2B +</option>
            <option>A2B -</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> Complexion</td>
          <td><select name="txtComplexion" class="forminput" id="txtComplexion" style="width:215px;">
            <option value="<? echo $row['Complexion']; ?>" selected><? echo $row['Complexion']; ?></option>
            <option value="Very Fair">Very Fair</option>
            <option value="Fair">Fair</option>
            <option value="Wheatish">Wheatish</option>
            <option value="Wheatish Medium">Wheatish Medium</option>
            <option value="Wheatish Brown">Wheatish Brown</option>
            <option value="Dark">Dark</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="bodysg" >&nbsp;</span>&nbsp;Body type </td>
          <td><select name="txtBody" class="forminput" id="txtBody" style="width:215px;">
            <option value="<? echo $row['Bodytype']; ?>"><? echo $row['Bodytype']; ?></option>
            <option value="Slim">Slim</option>
            <option value="Average">Average</option>
            <option value="Heavy">Heavy</option>
            <option value="Athletic">Athletic</option>
                    </select></td>
        </tr>
        
        <tr>
          <td><span class="bodysg" >&nbsp;</span>&nbsp;Diet</td>
          <td><select name="txtDiet" class="forminput" id="txtDiet" style="width:215px;">
		   <option value="<? echo $row['Diet']; ?>"><? echo $row['Diet']; ?></option>
            <option value="Veg">Veg</option>
            <option value="Eggetarian">Eggetarian</option>
            <option value="Occasionally Non-Veg">Occasionally Non-Veg</option>
            <option value="Non-Veg">Non-Veg</option>
            <option value="Jain">Jain</option>
            <option value="Vegan">Vegan</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="bodysg" >&nbsp;</span>&nbsp;Smoke</td>
          <td><select name="txtSmoke" class="forminput" id="txtSmoke" style="width:215px;">
            <option value="<? echo $row['Smoke']; ?>"><? echo $row['Smoke']; ?></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Occasionally">Occasionally</option>
                    </select></td>
        </tr>
        <tr>
          <td><span class="bodysg" >&nbsp;</span>&nbsp;Drink</td>
          <td><select name="txtDrink" class="forminput" id="txtDrink" style="width:215px;">
            <option value="<? echo $row['Drink']; ?>"><? echo $row['Drink']; ?></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Occasionally">Occasionally</option>
                    </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit23" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
      </table>
	  </form>
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>
	  <br>
	   <form action="edit_cont.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q5" id="q5"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "contsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Contact Details </span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%"><span class="Alert">*</span> Address </td>
          <td width="78%"><textarea name="txtAddress" rows="4" id="txtAddress" style="width:210px;"><? echo $row['Address']; ?></textarea>
            <br>
            <span class="style2">The contact address is only for Official purpose and will not be discloded to others</span></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> Country </td>
          <td><span class="formselect">
            <select name="txtCountry" class="forminput" id="txtCountry" style="width:215px;">
			 <option value="<? echo $row['Country']; ?>"><? echo $row['Country']; ?></option>
              <option>Pakistan</option>
              <option>USA</option>
              <option>United Kingdom</option>
              <option>United Arab Emirates</option>
              <option>Canada</option>
              <option>Australia</option>
              <option>India</option>
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
          <td><span class="Alert">* </span>State</td>
          <td><select 
name=ResidingState class="forminput" onChange="fillSelectFromArray(this.form.City, ((this.selectedIndex == -1) ? null : residingcity[this.selectedIndex-1]));" style="width:215px">
             <option value="<? echo $row['State']; ?>"><? echo $row['State']; ?></option>
            <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
            <option value="Daman &amp; Diu">Daman &amp; Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
            <option value="Jharkand">Jharkand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="LakshadeepLakshadeep">LakshadeepLakshadeep</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Orissa">Orissa</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttaranchal">Uttaranchal</option>
            <option value="West Bengal">West Bengal</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> City </td>
          <td><select name=City class="forminput"style="width:215px" >
             <option value="<? echo $row['City']; ?>"><? echo $row['City']; ?></option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> Phone</td>
          <td><input name="txtPhone" type="text" class="forminput" id="txtPhone" style="width:100px;" value="<? echo $row['Phone']; ?>"  size="10" maxlength="10"></td>
        </tr>
        
        <tr>
          <td>Mobile </td>
          <td><input name="txtMobile" type="text" class="forminput" id="txtMobile" style="width:210px;" value="<? echo $row['Mobile']; ?>"  size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td>Residence in</td>
          <td><select name="txtRes" class="forminput" id="txtCitizen" style="width:215px;">
		  <option value="<? echo $row['Residencystatus']; ?>"><? echo $row['Residencystatus']; ?></option>
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
            <input name="Submit24" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
      </table>
	  </form>
	   <br>
	  <br>
	  <?php include("profedit.php"); ?>
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
