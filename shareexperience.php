<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

<script language="JavaScript">
<!--
function Check_form() {


 if(document.form1.name.value == "") {
alert("Kindly enter your Name.");
document.form1.name.focus();
return false;
}


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

if(document.form1.phone.value == "") {
alert("Kindly enter your Phone no.");
document.form1.phone.focus();
return false;
}




if(document.form1.comments.value == "" ) {
alert("Kindly enter your Comments.");
document.form1.comments.focus();
return false;
}

if ( !form1.rating[0].checked && !form1.rating[1].checked && !form1.rating[2].checked && !form1.rating[3].checked && !form1.rating[4].checked)
		{
			alert( "Kindly select your rating" );
		form1.rating[4].focus( );
		return false;
		}

return true;
}

//-->
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
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Share Experience </strong></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<form action="feedback_submit.php" name="form1" id="form1" method="post" onSubmit="return Check_form()">
	<table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="2">Your feedback is valuable to us and will allow us to serve you better. <br />
          Do take out a few moments to fill out the form below.</td>
      </tr>
      
      <tr>
        <td colspan="2" class="style4">
		
		<?php 
$StrAction=$_GET['Action'];
if ($StrAction == "success")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Feedback Message has been sent. Thank you</strong> </td>";
	echo "</tr>";
	echo "</table>";
}
?>
  
		
		</td>
      </tr>
      <tr>
        <td colspan="2"><asp:TextBox ID="TextBox1" runat="server" Width=20 Visible="false"/>    
            <asp:TextBox ID="TextBox2" runat="server" Width=20 Visible="false"/>      
            <asp:TextBox ID="TextBox3" runat="server" Width=20 Visible="false"/>      
            <asp:TextBox ID="TextBox4" runat="server" Width=20 Visible="false"/>      
            <asp:TextBox ID="TextBox5" runat="server" Width=20 Visible="false"/>      
            <asp:TextBox ID="TextBox6" runat="server" Width=20 Visible="false"/>      
            <asp:TextBox ID="TextBox7" runat="server" Width=20 Visible="false"/>      
            <asp:TextBox ID="TextBox8" runat="server" Width=20 Visible="false"/>      
            <div align="right"><span class="Alert">*</span> Mandatory Field(s)</div></td>
      </tr>
      <tr>
        <td width="16%" class="text11"><span class="Alert">*</span> Name:</td>
        <td width="84%"><input name="name" type="text" class="forminput" id="name"></td>
      </tr>
      <tr>
        <td class="text11"><span class="Alert">*</span> Email:</td>
        <td><input name="email" type="text" class="forminput" id="email"></td>
      </tr>
      <tr>
        <td class="text11"><span class="Alert">*</span> Phone:</td>
        <td><input name="phone" type="text" class="forminput" id="phone"></td>
      </tr>
      <tr>
        <td class="text11"><span class="Alert">*</span> Comments:</td>
        <td><textarea name="comments" cols="50" rows="5" class="forminput" id="comments"></textarea></td>
      </tr>
      <tr>
        <td class="text11"><span class="Alert">*</span> Rating:</td>
        <td><table width="97%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="rating" type="radio" class="forminput" value="Poor">
              <img src="pics/1star.gif" width="15" height="12"></td>
            <td><input name="rating" type="radio" class="forminput" value="Normal">
              <img src="pics/2star.gif" width="31" height="13"></td>
            <td><input name="rating" type="radio" class="forminput" value="Good">
              <img src="pics/3star.gif" width="45" height="13"></td>
            <td><input name="rating" type="radio" class="forminput" value="Very Good">
              <img src="pics/4star.gif" width="60" height="13"></td>
            <td><input name="rating" type="radio" class="forminput" value="Excellent">
              <img src="pics/5star.gif" width="76" height="13"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td class="text11">&nbsp;</td>
        <td><input name="Submit" type="image" value="Submit" src="pics/submit_but.gif"></td>
      </tr>
    </table>
	</form >
      <br></td>
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
