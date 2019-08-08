<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid = $_SESSION['matriid'];
$memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>




<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">

<script language="JavaScript">
<!--
function Check_form() {

if(document.form1.reason.value == "") {
alert("Kindly enter your reason.");
document.form1.reason.focus();
return false;
}


if(document.form1.reason.value.length > 500 ) {
alert("Please do not enter more than 500 chars. Please shorten your reason and submit again.");
document.form1.reason.focus();
return false;
}

return true;
}

//-->
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
  <table width="97%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td></td>
  </tr>
</table>
  <br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Delete My Profile  </span></div></td>
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
          <td><span class="Alert">Below is the form of delete your profile completly from the site. You must submit the reason to delete.</span></td>
        </tr>
        
        <tr>
          <td><p class="normaltext">&nbsp;</p></td>
        </tr>
        <tr>
          <td>
		  
		  <form name="form1" id="form1" action="delmyprofile_submit.php" method="post" onSubmit="return Check_form()">
		  <?php while($row = mysql_fetch_array($memcontrol)) { ?>
		  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="3">
            <tr>
              <td>Matri ID </td>
              <td class="bodysg"><? echo $row['MatriID']; ?>
                <input name="hidid" type="hidden" id="hidid" value="<? echo  $row['MatriID']; ?>">
                <input name="hidemail" type="hidden" id="hidemail" value="<? echo $row['ConfirmEmail']; ?>"></td>
            </tr>
            <tr>
              <td width="16%">Name</td>
              <td width="84%" class="bodysg"><? echo $row['Name']; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td class="bodysg"><? echo $row['ConfirmEmail']; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td class="bodysg"><? echo $row['Address']; ?></td>
            </tr>
            <tr>
              <td>Enter reason </td>
              <td><textarea name="reason" cols="40" rows="6" id="reason"></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="Submit" value="Delete my profile"></td>
            </tr>
          </table>
		  <? } ?>
		  </form>		  </td>
        </tr>
        
        <tr>
          <td height="20">
            </td>
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
