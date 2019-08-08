<?php include('protect.php'); ?>
<?php
include('../dbconnect.php'); 
//include('../config.php'); 

	$recsno=$_GET["recsno"]; 
	$data=trim($recsno); 
	$ex=explode(" ",$data); 
	$size=sizeof($ex); 
	
	
	for($i=0;$i<$size;$i++) 
	{ 
		$id=trim($ex[$i]); 
		$strsubject = $_SESSION['subject'];
	$strbody = $_SESSION['body'];
	  //  $sql="delete from successstory where ID='$id'"; 
	   // $result=mysql_query($sql);
	  
	  	$sql = "SELECT * FROM register,siteconfig where MatriID  IN ('$id');";
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
		$subject = $strsubject;
			
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
<td width=562 rowspan=3 valign=top><p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>
Dear $name </br>
$strbody<br />
</p>
		<p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'>&nbsp;</p>
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
	
			
			
			mail($to, $subject, $message, $headers); 
			
		//echo "email send";	
	}
	   
		
	} 



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sending Email</title>
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
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon21.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">Sending Email to Members </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                      <div align="left" class="smalltextred"></div>
                  </div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>
           
			  <table width="500" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC" class="GreenBox">
                <tr>
                  <form name="form1" id="form1" method="post" action="login_submit.php" onsubmit="return memloginvalidate()">
                    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                          <td colspan="3" class="smalltextgrey"><div align="center"><strong>EMAIL SENDING CONFIRMATION  </strong></div></td>
                        </tr>
                        <tr>
                          <td width="3">&nbsp;</td>
                          <td width="464" class="HeadText1"><div align="center" class="smalltextred">&quot;Email has been sent successful &quot;</div></td>
                          <td width="5">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
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
