<?php
include('../dbconnect.php'); 
//select all email addresses
$sql = "SELECT ConfirmEmail FROM register where MatriID  IN ('IOM5001','IOM5002','IOM5003','IOM5004');";
$result=@mysql_query($sql);
 
//loop thru results and send the mail
while(list($ConfirmEmail)=@mysql_fetch_row($result ))
//while ($row = mysql_fetch_array($result)) 
{
			//set up the mail variables
			// mail($emailAddress,$to,$message,$otherHeaders);
			
			// SEND ACTIVE EMAIL ALERTS TO MEMBERS
			
			
			
			//$to =$confirmemail; 
			$to  = $row['ConfirmEmail']; 
			$from =  "info@fdsfsatrimony.com";
			$subject = "Active message from www.indiaonlinematrimony.com";
			
			$message = '
			<html>
			<body>
			<table width=\"300\" border=\"1\" cellspacing=\"0\"> 
			<tr><b>Get Quote Message from India Web Scripts.Com</b> </tr>
			<tr>
			<td><span class=style3>Name</span></td>
			<td><span class=style3></span></td>
			</tr>
			</table>
			</body>
			</html>
			';
			
			// To send HTML mail, the Content-type header must be set
			//$headers  = 'MIME-Version: 1.0' . "\r\n";
			//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers = 'From: webmaster@example.com' . "\r\n" .
    		'Reply-To: webmaster@example.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

			
			
			$success = mail($ConfirmEmail, $subject, $message, $headers); 
			//$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
}

?>