<!DOCTYPE html>
<html lang="en">
<head>
<title>Sukhmayrishtey.com - Online Shaadi Vivah &amp; Matrimony Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/min.js"></script>
 <link rel="stylesheet" href="css/min.css" type="text/css" media="all">

  <!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, .nav-box .left, .nav-box .right, nav, footer .right, footer, #slider, #slider .inside a, .box .top, .box .bot, .link1, .link1 span, .link1 b, .list li, .main-box .left-top-corner, .main-box .right-top-corner, .main-box .border-top, .main-box .border-left, .main-box .border-right, .box1 .top, .box2 .top, .link2, .link3, .events-list li img, #subscribe-form span');
     </script>
<![endif]-->
<!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->

  <script type="text/javascript" src="js/jquery-555.js"></script>
 <script type="text/javascript">

    $(document).ready(function() {

        $(".tab_content").hide();
        $(".tab_content:first").show();

        $("ul.tabs li").click(function() {
            $("ul.tabs li").removeClass("active");
            $(this).addClass("active");
            $(".tab_content").hide();
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn();
        });
    });

</script> 

</head>
<body>
<div id="main">
  <!-- start top -->
  <div id="sr-top">
<p class="smr-top">

        <b class="pp"><a href="registration.php" title="Post Profile">Post Profile</a></b>
            <b class="li"><a href="login.php" title="Login">Login</a></b> <b class="awu"><a href="membership.php" title="Membership Plan">Membership Plan</a></b>
       
                
        </p>
                
</div>
      <!-- end top -->


<!-- start top -->
      <div id="header">
              <p class="help"><span><a href="help.php"><img src="images/help.gif" alt="" height="52" width="181"></a></span><br><br ><img alt="Phone " src="images/icon_receiver.gif" height="15" width="19"> Call Us : +91-8826007867,+91-8826007868</p>
           <p class="logo"><a href="#"><img alt="Home" src="images/logo.png" height="95px"></a></p>
          </div> <!-- end header --> 
         <!-- start menu -->
          <div class="sr-menubox">
  
  
    <div class="sr-leftmenuboxBg"></div>
    
    <div class="sr-centermenuboxBg">
    
     
       
           <div class="smr-cssmenu">
<ul>
   <li class="active "><a href="index.php"><span>Home</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="membership.php"><span>Membership</span></a></li>
   
   
   <li class="sr-menudivider"></li>
   <li><a href="registration.php"><span>Free Register</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="services.php"><span>Services</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="howtopay.php"><span>How to Pay</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="contactus.php"><span>Contact Us</span></a></li>
</ul>
</div>
   
     </div>
    
    <div class="sr-rightmenuboxBg"></div>
  
  
  </div>
                <!-- end menu -->
<?php
include('dbconnect.php'); 
$update1 = mysql_query("update register set matriid=concat(prefix,id),age=(YEAR(CURDATE())-YEAR(dob)) - (RIGHT(CURDATE(),5)<RIGHT(dob,5))")
or die("Could not update data because ".mysql_error());
?>


<?php 
/////////////////// SEND MEMBER ALERT FIRST EMAIL  //////////////////////////////////////////////	
$stremail = $_GET['emid'];

