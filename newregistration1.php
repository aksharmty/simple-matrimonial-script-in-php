<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="vs_defaultClientScript" content="JavaScript">
<title>Free Online Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript" src="includes/timepicker.js"></script> 
<script language="JavaScript">

function updateDay(change,formName,yearName,monthName,dayName)
{	
	
	var form = document.forms[formName];
	var yearSelect = form[yearName];
	var monthSelect = form[monthName];
	var daySelect = form[dayName];
	var year = yearSelect[yearSelect.selectedIndex].value;
	var month = monthSelect[monthSelect.selectedIndex].value;
	var day = daySelect[daySelect.selectedIndex].value;

	if (change == 'month' || (change == 'year' && month == 2))
	{
		var i = 31;
		var flag = true;
		while(flag)
		{
			var date = new Date(year,month-1,i);
			if (date.getMonth() == month - 1)
			{
				flag = false;
			}
			else
			{
				i = i - 1;
			}
		}

		daySelect.length = 0;
		daySelect.length = i;
		var j = 0;
		while(j < i)
		{
			daySelect[j] = new Option(j+1,j+1);
			j = j + 1;
		}
		if (day <= i)
		{
			daySelect.selectedIndex = day - 1;
		}
		else
		{
			daySelect.selectedIndex = daySelect.length - 1;
		}
	}
}

</script>

<!--
<script language="javascript1.1">

