<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 
session_start();
include('dbconnect.php');

$update1 = mysql_query("update register set LastLogin=Thislogin WHERE MatriID='".$_SESSION['username']."'");

$Insert1 = mysql_query("UPDATE register SET Thislogin = NOW() WHERE MatriID='".$_SESSION['username']."'");

$authent = mysql_query("SELECT * FROM register where MatriID='".$_SESSION['username']."'");



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
            <TD  colspan="2"></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD height="303" valign="top" bgcolor="#F5F5F5"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="29%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Profile Status </span></div></td>
            <td width="71%">&nbsp;</td>
          </tr>
      </table>
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
        <tr>
          <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
            <tr>
              <td> <?php 
		
		while($row = mysql_fetch_array($authent))
		{
			$Strname=$row['Name'];
			$Strstatus=$row['Status'];
			$_SESSION['status'] = $row['Status'];
			if ($Strstatus == "InActive")
			{
			echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
			echo "<tr>";
			echo "<td class=bodysg><div align=center><strong>Profile Status is <span class=Alert> $Strstatus </span></strong> </div></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><ul>";
			echo "<li>Hello Mr/Ms $Strname</li>";
			echo "<li>Still your Profile did not validate.</li>";
			echo "<li>It will take After 24hrs to 48hrs to validate, Please be a patient </li>";
			echo "</ul></td>";
			echo "</tr>";
			echo "</table>";
			session_start();
			session_unset();
			session_destroy();
			}
			else
			{
			print "<script>";
			print " self.location='mymatri.php';"; // Comment this line if you don't want to redirect
			print "</script>";
			}
			 
		} 
		?>  </td>
        </tr>
            </table></td>
    </tr>
      </table>      <p>&nbsp;</p></TD>
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
