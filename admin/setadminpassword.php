<?php include('protect.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="JavaScript">
<!--
function Check_form() {


// Check Password 
		if ( signupForm.txtp.value == "" )
		{
			alert( "Kindly enter a password." );
			signupForm.txtp.focus( );
			return false;
		}

		if ( signupForm.txtp.value.length < 4 )
		{
			alert( "Password must be atleast 4 characters." );	
			signupForm.txtp.focus( );
			return false;
		}


		if ( signupForm.txtp.value.length > 20 )
		{
		alert( "Password must be Max 20 characters." );	
		signupForm.txtp.focus( );
		return false;
		}

		if ( signupForm.txtcp.value == "" )
		{
			alert( "Kindly enter a confirm password." );
			signupForm.txtcp.focus( );
			return false;
		}

		if ( signupForm. txtp.value != signupForm. txtcp.value )
		{
			alert( "Password and Confirm password must be same." );
			signupForm.txtp.value = "";
			signupForm.txtcp.value = "";

			signupForm.txtp.focus( );

			return false;
		}

		tmpPass = signupForm.txtp.value;

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
			alert( "Password must contains only letters and digits." );
			signupForm. txtp.value="";
			signupForm. txtcp.value="";
			signupForm. txtp.focus();
			return false;
		}

	

return true;
}

//-->
</script>
<title>Set Admin Password</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
      <tr>
        <td colspan="2"><?php include("adminheader.php");?></td>
      </tr>
      <tr>
        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>
        <td width="80%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
            <td class="headertext">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%"><span class="HeadText1"><img src="images/icon29.gif" width="19" height="16" /></span></td>
            <td width="97%" class="headertext">SET ADMIN PASSWORD </td>
          </tr>
        </table>
          <br />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center" class="smalltextgrey">
                  <div align="left" class="smalltextred"> Below is the list of Administrator Password. You can   change/edit admin's password </div>
              </div></td>
            </tr>
          </table>
          <br />
          <form  name="signupForm" id="signupForm" method="post" action="adminpass_submit.php" onSubmit="return Check_form();"> 
        
		  <table width="50%" border="0" align="center" cellpadding="3" cellspacing="3" class="blackbox">
            <tr>
              <td width="40%">New Password  : </td>
              <td width="60%"><input name="txtp" type="password" id="txtp" /></td>
            </tr>
            <tr>
              <td>Confirm Password : </td>
              <td><input name="txtcp" type="password" id="txtcp" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="Submit" value="Submit" /></td>
            </tr>
          </table>
		  </form>
		  <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
