<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 

$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>



<HTML><HEAD>
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
<?php include("leftbanner.php");?></TD>
<TD valign="top"><br>
<?php while($row = mysql_fetch_array($memcontrol)) { ?>
 
  
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">My Profile    </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><br>
      <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Basic Information</span><span class="bodysg">&nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Name : </td>
          <td width="78%"><? echo $row['Name']; ?></td>
        </tr>
        <tr>
          <td>Mother tongue  : </td>
          <td><? echo $row['Language']; ?></td>
        </tr>
        <tr>
          <td>Religion : </td>
          <td><? echo $row['Religion']; ?></td>
        </tr>
        <tr>
          <td>Caste : </td>
          <td><? echo $row['Caste']; ?></td>
        </tr>
        <tr>
          <td>Sub Caste  : </td>
          <td><? echo $row['Subcaste']; ?></td>
        </tr>
        <tr>
          <td>Email : </td>
          <td><? echo $row['ConfirmEmail']; ?></td>
        </tr>
      </table>
	  
        
        <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td bgcolor="#6ACDF7"></td>
          </tr>
          </table>
	    <br>
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Socio Religious Attributes</span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Gothra(m) : </td>
          <td width="78%"><? echo $row['Gothram']; ?></td>
        </tr>
        <tr>
          <td>Star(Nakshatra) : </td>
          <td><? echo $row['Star']; ?></td>
        </tr>
        <tr>
          <td>Moonsign : </td>
          <td><? echo $row['Moonsign']; ?></td>
        </tr>
        <tr>
          <td>Horoscope Match  : </td>
          <td><? echo $row['Horosmatch']; ?></td>
        </tr>
        <tr>
          <td>Manglik : </td>
          <td><? echo $row['Manglik']; ?></td>
        </tr>
        <tr>
          <td><span class="bodywk">Place of Birth  : </span></td>
          <td><? echo $row['POB']; ?></td>
        </tr>
        <tr>
          <td><span class="bodywk">Time of Birth  : </span></td>
          <td><? echo $row['TOB']; ?></td>
        </tr>
      </table>

	  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
	    <tr>
	      <td bgcolor="#6ACDF7"></td>
          </tr>
	    </table>
	    <br>
        <br>
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Education and Occupation</span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Education : </td>
          <td width="78%"><? echo $row['Education']; ?></td>
        </tr>
        <tr>
          <td>Edu Details  : </td>
          <td><? echo $row['EducationDetails']; ?></td>
        </tr>
        <tr>
          <td><span class="Alert"> </span><span class="Alert"> </span>Annual income  : </td>
          <td><? echo $row['Occupation']; ?></td>
        </tr>
        <tr>
          <td>Occupation  : </td>
          <td><? echo $row['Annualincome']; ?></td>
        </tr>
        <tr>
          <td>Employed in  : </td>
          <td><? echo $row['Annualincome']; ?></td>
        </tr>
      </table>
	 
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
	     <tr>
	       <td bgcolor="#6ACDF7"></td>
           </tr>
	     </table>
	     <br>
        <br>
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Physical Attributes </span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Height  : </td>
          <td width="78%">
		  
		<?php  
$strheight = $row['Height'];
if($strheight =="1") { echo "Below 4ft"; }
else if($strheight =="2") { echo "4ft 6in"; }
else if($strheight =="3") { echo "4ft 7in"; }
else if($strheight =="4") { echo "4ft 8in"; }
else if($strheight =="5") { echo "4ft 9in"; }
else if($strheight =="6") { echo "4ft 10in"; }
else if($strheight =="7") { echo "4ft 11in"; }
else if($strheight =="8") { echo "5ft"; }
else if($strheight =="9") { echo "5ft 1in"; }
else if($strheight =="10") { echo "5ft 2in"; }
else if($strheight =="11") { echo "5ft 3in"; }
else if($strheight =="12") { echo "5ft 4in"; }
else if($strheight =="13") { echo "5ft 5in"; }
else if($strheight =="14") { echo "5ft 6in"; }
else if($strheight =="15") { echo "5ft 7in"; }
else if($strheight =="16") { echo "5ft 8in"; }
else if($strheight =="17") { echo "5ft 9in"; }
else if($strheight =="18") { echo "5ft 10in"; }
else if($strheight =="19") { echo "5ft 11in"; }
else if($strheight =="20") { echo "6ft"; }
else if($strheight =="21") { echo "6ft 1in"; }
else if($strheight =="22") { echo "6ft 2in"; }
else if($strheight =="23") { echo "6ft 3in"; }
else if($strheight =="24") { echo "6ft 4in"; }
else if($strheight =="25") { echo "6ft 5in"; }
else if($strheight =="26") { echo "6ft 6in"; }
else if($strheight =="27") { echo "6ft 7in"; }
else if($strheight =="28") { echo "6ft 8in"; }
else if($strheight =="29") { echo "6ft 9in"; }
else if($strheight =="30") { echo "6ft 10in"; }
else if($strheight =="31") { echo "6ft 11in"; }
else if($strheight =="32") { echo "7ft"; }
else if($strheight =="33") { echo "Above 7ft"; }
?>
		  
		  
		  </td>
        </tr>
        <tr>
          <td>Weight  : </td>
          <td><? echo $row['Weight']; ?></td>
        </tr>
        <tr>
          <td>Blood Group  : </td>
          <td><? echo $row['BloodGroup']; ?></td>
        </tr>
        <tr>
          <td>Complexion : </td>
          <td><? echo $row['Complexion']; ?></td>
        </tr>
        <tr>
          <td>Body type  : </td>
          <td><? echo $row['Bodytype']; ?></td>
        </tr>
        
        <tr>
          <td>Diet  : </td>
          <td><? echo $row['Diet']; ?></td>
        </tr>
        <tr>
          <td>Smoke  : </td>
          <td><? echo $row['Smoke']; ?></td>
        </tr>
        <tr>
          <td>Drink  : </td>
          <td><? echo $row['Drink']; ?></td>
        </tr>
      </table>
	  
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
	     <tr>
	       <td bgcolor="#6ACDF7"></td>
           </tr>
	     </table>
	     <br>
        <br>
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
          
          <tr>
            <td colspan="2"><span class="h3r">Contact Details </span><span class="bodysg"> &nbsp;</span></td>
          </tr>
          <tr>
            <td width="22%">Address  : </td>
            <td width="78%"><? echo $row['Address']; ?></td>
          </tr>
          <tr>
            <td>Country  : </td>
            <td><? echo $row['Country']; ?></td>
          </tr>
          <tr>
            <td>State : </td>
            <td><? echo $row['State']; ?></td>
          </tr>
          <tr>
            <td>City  : </td>
            <td><? echo $row['City']; ?></td>
          </tr>
          <tr>
            <td>Phone : </td>
            <td><? echo $row['Phone']; ?></td>
          </tr>
          
          <tr>
            <td>Mobile  : </td>
            <td><? echo $row['Mobile']; ?></td>
          </tr>
          <tr>
            <td>Residence in : </td>
            <td><? echo $row['Residencystatus']; ?></td>
          </tr>
          </table>
	  
	 
        <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td bgcolor="#6ACDF7"></td>
           </tr>
          </table>
	     <br>
        <br>
        
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">About Me</span></td>
        </tr>
        
        <tr>
          <td width="22%">Profile  : </td>
          <td width="78%" valign="top"><? echo $row['Profile']; ?></td>
        </tr>
      </table>
	
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
	     <tr>
	       <td bgcolor="#6ACDF7"></td>
           </tr>
	     </table>
	     <br>
  <br>
        
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
          
          <tr>
            <td colspan="2"><span class="h3r">Family Details </span><span class="bodysg"> &nbsp;</span></td>
          </tr>
          <tr>
            <td width="22%">Family Details   : </td>
            <td width="78%"><? echo $row['FamilyDetails']; ?></td>
          </tr>
          <tr>
            <td>Family Values   : </td>
            <td><? echo $row['Familyvalues']; ?></td>
          </tr>
          <tr>
            <td>Family Type : </td>
            <td><? echo $row['FamilyType']; ?></td>
          </tr>
          <tr>
            <td>Family Status  : </td>
            <td><? echo $row['FamilyStatus']; ?></td>
          </tr>
          <tr>
            <td>Family Origin  : </td>
            <td><? echo $row['FamilyOrigin']; ?></td>
          </tr>
          
          <tr>
            <td>No of Brothers  : </td>
            <td><? echo $row['noofbrothers']; ?></td>
          </tr>
          <tr>
            <td>No of Sisters : </td>
            <td><? echo $row['noofsisters']; ?></td>
          </tr>
          <tr>
            <td>Father Name :</td>
            <td><? echo $row['Fathername']; ?></td>
          </tr>
          <tr>
            <td>Father Occupation : </td>
            <td><? echo $row['Fathersoccupation']; ?></td>
          </tr>
          <tr>
            <td>Mother Name :</td>
            <td><? echo $row['Mothersname']; ?></td>
          </tr>
          <tr>
            <td>Mother Occupation : </td>
            <td><? echo $row['Mothersoccupation']; ?></td>
          </tr>
          </table>
  
        
        <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td bgcolor="#6ACDF7"></td>
           </tr>
          </table> 
	     <br>
        <br>
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
          
          <tr>
            <td colspan="2"><span class="h3r">Partner Preference  </span><span class="bodysg"> &nbsp;</span></td>
          </tr>
          <tr>
            <td width="22%">Looking for    : </td>
            <td width="78%"><? echo $row['Looking']; ?></td>
          </tr>
          <tr>
            <td>Age   : </td>
            <td>From  <? echo $row['PE_FromAge']; ?>&nbsp; to&nbsp; <? echo $row['PE_ToAge']; ?></td>
          </tr>
          <tr>
            <td>Expectations : </td>
            <td><? echo $row['PartnerExpectations']; ?></td>
          </tr>
          <tr>
            <td>Country Living in   : </td>
            <td><? echo $row['PE_Countrylivingin']; ?></td>
          </tr>
          <tr>
            <td>Height  : </td>
            <td><? echo $row['PE_Height']; ?></td>
          </tr>
          
          <tr>
            <td>Complexion  : </td>
            <td><? echo $row['PE_Complexion']; ?></td>
          </tr>
          <tr>
            <td>Education : </td>
            <td><? echo $row['PE_Education']; ?></td>
          </tr>
          <tr>
            <td>Religion  :</td>
            <td><? echo $row['PE_Religion']; ?></td>
          </tr>
          <tr>
            <td>Caste  : </td>
            <td><? echo $row['PE_Caste']; ?></td>
          </tr>
          <tr>
            <td>Resident Status  :</td>
            <td><? echo $row['PE_Residentstatus']; ?></td>
          </tr>
          </table>
	  
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
	     <tr>
	       <td bgcolor="#6ACDF7"></td>
           </tr>
	     </table>
	     <br>
        <br>
        
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
          
          <tr>
            <td colspan="2"><span class="h3r">Hobbies and Interest</span></td>
          </tr>
          <tr>
            <td width="22%">Hobbies  : </td>
            <td width="78%"><? echo $row['Hobbies']; ?></td>
          </tr>
          <tr>
            <td>Other Hobby   : </td>
            <td width="78%"><? echo $row['OtherHobbies']; ?></td>
          </tr>
          
          <tr>
            <td>Interests  : </td>
            <td width="78%"><? echo $row['Interests']; ?></td>
          </tr>
          <tr>
            <td>Other Interest   : </td>
            <td valign="top"><? echo $row['OtherInterests']; ?></td>
          </tr>
          </table>
	  
	   </td></tr>
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
