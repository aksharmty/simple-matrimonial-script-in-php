<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>
<?
$strmsgid = $_GET['Msgid'];
$strrecepientid = $_GET['recipientID'];
$result = mysql_query("SELECT * FROM receivemessage Where rid = '$strmsgid'");

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
    <td width="38%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Received Message  </strong></div></td>
    <td width="62%">&nbsp;</td>
  </tr>
</table>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<? while($row = mysql_fetch_array($result))
	{  ?>

	<table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>From : </strong></td>
        <td><? echo $row['FromID'] ?></td>
        <td><div align="right">Received on : <? echo $row['SendDate'] ?></div></td>
      </tr>
      <tr>
        <td width="8%"><strong>Message : </strong></td>
        <td width="92%" colspan="2"><? echo $row['Msg'] ?></td>
      </tr>
      <tr>
        <td colspan="3"><div align="left">
		<img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> 
		<a href="reply_send_msg.php?MsgID=<? echo $strmsgid ?>&Toid=<? echo $strrecepientid ?>">Reply</a>
		</div></td>
      </tr>
    </table>
	<? } ?>
	</td>
  </tr>
</table>
<p></p>
</body>
</html>
