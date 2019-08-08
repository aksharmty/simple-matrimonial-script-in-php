<?php

session_start();

	
	// Education and Occupation 
	$_SESSION['Education']= $_POST['txtEdu'];
	$_SESSION['EduDetails']= $_POST['txtEdudetails'];
	$_SESSION['Annualincome']= $_POST['txtIncome']; 
	$_SESSION['Occupation']= $_POST['txtOccu']; 
	$_SESSION['Employedin']= $_POST['txtEmp'];
	
	//Physical Attributes
	$_SESSION['Height']= $_POST['txtHeight']; 
	$_SESSION['Weight']= $_POST['txtWeight']; 
	$_SESSION['BloodGroup']= $_POST['txtBlood']; 
	$_SESSION['Bodytype']= $_POST['txtBody']; 
	$_SESSION['Complexion']= $_POST['txtComplexion'];
	$_SESSION['Diet']= $_POST['txtDiet'];
	$_SESSION['Smoke']= $_POST['txtSmoke'];
	$_SESSION['Drink']= $_POST['txtDrink'];
	
	// Contact Details 
	$_SESSION['Address']= $_POST['txtAddress'];
	$_SESSION['City']= $_POST['txtCity']; 
	$_SESSION['State']= $_POST['txtState']; 
	$_SESSION['Country']= $_POST['txtCountry'];
   $_SESSION['Code']= $_POST['txtCC'];
   $_SESSION['Areacode']= $_POST['txtAC'];
 
	$sCC = $_POST['txtCC'];
	$sAC = $_POST['txtAC'];
	$sPhone = $_POST['txtPhone'];
	$ssep="-";
	$_SESSION['Phone']= $sCC.$ssep.$sAC.$ssep.$sPhone;
	$_SESSION['Mobile']= $_POST['txtMobile'];
	$_SESSION['Residencein']= $_POST['txtRes'];
//Dim StrIP As String = Request.ServerVariables("REMOTE_ADDR") 
//	msg5.text = Request.ServerVariables("REMOTE_ADDR") 

