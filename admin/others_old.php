<?php include('protect.php'); ?>

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
        <td width="80%"><table width="100%" height="411" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="15" colspan="4" valign="middle">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>
              <p>&nbsp;</p>
              <table width="75%" height="203" border="0" align="center" cellpadding="2" cellspacing="0" class="blackbox" id="content">
                
                <tr>
                  <td height="23" colspan="5" valign="top" bgcolor="#FBFBFB"><div align="center"><span class="error">OTHER SETTINGS </span></div></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="17" colspan="2" valign="top" class="H1Text">Delete Members </td>
                  <td colspan="2" valign="top" class="H1Text">News Letter </td>
                </tr>
                <tr>
                  <td width="4%" valign="top">&nbsp;</td>
                  <td width="4%" height="23" valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
                  <td width="49%" valign="top"><a href="mem_del_wish_list.php" class="Lightblue">Member's Delete Wishes List </a></td>
                  <td width="3%" valign="top"><img src="images/icon21.gif" width="19" height="16" /></td>
                  <td width="44%" valign="top"><a href="emailsto_mem_compose.php" class="Lightblue">Send Emails to  Members </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="24" valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="#" class="Lightblue">Remove InActive Members </a></td>
                  <td valign="top"><img src="images/contact-us.gif" width="21" height="20" /></td>
                  <td valign="top"><a href="groupmail_compose.php" class="Lightblue">Send Group Mails </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="20" valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="#" class="Lightblue">Remove Active Members </a></td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="20" valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="#" class="Lightblue">Remove Plan1 Members </a></td>
                  <td colspan="2" valign="top" class="H1Text">Database </td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="20" valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="#" class="Lightblue">Remove Plan2 Members </a></td>
                  <td valign="top"><img src="images/icon12.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="dbchk.php" class="Lightblue">Database CheckUp</a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="23" valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="#" class="Lightblue">Remove Plan3 Members </a></td>
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
