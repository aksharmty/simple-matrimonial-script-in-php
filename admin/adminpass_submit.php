<?php include('protect.php'); ?>
<?php
include '../dbconnect.php'; 
$strpass = $_POST['txtcp'];
$updateadminpass = mysql_query("UPDATE adminlogin SET adminpassword ='$strpass' WHERE id='1' ");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Set Admin Password</title>
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
        <td width="80%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
            <td class="headertext">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%"><span class="HeadText1"><img src="images/icon29.gif" width="19" height="16" /></span></td>
            <td width="97%" class="headertext">SET ADMIN PASSWORD </td>
          </tr>
        </table>
          <br />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center" class="smalltextgrey">
                  <div align="left" class="smalltextred"></div>
              </div></td>
            </tr>
          </table>
          <p>&nbsp;</p>
		    
        
		  <table width="90%" border="0" align="center" cellpadding="3" cellspacing="3" class="blackbox">
            <tr>
              <td width="40%">&nbsp;</td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">Admin Password has been changed Success. </div></td>
              </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              </tr>
          </table>
		
		  <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
