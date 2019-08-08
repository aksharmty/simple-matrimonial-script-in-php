<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>


<?
$strtoid = $_GET['MatriID'];
$strsenderid = $_SESSION['matriid'];
$strsenderppp = $_SESSION['ppp'];


/////////////////// SEND PHOTO PASSWORD TO THE MEMBER  //////////////////////////////////////////////	


$result = mysql_query("SELECT * FROM register,siteconfig where MatriID = '$strtoid' ");
while($row = mysql_fetch_array($result))
  {
$website = $row['Webname'];
$webfriendlyname = $row['WebFriendlyname'];
$logo = $row['Weblogopath'];
$strname = $row['Name'];
$to = $row['ConfirmEmail'];
$strmatriid = $row['MatriID'];
$strsitename = $info['Webname'];
$from = $info['ContactEmail'];

$subject = "Your request Photo Password arrived : $strsitename";
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
<td valign=top class=style3><p>Thank you for requesting member's Photo Password.</p>
<p>$strsitename, the Most Successful Matrimony Portal for Indians.</p>
<p>Heres your Request Photo Password<br>
  MatriID :$strsenderid<br>
  Photo Password : $strsenderppp
</p>
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
</table>
<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'></p>
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
	
//////////////// UPDATE //////////////////////////
$update1 = mysql_query("update photoprotectrequesters  set ReceiverResponse ='Sent' WHERE RequesterID = '$strtoid' ");
	
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $info['Title']; ?></title>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<br />
<table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="35%" background="pics/heading_bg.gif"><div align="left"><strong>&nbsp;&nbsp;Send Photo Password </strong></div></td>
    <td width="65%">&nbsp;</td>
  </tr>
</table>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	
	  <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Your Photo Password has been sent to this Member <?php echo $strtoid; ?> successfully. </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
      </tr>
    </table>
	
	
	</td>
  </tr>
</table>
<p></p>
</body>
</html>