$result = mysql_query("SELECT * FROM register,siteconfig where ConfirmEmail = '$stremail' ");
while($row = mysql_fetch_array($result))
  {
$website = $row['Webname'];
$webfriendlyname = $row['WebFriendlyname'];
$logo = $row['Weblogopath'];
$strname = $row['Name'];
$strmatriid = $row['MatriID'];
$strpassword = $_SESSION['ConfirmPassword'];
$strsitename = $info['Webname'];
$to = $_GET['emid'];
$from = $info['ContactEmail'];

$subject = "Your $strsitename profile is under validation";
$message = "
<html>
<style type='text/css'>
<!--
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
<body>
<table width='600' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td background=$website/pics/email_top.gif width=600 height=22><img src='$logo' border=0></td>
</tr>
<tr>
<td background=$website/pics/email_middle.gif><table width=600 border=0 cellspacing=2 cellpadding=2>
<tr>
<td width=10>&nbsp;</td>
<td width=562 rowspan=3 valign=top><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
<tr>
<td width=562 valign=top class=style3>Dear $strname,</td>
</tr>
<tr>
<td width=562 valign=top class=style3>Welcome to $strsitename,</td>
</tr>
<tr>
<td width=562 valign=top class=style3> Matrimony ID : $strmatriid
</td>
</tr>
<tr>
<td valign=top class=style3><p>Thank you for choosing our matrimonial services to find your life partner.</p>
<p>$strsitename, the Most Successful Matrimonial Portal for Indians.</p>
<p>I take this opportunity to wish you the very best in your partner search. Should you require further assistance in helping you decide what's best for you, do not hesitate to contact our 24X7 support.</p>
<p>Warm regards<br>
$strsitename's Team<br>
</p></td>
</tr>
<tr>
<td valign=top class=style3>&nbsp;</td>
</tr>
<tr>
<td valign=top class=style2>You are receiving this mail as a registered member of $strsitename. This is a computer auto generated message. Please do not Reply.</td>
</tr>
</table><p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'></p>
</td>
<td width=8>&nbsp;</td>
</tr>
<tr>
</tr>
<tr>
</tr>
</table></td>
</tr>
<tr>
<td><img src=$website/pics/email_bottom.gif width=600 height=22></td>
</tr>
</table>
</body>
</html>
		";
		// To send HTML mail, the Content-type header must be set
		
		$headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n";
	
		
		$success = mail($to,$subject, $message, $headers); 
		
 }	
	
?>






<HTML>

