<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>
<?
$strtoid = $_GET['Toid'];
$strmsgid = $_GET['MsgID'];

$result = mysql_query("SELECT * FROM receivemessage Where rid = '$strmsgid' ");

 
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
    <td width="38%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;</div></td>
    <td width="62%">&nbsp;</td>
  </tr>
</table>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<form action="reply_send_msg_submit.php" method="post" name="form">
	  <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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

