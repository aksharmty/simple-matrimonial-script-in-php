<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?php 
require 'php4upload.class.php';

if($_GET['horoschoice']=="1")
{ 			
require 'horosuploaddir.php';
}




$im = new imageupload();
if ($_POST['__upload'])
{
	header('location: '.'http://'.$_SERVER['HTTP_HOST'].preg_replace('/\/([^\/]+?)$/', '/', $_SERVER['PHP_SELF']));
}
?>




<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>

<style type="text/css">
		body {
			margin:0;
			font-family:Verdana, arial, sans-serif;
			font-size:12px;
		}
		div.wrapper {
			margin:0 auto;
			padding:5px;
			width:620px;
			border:1px solid #35528F;
		}
		h1 {
			padding:8px;
			margin:0px;
		}
		div.errors {
			color:#FF0000;
		}
		ul {
			list-style:none;
			padding:5px;
		}
		ul li {
			display:inline;
			padding-right:12px;
		}
		p.footer {
			clear:both;
			text-align:center;
			font-size:10px;
		}
		div.block {
			float:left;
			width:300px;
		}
		div.errors {
			color:red;
		}
	</style>



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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Modify/Change Horoscope  </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>
	  <form method="post" enctype="multipart/form-data" action="<?=$im->path?>">
	  <table width="97%" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
          <td colspan="2">Change  Your Horoscope here.<br>
              Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
        </tr>
        
        <tr>
          <td colspan="2"><p class="normaltext">&nbsp;</p></td>
        </tr>
        <tr>
          <td width="32%">Select your horoscope image :</td>
          <td width="68%"><input name="__upload" type="file" class="addtextfiled" size="35" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="submit" type="submit" class="afterloglightyellow2" value="Upload" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
      </table>
	  </form>
	  <table width="97%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
	
	<div class="block">
	<?
				if ($im->_im_status == true)
				{
				
				include('dbconnect.php'); 
				
$strid=$_SESSION['username']; 



if($_GET['horoschoice']=="1")
{ 		

// DELETE OLD FILE
	$stroldhoros = $_GET['oh'];
	$myFile = "horosphotos/".$stroldhoros;
	unlink($myFile);

	
$update1 = mysql_query("update register set Horoscheck='$im->imgurl', HorosApprove='No' where MatriID='$strid'")
or die("Could not update data because ".mysql_error());


	 print "<script>";
     print " self.location='horosuploadconfirm.php?horoschoice=1';"; // Comment this line if you don't want to redirect
     print "</script>";
}


				}
				elseif (!empty($im->errorStr))
				{
				echo '<div class="errors">'.$im->errorStr.'</div>';
				}
				
			?>
		</div>	
			</td>
  </tr>
</table>

	  <p>&nbsp;</p>
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
