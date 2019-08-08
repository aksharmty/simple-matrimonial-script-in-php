<?php include("config.php"); ?>
<?php
include('dbconnect.php'); 

$str_yourname = strip_tags($_POST['yourname']);
$str_youremail = strip_tags($_POST['youremail']);
$str_fname = strip_tags($_POST['friendname']);
$str_fmail = strip_tags($_POST['friendemail']);

$str_sitename = $info['Webname'];


	/////////////////// REFER  //////////////////////////////////////////////	
		
			
		$to = $str_fmail;
		$from = $str_youremail;
		$subject = "Refer-A-Friend message from ".$str_yourname;
		$message = "
		<html>
		<style type=text/css>
		<!--
		.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
		-->
		</style>
		<body>
		<table width=\"600\" border=\"0\" cellspacing=\"0\"> 
		<tr>
		<td>
		Hello $str_fname <br>
		I would like to refer you the site $str_sitename <br>
		<b>Advantage</b> <br>
		FREE Search thousands of profiles, Send free personalized messages and <br>
		receive messages from members. <br>
		FREE upload/Protect your photo and horoscope <br>
		Total privacy - Control visibility of your photos <br>
		Search millions of profiles with photo.  <br>
		FREE Contact other profiles.  <br>
		and lot of more benefits to us.............. <br>
		$str_sitename is the only site we can contact partners FREE! Search now! <br>
		Visit now $str_sitename
		</td>
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
     print " self.location='referafriend.php?Action=success';"; // Comment this line if you don't want to redirect
     print "</script>";
	
?>
