<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<style type="text/css">
<!--
.style1 {	font-size: 10px;
	color: #333333;
}
.style2 {color: #FF0000}
-->
</style>

<script language="javascript">
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

	function ResetValues( )
	{
		var MatriForm = this.document.MatriForm;


		MatriForm.EMAIL.value = "";
		MatriForm.EMAILconfirm.value = "";
		
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate()
	{
		var MatriForm = this.document.MatriForm;
		
		
		// Check the Name field
		if ( MatriForm.txtName.value == "" )
		{
			alert( "Please Enter your name." );
			MatriForm.txtName.focus( );
			return false;
		}




	
		
		
	
		
		// Check E-mail field
		if ( MatriForm.EMAIL.value == "" )
		{
			alert( "Please enter a valid E-mail ID." );
			MatriForm.EMAIL.focus( );
			return false;
		}
		else
		{
			if ( !ValidateEmail( MatriForm.EMAIL.value ) )
			{
				alert( "Invalid E-mail " + MatriForm.EMAIL.value );
				MatriForm.EMAIL.focus( );
				return false;
			}
			for ( var Idx = 0; Idx < MatriForm.EMAIL.value.length; Idx++ )
			{
				if ( MatriForm.EMAIL.value.charAt(Idx) == '	' 
					|| MatriForm.EMAIL.value.charAt(Idx) == ' ' 
					|| MatriForm.EMAIL.value.charAt(Idx) == ',' 
					|| MatriForm.EMAIL.value.charAt(Idx) == '/' 
					|| MatriForm.EMAIL.value.charAt(Idx) == '\\' 
					|| MatriForm.EMAIL.value.charAt(Idx) == ';' )
				{
					alert( "Blanks or other invalid characters are not allowed in the e-mail ID.\n Please enter only one E-mail ID." );
					MatriForm.EMAIL.focus( );
					return false;
				}
			}
		}

		if ( MatriForm.EMAILconfirm.value != "" && MatriForm.EMAILconfirm.value == "" )
		{
			alert( "Please confirm E-mail address" );
			MatriForm.EMAILconfirm.focus( );
			return false;
		}

		if ( MatriForm.EMAIL.value != MatriForm.EMAILconfirm.value )
		{
			alert( "E-mail address did not match, please enter a  confirm E-mail" );
			MatriForm.EMAILconfirm.focus( );
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
      <td>

	  <form action="edit_basic.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >
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
          <td colspan="2"><div align="left"><span class="h3r">Basic Information</span><span class="bodysg">&nbsp;</span></div></td>
        </tr>
        <tr>
          <td width="22%"><div align="left">Name</div></td>
          <td width="78%"><div align="left">
            <input name="txtName" type="text" class="forminput" id="txtName" style="width:215px;" value="<? echo $row['Name']; ?>" size="40" maxlength="40">
          </div></td>
        </tr>
        <tr>
          <td><div align="left">Mother tongue </div></td>
          <td><div align="left"><span style="HEIGHT: 24px">
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
          </span></div></td>
        </tr>
        <tr>
          <td><div align="left">Religion</div></td>
          <td><div align="left">
            <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:215px;">
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
            </select>
          </div></td>
        </tr>
        <tr>
          <td><div align="left">Caste</div></td>
          <td><div align="left">
            <select name="caste" class="forminput" id="caste" style="width:215px;">
              <option value="<? echo $row['Caste']; ?>" selected><? echo $row['Caste']; ?></option>
            </select>
          </div></td>
        </tr>
        <tr>
          <td><div align="left">Sub Caste </div></td>
          <td><div align="left">
            <input name="txtSubcaste" type="text" class="forminput" id="txtSubcaste" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();" value="<? echo $row['Subcaste']; ?>" size="40" maxlength="50">
          </div></td>
        </tr>
        <tr>
          <td><div align="left">Email</div></td>
          <td><div align="left">
            <input name="EMAIL" type="text" class="forminput" id="EMAIL" style="width:215px;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40">
          </div></td>
        </tr>
        <tr>
          <td><div align="left">Confirm Email</div></td>
          <td><div align="left">
            <input name="EMAILconfirm" type="text" class="forminput" id="EMAILconfirm" style="width:215px;"  value="<? echo $row['ConfirmEmail']; ?>" size="40" maxlength="40">
          </div></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">
            <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></span></div></td>
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
