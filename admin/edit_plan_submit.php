<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 


$str_pdn = $_POST['txtpdn'];
$str_noc = $_POST['txtnoc'];
$str_pd = $_POST['txtpd'];
$str_pa = $_POST['txpa'];
$strpid = $_POST['txtpid'];

$update1 = mysql_query("update membershipplan set plandisplayname ='$str_pdn',plannoofcontacts='$str_noc',planduration='$str_pd',planamount='$str_pa' WHERE planid= '$strpid' ");
	


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
<!-- 
function win(){
window.opener.location.href="admin-edit-plans.php";
self.close();
//-->
}
</SCRIPT>
<body>
<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	
	
	<table width="100%" height="387" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	
      <tr>
        <td width="3%">&nbsp;</td>
        <td colspan="2"><div align="center"></div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="33%" class="Partext1">&nbsp;</td>
        <td width="64%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="Partext1">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" class="Partext1"><div align="center">Plan Changed Successful. </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="Partext1">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
        </tr>
		
    </table>
	
	
	</td>
  </tr>
</table>

</body>
</html>
