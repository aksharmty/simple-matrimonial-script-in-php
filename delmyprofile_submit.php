<?php include("config.php"); ?>
<?php
//include('dbconnect.php'); 

$strmatriid = $_POST['hidid'];
$strmememail = $_POST['hidemail'];
$strreason = $_POST['reason'];
$strsitename = $info['Webname'];


	/////////////////// SEND PROFILE DELETE MESSAGE TO ADMIN  //////////////////////////////////////////////	
		
			
		$to = $info['ContactEmail'];
		$from = $strmememail;
		$subject = "Hi admin Please delete my profile from  ".$strsitename;
		$message = "
		<html>
		<style type=text/css>
		<!--
		.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
		-->
		</style>
		<body>	
			<table width=317 border=0cellpadding=2 cellspacing=2>
			<tr>
			<td colspan=2><span class=style3>Member's Profile Removal confirm message from $strsitename</span> </td>
			</tr>
			<tr>
			<td width=108><span class=style3>MatriID : </span></td>
			<td width=168><span class=style3>$strmatriid </span></td>
			</tr>
			<tr>
			<td><span class=style3>Reason : </span></td>
			<td><span class=style3>$strreason</span></td>
			</tr>
			</table>
		</body>
		</html>
		";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:'.$strmememail."\r\n"
		.'Reply-To: $to'."\r\n";
		$success = mail($to,$subject, $message, $headers); 
		
	 print "<script>";
     print " self.location='delmyprofile_confirm_msg.php?action=success';"; // Comment this line if you don't want to redirect
     print "</script>";
	
?>
