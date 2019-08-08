<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
$photochk = mysql_query("SELECT MatriID,PhotoProtect,PhotoprotectPassword,Photo1,Photo2,Photo3 FROM register where MatriID='$strid' ");

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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Photo Upload </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>Manage Your photos : Add Photo/Change your photos here.<br>
              <br>
            1. Get 20 times more responses. <br>
            2. Express yourself in more than one way. <br>
            3. Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
        </tr>
        
        <tr>
          <td><p class="normaltext">&nbsp;</p></td>
        </tr>
        <tr>
          <td>
		  
<?php  while($row = mysql_fetch_array($photochk)){ ?>
  
		  <table width="550" border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="5"><div align="center"> </div></td>
              </tr>
              <tr>
                <td width="158">&nbsp;</td>
                <td width="66" valign="top"><div align="center">
<!-- Photoupload1 table -->
			<?		
				
			if($row['Photo1']=="nophoto.gif")
			
			{	
			?>				



 

<table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PhotouploadTable11" >
<tr>
<td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 1 </div></td>
</tr>
<tr>
<td><div align="center"> <a href="photoupload.php?Choice=1"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
<div align="center"> <a href="photoupload.php?Choice=1"> Add Photo 1 </a></div>
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
<td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 1 </div></td>
</tr>
<tr>
<td>
  <div align="center">
<img src="<?php echo $row['Photo1']?>" width="100" height="100">
  </div>
  
  </td>
</tr>
<tr>
<td>
<div align="center"> <a href="modifyphoto.php?Choice=1&op=<?php  echo $row['Photo1'] ?>">Modify Photo 1 </a> <br> <br>
<a href="deletephoto.php?Choice=1&op=<?php  echo $row['Photo1'] ?>">Delete Photo 1 </a> <br><br>


<?php if($row['PhotoProtect']=="No"){
		?>
		<a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
		<? }?>
	<? if($row['PhotoProtect']=="Yes"){
			?>
		<a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>	
		<? }?>
</div>
  <br>                        </td>
</tr>
</table>


 
<!--  -->
<?
}
?>

                </div></td>
                <td width="66" valign="top"><!-- Photoupload2 table -->
                  <!--  -->
                  <!-- Photo2 Display table -->
                  <!--  -->
                  <div align="center">
                    <!-- Photoupload2 table -->
                    <?		
			
			
			if($row['Photo2']=="nophoto.gif")
			{	
			
			?>
                   
					     <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox"  >
                      <tr>
                        <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 2 </div></td>
                      </tr>
                      <tr>
                        <td><div align="center"> <a href="photoupload.php?Choice=2"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                <div align="center"> <a href="photoupload.php?Choice=2"> Add Photo 2 </a></div>
                                <br>
                        </div></td>
                      </tr>
                    </table>
					
                    <? 
} 
else
{
?>
               
                    <!--  -->

                    <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" >
                      <tr>
                        <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 2 </div></td>
                      </tr>
                      <tr>
                        <td><div align="center">
<img src="<?php echo $row['Photo2']?>" width="100" height="100"></div>
						
						
						
						</td>
                      </tr>
                      <tr>
                        <td><div align="center"> <a href="modifyphoto.php?Choice=2&op=<?php echo $row['Photo2']; ?>">Modify Photo 2 </a> </div>
                            <br>
<div align="center"> <a href="deletephoto.php?Choice=2&op=<?php  echo $row['Photo2'] ?>">Delete Photo 2 </a> <br>
                        </td>
                      </tr>
                    </table>
					
                    <?
}
?>
                  </div></td>
                <td width="66" valign="top"><div align="center">
                  <!-- Photoupload1 table -->
                  <?		
				
			if($row['Photo3']=="nophoto.gif")
			{	
			?>
                  <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PhotouploadTable11" >
                    <tr>
                      <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo </strong>3</div></td>
                    </tr>
                    <tr>
                      <td><div align="center"> <a href="photoupload.php?Choice=3"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                              <div align="center"> <a href="photoupload.php?Choice=3"> Add Photo 3 </a></div>
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
                      <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 3 </div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
<img src="<?php echo $row['Photo3']?>" width="100" height="100"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"> <a href="modifyphoto.php?Choice=3&op=<?php echo $row['Photo3']; ?>">Modify Photo 3 </a> </div>
                          <br>

						  <div align="center"> <a href="deletephoto.php?Choice=3&op=<?php  echo $row['Photo3'] ?>">Delete Photo 3 </a> <br>
                      </td>
                    </tr>
                  </table>
			 
			 
			 
                  <?
}
?>
                </div></td>
                <td width="190">&nbsp;</td>
              </tr>
          </table>
		  

<?php if($row['PhotoProtect']=="Yes")
{
?>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="3" >
<tr>
  <td width="11%">&nbsp;</td>
  <td width="89%"><strong>Remove Photo Protect :</strong> Click to <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','rpp','width=590,height=420')">Remove Photo Protect </a></td>
</tr>
</table>
<?php } ?>	

		  
		  
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
          </TABLE>
  
</DIV>




</BODY>
</HTML>