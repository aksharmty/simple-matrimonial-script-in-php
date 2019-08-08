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
		
		
		if ( MatriForm.txtSAge.value > 40 )
		 {
			alert( "Minimum age should not be above 40" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtEAge.value == "" )
		 {
			alert( "Please enter maximum Age" );
			MatriForm.ta.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value > 40 )
		 {
			alert( "Maximum Age should be below 40" );
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
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","Nadar","Nagar Brahmin","Naidu","Nair","Nair Vaniya","Nambiar","Nepali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","Nadar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


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
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Simple Search </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="5" cellspacing="4" id="content">
      <tr>
        <td colspan="2"><p align="justify"><img src="pics/searchlense.gif" width="28" height="28" align="left"> Search based on a simple criteria one would look for in a   partner. Results can be viewed as Thumbnail View, Full View. If you like a profile you can Express Interest or Send Mail.</p></td>
      </tr>
      
      <tr>
        <td colspan="2">
		
		<form action="simplesearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
		
		<table width="100%" border="0" cellpadding="3" cellspacing="2">
          <tr>
            <td height="20" colspan="2"><strong><a href="#">Reach out to your spouse with a click of the mouse</a></strong></td>
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
                <INPUT name="txtSAge" class="forminput" id="txtSAge" value="20" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">
&nbsp; to &nbsp;
<INPUT name="txtEAge" class="forminput" id="txtEAge" value="30" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >
years </div></td>
          </tr>
          
          <tr>
            <td><div align="left">Denomination</div></td>
            <td><div align="left">
              <select name="religion" class="forminput" id="religion" style="width:160px;">
                <option value="" selected="selected">Select</option>
                <option value="Not Applicable">Not Applicable</option>
                <option value="A.G chruch">A.G chruch</option>
                <option value="Baptist">Baptist</option>
                <option value="Bornagain">Bornagain</option>
                <option value="Catholic">Catholic</option>
                <option value="Christian folloe jesus">Christian folloe jesus</option>
                <option value="Christian Jagobite">Christian Jagobite</option>
                <option value="Church of chirst">Church of chirst</option>
                <option value="CNI">CNI</option>
                <option value="CSI">CSI</option>
                <option value="ECI">ECI</option>
                <option value="Evangelical">Evangelical</option>
                <option value="Jacobite">Jacobite</option>
                <option value="LC Anglo Indain">LC Anglo Indain</option>
                <option value="Lutheran Christian">Lutheran Christian</option>
                <option value="Marthoma">Marthoma</option>
                <option value="Methodist">Methodist</option>
                <option value="New life Fellow Ship">New life Fellow Ship</option>
                <option value="Orthodax">Orthodax</option>
                <option value="Pentacost">Pentacost</option>
                <option value="Protestant">Protestant</option>
                <option value="Roman Catholic">Roman Catholic</option>
                <option value="Roman Syrian Catholic">Roman Syrian Catholic</option>
                <option value="Seventh Day Adventist">Seventh Day Adventist</option>
                <option value="Syrian catholic">Syrian catholic</option>
                <option value="TELC">TELC</option>
                <option value="Others">Others</option>
              </select></div></td>
          </tr>
          <tr>
            <td><div align="left">Caste</div></td>
            <td><div align="left">
              <select name="caste" class="forminput" id="caste" style="width:160px;">
                <option value="" selected="selected">Select</option>
                <option value="Not Applicable">Not Applicable</option>
                <option value="Anglo Indian">Anglo Indian</option>
                <option value="Cheraman">Cheraman</option>
                <option value="Fernando">Fernando</option>
                <option value="Garo">Garo</option>
                <option value="Goan">Goan</option>
                <option value="Khasi">Khasi</option>
                <option value="Knanaya">Knanaya</option>
                <option value="Kuki">Kuki</option>
                <option value="Madiga">Madiga</option>
                <option value="Mahar">Mahar</option>
                <option value="Mala">Mala</option>
                <option value="Matang">Matang</option>
                <option value="Mizo">Mizo</option>
                <option value="Mukkuvar">Mukkuvar</option>
                <option value="Nadar">Nadar</option>
                <option value="Naga">Naga</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="Intercaste">Intercaste</option>
                <option value="Adidravida">Adidravida</option>
                <option value="Agamudyar">Agamudyar</option>
                <option value="Asari">Asari</option>
                <option value="B.C">B.C</option>
                <option value="Balija Naidu">Balija Naidu</option>
                <option value="Barathar">Barathar</option>
                <option value="BC Thuluvavellalar">BC Thuluvavellalar</option>
                <option value="Bharadar">Bharadar</option>
                <option value="Bharathar paravar">Bharathar paravar</option>
                <option value="Chettiyar">Chettiyar</option>
                <option value="Christian Yadava">Christian Yadava</option>
                <option value="Dalit SC">Dalit SC</option>
                <option value="Devanga Chettiyar">Devanga Chettiyar</option>
                <option value="Devendra Kula Vellalar">Devendra Kula Vellalar</option>
                <option value="FC">FC</option>
                <option value="FC Pillai">FC Pillai</option>
                <option value="Fernando">Fernando</option>
                <option value="K.Vellalar">K.Vellalar</option>
                <option value="Kallar">Kallar</option>
                <option value="Kamma Naidu">Kamma Naidu</option>
                <option value="Kammalar">Kammalar</option>
                <option value="Kammavar Nadiu">Kammavar Nadiu</option>
                <option value="Kodikalkara vellalar">Kodikalkara vellalar</option>
                <option value="Kongu Chettiar">Kongu Chettiar</option>
                <option value="Kongu Chetty">Kongu Chetty</option>
                <option value="Malabar criyan christian">Malabar criyan christian</option>
                <option value="Maravar">Maravar</option>
                <option value="Mudaliyar">Mudaliyar</option>
                <option value="Mukkuvar">Mukkuvar</option>
                <option value="Naickar">Naickar</option>
                <option value="Naidu">Naidu</option>
                <option value="Nayar">Nayar</option>
                <option value="Paravan-Fernando">Paravan-Fernando</option>
                <option value="Paravar">Paravar</option>
                <option value="Pillai">Pillai</option>
                <option value="Reddiyar">Reddiyar</option>
                <option value="Reddy">Reddy</option>
                <option value="SC.AD">SC.AD</option>
                <option value="Sozhia Vallalar">Sozhia Vallalar</option>
                <option value="Syrian Catholic">Syrian Catholic</option>
                <option value="Telugu Reddy">Telugu Reddy</option>
                <option value="hevar">Thevar</option>
                <option value="Thulluva Vellalar">Thulluva Vellalar</option>
                <option value="Udayar">Udayar</option>
                <option value="Vallalar">Vallalar</option>
                <option value="Vanniyar">Vanniyar</option>
                <option value="Vellala">Vellala</option>
                <option value="Vellala Gounder">Vellala Gounder</option>
                <option value="Vellala Pillai">Vellala Pillai</option>
                <option value="Viswakarma">Viswakarma</option>
                <option value="Yadava">Yadava</option>
                <option value="Others">Others</option>
              </select></div></td>
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
              <input name="Submit" type="image" value="Submit" src="pics/search-button.gif">
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
