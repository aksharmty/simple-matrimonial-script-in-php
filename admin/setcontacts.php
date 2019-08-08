<?php include('protect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Set Contacts</title>
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
        <td width="80%"><table width="100%" height="411" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="15" colspan="4" valign="middle">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>
              <p>&nbsp;</p>
              <table width="68%" height="85" border="0" align="center" cellpadding="2" cellspacing="0" class="blackbox" id="content">
                
                <tr>
                  <td height="29" valign="top" bgcolor="#FBFBFB" class="H1Text">&nbsp;</td>
                  <td colspan="4" bgcolor="#FBFBFB" class="H1Text"><div align="center" class="error">SET CONTACTS </div></td>
                  </tr>
                
                <tr>
                  <td height="16" valign="top" class="H1Text">&nbsp;</td>
                  <td colspan="4" valign="top" class="H1Text">Assured Contact Allocation </td>
                  </tr>
                <tr>
                  <td width="5%" valign="top">&nbsp;</td>
                  <td width="5%" height="18" valign="top"><img src="images/icon3.gif" width="19" height="16" /></td>
                  <td width="47%" valign="top"><a href="set_contact_allocate.php" class="Lightblue">Set Contacts Allocation </a></td>
                  <td width="5%" valign="top"><img src="images/icon1.gif" width="19" height="16" /></td>
                  <td width="43%" valign="top"><a href="reset_contact_allocate.php" class="Lightblue">Reset Contacts Allocation </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="18" valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                </tr>
              </table>
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
