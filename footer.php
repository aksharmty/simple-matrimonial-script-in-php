<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3333333-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

<?php include("config.php"); ?>

<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td ><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="2"></td>
      </tr>
      <tr>
        <td height="50" background="footer.jpg"><div align="center"><br />
                <?php if (isset($_SESSION['username'])) { ?>
                <a href="index.php">Home</a> - <a href="searchoption.php">Search</a> - <a href="privacy.php">Privacy Policy</a> - <a href="aboutus.php">About Us</a> - <a href="contactus.php">Contact Us</a> - <a href="successstory.php">Submit Success Stories</a> - <a href="help.php">Help</a> - <a href="sitemap.php">Sitemap</a>
                <? } 
	else if (!isset($_SESSION['username'])) {
	?>
                <a href="index.php">Home</a> - <a href="registration1.php">Register</a> - <a href="login.php">Login</a> - <a href="searchoption.php">Search</a> - <a href="privacy.php">Privacy Policy</a> - <a href="aboutus.php">About Us</a> - <a href="contactus.php">Contact Us</a> - <a href="successstory.php">Submit Success Stories</a> - <a href="help.php">Help</a> - <a href="sitemap.php">Sitemap</a>
                <? } ?>                        
                      </div>
          <div>
              <div align="center">
                <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td valign="middle"><div align="center">All Rights 
						Reserved.© Copyright 2009 <?php echo $info['WebFriendlyname']; ?>. <a href="#" onclick="MM_openBrWindow('terms_con.php','terms','scrollbars=yes,width=500')">User   Agreement and Terms of Use</a><br>
						Site Designed &amp; Developed By
						<a href="http://www.sakhihosting.webs.com/">Sakhi 
						Hosting</a></div>
					<div align="center"><br />
                    </div></td>
                  </tr>
                </table>
              </div>
          </div></td>
      </tr>
    </table></td>
  </tr>
</table>