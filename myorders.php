<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
$memchk = mysql_query("SELECT * FROM paiddetails where Pmatriid='$strid' order by Paidid  desc");
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var win = null;
function newWindow(mypage,myname,w,h,features) {
  var winl = (screen.width-w)/2;
  var wint = (screen.height-h)/2;
  if (winl < 0) winl = 0;
  if (wint < 0) wint = 0;
  var settings = 'height=' + h + ',';
  settings += 'width=' + w + ',';
  settings += 'top=' + wint + ',';
  settings += 'left=' + winl + ',';
  settings += features;
  win = window.open(mypage,myname,settings);
  win.window.focus();
}
//  End -->
</script>
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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">My Orders  </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><div align="center"> <br>
        <table width="95%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" class="blackbox">
          <tr>
            <td width="18%" bgcolor="#ECECEC" class="paratext">Membership</td>
            <td width="13%" bgcolor="#ECECEC" class="paratext">Duration</td>
            <td width="16%" bgcolor="#ECECEC" class="paratext">No of Contacts</td>
            <td width="15%" bgcolor="#ECECEC" class="paratext">Amount</td>
            <td width="21%" bgcolor="#ECECEC" class="paratext">View Invoice </td>
          </tr>
          <?php  while($row = mysql_fetch_array($memchk)){ ?>
          <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
            <td class="Partext1"><?php  echo $row['Pplan']?></td>
            <td class="Partext1"><?php  echo $row['Pplanduration']?> days</td>
            <td class="Partext1"><?php  echo $row['Pnocontct']?></td>
            <td class="Partext1"><?php  echo $row['Pamount']?></td>
            <td class="Partext1"><a href="#null" title="Edit <?php  echo $row['planname']?>" onClick="newWindow('invoice.php?id=<?php  echo $row['Paidid']?>','','790','500')">Invoice </a> </td>
          </tr>
          <tr>
            <td colspan="5" background="images/dot.gif" height="2"></td>
          </tr>
          <? } ?>
        </table>
            <br>
            <br>
      </div></td>
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
