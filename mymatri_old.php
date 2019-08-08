<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?php
session_start();
///////////////////// THIS IS THE MAIN FILE FOR THE MEMBERS ////////////////////////////////////
include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
$member = mysql_query("SELECT *, MatriID,Name,Photo1,Profile,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%m-%Y') as lastlogindate, date_format(MemshipExpiryDate,'%d-%m-%Y') as memexpdate FROM register where MatriID='$strid' ");
////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php 
//|||||||||||||||| START CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\

  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
  while($row = mysql_fetch_array($memcontrol))
  {
  $_SESSION['matriid'] = $row['MatriID'];
  $_SESSION['name'] = $row['Name'];
  $_SESSION['gender'] = $row['Gender'];
  $_SESSION['status'] = $row['Status'];
  }
  //mysql_close($con);


//|||||||||||||||| END CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\
?>


<?php
//|||||||||||||||| COUNT EXPRESS SENT ||||||||||||||||||||||||\\
  $streisentsql = mysql_query("SELECT Count( eisender ) AS eisendTot FROM expressinterest WHERE eisender = '$strid' GROUP BY eisender LIMIT 0 , 30 ");
  while($row = mysql_fetch_array($streisentsql))
  {
  $streisent = $row['eisendTot'];
  }
////////////////////////////////////////////////////////////////
?>

<?php
//|||||||||||||||| COUNT EXPRESS RECEIVE ||||||||||||||||||||||||\\
  $streireceivesql = mysql_query("SELECT Count( eireceiver ) AS eireceiveTot FROM expressinterest WHERE eireceiver = '$strid' GROUP BY eireceiver LIMIT 0 , 30 ");
  while($row = mysql_fetch_array($streireceivesql))
 {
  $streireceive = $row['eireceiveTot'];
 }
////////////////////////////////////////////////////////////////
?>

<?php
//|||||||||||||||| COUNT EXPRESS INTEREST SENT ///PENDING STATUS\\\ ||||||||||||||||||||||||\\
  $strsendpendingsql = mysql_query("SELECT Count( eirec_accept ) AS eireceiv_pendingTot FROM expressinterest WHERE eisender = '$strid' AND eirec_accept = 'Pending' GROUP BY eirec_accept LIMIT 0 , 30 ");
 
  while($row = mysql_fetch_array($strsendpendingsql))
 {
  $strsendpending = $row['eireceiv_pendingTot'];
 }
////////////////////////////////////////////////////////////////
?>


<?php ///////////COUNT EXPRESS INTEREST SENT ///ACCEPT STATUS\\\ 
 $strsendacceptsql = mysql_query("select Count(eirec_accept) AS eireceiv_acceptTot from expressinterest Where eisender = '$strid' and eirec_accept='Accept' Group by eirec_accept LIMIT 0 , 30 ");
while($row = mysql_fetch_array($strsendacceptsql))
 {
  $strsendaccept = $row['eireceiv_acceptTot'];
 }
?>



<?php ///////////COUNT EXPRESS INTEREST SENT ///DECLINE STATUS\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 
$strsenddeclinesql = mysql_query("select Count(eirec_accept) AS eireceiv_declineTot from expressinterest Where eisender = '$strid' and eirec_accept='Decline' Group by eirec_accept  LIMIT 0 , 30 ");
 while($row = mysql_fetch_array($strsenddeclinesql))
 {
  $strsenddecline = $row['eireceiv_declineTot'];
 }
?>


<?php ////////COUNT EXPRESS INTEREST RECEIVED ///PENDING STATUS\\\ 

$strrecpendsql = mysql_query("select Count(eisender_accept) AS eisender_pendingTot from expressinterest Where eireceiver = '$strid' and eisender_accept='Pending' Group by eisender_accept LIMIT 0 , 30 ");


 while($row = mysql_fetch_array($strrecpendsql))
 {
  $strrecpend = $row['eisender_pendingTot'];
 }
?>



<?php 

////////COUNT EXPRESS INTEREST RECEIVED ///DECLINE STATUS \\\\\\\\\\\\\\\\\\\\\\\\\\\ 

