<?php
session_start();
	/// Basic Datas 
	
	
	$_SESSION['Name'] = $_POST['txtName'];
	$_SESSION['Gender']= $_POST['txtGender'];
	
	$sDay = $_POST['dobDay'];
	$sMonth = $_POST['dobMonth'];
	$syear = $_POST['dobYear'];
	$slash = "-";
	
	$_SESSION['DateofBirth'] = $syear.$slash.$sMonth.$slash.$sDay;
	
	$sMs = $_POST['MARITAL_STATUS'];
	if ($sMs=1) 
	{
	$_SESSION['MaritalStatus'] = "Unmarried";
	}
	elseif ($sMs=2) 
	{
	$_SESSION['MaritalStatus'] = "Widow/Widower";
	}
	elseif ($sMs=3) 
	{
	$_SESSION['MaritalStatus'] = "Divorcee";
	}
	elseif ($sMs=4) 
	{
	$_SESSION['MaritalStatus'] = "Separated";
	}
	
	$Strnochild = $_POST['NOOFCHILDREN'];
	$Strchildwithme = $_POST['CHILDLIVINGWITHME'];
	
	$_SESSION['ChildrenLivingStatus'] = $Strnochild.$Strchildwithme;
	$_SESSION['Mothertongue']= $_POST['Language'];
	$_SESSION['Religion']= $_POST['religion'];
	$_SESSION['Caste']= $_POST['caste'];
	$_SESSION['SubCaste']= $_POST['txtSubcaste'];
	$_SESSION['ProfileCreatedby']= $_POST['txtPC'];
	$_SESSION['Referenceby']= $_POST['txtRef'];
	
	/// Accounts Datas
	$_SESSION['ConfirmEmail']= $_POST['EMAILconfirm'];
	$_SESSION['ConfirmPassword']= $_POST['txtcp'];
	
	
	/// Socio Religious Attributes 
	
	$_SESSION['Gothra']= $_POST['txtGothra'];
	$_SESSION['Star']= $_POST['txtStar'];
	$_SESSION['Moonsign']= $_POST['txtMoon'];
	$_SESSION['HoroscopeMatch']= $_POST['txtHorosMatch'];
	$_SESSION['Manglik']= $_POST['txtManglik'];
	$_SESSION['Placeofbirth']= $_POST['txtPb'];
	$_SESSION['Timeofbirth']= $_POST['txtTb'];
	
	$_SESSION['Accept']= $_POST['txtAccept'];
	
	//msg5.text = Request.ServerVariables("REMOTE_ADDR") 


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
.style2 {
	font-size: 10px;
	color: #333333;
}
-->
</style>
</head>

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


	
	function ResetValues( )
	{
		var MatriForm = this.document.MatriForm;

		
		MatriForm.txtEdu.value = "";
		MatriForm.txtEdudetails = "";
		MatriForm.txOccu.value = "";
		MatriForm.txtEmp.value = "";
		MatriForm.txtHeight.value = "";
		MatriForm.txtWeight.value = "";
		MatriForm.txtBlood.value = "";
		MatriForm.txtBody.value = "";
		MatriForm.txtComplexion.value = "";
		MatriForm.txtAddress.value = "";
		MatriForm.txtCity.value = "";
		MatriForm.txtState.value = "";
		MatriForm.txtPhone.value = "";
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
	
			
		// Check Education
		if ( MatriForm.txtEdu.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Education." );	
			MatriForm.txtEdu.focus( );
			return false;
		}
		
		// Check Edu details
		if ( MatriForm.txtEdudetails.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Education Details" );	
			MatriForm.txtEdudetails.focus( );
			return false;
		}
		
		
		// Check Occupation
		if ( MatriForm.txtOccu.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Occupation." );	
			MatriForm.txtOccu.focus( );
			return false;
		}
		
		// Check Employed in
		if ( MatriForm.txtEmp.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Employed in status." );	
			MatriForm.txtEmp.focus( );
			return false;
		}
		
		// Check Height
		if ( MatriForm.txtHeight.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Height." );	
			MatriForm.txtHeight.focus( );
			return false;
		}
		
		
		// Check Weight
		if ( MatriForm.txtWeight.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Weight." );	
			MatriForm.txtWeight.focus( );
			return false;
		}
		
		
		// Check Blood Group
		if ( MatriForm.txtBlood.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Blood Group." );	
			MatriForm.txtBlood.focus( );
			return false;
		}
	
	
		// Check BodyType
		if ( MatriForm.txtBody.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Body type." );	
			MatriForm.txtBody.focus( );
			return false;
		}
		
		
		// Check Complexion
		if ( MatriForm.txtComplexion.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease Select your Complexion." );	
			MatriForm.txtComplexion.focus( );
			return false;
		}
		
		
		// Check Address 
		if ( MatriForm.txtAddress.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease enter your Address." );
			MatriForm.txtAddress.focus( );
			return false;
		}
		
				// Check City 
		if ( MatriForm.txtCity.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease enter your City." );
			MatriForm.txtCity.focus( );
			return false;
		}
		
		// Check Correct City Name
		tmpcity = MatriForm.txtCity.value;

		goodcity = 1;

		for( var idx=0; idx< tmpcity.length; idx++ )
		{
			ch = tmpcity.charAt(idx);

			if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z') || (ch == ' ') ))
				//if (!(((ch >= 'a') && (ch <= 'z')) || ((ch >= 'A') && (ch <= 'Z')))
					//if (!(((ch >= '0') && (ch <= '9')) || (ch == ' ') || (ch == ' ')))
			{
				goodcity = 0;
				break;
			}
		}

		if( goodcity ==0 )
		{
			alert( "Invalid City Name. Kindly enter correct city name." );
			//form1.txtName.value="";
		MatriForm.txtCity.focus();
			//form1.txtName.select(	);
			return false;
		}
		
		
			// Check State 
		if ( MatriForm.txtState.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease enter your State." );
			MatriForm.txtState.focus( );
			return false;
		}
	
	
	
	// Check Correct State Name
		tmpstate = MatriForm.txtState.value;

		goodstate = 1;

		for( var idx=0; idx< tmpstate.length; idx++ )
		{
			ch = tmpstate.charAt(idx);

				if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z') || (ch == ' ') ))
				//if (!(((ch >= 'a') && (ch <= 'z')) || ((ch >= 'A') && (ch <= 'Z')))
					//if (!(((ch >= '0') && (ch <= '9')) || (ch == ' ') || (ch == ' ')))
			{
				goodstate = 0;
				break;
			}
		}

		if( goodstate ==0 )
		{
			alert( "Invalid State Name. Kindly enter correct State name." );
			//form1.txtName.value="";
		MatriForm.txtState.focus();
		
			return false;
		}
		

	
	
	// Check any Phone number

	// Check Area Code
		if ( MatriForm.txtAC.value == "" )
		{
			alert( "Hello " + document.MatriForm.h1.value + "\nPlease enter your Area Code." );
			MatriForm.txtAC.focus( );
			return false;
		}


if ((document.MatriForm.txtMobile.value == "") && (document.MatriForm.txtPhone.value == "")){
		alert("One contact information is compulsory.\n Kindly enter your any contact number.");
		document.MatriForm.txtPhone.focus( );
		return false; 
	}
	
	

	if ((document.MatriForm.txtMobile.value == "") && (document.MatriForm.txtPhone.value.length < 6 ))
		{
			alert( "Phone number must be atleast 6 numbers." );	
			document.MatriForm.txtPhone.focus( );
			return false;
		}
		
		
		if ((document.MatriForm.txtPhone.value == "") && (document.MatriForm.txtMobile.value.length < 10 ))
		{
			alert( "Mobile number must be minimum 10 numbers." );	
			document.MatriForm.txtMobile.focus( );
			return false;
		}
		
		return true;
	}






		</script> 

