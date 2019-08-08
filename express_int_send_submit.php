<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?php
session_start();
include('dbconnect.php');
$strmsgno = $_POST['INTERESTMSG'];
$streiid = $_POST['txteiid'];
$streiidgen= $_POST['txteiidgen'];

//////////////// CHECK SAME GENDER EXPRESS INTEREST ///////////////////////////
if ($_SESSION['gender'] == $streiidgen) 
{

	 print "<script>";
     print " self.location='oppositegender_express_int_warn.php';"; // Comment this line if you don't want to redirect
     print "</script>";
}
///////////////////////////////////////////////////////////////////////////////
else if ($_SESSION['gender'] != $streiidgen)
{ 
		/////////////////////// SEND EXPESS INTEREST MESSAGE ///////////////////////////////////////////////
		if ($strmsgno == "1" )
		{
		$streimsg = "I am interested in your profile. If you are interested in my profile, please contact me.";
		}
		else if ($strmsgno == "2" )
		{
		$streimsg = "I have gone through your details and feel we have lot in common. Would sure like to know your opinion on this?";
		}
		else if ($strmsgno == "3" )
		{
		$streimsg = "You are someone special I wish to know better. Please contact me at the earliest.";
		}
		else if ($strmsgno == "4" )
		{
		$streimsg = "We found your profile to be a good match. Please contact us to proceed further.";
		}
		else if ($strmsgno == "5" )
		{
		$streimsg = "You are the kind of person we were searching for. Please send us your contact details.";
		}
		
		$strdate = date("d-m-Y");
		$streisender_accept= "Pending";
		$streirec_accept = "Pending";
		
		$sql = mysql_query("insert into expressinterest (eisender,eireceiver,eimsg,eisentdt,eisender_accept,eirec_accept) values ('".$_SESSION['matriid']."','".$_POST['txteiid']."','$streimsg','$strdate','$streisender_accept','$streirec_accept')") 
		or die("Could not insert data because ".mysql_error());
		
		print "<script>";
		print " self.location='ei_success_confirm.php?eiid=$streiid';"; // Comment this line if you don't want to redirect
		print "</script>";
}
///////////////////////////////////////////////////////////////////////////////////////////////
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
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Express Interest   </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </TD>
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