<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
<STYLE type="text/css">
<!--
.style6 {font-family: Verdana;
	font-size: 8.5pt;
	color: #424542;
}
.style1 {color: #FFFFFF}
.style5 {font-size: 12px}
-->
</STYLE>
</HEAD>


<BODY class="body">




<DIV align="center">

  <TABLE width="980" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <TR>
      <TD width="980" height="164">
        <TABLE width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="Tborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include(".php");?>		</TD>
            </TR>
          <TR>            </TR>
          <TR>
            <TD height="17" colspan="2" valign="top">
			
							
							<?php include(".php");?>
							
							
							</TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top"><TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
              <TR>
                <TD>&nbsp;</TD>
                <TD ><DIV align="right"></DIV></TD>
              </TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD class="heading1"><DIV align="center">
                  <table width="72%" height="20" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="39%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Register Confirm </strong></div></td>
                      <td width="61%">&nbsp;</td>
                    </tr>
                  </table>
                </DIV></TD>
              </TR>
              <TR>
                <TD><SPAN class="style1">&nbsp;&nbsp;&nbsp;&nbsp;</SPAN></TD>
                <TD valign="top"><DIV class=submenubox style="WIDTH:490" >
                    <DIV class=submenuContent style="WIDTH: 100%">
                      <DIV align="justify">
                        <DIV align="center" class="h2black">
                          <CENTER>
                            Thank you for Registering with <?php echo $info['WebFriendlyname']; ?>
                          </CENTER>
                        </DIV>
                        <P align="left"><h2><STRONG>Congratulations</STRONG></h2> <b>Your FREE <?php echo $info['WebFriendlyname']; ?> profile has been created. It will be online as soon as we review it and confirmation message will send to you.</P>
                        <P align="left">-Free membership allows you to search and initiate contact. </b></P></div>
<P><spam><h2><div style="font-size: medium; font-weight: normal; "><p><div><br></div>
<div><br></div><h2><div style="font-size: medium; font-weight: normal; "><p></p><p></p><h2 style="font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color:red;font-family: Arial; "><div style="font-size: medium; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top;color:red; font-weight: normal; "><p style="font-size: 16px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color:red; "></p></div></h2><p class="MsoNormal" style="background-color: white; background-position: initial initial; background-repeat: initial initial; "><span lang="EN" style="font-size: 14.5pt; font-family: Arial, sans-serif; ">Choose a package and payment mode that suits
you best from the various options.</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="92%" style="border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;mso-border-alt:
  solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:13.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">S.No<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border:solid #F27690 1.0pt;border-left:
  none;mso-border-left-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:13.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Features<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border:solid #F27690 1.0pt;border-left:
  none;mso-border-left-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:13.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Gold Membership<o:p></o:p></span></p>
  </td>
  <td width="26%" style="width:26.98%;border:solid #F27690 1.0pt;border-left:
  none;mso-border-left-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:13.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Diamond Membership<o:p></o:p></span></p>
 </td></tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  background:white;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;background:white;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;background:white;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">3 Month<o:p></o:p></span></p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;background:white;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">6 Months<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">1.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Create Profile, Create Album,
  Define Partner Profile, Search profiles<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
 
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">2.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Members Looking For Me<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
 
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">3.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Members I am looking for <o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/no.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">4.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Perfect E-matches<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">5.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Express Interest <o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">6.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">View Contact Details of accepted
  members <o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">7.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Send Messages along with your
  Contact Details<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
 </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">8.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">View Verified Contact details<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">100<o:p></o:p></span></p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">250<o:p></o:p></span></p>
  </td>
 
 </tr>
 <tr style="mso-yfti-irow:10;height:40.35pt">
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt;height:40.35pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><span style="font-size:12.0pt;
  font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">9.<o:p></o:p></span></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt;
  height:40.35pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Send and Receive messages to Free
  members<o:p></o:p></span></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt;
  height:40.35pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt;
  height:40.35pt">
  <p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; "><img src="http://sukhmayrishtey.com/images/yes.gif">
</p>
  </td>
  </tr>
 <tr>
  <td width="9%" style="width:9.86%;border:solid #F27690 1.0pt;border-top:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-alt:solid #F27690 .75pt;
  padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td width="40%" style="width:40.18%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">PRICE<o:p></o:p></span></b></p>
  </td>
  <td width="19%" style="width:19.4%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;"><input type="radio" name="MembershipType" value="20023"></span></b><b><span style="font-size:12.0pt;font-family:
  &quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-no-proof:
  yes"><!--[if gte vml 1]><v:shape id="Picture_x0020_29" o:spid="_x0000_i1029"
   type="#_x0000_t75" style='width:5.25pt;height:6.75pt;visibility:visible;
   mso-wrap-style:square'>
   <v:imagedata src="file:///C:\DOCUME~1\ADMINI~1\LOCALS~1\Temp\msohtmlclip1\01\clip_image003.gif"
    o:title="rupee"/>
  </v:shape><![endif]--><!--[if !vml]--><img width="7" height="9" src="file:///C:\DOCUME~1\ADMINI~1\LOCALS~1\Temp\msohtmlclip1\01\clip_image003.gif" v:shapes="Picture_x0020_29"><!--[endif]--></span></b><b><span style="font-size:
  12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">3100
  <o:p></o:p></span></b></p>
  </td>
  <td width="26%" style="width:26.98%;border-top:none;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:solid #F27690 1.0pt;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;"><input type="radio" name="MembershipType" value="10013"></span></b><b><span style="font-size:12.0pt;font-family:
  &quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-no-proof:
  yes"><!--[if gte vml 1]><v:shape id="Picture_x0020_30" o:spid="_x0000_i1028"
   type="#_x0000_t75" style='width:5.25pt;height:6.75pt;visibility:visible;
   mso-wrap-style:square'>
   <v:imagedata src="file:///C:\DOCUME~1\ADMINI~1\LOCALS~1\Temp\msohtmlclip1\01\clip_image003.gif"
    o:title="rupee"/>
  </v:shape><![endif]--><!--[if !vml]--><img width="7" height="9" src="file:///C:\DOCUME~1\ADMINI~1\LOCALS~1\Temp\msohtmlclip1\01\clip_image003.gif" v:shapes="Picture_x0020_30"><!--[endif]--></span></b><b><span style="font-size:
  12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">5100<o:p></o:p></span></b></p>
  </td>
  <br></td></tr><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="92%" style="border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr>
  <td width="40%" style="width:40.18%;border-top:solid #F27690 1.0pt;border-left:none;
  border-bottom:solid #F27690 1.0pt;border-right:none;
  mso-border-top-alt:solid #F27690 .75pt;mso-border-left-alt:solid #F27690 .75pt;
  mso-border-alt:solid #F27690 .75pt;padding:7.5pt 7.5pt 7.5pt 7.5pt">
  <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;"">Special Package :In this Pack, You will Get a Relationship Manager with expertise in matchmaking&nbsp;to Search, Shortlist and <p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;"> Rs. 18,500 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initiate Contacts on your behalf. This Pack is Valid for 3 months..<p class="MsoNormal" style="margin-bottom: 0.0001pt; "><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;">Rs. 6166/month</div></span></p>
  </td>
    </td>
   </td></tr>
 <tr>
 
 </td></tr><tr><td>

                      </DIV>
                    </DIV>
                </DIV></TD>
              </TR>
              <TR>
                <TD height="18">&nbsp;</TD>
                <TD valign="top">&nbsp;</TD>
              </TR>
            </TABLE>
			 <?php include(".php");?>
			</TD>
          </TR>
          <TR>
            <TD  colspan=5 1></TD>
          </TR>
          
          <TR>
            <?php include(".php");?>
          </TR>
        </TABLE>
    </TD>
    </TR>
  </TABLE>
</DIV>

</BODY>

</HTML>


 <!-- footer -->
 <div class="sp-footer sp_footer tpadding20 bpadding" id="sp-footer-id">
            <div class="sp-content bpadding10">
                
              <div class="line tpadding20 bpadding20 footer-dark-top-border">
                <div class="unit sp-links-container">
                        <div class="unit sp_container">
                            <span class="sp-footer-sub-head sp-footer-unit"><strong>Help</strong></span> 
                            <a class="sp-footer-unit sp-footer-link" href="contactus.php">Contact Us</a> 
                            <a class="sp-footer-unit sp-footer-link" href="help.php">Live Help</a>
                            <a class="sp-footer-unit sp-footer-link" href="#">Report Misuse</a> 
                            <a class="sp-footer-unit sp-footer-link" href="faq.php">FAQ</a>
                        </div>
                        <div class="unit sp_container">
                            <span class="sp-footer-sub-head sp-footer-unit"><strong>Other Services</strong></span>
                            <a class="sp-footer-unit sp-footer-link" href="#">Wedding Planning</a> 
                            <a class="sp-footer-unit sp-footer-link" href="#">Wedding Directory</a> 
                            <a class="sp-footer-unit sp-footer-link" href="#">Shaadi Centres</a>
                           
                  </div>
                  <div class="unit sp_container">
                            <span class="sp-footer-sub-head sp-footer-unit"><strong>Religion</strong></span> 
                            <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Hindu </a>
                            <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Sikh</a>
                            <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Muslim </a>
                             <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Christian </a>
                              <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Jaine</a>
                  </div>
                      <div class="lastUnit sp_container">
                          <span class="sp-footer-sub-head sp-footer-unit"><strong>Mother Tongue</strong></span> 
                          <a class="sp-footer-unit sp-footer-link" href="adv_search.php">Hindi</a> 
                          <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Gujarati</a> 
                          <a class="sp-footer-unit sp-footer-link" href="adv_search.php" target="_blank">Punjabi</a>
                          <a class="sp-footer-unit sp-footer-link" href="adv_search.php">Sindhi</a>
                      </div>
                    </div>
                  <div class="lastUnit footer-right-box lpadding15">
                      <p class="sp-footer-sub-head"><strong>Safe and Secure</strong></p>
                      <p class="bpadding15 footer-content">All major credit and debit cards are accepted. We also accept payments by <strong>Internet
                            Banking</strong><strong>.</strong></p>
                      <p class="footer-btm-text tpadding15 footer-top-border"><strong></strong> <a href="#">Know More ��</a></p>
                  </div>
                </div>
                 <div class="clear">
                </div>
                <div class="line sp_footer-policy">
                    <div class="unit tpadding5">
                        <span><strong>Policies:</strong> <a href="terms_con.php">Terms of use</a> | <a href="#">Security</a>
                            | <a href="privacy.php">Privacy</a></span> <span class="sp-footet-cr">�� 2007-2012 Sukhmayrishtey.com</span>
                    </div>
                </div>
               
            </div>
        </div> <!-- end footer -->

 </div>  
 <!--end body-->
 

 
 
</div><!-- end main --> 

</body>
</html>