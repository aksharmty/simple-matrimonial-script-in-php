<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

<script language="javascript">

message = ("Sorry, you are not allowed to enter any spaces");
function nospaces(which) {
x = which.value
if (navigator.appName == "Netscape" ) {
if (e.which == 32) {
alert (message);
return false
}
}
if (navigator.appName == "Microsoft Internet Explorer") {
if (event.keyCode == 32) {
alert (message);
return false;
}
}
x = x.replace(/\s/g,""); // remove the unwanted space
document.signupForm.txtp.value = x;
}
</script>

<script language="JavaScript">

<!--
function Check_form() {


// Check old Password 
		if ( signupForm.txtop.value == "" )
		{
			alert( "Kindly enter your old password." );
			signupForm.txtop.focus( );
			return false;
		}

// Check Password 
		if ( signupForm.txtp.value == "" )
		{
			alert( "Kindly enter a new password." );
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
</HEAD>
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
<TD width="180" height="303" valign="top" >
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="36%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Change Password </span></div></td>
      <td width="64%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>
	   <form name="signupForm" id="signupForm" action="changepassword_submit.php" method="post"  onSubmit="return Check_form();"> 
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2">
		  
		    <div align="center" class="Alert"><strong>
		        <?php $straction =  $_GET['action'];
		  if ($straction == "wrong old password") {
		  echo "<img src=pics/warning.png width=32 height=32 align=absmiddle>  You did enter Wrong Old Password";
		  } ?>
		        </strong></div></td>
        </tr>
        <tr>
          <td><div align="right">Enter Old Password :</div></td>
          <td><input name="txtop" type="password" Class="forminput" id="txtop" maxlength="50" ></td>
        </tr>
        <tr>
          <td width="37%" bgcolor="#FFFFD5"><div align="right">Enter New Password : </div></td>
          <td width="63%" bgcolor="#FFFFD5"><input name="txtp" type="password" Class="forminput" id="txtp" maxlength="50" onKeyDown="nospaces(this)"> </td>
        </tr>
        <tr>
          <td bgcolor="#FFFFD5"><div align="right">Enter New Confirm Password : </div></td>
          <td bgcolor="#FFFFD5"><input name="txtcp" type="password" Class="forminput" id="txtcp" maxlength="50"  /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="Submit" type="image" value="Submit" src="pics/submit_but.gif"></td>
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
