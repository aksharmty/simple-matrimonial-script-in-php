<?php include('protect.php'); ?>
<?php
include('../dbconnect.php');
include("../config.php"); 

$strid = $_GET['ID'];
$strphoto1 = $_GET['delphoto'];
$stremail = $_GET['email'];
$strname = $_GET['name'];

	// DELETE HOROSCOPE FILE
	//$myFile = "../horosphotos/".$strphoto1;
	//unlink($strphoto1);
	
	
	// UPDATE HOROSCOPE STATUS from Yes to No
	$update1 = mysql_query("update register set HorosApprove=' ', HorosCheck='pics/horosnotavail.gif' where MatriID = '$strid'")
	or die("Could not update data because ".mysql_error());
	

	// HOROSCOPE UnAPPROVED / DELETE INFORM MESSAGE TO  MEMBER 

$to = $stremail;
$strsitename = $info['Webname'];
$logo = $info['Weblogopath'];
$from = $info['ContactEmail'];
$subject = "Your $strsitename Horoscope has been unapproved or Deleted.";
$message = "
		<html>
<style type=text/css>
<!--
.style4 {font-family: Arial; font-size:16px; font color=#FF6600 }
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
<td width=562 valign=top class=style3>Dear $strname,</td>
</tr>
<tr>
<td width=562 valign=top class=style3>Welcome to $strsitename,</td>
</tr>
<tr>
<td valign=top class=style3><p>Thank you for choosing our matrimony services to find your life partner.</p>
<p>This is to inform you that, your Horoscope has been UnApproved or Deleted.</p>
<p>Kindly Upload/Add the Horoscope again.</p>
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
		




	
	 print "<script>";
     print " self.location='unapprove_horos_confirm.php?Action=UnApproved';"; // Comment this line if you don't want to redirect
     print "</script>";
	
	//header('location:approve_photo1.php?Action=UnApproved ');
?>