<script>
function check_phone(field_name)
{
	var i, max, field_info
	field_info = eval("document.MatriForm." + field_name);
	max = field_info.value.length;
	
	for (i = 0; i < max; i++)
	{
		if(isNaN(field_info.value.charAt(i)))
		{
			alert("You Must Enter A Number.");
			field_info.value = "";
			field_info.focus();
			return false;
		}
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


<body oncontextmenu="return false" onselectstart="return false" 
ondragstart="return false" text=#000000 vlink=#000000 alink=#000000 link=#000000 
bgcolor=#ffffff leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">


<form action="registration3.php" method="post" id="Matriform"  name="MatriForm" onSubmit="return Validate()" >
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
						
							<?php include("topmenu.php");?>							</td>
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
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><span class="LgHeading">Registration Continue  </span></div></td>
                    </tr>
                    <tr>
                      <td width="54">&nbsp;</td>
                      <td width="716"><div align="left">All Fields marks <span class="bodysg"><span class="Alert">*</span></span> are compulsory.<br>
  Please mention accurate information in this form or your profile may be declined. </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><span class="bodysg">Your Ip Address</span> <strong> <span class="Alert">
                      <asp:Label CssClass="Alert" ID="msg5" runat="server" /></span></strong><span class="bodysg"> is being logged in to our database for security purpose. </span></td>
                    </tr>
                  </table>
				  
				 
                  
                  <br>
                  <TABLE width=746 border=0 align="center" cellPadding=0 cellSpacing=0>
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
                            <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Education and Occupation </span></div></TD>
                          </TR>
                          <!---- -->
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1 src="pics/blank(1).gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Education</div></TD>
                            <TD width="500"><div align="left">
                              <select name="txtEdu" class="forminput" id="txtEdu" style="width:215px;">
                                <option value="" selected>- Select -</option>
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
                            </div></TD>
                          </TR>
                          <!-- -->
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Edu Details </div></TD>
                            <TD><div align="left">
                              <select name="txtEdudetails" class="forminput" id="txtEdudetails" style="width:215px;">
                                <option value="Select" selected>Select</option>
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
                              </select>
                            </div></TD>
                          </TR>
                          <!-- -->
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert"> </span><span class="Alert"> </span><span class="bodysg" >&nbsp;</span>&nbsp;Annual income </div></TD>
                            <TD class=smalltxt><div align="left">
                              <select name="txtIncome" class="forminput" id="txtIncome" style="width:215px;">
                                <option value="" selected="selected">[Select Annual Income Range]</option>
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
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1 vAlign=center><div align="left"><span class="Alert">*</span> Occupation </div></TD>
                            <TD class=smalltxt><div align="left">
                              <select name="txtOccu" class="forminput" id="txtOccu" style="width:215px;">
                                <option value="" selected>- Select -</option>
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
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1 width=210><div align="left"><span class="Alert">* </span>Employed in </div></TD>
                            <TD vAlign=top><div align="left">
                              <select name="txtEmp" class="forminput" id="txtEmp" style="width:215px;">
                                <option value="" selected>- Select -</option>
                                <option value="Business">Business</option>
                                <option value="Defence">Defence</option>
                                <option value="Government">Government</option>
                                <option value="Not Employed in">Not Employed in</option>
                                <option value="Private">Private</option>
                                <option value="Others">Others</option>
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Physical Attributes </span></div>                              <div align="left"></div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Height </div></TD>
                            <TD class=grtxt><div align="left">
                              <select name="txtHeight" class="forminput" id="txtHeight" style="width:215px;">
                                <option value="" selected>- Select -</option>
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
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Weight </div></TD>
                            <TD class=grtxt><div align="left">
                              <select name="txtWeight" class="forminput" id="txtWeight" style="width:215px;">
                                <option value="0" selected="selected">- Select -</option>
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
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Blood Group </div></TD>
                            <TD class=grtxt><div align="left">
                              <select  name="txtBlood" class="forminput" id="txtBlood" style="width:215px;">
                                <option value="" selected>- Select -</option>
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
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Complexion</div></TD>
                            <TD class=grtxt><div align="left">
                              <select name="txtComplexion" class="forminput" id="txtComplexion" style="width:215px;">
                                <option value="" selected>- Select -</option>
                                <option value="Very Fair">Very Fair</option>
                                <option value="Fair">Fair</option>
                                <option value="Wheatish">Wheatish</option>
                                <option value="Wheatish Medium">Wheatish Medium</option>
                                <option value="Wheatish Brown">Wheatish Brown</option>
                                <option value="Dark">Dark</option>
                              </select>
                            </div>
                                <div align="left"></div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="bodysg" >&nbsp;</span>&nbsp;Body type </div></TD>
                            <TD><div align="left">
                              <input name="txtBody" type="radio" value="Slim">
Slim &nbsp;
<input name="txtBody" type="radio" value="Average" checked>
Average &nbsp;
<input name="txtBody" type="radio" value="Athletic">
Athletic &nbsp;
<input name="txtBody" type="radio" value="Heavy">
Heavy</div></TD>
                          </TR>
                         
						  <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left">Diet</div></TD>
                            <TD class=grtxt><div align="left">
                              <select name="txtDiet" class="forminput" id="txtDiet" style="width:215px;">
                                <option value="Veg">Veg</option>
                                <option value="Eggetarian">Eggetarian</option>
                                <option value="Occasionally Non-Veg">Occasionally Non-Veg</option>
                                <option value="Non-Veg">Non-Veg</option>
                                <option value="Jain">Jain</option>
                                <option value="Vegan">Vegan</option>
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left">Smoke</div></TD>
                            <TD class=grtxt><div align="left">
                              <input name="txtSmoke" type="radio" value="No" checked>
No &nbsp;
<input name="txtSmoke" type="radio" value="Yes">
Yes &nbsp;
<input name="txtSmoke" type="radio" value="Occasionally">
Occasionally</div></TD>
                          </TR>
						  
						   <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left">Drink</div></TD>
                            <TD class=grtxt><div align="left">
                              <input name="txtDrink" type="radio" value="No" checked>
No &nbsp;
<input name="txtDrink" type="radio" value="Yes">
Yes &nbsp;
<input name="txtDrink" type="radio" value="Occasionally">
Occasionally</div></TD>
                          </TR>
						  
						  
						  
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Contact Details </span></div>                              
                              <div align="left"></div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Address </div></TD>
                            <TD class=grtxt><div align="left">
                              <textarea name="txtAddress" rows="4" id="txtAddress" style="width:210px;"></textarea>
                              <br>
                              <span class="style2">The contact address is only for Official purpose and will not be discloded to others</span></div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> City </div></TD>
                            <TD class=grtxt><div align="left">
                              <input name="txtCity" type="text" class="forminput" id="txtCity" size="40" maxlength="40" style="width:210px;">
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>State </div></TD>
                            <TD class=grtxt><div align="left">
                              <input name="txtState" type="text" class="forminput" id="txtState" size="40" maxlength="40" style="width:210px;">
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Country </div></TD>
                            <TD class=grtxt><div align="left"><span class="formselect">
                              <select name="txtCountry" class="forminput" id="txtCountry" style="width:215px;">
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
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Phone</div></TD>
                            <TD class=grtxt><div align="left">
                              <input name="txtCC" type="text" class="forminput" id="txtCC" size="10" maxlength="10" style="width:30px;" onFocus="if (this.value == '91') this.value = '';" value="91" onKeyUp="check_phone('txtCC')">
-
<input name="txtAC" type="text" class="forminput" id="txtAC" size="10" maxlength="10" style="width:40px;" onFocus="if (this.value == 'Area Code') this.value = '';" value="Area Code" onKeyUp="check_phone('txtAC')">
-
<input name="txtPhone" type="text" class="forminput" id="txtPhone" size="10" maxlength="10" style="width:100px;" onKeyUp="check_phone('txtPhone')">
</div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left">Mobile </div></TD>
                            <TD class=grtxt><div align="left">
                              <input name="txtMobile" type="text" class="forminput" id="txtMobile" size="40" maxlength="40" style="width:210px;" onKeyUp="check_phone('txtMobile')">
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD class=grtxtbold1><div align="left">Residence in</div></TD>
                            <TD class=grtxt><div align="left">
                              <select name="txtRes" class="forminput" id="txtCitizen" style="width:215px;">
                                <option value="Citizen">Citizen</option>
                                <option value="Permanent Resident">Permanent Resident</option>
                                <option value="Student Visa">Student Visa</option>
                                <option value="Temporary Visa">Temporary Visa</option>
                                <option value="Work permit">Work permit</option>
                              </select>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                          </TR>
						  
                          <TR class=tabpadding>
                            <TD colspan="2" class=grtxtbold1><div align="left"></div>                              <div align="left"></div></TD>
                          </TR>
                          
						  
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          <!-- -->
                          
                          <!-- -->
                          
                          <TR class=tabpadding>
                            <TD colSpan=3 height=7><div align="center">
                                <div align="center">
                                  <input name="Submit" type="image" value="Submit" src="pics/continue.gif" alt="Continue">
                             </div>
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
                  <br></td>
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
