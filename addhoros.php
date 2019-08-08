<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
$horoschk = mysql_query("SELECT MatriID,Horoscheck FROM register where MatriID='$strid' ");

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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Horoscope Upload </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>Manage Your photos : Add Horoscope/Change your Horoscope here.<br>
          <br>
            Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
        </tr>
        
        <tr>
          <td><p class="normaltext">&nbsp;</p></td>
        </tr>
        <tr>
          <td>
		  
<?php  while($row = mysql_fetch_array($horoschk)){ ?>
  
		  <table width="550" border="0" cellpadding="2" cellspacing="2">
              
              <tr>
                <td width="158">&nbsp;</td>
                <td width="66" valign="top"><div align="center">

			<?		
				
			if($row['Horoscheck']=="")
			{	
			?>				



 

<table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PhotouploadTable11" >
<tr>
<td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> My Horoscope </strong></div></td>
</tr>
<tr>
<td><div align="center"> <a href="horosupload.php?HorosChoice=1"> <img src="pics/horosnotavail.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
<div align="center"> <a href="horosupload.php?horoschoice=1"> Add Horoscope </a></div>
<br>
</div></td>
</tr>
</table>
<? 
} 
else
{
?>

 <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PHMainPhoto" >
<tr>
<td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> My Horoscope </strong> </div></td>
</tr>
<tr>
<td>
  <div align="center">
  <img src="photoprocess.php?image=horosphotos/<?php  echo $row['Horoscheck']?>&maxim_size=100;"  hspace="1" vspace="1" border="0" class="submenubox"  >  </div>  
  </td>
</tr>
<tr>
<td>
<div align="center"> <a href="modifyhoros.php?horoschoice=1&oh=<?php  echo $row['Horoscheck']?>">Modify Horoscope </a></div></td>
</tr>
</table>
<?php } ?>


                </td>
                <td width="190">&nbsp;</td>
              </tr>
          </table>
		  

          
          <?php } mysql_close($con); ?>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
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
