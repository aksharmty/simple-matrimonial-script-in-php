<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php
session_start();
include('dbconnect.php');
$strop = md5($_POST['txtop']);
// CHECK IF OLD PASSWORD IS CORRECT OR NOT
if ($_SESSION['password'] == $strop) {

$strcp = md5($_POST['txtcp']);
$strid = $_SESSION['matriid'];
$update1 = mysql_query("UPDATE register SET�ConfirmPassword='$strcp' WHERE MatriID = '$strid' ")
or die("Could not update data because ".mysql_error());
} else {
	 print "<script>";
     print " self.location='changepassword.php?action=wrong old password';"; // Comment this line if you don't want to redirect
     print "</script>";
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
<TABLE width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
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
<TD width="180" height="303" valign="top" >
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Change Password </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>
	   <form name="signupForm" id="signupForm" action="changepassword_submit.php" method="post"  onSubmit="return Check_form();"> 
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center">Your New Password has been Changed Successfully. </div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
      </table>
	  </form>
	  </td>
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
