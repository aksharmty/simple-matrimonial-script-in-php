<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?php
session_start();
include('dbconnect.php');
$streimid = $_POST['txteimid'];

$update1 = mysql_query("UPDATE expressinterest SET eisender_accept = 'Accept', eirec_accept ='Accept' WHERE id = '$streimid' ")
or die("Could not update data because ".mysql_error());

/////////////////// SEND EXPRESS INTREST ACCEPTED ALERT EMAIL TO RECEIVER //////////////////////////////////////////////	
$strtoid = $_POST['txttoid'];
$reccontrol = mysql_query("SELECT * FROM register where MatriID='$strtoid' ");
  while($row = mysql_fetch_array($reccontrol))
  {
  
$streiidname = $row['Name'];
$strsitename = $info['Webname'];
$logo = $row['Weblogopath'];
$strloggedid = $_SESSION['matriid'];

		$to =  $row['ConfirmEmail'];
		$from = $info['ContactEmail'];
		$subject = "Matrimony ID $strloggedid has Accepted your interest on $strsitename.";
		
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
  <td valign=top class=style3>Congratulations! Your profile has been viewed and Accepted your expressed interest on $strsitename</td>
</tr>
<tr>
<td valign=top class=style3>Hi I am $strloggedid, I did see your profile on $strsitename and i accepted your expresses interest message.<br>
<span class=style3>
Kindly logon to $strsitename and contact $strloggedid and proceed furthur. 
<br>
Note: If you are a Paid member, You can contact and view $strloggedid's Address,Phone and email.
</span>
</td>
</tr>
<tr>
<td valign=top class=style2>You are receiving this mail as a registered member of $strsitename. This is a computer auto generated message. Please do not Reply.

</td>
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

<LINK href="style.css" rel="stylesheet" type="text/css">
<table width="97%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">Your Accept Message has been sent to the Member Successful. </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><a href="javascript:close();">Close Window </a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>


