<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_GET['id']; 
//$straction=$_GET['action'];
//if ($straction == "myprofile")
//{
//$strid=$_SESSION['matriid']; 
//}
$result = mysql_query("SELECT *,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate FROM register where MatriID='$strid' ");
$count=@mysql_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row
			
	 if($count!=1)
	 {
	 print "<script>";
     print " self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
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
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
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
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><?php include("memprofile.php");?></TD>
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
