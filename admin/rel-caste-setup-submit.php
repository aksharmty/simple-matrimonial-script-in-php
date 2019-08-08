<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 

// Remove HTML tags
$_POST['Religion']= strip_tags($_POST['Religion']);
$_POST['Caste']= strip_tags($_POST['Caste']);

// check if the caste is already exist
$check = "select caste from caste where caste = '".$_POST['Caste']."';"; 
$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry); 
if ($num_rows != 0) { 
 print "<script>";
     print " self.location='rel-caste-setup.php?Action=Exists';"; // Comment this line if you don't want to redirect
     print "</script>";
} 
else 
{
$insert = mysql_query("insert into caste (religion_id,caste) values ('".$_POST['Religion']."','".$_POST['Caste']."')")
or die("Could not insert data because ".mysql_error());
}
 	 print "<script>";
     print " self.location='rel-caste-setup.php?Action=Success';"; // Comment this line if you don't want to redirect
     print "</script>";

?>


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
        <td width="80%"><table width="100%" height="450" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
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
