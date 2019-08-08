<?php include('protect.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
// Cross-Browser Rich Text Editor
// Written by Kevin Roth (http://www.kevinroth.com/rte/)
// Visit the support forums at http://www.kevinroth.com/forums/index.php?c=2
// This code is public domain. Redistribution and use of this code, with or without modification, is permitted.
//-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sending Email</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
      <tr>
        <td colspan="2"><?php include("adminheader.php");?></td>
      </tr>
      <tr>
        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>
        <td width="80%"><table width="100%" height="400" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon21.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">Sending Group Email/News Letter </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                      <div align="left" class="smalltextred"> Below is the compose message box. You can   send the Email/News letter by clicking continue link </div>
                  </div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>
   <script language="JavaScript" type="text/javascript" src="rte/html2xhtml.js"></script>
	<script language="JavaScript" type="text/javascript" src="rte/richtext_compressed.js"></script>
			<form name="RTEDemo" action="newsletter_send_submit.php" method="post" onsubmit="return submitForm();">
			  <table width="90%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="14%">To</td>
                  <td width="86%">
				  
				  <?
$plan = mysql_query("SELECT Distinct(Status) from register ");
echo( '<select name="memtype" class="formselect">' ); 
while($row = mysql_fetch_array($plan))
{ 
echo  '<option value='.$row['Status'].'>'.$row['Status']. '</option>';
} 
echo '</select>';  
?>
                  <span class="formselect">Members</span></td>
                </tr>
                <tr>
                  <td>Subject</td>
                  <td><input name="Subject" type="text" class="formselect" id="Subject" value="News From....." size="70" maxlength="230" /></td>
                </tr>
                <tr>
                  <td>Body</td>
                  <td>
<script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
	//make sure hidden and iframe values are in sync for all rtes before submitting form
	updateRTEs();
	
	return true;
}

//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
initRTE("rte/images/", "rte/", "", true);
//-->
</script>
<script language="JavaScript" type="text/javascript"><!--
//build new richTextEditor
var rte1 = new richTextEditor('rte1');
<?php
//format content for preloading
if (!(isset($_POST["rte1"]))) {
	$content = "Type your " . chr(13) . "\"message <b>here</b>\"";
	$content = rteSafe($content);
} else {
	//retrieve posted value
	$content = rteSafe($_POST["rte1"]);
}
?>
rte1.html = '<?=$content;?>';
//rte1.toggleSrc = false;
rte1.build();
//-->
</script>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
<?php
function rteSafe($strText) {
	//returns safe code for preloading in the RTE
	$tmpString = $strText;
	
	//convert all types of single quotes
	$tmpString = str_replace(chr(145), chr(39), $tmpString);
	$tmpString = str_replace(chr(146), chr(39), $tmpString);
	$tmpString = str_replace("'", "&#39;", $tmpString);
	
	//convert all types of double quotes
	$tmpString = str_replace(chr(147), chr(34), $tmpString);
	$tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);
	
	//replace carriage returns & line feeds
	$tmpString = str_replace(chr(10), " ", $tmpString);
	$tmpString = str_replace(chr(13), " ", $tmpString);
	
	return $tmpString;
}
?>
				  
				  
				  
				  
				  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
			  </form>
              <p>&nbsp;</p>
              <p align="center">&nbsp;</p></td>
            </tr>
          
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
