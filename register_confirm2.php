<?php include("config.php"); ?>
<?php
include('dbconnect.php'); 
$update1 = mysql_query("update register set matriid=concat(prefix,id),age=(YEAR(CURDATE())-YEAR(dob)) - (RIGHT(CURDATE(),5)<RIGHT(dob,5))")
or die("Could not update data because ".mysql_error());
?>


<?php 
/////////////////// SEND MEMBER ALERT FIRST EMAIL  //////////////////////////////////////////////	
$stremail = $_GET['emid'];

$result = mysql_query("SELECT * FROM register,siteconfig where ConfirmEmail = '$stremail' ");
while($row = mysql_fetch_array($result))
  {
$website = $row['Webname'];
$webfriendlyname = $row['WebFriendlyname'];
$logo = $row['Weblogopath'];
$strname = $row['Name'];
$strmatriid = $row['MatriID'];
$strpassword = $_SESSION['ConfirmPassword'];
$strsitename = $info['Webname'];
$to = $_GET['emid'];
$from = $info['ContactEmail'];

$subject = "Your $strsitename profile is under validation";
$message = "
<html>
<style type='text/css'>
<!--
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
<body>
<table width='600' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td background=$website/pics/email_top.gif width=600 height=22><img src='$logo' border=0></td>
</tr>
<tr>
<td background=$website/pics/email_middle.gif><table width=600 border=0 cellspacing=2 cellpadding=2>
<tr>
<td width=10>&nbsp;</td>
<td width=562 rowspan=3 valign=top><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
<tr>
<td width=562 valign=top class=style3>Dear $strname,</td>
</tr>
<tr>
<td width=562 valign=top class=style3>Welcome to $strsitename,</td>
</tr>
<tr>
<td width=562 valign=top class=style3> Matrimony ID : $strmatriid
</td>
</tr>
<tr>
<td valign=top class=style3><p>Thank you for choosing our matrimony services to find your life partner.</p>
<p>$strsitename, the Most Successful Matrimony Portal for Indians.</p>
<p>I take this opportunity to wish you the very best in your partner search. Should you require further assistance in helping you decide what's best for you, do not hesitate to contact our 24X7 support.</p>
<p>Warm regards<br>
$strsitename's Team<br>
</p></td>
</tr>
<tr>
<td valign=top class=style3>&nbsp;</td>
</tr>
<tr>
<td valign=top class=style2>You are receiving this mail as a registered member of $strsitename. This is a computer auto generated message. Please do not Reply.</td>
</tr>
</table><p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'></p>
</td>
<td width=8>&nbsp;</td>
</tr>
<tr>
</tr>
<tr>
</tr>
</table></td>
</tr>
<tr>
<td><img src=$website/pics/email_bottom.gif width=600 height=22></td>
</tr>
</table>
</body>
</html>
		";
		// To send HTML mail, the Content-type header must be set
		
		$headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n";
	
		
		$success = mail($to,$subject, $message, $headers); 
		
 }	
	
?>






<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
<STYLE type="text/css">
<!--
.style6 {font-family: Verdana;
	font-size: 8.5pt;
	color: #424542;
}
.style1 {color: #FFFFFF}
.style5 {font-size: 12px}
-->
</STYLE>
</HEAD>


<BODY class="body">




<DIV align="center">

  <TABLE width="980" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <TR>
      <TD width="980" height="164">
        <TABLE width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="Tborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>		</TD>
            </TR>
          <TR>            </TR>
          <TR>
            <TD height="17" colspan="2" valign="top">
			
							
							<?php include("topmenu.php");?>
							
							
							</TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top"><TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
              <TR>
                <TD>&nbsp;</TD>
                <TD ><DIV align="right"></DIV></TD>
              </TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD class="heading1"><DIV align="center">
                  <table width="72%" height="20" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="39%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Register Confirm </strong></div></td>
                      <td width="61%">&nbsp;</td>
                    </tr>
                  </table>
                </DIV></TD>
              </TR>
              <TR>
                <TD><SPAN class="style1">&nbsp;&nbsp;&nbsp;&nbsp;</SPAN></TD>
                <TD valign="top"><DIV class=submenubox style="WIDTH:490" >
                    <DIV class=submenuContent style="WIDTH: 100%">
                      <DIV align="justify">
                        <DIV align="center" class="h2black">
                          <CENTER>
                            Thank you for Registering with <?php echo $info['WebFriendlyname']; ?>
                          </CENTER>
                        </DIV>
                        <P align="left"><STRONG>Congratulations</STRONG> Your FREE <?php echo $info['WebFriendlyname']; ?> profile has been created. It will be online as soon as we review it and confirmation message will send to you.</P>
                        <P align="left">-Free membership allows you to search and initiate contact. </P>
                      </DIV>
                    </DIV>
                </DIV></TD>
              </TR>
              <TR>
                <TD height="18">&nbsp;</TD>
                <TD valign="top">&nbsp;</TD>
              </TR>
            </TABLE>
			 <?php include("paymentoption.php");?>
			</TD>
          </TR>
          <TR>
            <TD  colspan=5 1></TD>
          </TR>
          
          <TR>
            <?php include("footer.php");?>
          </TR>
        </TABLE>
    </TD>
    </TR>
  </TABLE>
</DIV>

</BODY>

</HTML>
