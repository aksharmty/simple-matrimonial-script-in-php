<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

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


<fieldset class="fieldset">
                <legend class="bluetext"><img src="pics/myint-icontxt.gif" width="200" height="32" /></legend>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
                  <tbody>
                    <tr>
                      <td width="2%" height="18">&nbsp;</td>
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
                  </tbody>
                </table>
              </fieldset>