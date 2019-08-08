<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_GET['id']; 
$result = mysql_query("SELECT *,Left(profile,200) as profile1 FROM register where matriid='$strid' ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
</head>
<SCRIPT TYPE="text/javascript" LANGUAGE="javascript">

<!-- PreLoad Wait - Script -->
<!-- This script and more from http://www.rainbow.arch.scriptmania.com 

function waitPreloadPage() { //DOM
if (document.getElementById){
document.getElementById('prepage').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.prepage.visibility = 'hidden';
}
else { //IE4
document.all.prepage.style.visibility = 'hidden';
}
}
}
// End -->
</SCRIPT>
<LINK href="style.css" rel="stylesheet" type="text/css">


<table width="600" height="450" border="0" cellpadding="0" cellspacing="0" class="Thickorangeborder">
  <tr>
    <td valign="top"><table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#FFD99F"><div align="left" class="bodysg"><?php echo $info['WebFriendlyname']; ?></div></td>
        <td bgcolor="#FFD99F"><div align="right"><a href="javascript:close();">Close</a></div></td>
      </tr>
    </table>
        <br />
		

		
      <?php  while($row = mysql_fetch_array($result)){ ?>
        <table width="590" border="0" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td><div align="center" class="bodysg">
              <?php  echo $row['MatriID']?>
            </div></td>
            <td><div align="center"><span class="bodysg">
                <?php  echo $row['Name']?>
            </span></div></td>
          </tr>
          <tr>
            <td width="106" valign="top"><div align="center"> <a href="viewphoto.php?Choice=1&id=<?php echo $row['MatriID']?>"> <img src="photoprocess.php?image=<?php echo $row['Photo1']?>&maxim_size=100" alt="<?php echo $row['Name']?>" border="0" class="submenubox"/> </a> </div></td>
            <td width="475" rowspan="3"><div align="center">
<?php if($_GET['Choice']=="1") { ?>
<div align="center"> <img src="photoprocess.php?image=<?php  echo $row['Photo1']?>&maxim_size=400&watermark_text=MatrimonialPHPScript.co.cc&watermark_color=ffffff;" 
alt="I am <?php  echo $row['Age']?>,<?php echo $row['Maritalstatus']?>,<?php  echo $row['Religion']?>,<?php  echo $row['Gender']?>  living in <?php  echo $row['State']?>,<?php echo $row['Country']?>" hspace="1" vspace="1" border="0" class="submenubox" /> </div>
</div>
<? }
else if($_GET['Choice']=="2") {
?>
<div align="center"> <img src="photoprocess.php?image=<?php  echo $row['Photo2']?>&maxim_size=400&watermark_text=MatrimonialPHPScript.co.cc&watermark_color=ffffff;" 
alt="I am <?php  echo $row['Age']?>,<?php echo $row['Maritalstatus']?>,<?php  echo $row['Religion']?>,<?php  echo $row['Gender']?>  living in <?php  echo $row['State']?>,<?php echo $row['Country']?>" hspace="1" vspace="1" border="0" class="submenubox" /> </div>
              <? } 
else if($_GET['Choice']=="3") {
?>
                <div align="center"> <img src="photoprocess.php?image=<?php  echo $row['Photo3']?>&&maxim_size=400&watermark_text=MatrimonialPHPScript.co.cc&watermark_color=ffffff;" 
alt="I am <?php  echo $row['Age']?>,<?php echo $row['Maritalstatus']?>,<?php  echo $row['Religion']?>,<?php  echo $row['Gender']?>  living in <?php  echo $row['State']?>,<?php echo $row['Country']?>" hspace="1" vspace="1" border="0" class="submenubox" /> </div>
              <? } 
?>
            </td>
          </tr>
          <tr>
            <td valign="top"><div align="center">
              <div align="center"> <a href="viewphoto.php?Choice=2&amp;id=<?php echo $row['MatriID']?>"> <img src="photoprocess.php?image=<?php echo $row['Photo2']?>&maxim_size=100;" alt="<?php echo $row['Name']?>" border="0" class="submenubox"/> </a> </div>
            </div></td>
          </tr>
          <tr>
            <td valign="top"><div align="center">
              <div align="center"> <a href="viewphoto.php?Choice=3&amp;id=<?php echo $row['MatriID']?>"> <img src="photoprocess.php?image=<?php echo $row['Photo3']?>&maxim_size=100;" alt="<?php echo $row['Name']?>" border="0" class="submenubox"/> </a> </div>
            </div></td>
          </tr>
        </table>
      <?php } mysql_close($con); ?>
	  
	  
	  
	  
    </td>
  </tr>
</table>
</body>
</html>
