<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>

<?php
	$StrRequesterid  = $_POST['txtsendid1'];
	$StrRequestermsg  = $_POST['reqmsg'];
	$StrReceiverid  = $_POST['txthidid'];
	$strdate = date('d-M-Y'); 
	$strresponse = "Pending";

if ($StrRequestermsg == "1")
{ 
$StrMsg = "We found your profile to be a good match. Please send me Photo password to proceed further.";
}
else if ($StrRequestermsg == "2")
{ 
$StrMsg = "I am interested in your profile. I would like to view photo now, send me password.";
}

$insert = mysql_query("insert into photoprotectrequesters (RequesterID,ReceiverID,PPReqmsg,ReqDate,ReceiverResponse) values ('$StrRequesterid','$StrReceiverid','$StrMsg','$strdate','$strresponse')")
or die("Could not insert data because ".mysql_error());
 	 


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $info['Title']; ?></title>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style6 {font-size: 11px; }
.style8 {	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<br />
<table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="38%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Password Request Form </strong></div></td>
    <td width="62%">&nbsp;</td>
  </tr>
</table>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<form action="photopass_send_request_submit.php" method="post" name="form">
	
	
	<table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td><div align="center">Your Request has been Sent to the member Successful. </div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Note : Your Request password has been sent to your email after your receiver 
			responded. </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
      </tr>
    </table>
	
	
	</form>
	</td>
  </tr>
</table>
<p></p>
</body>
</html>

