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
 
 
 <!-- start banner-left -->

           <div class="sr-banner-left">
    <div class="sr-tabBox">
     
       <div class="sr-Box-tab">

  <div style="float:left; width:249px; height:32px; padding:0 0 0 10px; margin:0;"> 
  <ul class="tabs"> 

        <li rel="tab1" class="active">Quick Search  </li>
        <li rel="tab2">Search by ID</li>
  </ul>
    </div>
    
    <div class="tab_container"> 

    <!--start-tab1-->
     <div style="display: block;" id="tab1" class="tab_content">
     <?php include("config.php"); ?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css"></HEAD>

<SCRIPT language="javascript">
	function validate()
  {
  		 if ( MatriForm.txtSAge.value == "" )
		 {
			alert( "Please enter minimum age." );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtSAge.value < 18 )
		 {
			alert( "Minimum age should be above 18" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		
		if ( MatriForm.txtSAge.value > 60 )
		 {
			alert( "Minimum age should not be above 60" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtEAge.value == "" )
		 {
			alert( "Please enter maximum Age" );
			MatriForm.txtEAge.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value > 60 )
		 {
			alert( "Maximum Age should be below 60" );
			MatriForm.txtEAge.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value < 18 )
		 {
			alert( "Maximum Age should not be below 18" );
			MatriForm.txtEAge.focus( );
			return false;
		}
	
		if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Please select Religion." );	
			MatriForm.religion.focus( );
			return false;
		}
		
			
}

 </SCRIPT>
 
 


		
<script language="JavaScript">

function caste_disable(obj){
	if(obj.options[obj.selectedIndex].text != 'Hindu' &&
		obj.options[obj.selectedIndex].text != 'Muslim' &&
		obj.options[obj.selectedIndex].text != 'Christian' &&
		obj.options[obj.selectedIndex].text != 'Jain' &&
		obj.options[obj.selectedIndex].text != 'Sikh'){
	document.MatriForm.caste.disabled = true;
	}
	else {
		document.MatriForm.caste.disabled = false;
		get_caste(obj.form.religion,0);
	}
}
//-->
</script>


	<script language="javascript">

	var caste=new Array();
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","Nadar","Nagar Brahmin","Naidu","Nair","Nair Vaniya","Nambiar","Nepali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav","Devanga chettier", "24 manai chettier","Vaniya chettier", "Jangumar", "Andipandaram", "Ariyavaisiyar","Vannar","Others"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni","Others"];
caste["Christian"] = ["Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","Nadar","Protestant","Syrian","Others"];
caste["Jain"] = ["Digambar","Shewetamber","Vania","Others"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia","Others"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Any","Any",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Any"?"Any":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

	}

	</script>
	
	 <script>
function check_Age(field_name)
{
	var i, max, field_info
	field_info = eval("document.MatriForm." + field_name);
	max = field_info.value.length;
	
	for (i = 0; i < max; i++)
	{
		if(isNaN(field_info.value.charAt(i)))
		{
			alert("Age must be numeric.");
			field_info.value = "";
			field_info.focus();
			return false;
		}
	}
			return true;
}
</script>
<!-- START LEFT PART -->  
     </tr>
      
      <tr>
        <td colspan="2">
		
		<form action="simplesearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
		
		<table width="100%" border="0" cellpadding="3" cellspacing="2">
          <tr>
            <td height="20" colspan="2"><strong>Reach out to your spouse with a click of the mouse</strong></td>
          </tr>
          <tr>
            <td width="25%"><div align="left">Looking for </div></td>
            <td width="75%"><div align="left">
              <input name="txtGender" type="radio" class="forminput" value="Male">
Male 
					&nbsp;
                    <input name="txtGender" type="radio" class="forminput" value="Female" checked>
Female </div></td>
          </tr>
          <tr>
            <td><div align="left">Age</div></td>
            <td><div align="left">From
                <select name="txtSAge" class="forminput" id="txtSAge" style="width:40px;">
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="60">60</option>
                </select>
                to
 <select name="txtEAge" class="forminput" id="select" style="width:40px;">
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  <option value="32">32</option>
  <option value="33">33</option>
  <option value="34">34</option>
  <option value="35">35</option>
  <option value="36">36</option>
  <option value="37">37</option>
  <option value="38">38</option>
  <option value="39">39</option>
  <option value="40">40</option>
  <option value="41">41</option>
  <option value="42">42</option>
  <option value="43">43</option>
  <option value="44">44</option>
  <option value="45">45</option>
  <option value="46">46</option>
  <option value="47">47</option>
  <option value="48">48</option>
  <option value="49">49</option>
  <option value="50">50</option>
  <option value="51">51</option>
  <option value="52">52</option>
  <option value="53">53</option>
  <option value="54">54</option>
  <option value="55">55</option>
  <option value="56">56</option>
  <option value="57">57</option>
  <option value="58">58</option>
  <option value="59">59</option>
  <option value="60" selected>60</option>
</select>
years </div></td>
          </tr>
          
          <tr>
            <td><div align="left">Religion</div></td>
            <td><div align="left">
              <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:180px;">
                <option value="- Select -" selected>- Select -</option>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Jain">Jain</option>
                <option value="Parsi">Parsi</option>
                <option value="Buddhist">Buddhist</option>
                <option value="Bahai">Bahai</option>
                <option value="Inter-Religion">Inter-Religion</option>
                <option value="Others">Others</option>
              </select>
            </div></td>
          </tr>
          <tr>
            <td><div align="left">Caste</div></td>
            <td><div align="left">
              <select name="caste" class="forminput" id="caste" style="width:180px;">
                <option value="Any">Any</option>
              </select>
            </div></td>
          </tr>
          
          <tr>
            <td><div align="left">Show</div></td>
            <td><div align="left">
              <input name="txtphoto" type="checkbox" id="txtphoto" value="Show profiles with Photo">
            Profiles with Photo </div></td>
          </tr>
          <tr>
            <td><div align="left"></div></td>
            <td><div align="left">
              <input name="Submit" type="image" value="Submit" src="images/nm-quicksearch-serchbtn.jpg">
            </div></td>
          </tr>
        </table>
		</form>
		</td>
        </tr>
      
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table></TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->     <!--end-tab1-->
     
      <!--start-tab2-->
      <div onKeyPress="javascript:return WebForm_FireDefaultButton(event, 'imgbtnSearchId')">
        
     <div style="display: none;" id="tab2" class="tab_content">
     
         <div class="sr-quick-searchBox">
         
              <div class="sr-quick-search-religionBox">
            
               <div class="sr-quick-search-religiontxt"><p class="sr-font-c12">Search by ID</p></div>
               
               <div class="sr-quick-search-religionEntry">
                 <div class="sr-quick-search-religionentryc1"><input name="txtIdNumber" id="txtIdNumber" class="sr-quick-search-religionentryc1-sub" type="text">
             </div>
               </div>
           
           </div>
           
           
           
           <div class="sr-quick-search-profBox">
            
               <div class="sr-quick-search-profBoxtxt"><p class="sr-font-c12"></p></div>
               
               <div class="sr-quick-search-profEntry">
               
                  <div class="sr-quick-search-profcheckbox-c1"></div> 
                  
                  <div <p class="help"><span><a href="id_search.php"><img src="images/nm-quicksearch-serchbtn.jpg" alt="" height="32" width="81"></a></div>
                 
               </div>
           
           </div>
           
           <div class="sr-secondtabTxt">
           
              <p class="sr-font-c18">Find your soul Partner!</p>
              <p class="sr-font-c19">Enter the Matrimony ID of the member whose profile you would 
                  like to see.</p>
              
           
           </div>
           

           
         </div>
     </div>
     
</div>
     <!--Close:tab2-->
     
     
     </div>
       </div>
     </div>
   
</div>
 <!-- end banner-left -->
  
    
<!-- start banner -->   
    <div class="sr-banner">
         <div id="gallery"><img src="images/banner-01.jpg" title="" alt="" rel="" height="245" width="702"></div>
 
 </div> 
        <!-- end banner --> 

 <!-- start banner-btm --> 
   <div class="sr-banner-advanced-centerBox">
   
   
      <div class="sr-advancedBox-first">
      
          <div class="sr-advancedBox-firstImg"><a href="registration.php" id="A1"><img src="images/usergroup.png"></a></div>
          
          <div class="sr-advancedBox-firstTxt">
          
               <p class="sr-font-c6">Free Premium Membership</p>
              
              <p class="sr-font-c7">Register free to contact members.</p>
              
              <p class="sr-font-c7">{&nbsp;<span class="sr-font-c13"><a href="registration.php" id="A2" class="sr-font-c13">More</a></span>&nbsp;}</p>


          
          </div>
      
      </div>
      
      
      <div class="sr-advancedBox-verticaldivider"></div>
      
      
      
       <div class="sr-advancedBox-second">
      
          <div class="sr-advancedBox-secondImg"><a id="hlinkSearchImage" href="adv_search.php"><img src="images/Search-icon.png"></a></div>
          
          <div class="sr-advancedBox-secondTxt">
          
               <p class="sr-font-c6">Advanced Search</p>
              
              <p class="sr-font-c7">View basic profiles with photos.</p>
              
              <p class="sr-font-c7">{&nbsp;<span class="sr-font-c13"><a id="hlnkSearchMiddle" class="sr-font-c13" href="adv_search.php">More</a></span>
                  &nbsp;}</p>
 </div>
      
      </div>
   </div>
   
   <div class="sr-banner-advanced-rightBox"></div>
 
  
  <!--start body-->

  <div id="mid-box">  
      <div class="sr_btmbox">
        <div class="sr_sec sr-sec">
                <h2>
                    Matrimony Search</h2>
          <div class="link"><a href="#">View More ��</a></div>
          <ul class="sr_line clearfix">
            <li class="sr_item"> <a style="background:url(images/1.jpg) center no-repeat" href="#" class="sr-img"></a> <a rel="nofollow" class="sr-title" href="#">Amit Kumar</a>
              <div class="sr-bp">Age: <span class="price">27</span></div>
              <div class="sr-ba"> <span class="arrow"></span><span class="arrow-i"></span></div>
            </li>
            <li class="sr_item"> <a style="background:url(images/2.jpg) center no-repeat" href="#" class="sr-img"></a> <a rel="nofollow" class="sr-title" href="#">Shalini Gupta</a>
              <div class="sr-bp">Age: <span class="price">24</span></div>
              <div class="sr-ba"><span class="arrow"></span><span class="arrow-i"></span></div>
            </li>
            <li class="sr_item"> <a style="background:url(images/3.jpg) center no-repeat" href="#" class="sr-img"></a> <a rel="nofollow" class="sr-title" href="#">Pooja Chauhan</a>
              <div class="sr-bp">Age: <span class="price">26</span></div>
              <div class="sr-ba"><span class="arrow"></span><span class="arrow-i"></span></div>
            </li>
            <li class="sr_item"> <a style="background:url(images/4.jpg) center no-repeat" href="#" class="sr-img"></a> <a rel="nofollow" title="Fun Straw Glasses" class="sr-title" href="#">Rohit Singh</a>
              <div class="sr-bp">Age: <span class="price">26</span></div>
              <div class="sr-ba"><span class="arrow"></span><span class="arrow-i"></span></div>
            </li>
            <li class="sr_item"> <a style="background:url(images/5.jpg) center no-repeat" href="#" class="sr-img"></a> <a rel="nofollow" title="200cc Go Kart" class="sr-title" href="#">Neha Sharma</a>
              <div class="sr-bp">Age: <span class="price">26</span></div>
              <div class="sr-ba"><span class="arrow"></span><span class="arrow-i"></span></div>
            </li>
            <li class="sr_item"> <a style="background:url(images/6.jpg) center no-repeat" rel="nofollow" href="#" class="sr-img"></a> <a rel="nofollow" class="sr-title" href="#">Payal Mathur</a>
              <div class="sr-bp">Age: <span class="price">24</span></div>
              <div class="sr-ba"><span class="arrow"></span><span class="arrow-i"></span></div>
            </li>
          </ul>
        </div>
        </div>
 </div>
<!--end mid-box-->
      
  
      <div class="successStories fl">
        <p class="h">Success Stories</p>
      <div class="scrollerOuter">
        <div style="left: 290px;" class="scroller">
          <p class="fl"><img src="images/19.jpg" hieght="100" width="80"></p>
          <div style="margin:0 0 0 110px;">
            <p class="name">Sanmati Jain &amp; Anshul Jain</p>
            <p class="text">Thanks to your personalize services team who worked for me by heart to find my find my Life Partner &nbsp; <span class="more"> 
            <a href="#">more</a></span></p>
          </div>
        </div>
        <div style="left: 290px;" class="scroller">
          <p class="fl"><img src="images/ss_ina.png" hieght="100" width="80"></p>
          <div style="margin:0 0 0 110px;">
            <p class="name">Gaurav &amp; Shilpa Gupta</p>
            <p class="text">I wish to express a sincere thanks to Sukhmayrishtey.com, that helped me meet my soulmate<span class="more"> <a href="#">more</a></span></p>
          </div>
        </div>
        <div style="left: 280px;" class="scroller">
          <p class="fl"><img src="images/18.jpg" hieght="100" width="80"></p>
          <div style="margin:0 0 0 110px;">
            <p class="name">Navneet &amp; Sneha Rawat</p>
            <p class="text">Thank you Sukhmayrishtey.com, for giving my life to me.The important pages of my life begins  ... &nbsp; <span class="more"> <a href="#">more</a></span></p>
          </div>
        </div>
      </div>
      </div>
        <p style="width:620px;" class="hpText fr">"Sukhmayrishtey.com is 
India's pioneering online matrimonial service provider, offering best 
matchmaking services. With ample database of thousands of prospective 
brides' and grooms' profiles, we assist you to meet with potential life 
partners and build lifetime relationships. Avail best matrimony services
 with Sukhmayrishtey.com and get closer to your dream partner. 
Register here free &amp; start searching the right one for your life!"  
.... <a href="#" title="Read More">Read more</a></p>

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