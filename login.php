<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

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
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="viewtextsmall"><strong>Member Login</strong></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<FORM action="memlogin_submit.php" method="post" name="form1" id="form1">	
	<table width="97%" border="0" cellpadding="0" cellspacing="0" >
      
      
      <tr>
        <td width="53%" colspan="2" valign="top" ><br />
            <table width="100%" border="0" cellpadding="4" cellspacing="2">
              <tr>
                <td colspan="2" >
<?php 
$StrAction=$_GET['Action'];
if ($StrAction == "wrong")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Please Correct the Following errors.</strong> </td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><ul class=Alert>";
	echo "<li>Invalid Matri ID / E-mail OR Incorrect Password.</li>";
	echo "<li>Make sure that the Caps Lock or A light is switched off on your keyboard   before trying again. </li>";
	echo "<li>To login use your email OR Matri ID e.g. abc@rediffmail.com. </li>";
	echo "<li>Please Specify Password. </li>";
	echo "</ul></td>";
	echo "</tr>";
	echo "</table>";
}
?>				</td>
              </tr>
              
              <tr>
                <td colspan="2" >Kindly provide your Login ID &amp; Password to enjoy uninterupted services</td>
              </tr>
              <tr>
                <td colspan="2" ><span class="textnormal"> </td>
              </tr>
              <tr>
                <td width="15%" ><div align="right">ID/Email&nbsp;&nbsp;&nbsp; </div></td>
                <td width="35%" ><input name="txtusername" type="text" Class="forminput" maxlength="50"  /></td>
              </tr>
              <tr>
                <td ><div align="right">Password&nbsp;&nbsp;&nbsp; </div></td>
                <td ><input name="txtpassword" type="password" Class="forminput" id="txtpassword" maxlength="50"  /></td>
              </tr>
              <tr>
                <td >&nbsp;</td>
                <td ><span class="gaia le rem">
                  <input name="Submit" type="image" value="Submit" src="pics/lgn-button.gif" /></td>
              </tr>
              <tr>
                <td colspan="2"  ></td>
              </tr>
              <tr>
                <td colspan="2" ><div align="center"><a href="forgotpassword.php">Forgot Your Password?</a> <a href="forgotpassword.aspx"></a> </div></td>
              </tr>
          </table></td>
        <td width="2%" ><img src="pics/vertical_line.jpg" width="1" height="272" /></td>
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
