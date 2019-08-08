<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 
session_start();
include('dbconnect.php');

$update1 = mysql_query("update register set Photoprotect='',PhotoprotectPassword='' WHERE MatriID='".$_SESSION['username']."' OR ConfirmEmail = '".$_SESSION['username']."'");

?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css">
<title>Remove Photo Protect Form</title>

<style type="text/css">
<!--
.style2 {font-weight: bold}
.style3 {color: #FF0033; font-weight: bold; }
.style8 {color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<form action="#" method="post" name="form" id="form">
  <table width="570" height="400" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id=checkpass runat=server>
    
    <tr>
      <td valign="top"><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;<br>
</span>
        <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="39%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Remove Photo Protect </span></div></td>
            <td width="61%">&nbsp;</td>
          </tr>
        </table>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
          <tr>
            <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center">If the photo is protected is removed, then other members can visible your photo. </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center">
                    <table width="374" border="0" cellpadding="2" cellspacing="2" class="submenubox">
                      <tr>
                        <td width="312" height="19" bgcolor="#F3F7D2"><div align="center">Photo Protect has been removed Successfully. </div></td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center"><a href="javascript:window.close()">X Close Window</a></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          </tr>
        </table>
      <br></td>
    </tr>
  </table>
</form>
</body>
</html>
