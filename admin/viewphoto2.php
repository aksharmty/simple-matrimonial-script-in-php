<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
$strid=$_GET['id']; 
$result = mysql_query("SELECT *,Left(profile,200) as profile1 FROM register where Matriid='$strid' ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Photo 2</title>
<style type="text/css">
<!--
#watermark_box {
position:relative;
display:block;
}
img.watermark {
  position: absolute;
  top: 4px;
  left: 4px;
}

-->
</style>
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
<BODY onLoad="waitPreloadPage();" leftmargin="0" topmargin="0">
<DIV id="prepage" style="position:absolute; font-family:arial; font-size:16; left:0px; top:0px; background-color:white; layer-background-color:white; height:100%; width:100%;"> 
<TABLE width=100%><TR><TD><B>Loading ...  Please wait!</B></TD></TR></TABLE>
</DIV>

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
            <td><div align="center"><span class="bodysg">
                <?php  echo $row['Name']?>
            </span>- <span class="bodysg">
            <?php  echo $row['MatriID']?>
            </span></div>
              <div align="center">
              <img src="../<?php  echo $row['Photo2']?>" width="450" height="500" alt="I am <?php  echo $row['Age']?>,<?php echo $row['Maritalstatus']?>,<?php  echo $row['Religion']?>,<?php  echo $row['Gender']?>  living in <?php  echo $row['State']?>,<?php echo $row['Country']?>" hspace="1" vspace="1" border="0" class="submenubox" onClick="MM_openBrWindow('viewphoto.php?id=<?php  echo $row['MatriID']?>&amp;Choice=1','vp','resizable=yes,width=600,height=450')" />
              </div>
            <div align="center"></div>              <div align="center"></div></td>
          </tr>
        </table>
      <?php } mysql_close($con); ?>
	  
	  
	  
	  
    </td>
  </tr>
</table>
</body>
</html>
