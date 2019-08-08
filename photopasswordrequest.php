<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>
<?
$strmatriid = $_GET['MatriID'];
$strmsgid = $_GET['lev'];
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
    <td width="30%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Password Request Form </strong></div></td>
    <td width="70%">&nbsp;</td>
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
        <td><table width="472" border="0" align="left" cellpadding="2" cellspacing="2" class="submenubox">
          <tr>
            <td height="19" colspan="4" bgcolor="#F3F7D2"><em>Request Photo Password from <span class="style6"><? echo $strmatriid ?>
                  <input name="txthidid" type="hidden" id="txthidid" value="<? echo $strmatriid ?>" />
            </span></em></td>
          </tr>
          <tr>
            <td height="25" colspan="4" valign="middle"><div align="center">
                <table width="388" border="0" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><div align="left">
                      <input name="reqmsg" type="radio" value="1" checked="checked" />
                    </div></td>
                    <td> <div align="left">We found your profile to be a good match. Please send me Photo password to proceed further.</div></td>
                  </tr>
                  <tr>
                    <td width="28"><div align="left">
                      <input name="reqmsg" type="radio" value="2" />
                    </div></td>
                    <td width="283"> <div align="left">I am interested in your profile. I would like to view photo now, send me password.</div></td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="4" valign="middle"><div align="center" class="textnormal style8">
                <div align="left"></div>
            </div></td>
          </tr>
          <tr>
            <td width="16">&nbsp;</td>
            <td width="114"><div align="right">Your Matri ID : </div></td>
            <td width="149"><input name="txtsendid1" type="text" class="forminput" id="txtsendid1" value="<? echo $_SESSION['matriid'] ?>" readonly="true" /></td>
            <td width="191"><input name="Submit" type="image" value="Submit" src="pics/send-request.gif" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">&nbsp;</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
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

