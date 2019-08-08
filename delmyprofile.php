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
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

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
          <td><p class="normaltext">&nbsp;</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center">
            <table width="497" border="0" cellpadding="1" cellspacing="1" class="errorMessageBox">
              <tr>
                <td colspan="2"><div align="center" class="Alert"><strong>Please Confirm the Profile Delete </strong></div></td>
              </tr>
              <tr>
                <td width="285"><div align="right"><a href="delmyprofile_confirm.php?action=confirm"><img src="pics/yes.gif" width="34" height="16" hspace="10" vspace="10" border="0"></a></div></td>
                <td width="286"><div align="left"><a href="mymatri.php"><img src="pics/no.gif" width="34" height="16" hspace="10" vspace="10" border="0"></a></div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
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
