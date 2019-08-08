<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php
$streiid = $_GET['eiid'];
?>


<?php
include('dbconnect.php'); 
/////////////////// SEND EXPRESS INTREST ALERT EMAIL TO RECEIVER //////////////////////////////////////////////	
$reccontrol = mysql_query("SELECT * FROM register where MatriID='$streiid' ");
  while($row = mysql_fetch_array($reccontrol))
  {
  
$streiidname = $row['Name'];
$strsitename = $info['Webname'];
$logo = $row['Weblogopath'];

		$to =  $row['ConfirmEmail'];
		$from = $info['ContactEmail'];
		$subject = "You have a new Express Interest Message Received From ".$strsitename;
		$message = "
		<html>
<style type=text/css>
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
-->
</style>
<body>		
<table width=600 border=0 cellspacing=0 cellpadding=0>
<tr>
<td background=pics/email_top.gif width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>
<tr>
<td><img src=$logo border=0></td>
</tr>
</table></td>
</tr>
<tr>
<td background=pics/email_middle.gif><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
<tr>
<td width=562 valign=top class=style3>Dear $streiidname </td>
</tr>
<tr>
  <td valign=top class=style3>Congratulations! You have received a Expressed interest from $strsitename</td>
</tr>
<tr>
<td valign=top class=style3>Your Profile on $strsitename has been viewed and Some one has sent expressesd interest to you<br>
Kindly logon to $strsitename and accept or decline the message. </td>
</tr>
<tr>
<td valign=top class=style2>You are receiving this mail as a registered member of $strsitename. This is a computer auto generated message. Please do not Reply.</td>
</tr>
</table></td>
</tr>
<tr>
<td><img src=pics/email_bottom.gif width=600 height=18></td>
</tr>
</table>
</body>
</html>
		";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:'.$from."\r\n"
		.'Reply-To: $to'."\r\n";
		$success = mail($to,$subject, $message, $headers); 
	 }	
	
	
?>



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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Express Interest   </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="450" border="0" align="center" cellpadding="4" cellspacing="6" bgcolor="#DCE4F9" >
            <tr>
              <td width="54" height="35"><div align="center">
                    <div align="center">
                      <div align="center" class="Alert"><img src="pics/status_Answered.gif" width="30" height="23"><br>
                      </div>
                    </div>
              </div></td>
              <td width="362">You have successfully expressed interest to <? echo $streiid ?></td>
            </tr>
            
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
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
