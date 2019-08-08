<?php include("config.php"); 
include 'dbconnect.php'; ?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>

<body>
<table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="29%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Success Story </strong></div></td>
    <td width="71%">&nbsp;</td>
  </tr>
</table>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p align="justify">
		<?
		$strid = $_GET['id'];
		$result = mysql_query("SELECT * FROM successstory where ID='$strid' ");
		while($row = mysql_fetch_array($result)) { ?>
		<div align="center">
		<img src="photoprocess.php?image=SuccessStory_Photos/<?php echo $row['weddingphoto']?>&square=300&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php echo $row['groomname']?>-<?php echo $row['bridename']?>" border="0" class="submenubox"/>		</div>
		
		<br>
<?php echo $row['successmessage']?>
		<br><br>

        <span class="bodysg">Wedding Date : </span><?php echo $row['marriagedate']?>
 		<br>

        <span class="h3r"><?php echo $row['groomname']?> and <?php echo $row['bridename']?></span>
		<? } ?>
		
		
		
		</p>          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><a href="javascript:close();" class="bodysmall">X Close </a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>
