<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>  
  
 <?php
$strid = $_SESSION['matriid'];
//|||||||||||||||| COUNT RECEIVED PERSONALIZED MESSAGES ||||||||||||||||||||||||\\
  $strrmsql = mysql_query("select Count(ToID) AS TotReceive from receivemessage Where ToID= '$strid' Group by ToID LIMIT 0 , 30 ");
  while($row = mysql_fetch_array($strrmsql))
  {
  $strrm = $row['TotReceive'];
  }
////////////////////////////////////////////////////////////////



// ||||||||||||| COUNT SENT PERSONALIZED MESSAGES ||||||||||||||||||||||////////////
$strsmsql = mysql_query("select Count(FromID) AS TotSent from sentmessage Where FromID= '$strid' Group by FromID LIMIT 0 , 30 ");
  while($row = mysql_fetch_array($strsmsql))
  {
  $strsm = $row['TotSent'];
  }


// ||||||||||||| COUNT RECEIVED Photo Password Requesters Message ||||||||||||||||||||||////////////
$strsmsql = mysql_query("select Count(ReceiverID) AS TotReceive from photoprotectrequesters  Where ReceiverID= '$strid' and ReceiverResponse = 'Pending' Group by ReceiverID LIMIT 0 , 30 ");
  while($row = mysql_fetch_array($strsmsql))
  {
  $strppr = $row['TotReceive'];
  }



  
?>

 
  
  <fieldset class="fieldset">
                <legend class="bluetext"><img src="pics/mymsg-icontxt.gif" width="146" height="32" /></legend>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
                  <tbody>
                    
                    <tr>
                      <td width="2%" align="right">&nbsp;</td>
                      <td width="51%" colspan="2" align="right"><div align="left"><span class="h3r">Personalized Message Received</span></div></td>
                      <td width="45%" colspan="2" align="right"><div align="left"><span class="h3r">Personalized Message Sent</span></div></td>
                      <td width="2%" align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="inbox_msg.php">Inbox</a> (<?php if (empty ($strrm)) { print  "0"; } else { print $strrm;} ?>) </div></td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="sent_msg.php">Sent</a> (<?php if (empty ($strsm)) { print  "0"; } else { print $strsm;} ?>) </div></td>
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
                      <td colspan="2" align="right"><div align="left"></div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="pp_inbox_msg.php">Inbox</a> (<?php if (empty ($strppr)) { print  "0"; } else { print $strppr;} ?>) </div></td>
                      <td colspan="2" align="right"><div align="left"></div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </fieldset>