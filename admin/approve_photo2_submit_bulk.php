<?php include('protect.php'); ?>
<?php
include('../dbconnect.php'); 
//include('../config.php'); 
if(!$_POST['chkapprove'])
{
			//echo "You did not select";
			header('location:approve_photo2.php?Action=notcheck');
}


	foreach($_POST["chkapprove"] AS $val)
	{
	// UPDATE STATUS from InActive to Active
	$update1 = mysql_query("update register set Photo2Approve='Yes' where MatriID IN ('$val')")
	or die("Could not update data because ".mysql_error());
	}




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
        <td width="80%"><table width="100%" height="400" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><div align="center"></div></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>
              <table width="500" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC" class="GreenBox">
                <tr>
                  <form name="form1" id="form1" method="post" action="login_submit.php" onsubmit="return memloginvalidate()">
                    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                          <td colspan="3" class="smalltextgrey"><div align="center"><strong>APPROVE CONFIRMATION </strong></div></td>
                        </tr>
                        <tr>
                          <td width="3">&nbsp;</td>
                          <td width="464" class="HeadText1"><div align="center" class="smalltextred">Photo(s) approved Successful. </div></td>
                          <td width="5">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>                            <?php 
						  foreach($_POST["chkapprove"] AS $val)
						  {
						 // echo "$val";
						  echo " <img src=images/redt.gif width=14 height=11 /> <a href=viewprofile.php?ID=$val> $val's Photo <a>- Approved Success <br><hr> ";

						  } ?>						  </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                    </table></td>
                  </form>
                </tr>
              </table>              
              <p>&nbsp;</p>
              <p>&nbsp;</p>
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
