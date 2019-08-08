<?php include('protect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Approvals</title>
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
              <table width="68%" height="213" border="0" align="center" cellpadding="2" cellspacing="0" class="blackbox" id="content">
                
                <tr>
                  <td height="22" valign="top" bgcolor="#FBFBFB" class="H1Text">&nbsp;</td>
                  <td colspan="4" bgcolor="#FBFBFB" class="H1Text"><div align="center" class="error">APPROVALS</div></td>
                  </tr>
                <tr>
                  <td valign="top" class="H1Text">&nbsp;</td>
                  <td height="15" valign="top" class="H1Text">&nbsp;</td>
                  <td height="15" valign="top" class="H1Text">&nbsp;</td>
                  <td colspan="2" valign="top" class="H1Text">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top" class="H1Text">&nbsp;</td>
                  <td height="15" colspan="2" valign="top" class="H1Text">Members Approval </td>
                  <td colspan="2" valign="top" class="H1Text">Members Photo Approval </td>
                </tr>
                <tr>
                  <td width="5%" valign="top">&nbsp;</td>
                  <td width="5%" height="18" valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
                  <td width="47%" valign="top"><a href="approve_inactive_to_active.php" class="Lightblue">Approve Inactive to Active </a></td>
                  <td width="5%" valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
                  <td width="43%" valign="top"><a href="approve_photo1.php" class="Lightblue">Photo 1 Approval </a> <span class="smalltextred">
                    <?
				//////////// NEW PHOTO1 ARRIVALS
				$Newphoto1 = mysql_query(" SELECT Count(MatriID) as Totnewphoto1 FROM register  WHERE Photo1 <> 'nophoto.gif' and Photo1Approve='No' ") 
				or die(mysql_error()); 
				$NP1 = mysql_fetch_array( $Newphoto1);
				if ($NP1['Totnewphoto1'] == 0) {
				}
				else {
				echo "<img src=images/ball.gif>"; }
				?>
                  </span></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="19" valign="top"><img src="images/icon15.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="approve_active_to_paid.php" class="Lightblue">Approve Active to Paid </a></td>
                  <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="approve_photo2.php" class="Lightblue">Photo 2 Approval </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="19" valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="approve_photo3.php" class="Lightblue">Photo 3 Approval </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="19" valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" valign="top" class="H1Text">&nbsp;</td>
                  <td height="19" colspan="2" valign="top" class="H1Text">Horoscope Approval </td>
                  <td colspan="2" valign="top" class="H1Text">Successstory Approval </td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="19" valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="approve_horos.php" class="Lightblue">Approve/UnApprove Horoscope </a></td>
                  <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="approve_ss.php" class="Lightblue">Approve Successstory </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="19" valign="top">&nbsp;</td>
                  <td valign="top"><a href="#" class="Lightblue"></a></td>
                  <td valign="top"><img src="images/icon16.gif" width="19" height="16" /></td>
                  <td valign="top"><a href="unapprove_ss.php" class="Lightblue">UnApprove Successstory </a></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td height="19" valign="top">&nbsp;</td>
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
