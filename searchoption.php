<?php include("config.php"); ?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css"></HEAD>
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
<TD width="360" height="606" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Search Options </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="5" cellspacing="4" id="content">
      <tr>
        <td colspan="2">Our various search tools will make your partner search   much faster and easier. Go ahead and enjoy your search. </td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <?php 
$StrAction=$_GET['Action'];
if ($StrAction == "refine")
{
	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 bgcolor=#DFEA93 class=submenubox>";
	echo "<tr>";
	echo "<td class=Alert align=center><strong><img src=pics/warning.png border=0 align=absmiddle /> No Such Records Found</strong> </td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><ul class=Alert>";
	echo "<br>";
	echo "<li>There are no records matching records specified by you</li>";
	echo "<li>We recommend that you search again by modifying your search criteria. </li>";
	echo "<li>Try again our various search Option below.</li>";
	echo "<li> OR Try Simple Search Option below.</li>";
	echo "</ul></td>";
	echo "</tr>";
	echo "</table>";
}
?>
</div></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" class="afterloglightyellow1">
          <tr>
            <td height="20" colspan="2" bgcolor="#FAE8BC"><strong><a href="simplesearch.php" class="bodylink">Simple Search</a></strong> </td>
            </tr>
          <tr>
            <td width="25%" bgcolor="#F7F9F0"><div align="center"><img src="pics/searchlense.gif" width="28" height="28"></div></td>
            <td width="75%" bgcolor="#F7F9F0">Search based on the Minimal important criteria that you   would look for in a partner fastest way.</td>
          </tr>
        </table></td>
        <td><table width="100%" border="0" class="afterloglightyellow1">
          <tr>
            <td height="20" colspan="2" bgcolor="#FAE8BC"><strong><a href="adv_search.php" class="bodylink">Regular Search</a></strong> </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#F7F9F0"><div align="center"><img src="pics/advsearchlense.gif" width="36" height="41"></div></td>
            <td width="75%" bgcolor="#F7F9F0">The most comprehensive search that searches across all   criteria.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" class="afterloglightyellow1">
          <tr>
            <td height="20" colspan="2" bgcolor="#FAE8BC"><strong><a href="keyword_search.php" class="bodylink">Keyword Search</a></strong> </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#F7F9F0"><div align="center"><img src="pics/keywordsearchlense.gif" width="38" height="35"></div></td>
            <td width="75%" bgcolor="#F7F9F0">Enter a word related to your search. For e.g. enter<strong> Software Professional </strong>.</td>
          </tr>
        </table></td>
        <td><table width="100%" border="0" class="afterloglightyellow1">
          <tr>
            <td height="20" colspan="2" bgcolor="#FAE8BC"><strong><a href="edu_search.php" class="bodylink">Educational  Search</a></strong> </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#F0F0F0"><div align="center"><img src="pics/searchlense.gif" width="28" height="28"></div></td>
            <td width="75%" bgcolor="#F7F9F0">Search and locates members who are finished higher education that you would look for in a partner. </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" class="afterloglightyellow1">
          <tr>
            <td height="20" colspan="2" bgcolor="#FAE8BC"><strong><a href="occu_search.php" class="bodylink">Occupational Search </a></strong> </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#F7F9F0"><div align="center"><img src="pics/searchlense.gif" width="28" height="28"></div></td>
            <td width="75%" bgcolor="#F7F9F0">Search based on the Occupation criteria that you   would look for in a partner.</td>
          </tr>
        </table></td>
        <td><table width="100%" border="0" class="afterloglightyellow1">
          <tr>
            <td height="20" colspan="2" bgcolor="#FAE8BC"><strong><a href="id_search.php" class="bodylink">Matrimony ID Search </a></strong> </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#F0F0F0"><div align="center"><img src="pics/idsearchlense.gif" width="46" height="28"></div></td>
            <td width="75%" bgcolor="#F7F9F0">Enter Matrimony ID directly helps you to view the profile of a particular ID.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="50%">&nbsp;</td>
        <td width="50%">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table></TD>
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