$strrecdecsql = mysql_query("select Count(eisender_accept) AS eisender_declineTot from expressinterest Where eireceiver = '$strid' and eisender_accept='Decline' Group by eisender_accept LIMIT 0 , 30 ");

 while($row = mysql_fetch_array($strrecdecsql))
 {
  $strrecdec = $row['eisender_declineTot'];
 }
?>


<?php //////////////////////////////COUNT EXPRESS INTEREST RECEIVED ///ACCEPT STATUS\\\
$strrecacceptsql = mysql_query("select Count(eisender_accept) AS eisender_acceptTot from expressinterest Where eireceiver = '$strid' and eisender_accept='Accept' Group by eisender_accept LIMIT 0 , 30 ");

 while($row = mysql_fetch_array($strrecacceptsql))
 {
  $strrecaccept = $row['eisender_acceptTot'];
 }
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY class="body">
<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
 <?php  while($row = mysql_fetch_array($member)){ ?>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" >
      
      <tr>
        <td width="2236" colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tr>
              <td><fieldset class="fieldset">
                <legend class="bluetext"><img src="pics/myprofile-icontxt.gif" width="115" height="38" /><a href="payment_options.php"></a></legend>
                <table width="100%" border="0" cellspacing="0">
                  <tr>
                    <td width="150">
					
					
					<table width="150" height="150" border="0" align="center" class="submenubox" id=photo>
                      <tr>
                        <td>

<?php if($row['Photo1']== "nophoto.gif" )
{ ?>
<a href="addphoto.php" title="Add your Main Photo">
<img src="pics/Nophoto_big.gif" name="Mainphoto" width="150" height="155" border="0"  /></a>
<? }
else 
{ 
?>					



<img src="photoprocess.php?image=memphoto1/<?php echo $row['Photo1']?>&square=150&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php echo $row['Name']?>" border="0" style="padding:5px;background:gold;border:1px solid black;"/>

<? } ?></td>
                      </tr>
                    </table>					</td>
                    <td width="409" valign="top"><table width="98%" border="0" cellspacing="4" cellpadding="2">
                      <tr>
                        <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Name :
                          <strong><?php  echo $row['Name']?>
                          </strong> </td>
                        <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Matri ID: <span class="style6"> <a href='myprofile_m.php'></a> <strong>
                          <?php  echo $row['MatriID']?>
                        </strong></span></td>
                      </tr>
                      <tr>
                        <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Membership :
                          <?php  echo $row['Status']?>                        </td>
                        <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Created : <span class="Partext1">
                          <?php  echo $row['Regdate']?>
                        </span></td>
                      </tr>
                      <tr>
                        <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Looking :
                          <?php  echo $row['Looking']?>                        </td>
                        <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Last Login : <span class="Partext1">
                          <?php  echo $row['lastlogindate']?>
                        </span></td>
                      </tr>
                    </table>
					
<!-- only paid members -->
<?php if($row['Status'] != 'InActive' and  $row['Status'] != 'Active') { ?>                  
<table width="98%" border="0" cellspacing="4" cellpadding="2">
<tr>
<td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" />  No of Contacts  : 
<?php  echo $row['Noofcontacts']?>                          </td>
</tr>
<tr>
<td><span class="Partext1"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" />  </span>Membership Expiry on : 
<?php  echo $row['memexpdate']?>                          </td>
</tr>
</table>
<? } ?>
				  
					  
					  </td>
                  </tr>
                </table>
              </fieldset></td>
            </tr>
        </table>
		
<?php if($row['Status'] == 'Active' ) { ?>  		
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><img src="pics/paidbenefits-top.gif" width="588" height="14"></td>
</tr>
<tr>
<td background="pics/paidbenefits-mid.gif"><table width="95%" border="0" align="center" cellpadding="2" cellspacing="3">
<tr>
<td class="bigtext">Paid Member Benefits </td>
</tr>
<tr>
<td>Paid members have 10 times more chances of finding a life partner. <br />
<span class="h3r"><a href="membership.php">Become a paid member today</a></span> and also get 100% more benefits right away.</td>
</tr>
<tr>
<td><img src="pics/add-inter-bullet.gif" width="6" height="6"> Send/receive Unlimited Personalised 
Messages</td>
</tr>
<tr>
<td><img src="pics/add-inter-bullet.gif" width="6" height="6"> View the Verified contact phone numbers,Address
of members.</td>
</tr>
<tr>
<td><img src="pics/add-inter-bullet.gif" width="6" height="6"> Chat with a prospective partner.</td>
</tr>
</table></td>
</tr>
<tr>
<td><img src="pics/paidbenefits-bot.gif" width="588" height="18"></td>
</tr>
</table>
<? } ?>		
		
		</td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><fieldset >
                <legend><img src="pics/chklist-icontxt.gif" width="118" height="32" /></legend>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#ECF8FF">
                  <tbody>
                    <tr>
                      <td width="6%" height="18">&nbsp;</td>
                      <td width="10%">Photo :</td>
                      <td width="28%"><img src="pics/<? echo $row['photochecklist'] ?>"></td>
                      <td width="19%">Horoscope : </td>
                      <td width="37%"><img src="pics/<? echo $row['Horoschecklist'] ?>"></td>
                    </tr>
                    <tr>
                      <td><br /></td>
                      <td>Video :</td>
                      <td><img src="pics/<? echo $row['videochecklist'] ?>"></td>
                      <td>Photo Protect : </td>
                      <td valign="bottom">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </fieldset></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><fieldset class="fieldset">
                <legend class="bluetext"><img src="pics/mymsg-icontxt.gif" width="146" height="32" /></legend>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
                  <tbody>
                    <tr>
                      <td width="2%" height="18"><div align="center" class="bluesubtitles"></div></td>
                      <td colspan="2" class="h3r"> Express Interest Received 
(<?php if (empty ($streireceive)) { print  "0"; } else { print $streireceive;} ?>)						</td>
                      <td colspan="2"><span class="h3r">Express Interest Sent 
                        (<?php if (empty ($streisent)) { print  "0"; } else { print $streisent;} ?>)</span></td>
                      <td width="2%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><br /></td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="express_received_acceptedlist.php">Accepted</a> (<?php if (empty ($strrecaccept)) { print  "0"; } else { print $strrecaccept;} ?>) </td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="express_sent_Acceptlist.php">Accepted</a> (<?php if (empty ($strsendaccept)) { print  "0"; } else { print $strsendaccept;} ?>) </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="express_received_declinedlist.php">Declined</a> (<?php if (empty ($strrecdec)) { print  "0"; } else { print $strrecdec;} ?>) </td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="express_sent_declinelist.php">Declined</a> (<?php if (empty ($strsenddecline)) { print  "0"; } else { print $strsenddecline;} ?>) </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="verdana"><span style="FLOAT: right"></span></td>
                      <td colspan="2" class="verdana"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="express_received_pendinglist.php">Pending</a> (<?php if (empty ($strrecpend)) { print  "0"; } else { print $strrecpend;} ?>) </td>
                      <td colspan="2" class="verdana"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="express_sent_pendinglist.php">Pending</a> (<?php if (empty ($strsendpending)) { print  "0"; } else { print $strsendpending;} ?>)</td>
                      <td class="verdana">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td width="29%" align="right">&nbsp;</td>
                      <td width="22%" align="right">&nbsp;</td>
                      <td width="20%" align="right">&nbsp;</td>
                      <td width="25%" align="right">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Personalized Message Received</span></div></td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Personalized Message Sent</span></div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="inbox_msg.php">Inbox</a> () </div></td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="sent_msg.php">Sent</a> () </div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right">&nbsp;</td>
                      <td colspan="2" align="right">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Photo Protect Password Requesters</span></div></td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Received Photo Protect Password </span></div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="Pp_inbox_msg.php">Inbox</a> () </div></td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="Pp_Received_msg.php">Received Photo Password</a> () </div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </fieldset></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
  <?php } mysql_close($con); ?>
  <p>&nbsp;</p></TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
