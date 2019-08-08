<?php include('protect.php'); ?>
<?php
include '../dbconnect.php';
$str1 = $_POST['txtp1'];
$str2 = $_POST['txtp2'];
$str3 = $_POST['txtp3'];
$str4 = $_POST['txtp4'];
$str5 = $_POST['txtp5'];
$str6 = $_POST['txtp6'];
$str7 = $_POST['txtp7'];
$str8 = $_POST['txtp8'];
$str82 = $_POST['txtp82'];
$str9 = $_POST['txtp9'];
$str10 = $_POST['txtp10'];

// insert the data
$insert = mysql_query("insert into paiddetails (Pmatriid,Pname,Pemail,Paddress,Ppaymode,Pactivedate,Pplan,Pplanduration,Pnocontct,Pamount,Pbankdet) values ('$str1','$str2','$str3','$str4','$str5','$str6','$str7','$str82','$str8','$str9','$str10')")
or die("Could not insert data because ".mysql_error());
?>

<?php 

////////////////// UPDATE INTO REGISTER TABLE ////////////////////////

$strmid = $_POST['txtp1'];
//$stractivedate = $_POST['txtp6'];
//echo $str82;
$strexpdate = date('Y-m-d', strtotime(".$str82 days"));
$strplan = $_POST['txtp7'];
$strnoc = $_POST['txtp8'];
$update=mysql_query("Update register set Status='$strplan',MemshipExpiryDate='$strexpdate',Noofcontacts='$strnoc' where MatriID = '$strmid' ")
or die("Could not update data because ".mysql_error());

////////////////// PAID MEMBERSHIP MAIL SENDING TO MEMBER ////////////////////////
$sql = "SELECT * FROM register,siteconfig where MatriID = '$strmid');";
while ($row = mysql_fetch_array($sql)) 
	{
	
		//$to =$confirmemail; 
		$name  = $row['Name']; 
		$to  = $row['ConfirmEmail'];
		$matriid  = $row['MatriID'];
		$email  = $row['ConfirmEmail'];
		$pass = $row['ConfirmPassword'];
		//$strpass = md5($pass); 
		$website = $row['Webname'];
		$webfriendlyname = $row['WebFriendlyname'];
		$webtomail = $row['ToEmail'];
		$webfrommail = $row['Fromemail'];
		$logo = $row['Weblogopath'];
		
		$from =  $row['Fromemail'];  // website config From Email
		$subject = "Your Paid Membership on $website has been activated";
			
		$message = "	
		<html>
		<body>
		<table width='600' border='0' cellspacing='0' cellpadding='0'>
		<tr>
		<td background=$website/pics/email_top.gif width=600 height=22><img src=$logo border=0></td>
		</tr>
		<tr>
		<td background=$website/pics/email_middle.gif><table width=600 border=0 cellspacing=2 cellpadding=2>
		<tr>
		<td width=10>&nbsp;</td>
<td width=562 rowspan=3 valign=top><p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Dear $name </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Congratulations!   Your Paid Membership on $webfriendlyname has been activated. You are now  ready to search and contact millions of validated profiles.<br />
		<br />
		Log on to <a href='$website' target='_blank' rel='nofollow'>$webfriendlyname</a> now using the follwing information to find your dream partner.</p>
		<table width=382 border=0 align='center' cellpadding=2  cellspacing=0 bordercolor=#FF6600 rules=all style='BORDER-RIGHT: #FF6600 1px ridge; BORDER-TOP: #FF6600 1px ridge; BORDER-LEFT: #FF6600 1px ridge; BORDER-BOTTOM: #FF6600 1px ridge'>
		<tr>
		<td style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'><div align='left'>Login ID: $matriid (or) $email</div></td>
		</tr>
		
		</table>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>And while you   are on the site we strongly encourage you to use as many features. This way you   will understand how easy it is to use our site and more importantly find your   life partner. Some of the key features that you could straight away start using   are: </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'><strong>Upload  Photo</strong>: 90% of members look for profiles with photos. Don't miss out on this   chance. Add your photo now and increase your responses by 10 times. </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'><strong>Assured  Contact</strong>: Get your phone number validated for FREE and get a direct   connection to your life partner. </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'><strong>Add  video</strong>: Add video clipping to your profile for FREE and increase your   responses. </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Everybody   here at $webfriendlyname, wish you all the very best in your search for a   life partner. Should you require any further assistance, do not hesitate to call    our office  OR visit our 24/7 live support. OR send mail us to <a href='mailto:$webtomail'>$webtomail</a> </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Good luck in   your search for a life partner. </p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>With warm   regards,<br />
		Customer Support Manager. <br>
		$webfriendlyname </p>
		<p style='font:normal 10px Arial, MS Sans serif, tahoma;color:#000000;'>You are receiving this mail as a registered member of $webfriendlyname. This is a computer auto generated message. Please do not Reply . </p></td>
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
			//$headers  = 'MIME-Version: 1.0' . "\r\n";
			//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
	$headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 
	
	//$headers  = "From: $from\r\n"; 
   // $headers .= "Content-type: text/html\r\n"; 
			
			//$headers = "MIME-Version: 1.0rn"; 
   			//$headers .= "Content-type: text/html;charset=iso-8859-1"; 
    		//$headers  .= "From: $from\r\n"; 
			
			
			mail($to, $subject, $message, $headers); 
			
			
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
<!-- 
function win(){
window.opener.location.href="approve_active_to_paid.php";
self.close();
//-->
}
</SCRIPT>
<body>
<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	
	
	<table width="100%" height="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
	
      <tr>
        <td width="3%" >&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td colspan="2" rowspan="10" class="Partext1"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="21%"><div align="center" class="H1Text"><? echo $_POST['txtp1']; ?></div></td>
            <td width="79%"><div align="center"><span class="smalltextred">Paid Membership Activation Successful and <br />
  Confirmation mail has been sent Successful.</span> </div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        <td colspan="2">&nbsp;</td></tr>
      <tr>
        <td height="24" colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
      </tr>
    </table>
	
	
	</td>
  </tr>
</table>

</body>
</html>
