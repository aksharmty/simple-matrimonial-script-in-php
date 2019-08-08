<?php include('protect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<MMString:LoadString id="insertbar/formsTextfield" />
</title>
<!-- Copyright 2000, 2001, 2002, 2003 Macromedia, Inc. All rights reserved. -->
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
        <td width="80%"><table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="3%"><img src="images/icon24.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">SITE CONFGURATION SETTINGS </td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><form id="form1" name="form1" method="post" action="">
              <table width="553" border="0" align="left" cellpadding="2" cellspacing="2">
                <tr>
                  <td class="Partext1"><strong class="paratext">WebSite</strong></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="142" class="Partext1">Website Name <span class="smalltextred">*</span> </td>
                  <td width="397"><input name="txtwebsitename" type="text" id="txtwebsitename" maxlength="50" />
                    <span class="smalltextred">(http://www.example.com) </span></td>
                </tr>
                <tr>
                  <td class="Partext1">Website Friendly Name  <span class="smalltextred">*</span></td>
                  <td><input name="txtwebsitefriendlyname" type="text" id="txtwebsitefriendlyname" maxlength="50" />
                    <span class="smalltextred">(Example.Com) </span></td>
                </tr>
                <tr>
                  <td class="Partext1">Website Logo Path <span class="smalltextred">*</span></td>
                  <td><input name="txtwebsitelogopath" type="text" id="txtwebsitelogopath" maxlength="50" />
                    <span class="smalltextred">(http://www.example.com/images/logo.gif) </span></td>
                </tr>
                <tr>
                  <td class="Partext1">Website title <span class="smalltextred">*</span></td>
                  <td><input name="txtwebtitle" type="text" id="txtwebtitle" size="50" maxlength="100" />
                    <br />
                    <span class="smalltextred">(Example.com Matrimonials &ndash; Indian Matrimonial)</span></td>
                </tr>
                <tr>
                  <td class="Partext1">Meta Description </td>
                  <td><textarea name="txtwebmetadesc" cols="40" rows="3" id="txtwebmetadesc"></textarea></td>
                </tr>
                <tr>
                  <td class="Partext1">Meta Keyword </td>
                  <td><textarea name="txtwebmetakeywords" cols="40" rows="3" id="txtwebmetakeywords"></textarea></td>
                </tr>
                <tr>
                  <td class="Partext1">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="Partext1"><strong class="paratext">Database</strong></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="Partext1">Server  <span class="smalltextred">*</span></td>
                  <td><input name="txtdbserver" type="text" id="txtdbserver" />
                    <span class="smalltextred">(Localhost)</span> </td>
                </tr>
                <tr>
                  <td class="Partext1">Usrname  <span class="smalltextred">*</span></td>
                  <td><input name="txtdbusername" type="text" id="txtdbusername" />
                    <span class="smalltextred">(root)</span></td>
                </tr>
                <tr>
                  <td class="Partext1">Password  <span class="smalltextred">*</span></td>
                  <td><input name="txtdbpassword" type="text" id="txtdbpassword" /></td>
                </tr>
                <tr>
                  <td class="Partext1">Database Name  <span class="smalltextred">*</span></td>
                  <td><input name="txtdbname" type="text" id="txtdbname" /></td>
                </tr>
                <tr>
                  <td class="Partext1">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="paratext"><strong>Email Settings </strong></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="Partext1">From Email Address  <span class="smalltextred">*</span></td>
                  <td><input name="txtFromemail" type="text" id="txtFromemail" />
                    <span class="smalltextred">(info@example.com)</span></td>
                </tr>
                <tr>
                  <td class="Partext1">To Email Address  <span class="smalltextred">*</span></td>
                  <td><input name="txtToEmail" type="text" id="txtToEmail" />
                    <span class="smalltextred">(info@example.com)</span></td>
                </tr>
                <tr>
                  <td class="Partext1">Feedback Email </td>
                  <td><input name="txtFeedbackEmail" type="text" id="txtFeedbackEmail" />
                    <span class="smalltextred">(feedback@example.com)</span></td>
                </tr>
                <tr>
                  <td class="Partext1">Contact Us Email </td>
                  <td><input name="txtContactusemail" type="text" id="txtContactusemail" />
                    <span class="smalltextred">(enquiry@example.com)</span></td>
                </tr>
                <tr>
                  <td class="Partext1">Sales Email </td>
                  <td><input name="txtSalesEmail" type="text" id="txtSalesEmail" />
                    <span class="smalltextred">(sales@example.com)</span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="Submit" value="Submit" /></td>
                </tr>
              </table>
            </form></td>
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
