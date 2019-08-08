<?php include('protect.php'); ?>
<?php
include('../dbconnect.php'); 
//include('../config.php'); 
if(!$_POST['chkapprove'])
{
			//echo "You did not select";
			header('location:approve_inactive_to_active.php?Action=not check');
}


	foreach($_POST["chkapprove"] AS $val)
	{
	// UPDATE STATUS from InActive to Active
	$update1 = mysql_query("update register set status='Active' where matriid IN ('$val')")
	or die("Could not update data because ".mysql_error());
	}

foreach($_POST["chkapprove"] AS $val)
{
	// SEND ACTIVE EMAIL ALERTS TO MEMBERS
	//select all email addresses
	$sql = "SELECT * FROM register,siteconfig where MatriID  IN ('$val');";
	$result=@mysql_query($sql);
	
	//loop thru results and send the mail
	//while(list($ConfirmEmail)=@mysql_fetch_row($result ))
	while ($row = mysql_fetch_array($result)) 
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
		$subject = "Your profile on $website has been activated";
			
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
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>Congratulations!   Your profile on $webfriendlyname has been validated and activated. You are now   ready to search and contact millions of validated profiles for FREE.<br />
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
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
      <tr>
        <td colspan="2"><?php include("adminheader.php");?></td>
      </tr>
      <tr>
        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>
        <td width="80%"><table width="100%" height="400" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><div align="center"></div></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>
              <table width="500" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC" class="GreenBox">
                <tr>
                  <form name="form1" id="form1" method="post" action="login_submit.php" onsubmit="return memloginvalidate()">
                    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                          <td colspan="3" class="smalltextgrey"><div align="center"><strong>APPROVE CONFIRMATION </strong></div></td>
                        </tr>
                        <tr>
                          <td width="3">&nbsp;</td>
                          <td width="464" class="HeadText1"><div align="center" class="smalltextred">Profiles approved successful and confirmation mail sent successful. </div></td>
                          <td width="5">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>                            <?php 
						  foreach($_POST["chkapprove"] AS $val)
						  {
						 // echo "$val";
						  echo " <img src=images/redt.gif width=14 height=11 /> <a href=viewprofile.php?ID=$val> $val <a>- Approved Success <br><hr> ";

						  } ?>						  </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                    </table></td>
                  </form>
                </tr>
              </table>              
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p align="center">&nbsp;</p></td>
            </tr>
          
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
