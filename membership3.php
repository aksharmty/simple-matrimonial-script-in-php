<?php include("config.php"); ?>
<?php
$result = mysql_query("SELECT * from membershipplan ");
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
</style>
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
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Membership Schemes  </strong></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center" class="bodylink">
          <table cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
            <tbody>
              <tr>
                <td><div align="center"><strong><?php echo $info['WebFriendlyname']; ?> presents the following   Membership Schemes </strong><br />
                        <br />
                  </div>
                    <table width="95%" height="185" border="0" align="center" cellpadding="4" cellspacing="0" class="tbborder">
                      <tbody>
                        <tr>
                          <td width="15%" height="10" valign="center" bgcolor="#00A5F4" class="tborder"><p align="center"><strong>Packages</strong></p></td>
                          <td width="13%" height="10" valign="center" bgcolor="#00A5F4" class="tborder"><p align="center"><strong>Duration</strong></p></td>
                          <td width="22%" height="10" valign="center" bgcolor="#00A5F4" class="tborder"><strong>Contact Address </strong></td>
                          <td width="13%" height="10" valign="center" bgcolor="#00A5F4" class="tborder"><div align="center"><strong>Price</strong></div></td>
                          <td width="21%" height="10" valign="center" bgcolor="#00A5F4" class="tborder"><div align="center"><strong>Pay Now </strong></div></td>
                        </tr>
                        <tr bgcolor="#fffff4">
                          <td height="25"><div align="left"><strong>Free</strong></div></td>
                          <td bgcolor="#fffff4"><div align="center"><strong>Limited</strong></div></td>
                          <td bgcolor="#fffff4"><div align="center">Nil </div></td>
                          <td bgcolor="#fffff4"><div align="center">Nil</div></td>
                          <td bgcolor="#fffff4">&nbsp;</td>
                        </tr>
						
						<?php  while($row = mysql_fetch_array($result)){ ?>
                        <tr>
                          <td height="25" bgcolor="#fffff4"><div align="left"><font 
                        style="FONT-SIZE: 11px; COLOR: #1670ae; FONT-FAMILY: verdana"><b><span class="Partext1">
                            <?php  echo $row['plandisplayname']?>
                          </span></b></font></div></td>
                          <td bgcolor="#fffff4"><div align="center"><font 
                        style="FONT-SIZE: 11px; COLOR: #1670ae; FONT-FAMILY: verdana"><b>
                            <?php  echo $row['planduration']?>
&nbsp;days </b></font></div></td>
                          <td bgcolor="#fffff4"><div align="center">Yes</div></td>
                          <td bgcolor="#fffff4"><div align="center"><span class="Partext1">Rs.
                                <?php  echo $row['planamount']?>
                          </span></div></td>
                          <?php
if(!session_is_registered(myusername))
{
?>	
 <td bgcolor="#fffff4"><div align="center"><a href="login.php">Pay Now ! </a></div></td>
<?
}
else
{
?>
<td bgcolor="#fffff4"><div align="center"><a href="go_payment.php?plan=<?  echo $row['plandisplayname'] ?>">Pay Now ! </a></div></td>
<?
}
?>						
                        </tr>
						<? } ?>
                      </tbody>
                    </table>
                  <br />
                    <p align="center"><strong><br />
                      Comparison of membership schemes </strong></p>
                  <table width="95%" border="0" align="center" cellpadding="4" cellspacing="0" class="tborder">
                      <tbody>
                        <tr>
                          <td valign="top" width="192" bgcolor="#3366cc"><p class="style1">Services</p></td>
                          <td valign="top" width="73" bgcolor="#3366cc"><p class="style2">Diamond</p></td>
                          <td valign="top" width="59" bgcolor="#3366cc"><p><span class="style2">Gold </span></p></td>
                          <td valign="top" width="61" bgcolor="#3366cc"><p><span class="style2">Silver</span></p></td>
                          <td valign="top" width="88" bgcolor="#3366cc"><p class="style1">Free Member</p></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Interested Bride / Groom Addresses with verified phone number </p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>&nbsp;</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>&nbsp;</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>&nbsp;</p></td>
                          <td valign="top" width="88"><p>0</p></td>
                        </tr>
                        
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Featured Member Listing</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>No</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>No</p></td>
                          <td valign="top" width="88"><p>No</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Regular Matches Available Information over phone to Offline   Customers</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>No</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Printed profiles with Address  Photo and Horoscope</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>No</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Photo / Horoscope Upload </p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>No</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Top Placement</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>No</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>No</p></td>
                          <td valign="top" width="88"><p>No</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Protect Photo</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>Yes</p></td>
                        </tr>
                        
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Add Horoscope</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>Yes</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Add Video</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>Yes</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Send &amp; Receive personalized messages from members </p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>No</p></td>
                        </tr>
                        
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Book Mark Profiles</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>Yes</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>Yes</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>Yes</p></td>
                          <td valign="top" width="88"><p>Yes</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top" width="192" bgcolor="#f9f9f9"><p>Service Fee</p></td>
                          <td valign="top" width="73" bgcolor="#e4e4c9"><p>12.5%</p></td>
                          <td valign="top" width="59" bgcolor="#d2e9ff"><p>12.5%</p></td>
                          <td valign="top" width="61" bgcolor="#e6ffe6"><p>12.5%</p></td>
                          <td valign="top" width="88"><p>12.5%</p></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0033cc" colspan="5" height="1"></td>
                        </tr>
                      </tbody>
                    </table>
                  <p align="center"><br />
                    </p>
                  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="tborder">
                      <tbody>
                        <tr>
                          <td><strong><U>Payment Options</U></strong>
                              <ul>
                                <p>&nbsp;</p>
                                <p></p>
                                <p><br />
                              </ul></td>
                        </tr>
                      </tbody>
                    </table>
                  <br />
                    <table width="95%" border="0" align="center" cellpadding="4" cellspacing="0" class="tborder">
                      <tbody>
                        <tr>
                          <td bgcolor="#C0C0C0"><div align="left"><strong>Cash at our offices &ndash; List office   address with phone number </strong><br />
                          </div></td>
                        </tr>
                        <tr>
                          <td valign="center" align="middle" background="reddot.gif" colspan="3" height="1"></td>
                        </tr>
                        <tr>
                          <td valign="top">&nbsp;</td>
                          </tr>
                      </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
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
