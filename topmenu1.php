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
  <?php
session_start();
if(!session_is_registered(myusername))
{
?>		

		<!-- MEMBER NOT LOGGED IN -->
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
   
</map>
		  <?
           
}
else
{
?>
	      <!-- MEMBER LOGGED IN -->
	      <!-- start menu -->
          <div class="sr-menubox">
  
  
    <div class="sr-leftmenuboxBg"></div>
    
    <div class="sr-centermenuboxBg">
    
     
       
           <div class="smr-cssmenu">
<ul>
   <li class="active "><a href="mymatri.php"><span>mymatri</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="searchoption.php"><span>searchoption</span></a></li>
   
   
   <li class="sr-menudivider"></li>
   <li><a href="myint.php"><span>myint</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="mymessage.php"><span>mymessage</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="membership.php"><span>membership</span></a></li>
   <li class="sr-menudivider"></li>
   <li><a href="logout.php"><span>logout</span></a></li>
</ul>
</div>
   
     </div>
    
    <div class="sr-rightmenuboxBg"></div>
  
  
  </div>
                <!-- end menu -->
          </map>
	      <?
}
?>
		</p>		
		