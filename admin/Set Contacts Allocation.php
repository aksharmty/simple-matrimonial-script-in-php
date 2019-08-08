<?php include('protect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Set Assured Contacts to Paid members</title>
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
            <td width="98%" height="22" valign="middle"><span class="headertext">SET ASSURED CONTACT ALLOCATIONS</span></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><br />
                <table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <td class="smalltextred">Every Paid member has an allocated ASSURED CONTACTS (ability to view contact details other profiles). The number varies for each plan as per your setting. Hence,using this option, a paid member can TOPUP the assured contacts </td>
                  </tr>
                </table>
              <br />
                <form action="add_contact_submit.php" method="post">
                  <table width="97%" border="0" align="center" cellpadding="1" cellspacing="1">
                    <tr>
                      <td width="14%"><span class="verdana">Enter Matri ID :</span></td>
                      <td width="86%"><input name="txtID" type="text" class="bluetext"  id="txtID" runat="server" />
                          <input name="Submit" type="submit" class="otmenu" value="Go"></td>
                    </tr>
                  </table>
                </form>
              <? $StrAction=$_GET['action'];
				if ($StrAction == "noteligible") { ?>
                <table width="75%" border="0" align="center" cellpadding="5" cellspacing="0">
                  <tr>
                    <td class="error">ERROR: </td>
                  </tr>
                  <tr>
                    <td class="error"><div align="left">Membership Expired of this Profile.<br />
                    </div></td>
                  </tr>
                  <tr>
                    <td class="error"><div align="left" class="Partext1">(OR)</div></td>
                  </tr>
                  <tr>
                    <td class="error"><div align="left">Member is not a Paid member. </div></td>
                  </tr>
                  <tr>
                    <td class="error"><div align="left" class="Partext1">(OR)</div></td>
                  </tr>
                  <tr>
                    <td class="error"><div align="left">You entered incorrect matri id. </div></td>
                  </tr>
                  <tr>
                    <td class="error"><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td class="error"><span class="orangesubtitles">
                        <div align="left">Can not Add Assured Contact to this profile </div></td>
                  </tr>
                </table>
              <? } ?>
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
