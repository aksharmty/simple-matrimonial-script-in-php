<?php include('protect.php'); ?>
<?php
include '../dbconnect.php'; 
$strid = $_POST['txtID'];
$strno = $_POST['txtcontact'];
$result = mysql_query("UPDATE register set Noofcontacts = (Noofcontacts + '$strno') WHERE MatriID = '$strid' ");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Set Assured Contacts to Paid members</title>
<style type="text/css">
<!--
.style4 {color: #FF0000;
	font-weight: bold;
}
.style4 {color: #000000}
-->
</style>
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
        <td width="80%" valign="top"><table width="100%" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="22" colspan="3" valign="middle"><img src="images/icon3.gif" width="19" height="16" /></td>
            <td width="98%" height="22" valign="middle"><span class="headertext">SET ASSURED CONTACT ALLOCATIONS </span></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <table width="75%" border="0" align="center" cellpadding="3" cellspacing="3" class="blackbox">
                  <tr>
                    <td bgcolor="#EAEAEA" class="paratext">CONFIRMATION</td>
                  </tr>
                  <tr>
                    <td class="Partext1"><div align="center">Set Contact Allocation Successful. </div></td>
                  </tr>
                  <tr>
                    <td class="Partext1">&nbsp;</td>
                  </tr>
                </table>
              <br />
                <br />
                <br />
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
