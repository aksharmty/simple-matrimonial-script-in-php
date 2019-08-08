<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script language="javascript">
function validate()
  {
if(document.form1.email.value == "" ) {
alert("Kindly enter your E-mail ID.");
document.form1.email.focus();
return false;
}


else if (document.form1.email.value.length != 0)
{
	var e_check  = document.form1.email.value;

	if(document.form1.email.value.indexOf(" ") != -1)	{
	alert("Kindly enter correct E-Mail ID without any spaces in it.");
	document.form1.email.focus();
	return false;
	}

	if(document.form1.email.value.indexOf("@") == -1)	{
	alert("Invalid E-Mail ID! Kindly enter correct E-Mail ID.");
	document.form1.email.focus();
	return false;
	}
   	validarr = document.form1.email.value.split("@");

   	if(validarr[0].length==0)   	{
   	alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");
   	document.form1.email.focus();
   	return false;
   	}
  	if(validarr[1].indexOf("@") >=0)   	{
   	alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");
   	document.form1.email.focus();
   	return false;
   	}
   	if(validarr[1].length==0)   	{
   	alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");
   	document.form1.email.focus();
   	return false;
   	}
   	if(validarr[1].length != 0)   	{

		if(validarr[1].indexOf(".") == -1)     	{
		alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");
		document.form1.email.focus();
		return false;
		}
		validemail = validarr[1].split(".");
		 if(validemail[0].length==0)   		{
		 alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");
		 document.form1.email.focus();
		 return false;
		}
		if(validemail[1].length==0)  		{
		alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");
		document.form1.email.focus();
		return false;
		}
	}   // end of of validemail
} // end of valid email-id check


		
	}

</script>
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
<TD width="180" height="303" valign="top" bgcolor="#e3edf6">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td><?php 
$StrAction=$_GET['Action'];
if ($StrAction == "err")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Please Correct the  errors.</strong> </td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class=Alert>";
	echo "Your specified emailid does not exist in our site. OR Invalid Email.";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
?></td>
  </tr>
</table>
  <br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="viewtextsmall"><strong>Forgot Password </strong></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<FORM action="forgotpassword_submit.php" method="post" name="form1" id="form1" onSubmit="return validate()">	
	<table width="97%" border="0" cellpadding="0" cellspacing="0" >
      
      
      <tr>
        <td width="53%" colspan="2" valign="top" ><br />
            <table width="100%" border="0" cellpadding="4" cellspacing="2">
              <tr>
                <td colspan="2" >		</td>
              </tr>
              
              <tr>
                <td colspan="2" >Kindly provide your <strong>Email ID</strong> to get your Forgot password. Your new Password will be send to your email. </td>
              </tr>
              <tr>
                <td colspan="2" ><span class="textnormal"> </td>
              </tr>
              <tr>
                <td width="29%" ><div align="right">Email ID: &nbsp;&nbsp;&nbsp; </div></td>
                <td width="71%" ><input name="email" type="text" Class="forminput" id="email" maxlength="50"  /></td>
              </tr>
              
              <tr>
                <td >&nbsp;</td>
                <td ><span class="gaia le rem">
                  <input name="Submit" type="image" value="Submit" src="pics/submit_but.gif" /></td>
              </tr>
              <tr>
                <td colspan="2"  ></td>
              </tr>
              <tr>
                <td colspan="2" >&nbsp;</td>
              </tr>
          </table></td>
        <td width="2%" ><img src="vertical_line.jpg" width="1" height="272" /></td>
        <td width="45%" valign="top" ><br />
            <table cellspacing="2" cellpadding="2">
              <tr>
                <td colspan="2"><strong>Not Yet a Member? <a href="registration1.php">Join Now</a></strong></td>
              </tr>
              <tr>
                <td colspan="2">Registration with <?php echo $info['Webname']; ?> will provide you with   the following privileges:</td>
              </tr>
              <tr>
                <td colspan="2" height="10"></td>
              </tr>
              <tr>
                <td align="right" width="23%">1.</td>
                <td width="77%">View Profiles (Free)</td>
              </tr>
              <tr>
                <td align="right">2.</td>
                <td>Contact Profiles</td>
              </tr>
              <tr>
                <td align="right">3.</td>
                <td>Get Match Alerts</td>
              </tr>
              <tr>
                <td align="right">4.</td>
                <td>Upload Photo(s)</td>
              </tr>
              <tr>
                <td align="right">5.</td>
                <td>Privacy Assured</td>
              </tr>
              <tr valign="center" align="middle">
                <td colspan="2" height="50"><div align="center"><a href="registration1.php"><img src="pics/ssregisterfreeicon.gif" width="126" height="34" border="0" /></a></div></td>
              </tr>
          </table></td>
      </tr>
      
    </table>
	
	</FORM>
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