function nospaces(t){
if(t.value.match(/\s/g)){
alert('Sorry, you are not allowed to enter any spaces');
t.value=t.value.replace(/\s/g,'');
}
}
</script>
-->
<script language="javascript1.1">
function HaveChildnp()
	{
//		var MARST = document.MatriForm.MARITAL_STATUS.options[document.MatriForm.MARITAL_STATUS.selectedIndex].value;

 

		var CHILDLW = document.MatriForm.NOOFCHILDREN.options[document.MatriForm.NOOFCHILDREN.selectedIndex].value;

		
		if(document.MatriForm.MARITAL_STATUS[0].checked)
		{
		document.MatriForm.NOOFCHILDREN.disabled=true;	
		document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		
		document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;									
	    }
		 else if ( document.MatriForm.MARITAL_STATUS[1].checked || document.MatriForm.MARITAL_STATUS[2].checked  || document.MatriForm.MARITAL_STATUS[3].checked  || document.MatriForm.MARITAL_STATUS[4].checked)
		{
		document.MatriForm.NOOFCHILDREN.disabled=false;			
		document.MatriForm.CHILDLIVINGWITHME[0].disabled=false;		
		document.MatriForm.CHILDLIVINGWITHME[1].disabled=false;											
		}
		
		
		if(document.MatriForm.MARITAL_STATUS[0].checked && document.MatriForm.CHILDLIVINGWITHME[0].checked || document.MatriForm.CHILDLIVINGWITHME[1].checked)
		{
		document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		
		document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;											
		}
		

		if(CHILDLW > 0)
		{
			if ( document.MatriForm.MARITAL_STATUS[0].checked)
			{
					if ( (document.MatriForm.CHILDLIVINGWITHME[0].checked || document.MatriForm.CHILDLIVINGWITHME[1].checked) && (!document.MatriForm.CHILDLIVINGWITHME[0].checked || !document.MatriForm.CHILDLIVINGWITHME[1].checked) )
					{
							document.MatriForm.CHILDLIVINGWITHME[0].checked=false;
							document.MatriForm.CHILDLIVINGWITHME[1].checked=false;
							document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		
							document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;	
					}
					
		
					
			}
		}

		if(CHILDLW == 0)
		{
		document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		
		document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;							
	    }
			 
		else if ( CHILDLW > 1)
		{
		document.MatriForm.CHILDLIVINGWITHME[0].disabled=false;		
		document.MatriForm.CHILDLIVINGWITHME[1].disabled=false;							
		}
		
		
	}
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
		MatriForm.txtp.value = "";
		MatriForm.txtcp.value = "";
		MatriForm.txtname.value = "";
		MatriForm.txtgender.value = "";
		MatriForm.txtmaritalstatus.value = "";
		
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
		
		// Check the Name field
		if ( MatriForm.txtName.value == "" )
		{
			alert( "Please Enter your name." );
			MatriForm.txtName.focus( );
			return false;
		}




		// Check gender field
		if ( !MatriForm.txtGender[0].checked && !MatriForm.txtGender[1].checked)
		{
			//alert( "Please select the gender." );
			//alert("Welcome "  txtName "\nHow are we today");
			alert("Hello " + document.MatriForm.txtName.value + "\nPlease Select the gender.");
			

			MatriForm.txtGender[0].focus( );
			return false;
		}
		
			

		
		if (document.MatriForm.dobMonth.options[document.MatriForm.dobMonth.selectedIndex].text=="-Month-")	
			  	{
				  	alert("Select Month");
					MatriForm.dobMonth.focus();
					return false;
			  	}
			  if (document.MatriForm.dobDay.options[document.MatriForm.dobDay.selectedIndex].text=="-DATE-")	
			  	{
				  	alert("Select Day");
					MatriForm.dobDay.focus();
					return false;
			  	}
			  if (document.MatriForm.dobYear.value=="0")		
			  	{
				  	alert("Select Year");
					MatriForm.dobYear.focus();
					return false;
			  	}
		
		
		
		// Check Marital Status
		if ( !MatriForm.MARITAL_STATUS[0].checked && !MatriForm.MARITAL_STATUS[1].checked && !MatriForm.MARITAL_STATUS[2].checked && !MatriForm.MARITAL_STATUS[3].checked)
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease Select the Marital Status." );
			MatriForm.MARITAL_STATUS[0].focus( );
			return false;
		}
		
		

		if ( !(document.MatriForm.MARITAL_STATUS[0].checked) && MatriForm.NOOFCHILDREN.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease select the number of children" );
			MatriForm.NOOFCHILDREN.focus( );
			return false;
		}			
		
		if ( !(document.MatriForm.MARITAL_STATUS[0].checked) && document.MatriForm.NOOFCHILDREN.options[document.MatriForm.NOOFCHILDREN.selectedIndex].value >= 1 && !MatriForm.CHILDLIVINGWITHME[0].checked && !MatriForm.CHILDLIVINGWITHME[1].checked)
		{
			alert("Hello " + document.MatriForm.txtName.value + "\nPlease indicate whether the child /children is/are living with you.");
			MatriForm.CHILDLIVINGWITHME[0].focus( );
			return false;
		}
		
		
		
		// Check Language
		if ( MatriForm.Language.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease Select your Language." );	
			MatriForm.Language.focus( );
			return false;
		}
		
		// Check Religion
		if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease Select your Religion." );	
			MatriForm.religion.focus( );
			return false;
		}
		
		// Check Caste

	
		
		// Check E-mail field
		if ( MatriForm.EMAIL.value == "" )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease enter a valid E-mail ID." );
			MatriForm.EMAIL.focus( );
			return false;
		}
		else
		{
			if ( !ValidateEmail( MatriForm.EMAIL.value ) )
			{
				alert( "Hello " + document.MatriForm.txtName.value + "\nInvalid E-mail " + MatriForm.EMAIL.value );
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
					alert( "Hello " + document.MatriForm.txtName.value + "\nBlanks or other invalid characters are not allowed in the e-mail ID.\n Please enter only one E-mail ID." );
					MatriForm.EMAIL.focus( );
					return false;
				}
			}
		}

		if ( MatriForm.EMAILconfirm.value != "" && MatriForm.EMAILconfirm.value == "" )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease confirm E-mail address" );
			MatriForm.EMAILconfirm.focus( );
			return false;
		}

		if ( MatriForm.EMAIL.value != MatriForm.EMAILconfirm.value )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nE-mail address did not match, please enter a  confirm E-mail" );
			MatriForm.EMAILconfirm.focus( );
			return false;
		}


	// Check Password 
		if ( MatriForm.txtp.value == "" )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease enter a password." );
			MatriForm.txtp.focus( );
			return false;
		}

		if ( MatriForm.txtp.value.length < 4 )
		{
			alert( "Password must be atleast 4 characters." );	
			MatriForm.txtp.focus( );
			return false;
		}

		if ( MatriForm.txtcp.value == "" )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease enter a confirm password." );
			MatriForm.txtcp.focus( );
			return false;
		}

		if ( MatriForm. txtp.value != MatriForm. txtcp.value )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPassword did not match." );
			MatriForm.txtp.value = "";
			MatriForm.txtcp.value = "";

			MatriForm.txtp.focus( );

			return false;
		}

		tmpPass = MatriForm.txtp.value;

		goodPasswd = 1;

		for( var idx=0; idx< tmpPass.length; idx++ )
		{
			ch = tmpPass.charAt(idx);

			if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z')) && !((ch>=0) && (ch <=9)) )
			{
				goodPasswd = 0;
				break;
			}
		}

		if( goodPasswd ==0 )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPassword must contains only letters and digits." );
			MatriForm. txtp.value="";
			MatriForm. txtcp.value="";
			MatriForm. txtp.focus();
			return false;
		}
	
	
	if( !(MatriForm.txtAccept.checked) )
		{
			alert("Hello " + document.MatriForm.txtName.value + "\nPlease read and accept the terms and conditions.");
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
document.form.roles1.disabled = true;
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

<script language="javascript">
function updateDay(change,formName,yearName,monthName,dayName) 
{
	var form = document.forms[formName];
	var yearSelect = form[yearName];
	var monthSelect = form[monthName];
	var daySelect = form[dayName];
	var year = yearSelect[yearSelect.selectedIndex].value;
	var month = monthSelect[monthSelect.selectedIndex].value;
	var day = daySelect[daySelect.selectedIndex].value;

	if (change == 'month' || (change == 'year' && month == 2))
	{
		var i = 31;
		var flag = true;
		while(flag)
		{
			var date = new Date(year,month-1,i);
			if (date.getMonth() == month - 1)
			{
				flag = false;
			}
			else
			{
				i = i - 1;
			}
		}

		daySelect.length = 0;
		daySelect.length = i;
		var j = 0;
		while(j < i)
		{
			daySelect[j] = new Option(j+1,j+1);
			j = j + 1;
		}
		if (day <= i)
		{
			daySelect.selectedIndex = day - 1;
		}
		else
		{
			daySelect.selectedIndex = daySelect.length - 1;
		}
	}
}


</script>


<script>
<!--
function clearform()
	{
	MatriForm.txtName.value=""
//	MatriForm.txtDay.value="1"
//	MatriForm.txtMonth.value="1"
//	MatriForm.txtYear.value="1"
	MatriForm.txtGender[0].Checked
	MatriForm.MARITAL_STATUS.value="0"
	MatriForm.NOOFCHILDREN.value="0"

	MatriForm.EMAIL.value=""
	MatriForm.EMAILconfirm.value=""
	MatriForm.txtp.value=""
	MatriForm.txtcp.value=""
	//MatriForm.Accept.unChecked
	}
//-->
</script>




<body oncontextmenu="return false" onselectstart="return false" 
ondragstart="return false" text=#000000 vlink=#000000 alink=#000000 link=#000000 
bgcolor=#ffffff leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">

<form action="registration2.php" method="post" name="MatriForm" onSubmit="return Validate()" >
<div align="center">
  
  <table width="780" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
    <!--DWLayoutTable-->
    <tr>
      <td width="780" height="164">
	  
	
        <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr>
            <td height="37" colspan="2">
						<?php include("header.php");?>
			  </td>
            </tr>
          <tr>            </tr>
          <tr>
            <td height="17" colspan="2" valign="top">
						
							<?php include("topmenu.php");?>
							
							
			  </td>
          </tr>
          
          <tr valign="top">
            <td height="206" colspan="2">
               
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td width="570" class="LgHeading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td width="200">Already Registered? <span class="h1dp"><a href="login.php">Login Now</a></span> </td>
                    </tr>
                    <tr>
                        <td bgcolor=#cccccc colspan=5 height=1><spacer height="1" type="block"></td>
                    </tr>
                  </table>
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><img src="pics/Reghead.gif" width="450" height="31"></div></td>
                    </tr>
                    <tr>
                      <td width="51">&nbsp;</td>
                      <td width="719"><div align="left"><br>
                          <img src="pics/chklist-tick.gif" width="9" height="9"> Please mention accurate information in this form or your profile may be declined.<br>
                          <img src="pics/chklist-tick.gif" width="9" height="9"> Spend a Few minutes to create your Profilel to find a correct life partner. <br>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
				  
				 
                  
                  <div align="center"><br>
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
					  <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Basic Information </span></div></TD>
					  </TR>
				<!---- -->		
							  
							  
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1 src="pics/blank(1).gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Name</div></TD>
                                <TD><div align="left">
                                  <input name="txtName" type="text" class="forminput" id="txtName" size="40" maxlength="40" style="width:215px;">
                                </div></TD>
                              </TR>
							  
				
					
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Gender</div></TD>
					<TD><div align="left">
					<input name="txtGender" type="radio" class="forminput" value="Male">
					Male 
					&nbsp;
					<input name="txtGender" type="radio" class="forminput" value="Female">
					Female </div></TD>
					</TR>
					<!-- -->
							  
							  
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Date of Birth</div></TD>
                                <TD class=smalltxt><div align="left">
                                  <select name="dobMonth" class="forminput"  onchange="updateDay('month','MatriForm','dobYear','dobMonth','dobDay');">
                                    <option value="" selected="selected">-Month-</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                  </select>
                                  <select  name="dobDay" class="forminput">
                                    <option value="1" selected="selected">-Date-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                  </select>
                                  <select name="dobYear" class="forminput" onChange="updateDay('year','MatriForm','dobYear','dobMonth','dobDay');">
                                    <option value="0" selected="selected">-Year-</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                  </select>
</div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1 vAlign=center><div align="left"><span class="Alert">* </span>Marital Status</div></TD>
                                <TD class=smalltxt><div align="left">
                                  <input name=MARITAL_STATUS type=radio class="forminput" onClick="return HaveChildnp(this)" value=1>
Unmarried &nbsp;
<input name=MARITAL_STATUS type=radio class="forminput" onClick="return HaveChildnp(this)" value=2>
Widow/Widower &nbsp;
<input name=MARITAL_STATUS type=radio class="forminput" onClick="return HaveChildnp(this)" value=3>
Divorcee &nbsp;
<input name=MARITAL_STATUS type=radio class="forminput" onClick="return HaveChildnp(this)" value=4>
Separated </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1 width=210><div align="left"><span class="Alert"> </span><span class="Alert"> </span><span class="bodysg" >&nbsp;</span>&nbsp;No. of Children</div></TD>
                                <TD vAlign=top><div align="left">
                                  <select name=NOOFCHILDREN size=1 class="forminput" onChange="return HaveChildnp(this)" style="width:215px;">
                                    <option value="" selected>- Select -</option>
                                    <option value=0>None</option>
                                    <option value="One">1</option>
                                    <option value="Two">2</option>
                                    <option value="Three">3</option>
                                    <option value="Four and above">4 and above</option>
                                  </select>
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="bodysg" >&nbsp;&nbsp;</span>Children Living Status</div></TD>
                                <TD class=grtxt><div align="left">
                                  <input  name=CHILDLIVINGWITHME type=radio class="forminput" value=Yes>
Living with me &nbsp;
<input name=CHILDLIVINGWITHME type=radio class="forminput" onFocus=if(disabled)blur(); value=No>
Not living with me </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Mother tongue</div></TD>
                                <TD class=grtxt><div align="left"><span style="HEIGHT: 24px">
                                  <select name="Language" class="forminput" id="Language" maxlength="2" style="width:220px;">
                                    <option value="- Select -">- Select -</option>
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
                                </span></div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Religion</div></TD>
                                <TD class=grtxt><div align="left">
                                  <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:220px;">
                                    <option value="- Select -" selected>- Select -</option>
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
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">* </span>Caste</div></TD>
                                <TD class=grtxt><div align="left">
                                  <select name="caste" class="forminput" id="caste" style="width:220px;">
                                  </select>
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="bodysg" >&nbsp;&nbsp;</span>Sub Caste </div></TD>
                                <TD class=grtxt><div align="left">
                                  <input name="txtSubcaste" type="text" class="forminput" id="txtSubcaste" size="40" maxlength="50" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();">
                                </div>
                                <div align="left"></div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="bodysg" >&nbsp;&nbsp;</span>Profile Created by </div></TD>
                                <TD><div align="left">
                                  <select name="txtPC" class="forminput" id="txtPC" style="width:220px;">
                                    <option value="Self">Self</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Sibling">Sibling</option>
                                    <option value="Relatives">Relatives</option>
                                  </select>
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="bodysg" >&nbsp;&nbsp;</span>Reference by </div></TD>
                                <TD class=grtxt><div align="left">
                                  <select name="txtRef" class="forminput" id="txtRef" style="width:220px;">
                                    <option value="Advertisements">Advertisements</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Searh Engines">Searh Engines</option>
                                    <option value="Others">Others</option>
                                  </select>
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD colspan="2" align=left class=grtxtbold1><div align="left" class="bodysg">New Account Information </div>                                  <div align="left"></div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Email</div></TD>
                                <TD><div align="left">
                                  <input name="EMAIL" type="text" class="forminput" id="EMAIL" size="40" maxlength="40" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();">
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Confirm Email</div></TD>
                                <TD class=smalltxt><div align="left">
                                  <input name="EMAILconfirm" type="text" class="forminput" id="EMAILconfirm" size="40" maxlength="40" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();">
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1 align=left><div align="left"><span class="Alert">* </span>Password</div></TD>
                                <TD><div align="left">
                                  <input name="txtp" type="password" class="forminput" id="txtp" size="10" maxlength="10" style="width:215px;">
                                </div></TD>
                              </TR>
                              <TR>
                                <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD class=grtxtbold1><div align="left"><span class="Alert">*</span> Confirm Password</div></TD>
                                <TD class=grtxt><div align="left">
                                  <input name="txtcp" type="password" class="forminput" id="txtcp" size="10" maxlength="10" style="width:215px;">
                                </div></TD>
                              </TR>
							  
                             
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Socio Religious Attributes </span></div>					  <div align="left"></div></TD>
					</TR>
					<!-- -->               
							  
							  
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left">Gothra(m)</div></TD>
					<TD><div align="left">
					  <input name="txtGothra" type="text" class="forminput" id="txtGothra" size="40" maxlength="40" style="width:215px;">
					</div></TD>
					</TR>
					<!-- -->
					
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left">Star(Nakshatra)</div></TD>
					<TD><div align="left"><span style="DISPLAY: block">
					  <select name="txtStar" class="forminput" id="txtStar" style="width:220px;">
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
					</span></div></TD>
					</TR>
					<!-- -->
					
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left">Moonsign</div></TD>
					<TD><div align="left">
					  <select name="txtMoon" class="forminput" id="txtMoon" style="width:220px;">
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
                      </select>
					</div></TD>
					</TR>
					<!-- -->
					
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left">Horoscope Match </div></TD>
					<TD><div align="left">
					  <input name=txtHorosMatch type=radio class="forminput" onClick="return HaveChildnp(this)" value=No>
No
                                  &nbsp;
                                  <input name=txtHorosMatch type=radio class="forminput" onClick="return HaveChildnp(this)" value=Yes>
Yes
                                  &nbsp;
                                  <input name="txtHorosMatch" type="radio" class="forminput"  value="Does not matter">
Does not matter&nbsp;</div></TD>
					</TR>
					<!-- -->
					
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left">Manglik</div></TD>
					<TD><div align="left">
					  <input name=txtManglik type=radio class="forminput" onClick="return HaveChildnp(this)" value=No>
No
                                  &nbsp;
                                  <input name=txtManglik type=radio class="forminput" onClick="return HaveChildnp(this)" value=Yes>
Yes
                                  &nbsp;
                                  <input name=txtManglik type=radio class="forminput" onClick="return HaveChildnp(this)" value=Do not know>
Do not know &nbsp;
<input name=txtManglik type=radio class="forminput" onClick="return HaveChildnp(this)" value=Not applicable>
Not applicable </div></TD>
					</TR>
					<!-- -->
					
					<!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left"><span class="bodywk">Place of Birth </span></div></TD>
					<TD><div align="left">
					  <input name="txtPb" type="text" class="forminput" id="txtPb" size="40" maxlength="40" style="width:215px;">
					</div></TD>
					</TR>
					<!-- -->
							  
							  
							  <!-- -->		  
					<TR>
					<TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
					</TR>
					<TR class=tabpadding>
					<TD class=grtxtbold1><div align="left"><span class="bodywk">Time of Birth </span></div></TD>
					<TD><div align="left">
					  <table cellpadding="0" cellspacing="0">
                        <tr valign=center>
                          <td><div align="left">
                            <input name="txtTb" type='text' class="forminput" id='timepicker1' onBlur="validateDatePicker(this)" value='9:00 am' size=8 maxlength=8>
                          </div></td>
                          <td><div align="left"><img src="timePickerpics/timepicker.gif" alt="Pick a Time!" width="30" height="20" border="0" style="cursor:hand" onClick="selectTime(this,timepicker1)"></div></td>
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
					<TD class=grtxtbold1><div align="left"></div></TD>
					<TD><div align="left">
					  <input name="txtAccept" type="checkbox" class="forminput" id="txtAccept" value="I Accept  the Terms and Conditions">
                      <a href="terms_con.aspx" target="_blank">I Accept the terms and Conditions </a></div></TD>
					</TR>
					<!-- -->
							  
							  
							  
							  
                              <TR class=tabpadding>
                                <TD class=grtxtbold1 vAlign=center>&nbsp;</TD>
                                <TD class=formtxt vAlign=top width=500>&nbsp;</TD>
                              </TR>
                              <TR class=tabpadding>
                                <TD colSpan=3 height=7><div align="center">
                                  <div align="center">
                                    <input name="Submit" type="image" value="Submit" src="pics/continue.gif" alt="Continue">
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
                  <table width="100%" border="0" cellpadding="2" cellspacing="2">
                    <tr>
                      <td colspan="4" class="bodysg" >&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="26" class="bodysg" >&nbsp;</td>
                      <td width="166" class="bodysg" >&nbsp;</td>
                      <td  colspan="2">
</td>
                    </tr>
                  </table>
                  <br>
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
