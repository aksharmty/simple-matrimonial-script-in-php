<?php include('protect.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Admin panel</title>
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
        <td width="80%"><table width="100%" height="400" border="0" cellpadding="2" cellspacing="1" id="content">
          <tr>
            <td colspan="4" valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><div align="center" class="headertext">
              <div align="left"><strong>ADMIN MAIN CONTROL </strong></div>
            </div></td>
            </tr>
          <tr>
            <td colspan="2" valign="top" class="HeadText1">&nbsp;</td>
            <td width="3%" valign="top">&nbsp;</td>
            <td width="57%" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="15" colspan="2" valign="top" class="HeadText1"><strong>Site Configuration </strong></td>
            <td colspan="2" valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td height="15" valign="top" class="HeadText1"><img src="images/icon24.gif" width="19" height="16" /></td>
            <td height="15" valign="top" class="HeadText1"><a href="siteconfig.php" class="Lightblue">Web Settings </a></td>
            <td valign="top"><img src="images/members.gif" width="16" height="16" /></td>
            <td valign="top"><span class="HeadText1"><a href="admin-edit-plans.php" class="Lightblue">Edit Membership Plans </a></span></td>
          </tr>
          <tr>
            <td height="15" valign="top" class="HeadText1"><img src="images/icon29.gif" width="19" height="16" /></td>
            <td height="15" valign="top" class="HeadText1"><a href="setadminpassword.php" class="Lightblue">Set Admin Password </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="15" colspan="2" valign="top" class="HeadText1">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="15" colspan="2" valign="top" class="HeadText1"><strong>Members Approval </strong></td>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Members Photo Approval </strong></span></td>
            </tr>
          <tr>
            <td width="3%" height="18" valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
            <td width="37%" valign="top"><a href="approve_inactive_to_active.php" class="Lightblue">Approve Inactive to Active </a>
			<?php
				//////////// NEW INACTIVE ARRIVALS
				$NewIA = mysql_query(" SELECT Count(MatriID) as TotnewIA FROM register  where Status='InActive' ") 
				or die(mysql_error()); 
				$NIA = mysql_fetch_array( $NewIA);
				if ($NIA['TotnewIA'] == 0) {
				}
				else {
				echo "<img src=images/ball.gif>"; }
				?>
			
			</td>
            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
            <td valign="top"><a href="approve_photo1.php" class="Lightblue">Photo 1 Approval </a>
				<span class="smalltextred">
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
            <td valign="top"><img src="images/icon15.gif" width="19" height="16" /></td>
            <td valign="top"><a href="approve_active_to_paid.php" class="Lightblue">Approve Active to Paid </a></td>
            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
            <td valign="top"><a href="approve_photo2.php" class="Lightblue">Photo 2 Approval </a>
			
			<span class="smalltextred">
				<?
				//////////// NEW PHOTO2 ARRIVALS
				$Newphoto2 = mysql_query(" SELECT Count(MatriID) as Totnewphoto2 FROM register  WHERE Photo2 <> 'nophoto.gif' and Photo2Approve='No' ") 
				or die(mysql_error()); 
				$NP2 = mysql_fetch_array( $Newphoto2);
				if ($NP2['Totnewphoto2'] == 0) {
				}
				else {
				echo "<img src=images/ball.gif>"; }
				?>			
				</span>
			
			</td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icom34.gif" width="16" height="16" /></td>
            <td valign="top">
			<a class="Lightblue" href="approve_paid_to_featured.php">Approve 
			Paid Members to Featured Member </a></td>
            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
            <td valign="top"><a href="approve_photo3.php" class="Lightblue">Photo 3 Approval </a>
			
			<span class="smalltextred">
				<?
				//////////// NEW PHOTO3 ARRIVALS
				$Newphoto3 = mysql_query(" SELECT Count(MatriID) as Totnewphoto3 FROM register  WHERE Photo3 <> 'nophoto.gif' and Photo3Approve='No' ") 
				or die(mysql_error()); 
				$NP3 = mysql_fetch_array( $Newphoto3);
				if ($NP3['Totnewphoto3'] == 0) {
				}
				else {
				echo "<img src=images/ball.gif>"; }
				?>			
				</span>
			
			</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Horoscope Approval </strong></span></td>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Successstory Approval </strong></span></td>
            </tr>
          <tr>
            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
            <td valign="top"><a href="approve_horos.php" class="Lightblue">Approve/UnApprove Horoscope </a>
			
			
			  <span class="smalltextred">
			  	<?php
				//////////// NEW HOROSCOPE ARRIVALS
				$Newhoros = mysql_query(" SELECT Count(MatriID) as Totnewhoros FROM register  WHERE HorosApprove='No' ") 
				or die(mysql_error()); 
				$NH = mysql_fetch_array( $Newhoros);
				if ($NH['Totnewhoros'] == 0) {
				}
				else {
				echo "<img src=images/ball.gif>"; }
				?>
			  </span></td>
            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
            <td valign="top"><a href="approve_ss.php" class="Lightblue">Approve Successstory </a></td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top"><a href="#" class="Lightblue"></a></td>
            <td valign="top"><img src="images/icon16.gif" width="19" height="16" /></td>
            <td valign="top"><a href="unapprove_ss.php" class="Lightblue">UnApprove/Delete Successstory </a></td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Renewal Membership </strong></span></td>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Assured Contact Allocation </strong></span></td>
            </tr>
          <tr>
            <td valign="top"><img src="images/checkmark.gif" width="20" height="18" /></td>
            <td valign="top"><a href="renew_expired_list.php" class="Lightblue">Renew Membership expired</a></td>
            <td valign="top"><img src="images/icon3.gif" width="19" height="16" /></td>
            <td valign="top"><a href="set_contact_allocate.php" class="Lightblue">Set Contacts Allocation </a></td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icom34.gif" width="16" height="16" /></td>
            <td valign="top"><a href="fourthcoming_renwals.php" class="Lightblue">Fourthcoming Renewals </a></td>
            <td valign="top"><img src="images/icon1.gif" width="19" height="16" /></td>
            <td valign="top"><a href="reset_contact_allocate.php" class="Lightblue">Reset Contacts Allocation </a></td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Members Report </strong></span></td>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Members Report </strong></span></td>
            </tr>
          <tr>
            <td valign="top"><span class="paratext"><img src="images/icon7.gif" width="19" height="16" /></span></td>
            <td valign="top"><a href="inactive_reports.php" class="Lightblue">InActive Members </a></td>
            <td valign="top"><img src="images/small_xlicon.gif" width="18" height="19" /></td>
            <td valign="top"><a href="excel_report.php" class="Lightblue">Members Report in Excel File </a></td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icon5.gif" width="19" height="16" /></td>
            <td valign="top"><a href="active_reports.php" class="Lightblue">Active Members </a></td>
            <td valign="top"><img src="images/icon28.gif" width="19" height="16" /></td>
            <td valign="top"><a href="sales_reports.php" class="Lightblue">Sales Reports </a></td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icon8.gif" width="19" height="16" /></td>
            <td valign="top"><a href="paid_reports.php" class="Lightblue">Paid Members </a></td>
            <td valign="top"><img src="images/icon10.gif" width="19" height="16" /></td>
            <td valign="top"><a href="allmem_reports.php" class="Lightblue">View all members </a></td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icom34.gif" width="16" height="16" /></td>
            <td valign="top"><a class="Lightblue" href="featured_reports.php">
			Featured Members</a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Delete Members</strong></span></td>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>News Letter </strong></span></td>
            </tr>
          <tr>
            <td valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
            <td valign="top"><a href="remove_Inactive_mem.php" class="Lightblue">Remove InActive Members </a></td>
            <td valign="top"><img src="images/icon21.gif" width="19" height="16" /></td>
            <td valign="top"><a href="emailsto_mem_compose.php" class="Lightblue">Send Emails to  Members </a></td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
            <td valign="top"><a href="remove_Active_mem.php" class="Lightblue">Remove Active Members </a><a href="remove_Inactive_mem.php" class="Lightblue"></a></td>
            <td valign="top"><img src="images/contact-us.gif" width="21" height="20" /></td>
            <td valign="top"><a href="groupmail_compose.php" class="Lightblue">Send Group Mails </a></td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>
            <td valign="top"><a href="remove_paid_mem.php" class="Lightblue">Remove Paid Members </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td colspan="2" valign="top"><span class="HeadText1"><strong>Database </strong></span></td>
            </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top"><img src="images/icon12.gif" width="19" height="16" /></td>
            <td valign="top"><a href="dbchk.php" class="Lightblue">Database CheckUp</a></td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
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
