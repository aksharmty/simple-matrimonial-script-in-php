<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php

// Remove HTML tags
include 'dbconnect.php'; 
$_POST['txtTo']= strip_tags($_POST['txtTo']);
$_POST['txtreply']= strip_tags($_POST['txtreply']);
$strdate = date('d-M-Y'); 


//////////////////STORE REPLY MESSAGE/////////////////////////////////////
$insert = mysql_query("insert into receivemessage (ToID,FromID,Msg,SendDate) values ('".$_POST['txtTo']."','".$_SESSION['matriid']."','".$_POST['txtreply']."','$strdate ')")
or die("Could not insert data because ".mysql_error());
///////////////////////////////////////////

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
    <td width="38%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Reply</strong></div></td>
    <td width="62%">&nbsp;</td>
  </tr>
</table>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	
	  <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Reply has been sent Successful. </div></td>
      </tr>
      
      
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
	
	
	</td>
  </tr>
</table>
<p></p>
</body>
</html>

