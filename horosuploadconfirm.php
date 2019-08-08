<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
///// TICK Photo Check List //////////////
$update1 = mysql_query("UPDATE register SET Horoschecklist='chklist-tick.gif' WHERE MatriID='$strid' ");

$horoschk = mysql_query("SELECT MatriID,Horoscheck FROM register where MatriID='$strid' ");
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
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
<TD width="180" height="303" valign="top" bgcolor="#e3edf6">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Horos Upload Confirmation </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>
	  <?php  while($row = mysql_fetch_array($horoschk)){ ?>
	  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td><p class="normaltext">&nbsp;</p></td>
        </tr>
        <tr>
          <td><div align="center">
            <table width="450" border="0" cellpadding="2" cellspacing="2" class="submenubox" >
              <tr>
                <td width="107" height="19" bgcolor="#F3F7D2">
				
				<? if ($_GET['horoschoice']=="1") { ?>
				<div align="center">
				<img src="photoprocess.php?image=<?php  echo $row['Horoscheck']?>&maxim_size=100;"  hspace="1" vspace="1" border="0" class="submenubox">				</div>
				<? } ?>
				
				</td>
                <td width="327" bgcolor="#F3F7D2"><div align="center">
                  <div align="center">
                    <div align="center">Horoscope has been Uploaded Successfully. <br>
                      It will be online after Validate.<br>
                    </div>
                  </div>
                </div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="20">
          </td>
        </tr>
      </table>
	  <?php } mysql_close($con); ?>
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
