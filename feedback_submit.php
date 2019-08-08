<?php include("config.php"); ?>
<?php
//include('dbconnect.php'); 

$strname = $_POST['name'];
$stremail = $_POST['email'];
$strphone = $_POST['phone'];
$strcomments = $_POST['comments'];
$strrating = $_POST['rating'];

$strsitename = $info['Webname'];


	/////////////////// SEND EMAIL  //////////////////////////////////////////////	
		
			
		$to = $info['ContactEmail'];
		$from = $stremail;
		$subject = "Feedback message from ".$strsitename;
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
			<td colspan=2><span class=style3>Vistor's Feedback Message from $strsitename</span> </td>
			</tr>
			<tr>
			<td width=108><span class=style3>Name : </span></td>
			<td width=168><span class=style3>$strname</span></td>
			</tr>
			<tr>
			<td><span class=style3>Email : </span></td>
			<td><span class=style3>$stremail</span></td>
			</tr>
			<tr>
			<td><span class=style3>Pone : </span></td>
			<td><span class=style3>$strphone</span></td>
			</tr>
			<tr>
			<td><span class=style3>Comments : </span></td>
			<td><span class=style3>$strcomments</span></td>
			</tr>
			<tr>
			<td><span class=style3>Rating : </span></td>
			<td><span class=style3>$strrating</span></td>
			</tr>
			</table>
		</body>
		</html>
		";
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:'.$stremail."\r\n"
		.'Reply-To: $to'."\r\n";
		$success = mail($to,$subject, $message, $headers); 
		
	 print "<script>";
     print " self.location='shareexperience.php?Action=success';"; // Comment this line if you don't want to redirect
     print "</script>";
	
?>
