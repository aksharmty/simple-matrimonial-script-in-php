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
  $_SESSION['ppp'] = $row['PhotoprotectPassword'];
  $_SESSION['password'] = $row['ConfirmPassword'];
  }
  //mysql_close($con);


//|||||||||||||||| END CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\
?>


<?php
//||||||||||||||||||||||| IF PAID MEMBERSHIP EXPIRED THEN UPDATE MEMBERSHIP INTO ACTIVE ||||||||||||||| \\ 
$checkmem = mysql_query("SELECT MatriID, Memshipexpirydate, DATEDIFF( CURRENT_DATE, Memshipexpirydate ) AS expdays
FROM register WHERE MatriID='$strid' ");
while($row = mysql_fetch_array($checkmem))
		{
			
			$Strexpdays=$row['expdays'];
			
			if ($Strexpdays >1)
			{
			$updatemem = mysql_query("UPDATE register SET Status ='Active' WHERE MatriID='$strid' ");
			}
			
			 
		} 
?>




<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
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
<TD width="180" height="303" valign="top" bgcolor="#e3edf6">
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



  <img src="<?php echo $row['Photo1']?>" width="150" height="155"" />

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
                  </tbody>
                </table>
              </fieldset></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>
			  
			   <?php include("myint_inc.php");?>
			  <?php include("mymessage_inc.php");?>
			  
			  </td>
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