?>






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="vs_defaultClientScript" content="JavaScript">
<title>Free Online Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	color: #333333;
}
.style2 {color: #FF0000}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 13px; color: #ff0000;}
.style5 {color: #000000; font-size: 11px;}
-->
</style>
</head>
<script>
function smutEngine() {
smut="..";
cmp="sex babes shit fuck damn porno cum cunt prick pecker ass fucking xxx XXX yahoo msn rediff gmail hotmail sify rediffmail www http"
+"asshole pedophile man-boy man/boy dong twat";
txt=document.MatriForm.txtmsg.value;
tstx="";
for (var i=0;i<16;i++){
pos=cmp.indexOf(" ");
wrd=cmp.substring(0,pos);
wrdl=wrd.length
cmp=cmp.substring(pos+1,cmp.length);
while (txt.indexOf(wrd)>-1){
pos=txt.indexOf(wrd);
txt=txt.substring(0,pos)+smut.substring(0,wrdl)
+txt.substring((pos+wrdl),txt.length);
   }
}
document.MatriForm.txtmsg.value=txt;
}
// End -->
</script>

<script>
function stringFilter (input) {
s = input.value;
filteredValues = "1234567890@/#$%^&*()_-=|][}.,;:?'{!\><";     // Characters stripped out
var i;
var returnString = "";
for (i = 0; i < s.length; i++) {  // Search through string and append to unfiltered values to returnString.
var c = s.charAt(i);
if (filteredValues.indexOf(c) == -1) returnString += c;
}
input.value = returnString;
}
//  End -->
</script>

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


	
	function ResetValues()
	{
		var MatriForm = this.document.MatriForm;

		
		MatriForm.txtLooking.value = "";
		MatriForm.txtmsg = "";
		MatriForm.txtFD = "";
		MatriForm.txtPPE = "";
	
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
	
	
	// Check Looking Field
		
	
		// Check Profile
		if ( MatriForm.txtmsg.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Enter your Profile" );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Min Chars 
		if ( MatriForm.txtmsg.value.length < 50 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nProfile must be atleast 50 chars." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Max Chars
		if ( MatriForm.txtmsg.value.length > 1000 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease do not enter more than 1000 chars. Please shorten your Profile and submit again." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		




		
		// Check Family Details
		if ( MatriForm.txtFD.value.length > 300 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease do not enter more than 300 chars. Please shorten your Family Details and submit again." );	
			MatriForm.txtFD.focus( );
			return false;
		}

//Check Father and mother name/////


if ( MatriForm.txtFANAME.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Enter Your Father's Name" );
			MatriForm.txtFANAME.focus( );
			return false;
		}



if ( MatriForm.txtMONAME.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Enter Your Mother's Name" );
			MatriForm.txtMONAME.focus( );
			return false;
		}



		
if ( !MatriForm.txtLooking[0].checked && !MatriForm.txtLooking[1].checked && !MatriForm.txtLooking[2].checked && !MatriForm.txtLooking[3].checked)
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select the Looking for." );
			MatriForm.txtLooking[0].focus( );
			return false;
		}
	

if ( MatriForm.Fromage.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Enter your Expected From Age." );
			MatriForm.Fromage.focus( );
			return false;
		}



if(isNaN(document.MatriForm.Fromage.value)) 
		{ 
		 alert("Age should be only numbers."); 
		document.MatriForm.Fromage.focus();
		 return false; 
		}
		

if(document.MatriForm.Fromage.value < 18 )
		{ 
		 alert("Age should be 18 And Above."); 
		 document.MatriForm.Fromage.focus();
		 return false; 
		}



if ( MatriForm.Toage.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Enter your Expected To Age." );
			MatriForm.Toage.focus( );
			return false;
		}

		
		if(document.MatriForm.Toage.value < 18 )
		{ 
		 alert("Age should be 18 And Above."); 
		 document.MatriForm.Toage.focus();
		 return false; 
		}






if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Expected Religion." );	
			MatriForm.religion.focus( );
			return false;
		}

		
		// Check Partner Expectation details
		if ( MatriForm.txtPPE.value.length > 300 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease do not enter more than 300 chars. Please shorten your Partner Expectation and submit again." );	
			MatriForm.txtPPE.focus( );
			return false;
		}





	
	return true;
	}

		</script> 



<script>
<!--
function clearform()
	{
	
//		MatriForm.txtEdu.value = "1"
		//MatriForm.txtAddress.value = ""
		//MatriForm.txtAddress.value = ""
	//	MatriForm.txtAddress.value = ""
		//MatriForm.txtAddress.value = ""
		////MatriForm.txtAddress.value = ""
	//	MatriForm.txtAddress.value = ""
		MatriForm.txtEdudetails.value = ""
		
		MatriForm.txtAddress.value = ""
		MatriForm.txtCity.value = ""
		MatriForm.txtState.value = ""
		MatriForm.txtPhone.value = ""
		
		
	}
//-->
</script>


<script language="JavaScript">
<!--
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
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
caste["Christian"] = ["Born Again","Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","Nadar","Protestant","Syrian"];
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



		

<body oncontextmenu="return false" onselectstart="return false" 
ondragstart="return false" text=#000000 vlink=#000000 alink=#000000 link=#000000 
bgcolor=#ffffff leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">


<form action="register_submit1.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >
<div align="center">
  
  <table width="780" border="0" cellpadding="0" cellspacing="0" class="BlueTborder">
    <!--DWLayoutTable-->
    <tr>
      <td width="780" height="164">
	  
	
        <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
          <!--DWLayoutTable-->
          <tr>
            <td height="37" colspan="2">
					<?php include("header.php");?>
			  </td>
            </tr>
          <tr>            </tr>
          <tr>
            <td height="17" colspan="2" valign="top">
						
							<!-- #include file="headerimage.ascx" -->							
							
			  </td>
          </tr>
          
          <tr valign="top">
            <td height="206" colspan="2">
               
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td width="570" class="LgHeading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											

					  </td>
                      <td width="200">Already Registered? <span class="h1dp"><a href="login.aspx">Login Now</a></span> </td>
                    </tr>
                    <tr>
                        <td bgcolor=#cccccc colspan=5 height=1><spacer height="1" type="block"></td>
                    </tr>
                  </table>
                  <table width="746" border="0" align="center">
                    <tr>
                      <td><div align="left"><span class="LgHeading">Register Final </span></div></td>
                    </tr>
                    <tr>
                      <td width="719"><div align="left">All Fields marks <span class="bodysg"><span class="Alert">*</span></span> are compulsory.<br>
  Please mention accurate information in this form or your profile may be declined. </div></td>
                    </tr>
                </table>
				  
				 
                  
                  <div align="center"><br>
                    <br>
                    <TABLE cellSpacing=0 cellPadding=0 width=746 border=0>
                      <TR>
                        <TD class=grebg vAlign=top colSpan=3 height=12><IMG src="pics/trans.gif"></TD>
                      </TR>
                      <TR>
                        <TD class=grebg width=12><IMG height=1  src="pics/trans.gif"></TD>
                        <TD class=lastnull vAlign=top width=722><TABLE cellSpacing=0 cellPadding=0 width=722  border=0>
                            <TR height=28>
                              <TD class=smalltxt align=right colSpan=2><div align="left"></div></TD>
                            </TR>
                            <!---- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">About Yourself </span></div></TD>
                            </TR>
                            <!---- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1 src="pics/blank(1).gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Profile</div></TD>
                              <TD><div align="left">
                                <textarea name="txtmsg" cols="30" rows="7" id="txtmsg" style="width:500px;"
onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" ></textarea>
                                <br>
                                <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" readonly>
                                <span class="style1">You could enter details about you or a bried description about yourself.<br>
                                <span class="style2">Min 50</span> chas and <span class="style2">Max 1000 chars</span>. (If Profile contains ay details about your <br>
                              contact information like e-mail,phone number, ete. Your profile will be rejected)</span></div></TD>
                            </TR>
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Family Details </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Family Values </div></TD>
                              <TD class=smalltxt><div align="left">
                                <select name="txtFV" class="forminput" id="txtFV" style="width:150px;">
                                  <option value="Traditional">Traditional</option>
                                  <option value="Orthodox">Orthodox</option>
                                  <option value="Liberal">Liberal</option>
                                  <option value="Moderate">Moderate</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 vAlign=center><div align="left">&nbsp;Family Type</div></TD>
                              <TD class=smalltxt><div align="left">
                                <select name="txtFT" class="forminput" id="txtFT" style="width:150px;">
                                  <option value="Seperate Family">Seperate Family</option>
                                  <option value="Joint Family" >Joint Family</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 width=210><div align="left">&nbsp;Family Status</div></TD>
                              <TD vAlign=top><div align="left">
                                <select name="txtFS" class="forminput" id="txtFS" style="width:150px;">
                                  <option value="Rich">Rich</option>
                                  <option value="Upper Middle Class">Upper Middle Class</option>
                                  <option value="High Class">High Class</option>
                                  <option value="Middle Class">Middle Class</option>
                                  <option value="Do not want to tell at this time">Do not want to tell at this time</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Family Origin </div></TD>
                              <TD class=grtxt><input name="txtFO" type="text" class="forminput" id="txtFO" size="40" maxlength="40" style="width:200px;"></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">No of Brothers </div></TD>
                              <TD class=grtxt><div align="left">
                                <select name="txtFS1" class="forminput" id="txtFS1" style="width:95px;">
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3 ">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">No of Sisters </div></TD>
                              <TD class=grtxt><div align="left">
                                <select name="txtFS2" class="forminput" id="txtFS2" style="width:95px;">
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3 ">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Father's Detail </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Name:</div></TD>
                              <TD class=grtxt><div align="left">
                                <input name="txtFANAME" type="text" class="forminput" id="txtFANAME" size="40" maxlength="20" style="width:150px;">
                              </div>
                                  <div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"></div></TD>
                              <TD><div align="left">
                                <input name="txtFalive" type="radio" value="Alive" checked>
                                <span class="h4p">Alive</span> &nbsp;
                                <input name="txtFalive" type="radio" value="NotAlive">
                                <span class="h4p">Not Alive</span></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Occupation</div></TD>
                              <TD class=grtxt><div align="left">
                                <input name="txtFFO" type="text" class="forminput" id="txtFFO" size="40" maxlength="10" style="width:150px;">
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" align=left class=grtxtbold1><div align="left" class="bodysg">Mother's Detail </div>
                                  <div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Name:</div></TD>
                              <TD><div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"></div></TD>
                              <TD class=smalltxt><div align="left">
                                <input name="txtMalive" type="radio" value="Alive" checked>
                                <span class="h4p">Alive</span> &nbsp;
                                <input name="txtMalive" type="radio" value="NotAlive">
                                <span class="h4p">Not Alive</span></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 align=left><div align="left">Occupation</div></TD>
                              <TD><div align="left">
                                <input name="txtFMO" type="text" class="forminput" id="txtFMO" size="40" maxlength="40" style="width:150px;">
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            
                            <!-- -->
                            
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Partner Preference </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"><span class="style4">*</span> Looking For </div></TD>
                              <TD><div align="left">
                                <table width="100%" align="left" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="23%"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Unmarried">
                                      Unmarried &nbsp;</div></td>
                                    <td width="21%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Separated">
                                      Separated </div></td>
                                    <td width="24%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Widowed" >
                                      Widowed </div></td>
                                    <td width="32%" class="style3"><div align="left">
                                        <input name="txtLooking" type=radio class="style5" value="Divorcee" >
                                      Divorcee </div></td>
                                  </tr>
                                </table>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Age </div></TD>
                              <TD><div align="left">From
                                  <input name="Fromage" type="text" class="forminput" id="Fromage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="18" size="2" maxlength="2">
&nbsp;to
<input name="Toage" type="text" class="forminput" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="30" size="2" maxlength="2" >
</div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Expectations</div></TD>
                              <TD><div align="left">
                                <textarea name="txtPPE" rows="5" id="txtPPE" style="width:195px;"></textarea>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Country Living in </div></TD>
                              <TD><div align="left"><span class="formselect">
                                <select name="txtPcountry" class="forminput" id="txtPcountry" style="width:200px;">
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
                              </span></div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Hobbies and Interests </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Hobbies</div></TD>
                              <TD><div align="left">
                                <select name="txtHobby" size="4" multiple class="forminput" id="txtHobby" style="width:200px;">
                                  <option value="Acting">Acting</option>
                                  <option value="Astronomy">Astronomy</option>
                                  <option value="Astrology">Astrology</option>
                                  <option value="Collectibles">Collectibles</option>
                                  <option value="Cooking">Cooking</option>
                                  <option value="Crosswords">Crosswords</option>
                                  <option value="Dancing">Dancing</option>
                                  <option value="Film-making">Film-making</option>
                                  <option value="Fishing">Fishing</option>
                                  <option value="Gardening/ landscaping">Gardening/ landscaping</option>
                                  <option value="Graphology">Graphology</option>
                                  <option value="Nature">Nature</option>
                                  <option value="Numerology">Numerology</option>
                                  <option value="Painting">Painting</option>
                                  <option value="Palmistry">Palmistry</option>
                                  <option value="Pets">Pets</option>
                                  <option value="Photography">Photography</option>
                                  <option value="Playing musical instruments">Playing musical instruments</option>
                                  <option value="Puzzles">Puzzles</option>
                                  <option value="No Hobbies">Not interest</option>
                                </select>
                              </div></TD>
                            </TR>
                            <!-- -->
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Other Hobbies</div></TD>
                              <TD><div align="left">
                                <input name="txtOh" type="text" class="forminput" id="txtOh" size="40" maxlength="40" style="width:195px;">
                              </div></TD>
                            </TR>
                            <!-- -->
							
							<TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Interests</div></TD>
                              <TD><div align="left">
                                <select name="txtInterest" size="4" multiple class="forminput" id="select" style="width:200px;">
                                  <option value="Adventure sports">Adventure sports</option>
                                  <option value="Book clubs">Book clubs</option>
                                  <option value="Computer games">Computer games</option>
                                  <option value="Health & fitness">Health & fitness</option>
                                  <option value="Internet">Internet</option>
                                  <option value="Learning new languages">Learning new languages</option>
                                  <option value="Movies">Movies</option>
                                  <option value="Music">Music</option>
                                  <option value="Politics">Politics</option>
                                  <option value="Reading">Reading</option>
                                  <option value="Social service">Social service</option>
                                  <option value="Sports"> Sports</option>
                                  <option value="Television">Television</option>
                                  <option value="Theatre">Theatre</option>
                                  <option value="Travel">Travel</option>
                                  <option value="Writing">Writing</option>
                                  <option value="Yoga">Yoga</option>
                                  <option value="Alternative healing / medicine">Alternative healing / medicine</option>
                                  <option value="Not interest" >Not interest</option>
                                </select>
                              </div></TD>
                            </TR>
							
							<TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Other Interests</div></TD>
                              <TD><div align="left">
                                <input name="txtOi" type="text" class="forminput" id="txtOi" size="40" maxlength="40" style="width:195px;">
                              </div></TD>
                            </TR>
							
							
							
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 vAlign=center>&nbsp;</TD>
                              <TD class=formtxt vAlign=top width=500>&nbsp;</TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colSpan=3 height=7><div align="center">
                                  <div align="center"><a href="javascript:clearform();"></a>
                                    <input name="txtstatus" type="hidden" id="txtstatus" value="<?php echo "InActive" ; ?>">
                                    <input name="txtregdate" type="hidden" id="txtregdate" value="<?php echo Date("d-m-y"); ?>">
                                    <input name="txtip" type="hidden" id="txtip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">
                                    <input name="txtref" type="hidden" id="txtref" value="<?php  echo  $_SERVER['HTTP_REFERER']; ?>">
                                    <input name="txtagent" type="hidden" id="txtagent" value="<?php  echo $_SERVER['HTTP_USER_AGENT']; ?>">
                                    <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name']; ?>">
                                    <input name="Submit" type="image" value="Submit" src="pics/reg1.gif" alt="Register" >
                                    <a href="javascript:clearform();"></a></div>
                              </div></TD>
                            </TR>
                        </TABLE></TD>
                        <TD class=grebg width=12><IMG height=1  src="pics/trans.gif"></TD>
                      </TR>
                      <TR>
                        <TD class=grebg vAlign=top colSpan=3><IMG height=12 src="pics/trans.gif" width=564></TD>
                      </TR>
                    </TABLE>
                    <br>
                    <br>
                  </div>
                  </td>
          </tr>
          
          <tr>
         <?php include("footer.php");?> 
		 
            </tr>
        </table>
 

	  </td>
    </tr>
  </table>
</div>
</form>
</body>
</html>

