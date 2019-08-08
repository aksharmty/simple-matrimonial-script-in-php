<?php include("config.php"); ?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css"></HEAD>

 


		
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

<script language="JavaScript" type="text/javascript">
<!--

var NS4 = (navigator.appName == "Netscape" && parseInt(navigator.appVersion) < 5);

function addOption(theSel, theText, theValue)
{
  var newOpt = new Option(theText, theValue);

  var selLength = theSel.length;
  theSel.options[selLength] = newOpt;
}

function deleteOption(theSel, theIndex)
{ 
  //var selLength = new Array();
  var selLength = theSel.length;
  if(selLength>0)
  {
    theSel.options[theIndex] = null;
  }
}

function moveOptions(theSelFrom, theSelTo)
{
  
  var selLength= theSelFrom.length;
  var selectedText = new Array();
  var selectedValues = new Array();
  var selectedCount = 0;
  
  var i;
  
  // Find the selected Options in reverse order
  // and delete them from the 'from' Select.
  for(i=selLength-1; i>=0; i--)
  {
    if(theSelFrom.options[i].selected)
    {
      selectedText[selectedCount] = theSelFrom.options[i].text;
      selectedValues[selectedCount] = theSelFrom.options[i].value;
      deleteOption(theSelFrom, i);
      selectedCount++;
    }
  }
  
  // Add the selected text/values in reverse order.
  // This will add the Options to the 'to' Select
  // in the same order as they were in the 'from' Select.
  for(i=selectedCount-1; i>=0; i--)
  {
    addOption(theSelTo, selectedText[i], selectedValues[i]);
  }
  
  if(NS4) history.go(0);
}

//-->
</script>


<script language="javascript">

function validate3()
{
	var i;
	

	
		for(var i = 0;i < document.MatriForm.religionsel.length;i++)
		{document.MatriForm.religionsel.options[i].selected = true;}

		for(var i = 0;i < document.MatriForm.castesel.length;i++)
		{document.MatriForm.castesel.options[i].selected = true;}
		
		for(var i = 0;i < document.MatriForm.txtEdusel.length;i++)
		{document.MatriForm.txtEdusel.options[i].selected = true;}
		
		for(var i = 0;i < document.MatriForm.txtRessel.length;i++)
		{document.MatriForm.txtRessel.options[i].selected = true;}
		
		for(var i = 0;i < document.MatriForm.txtCountrysel.length;i++)
		{document.MatriForm.txtCountrysel.options[i].selected = true;}
		
		
		
	
}

</script>

<BODY class="body">
<DIV align="center">
<TABLE width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
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
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Regular Search </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="5" cellspacing="4" id="content">
      <tr>
        <td colspan="2"><p align="justify"><img src="pics/searchlense.gif" width="28" height="28" align="left"> Search based on a few basic criteria one would look for in a   partner. If you like a profile you can Express Interest or Send Mail.</p></td>
      </tr>
      
      <tr>
        <td colspan="2">
		
		<form action="advsearch_results.php" method="post" name="MatriForm" id="MatriForm" >
		
		<table width="100%" border="0" cellpadding="3" cellspacing="2">
          <tr>
            <td height="20" colspan="2"><div align="right">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
          </tr>
          <tr>
            <td width="22%"><div align="left">Looking for </div></td>
            <td width="78%"><div align="left">
              <input name="txtGender" type="radio" class="forminput" value="Male" checked>
Male 
					&nbsp;
                    <input name="txtGender" type="radio" class="forminput" value="Female">
Female </div></td>
          </tr>
          <tr>
            <td>Marital Status </td>
            <td><INPUT name="txtms[]"  type="checkbox" id="txtms[]" value="Unmarried" checked>
Unmarried
  <INPUT id="txtms[]"  type="checkbox" value="Widow/Widower" name="txtms[]">
Widow/Widower
<INPUT id="txtms[]"  type="checkbox" value="Divorcee" name="txtms[]">
Divorcee
<INPUT id="txtms[]"  type="checkbox" value="Separated" name="txtms[]">
Separated </td>
          </tr>
          <tr>
            <td><div align="left">Age</div></td>
            <td><div align="left">From
                <INPUT name="txtSAge" class="forminput" id="txtSAge" value="20" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">
&nbsp; to &nbsp;
<INPUT name="txtEAge" class="forminput" id="txtEAge" value="90" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >
years </div></td>
          </tr>
          
          <tr>
            <td>Height</td>
            <td>From 
              <select name="txtHeight1" class="forminput" id="txtHeight1" style="width:100px;">
                <option value="">- Select -</option>
                <option value="1">Below 4ft</option>
                <option value="2" selected>4ft 6in</option>
                <option value="3">4ft 7in</option>
                <option value="4">4ft 8in</option>
                <option value="5">4ft 9in</option>
                <option value="6">4ft 10in</option>
                <option value="7">4ft 11in</option>
                <option value="8">5ft</option>
                <option value="9">5ft 1in</option>
                <option value="10">5ft 2in</option>
                <option value="11">5ft 3in</option>
                <option value="12">5ft 4in</option>
                <option value="13">5ft 5in</option>
                <option value="14">5ft 6in</option>
                <option value="15">5ft 7in</option>
                <option value="16">5ft 8in</option>
                <option value="17">5ft 9in</option>
                <option value="18">5ft 10in</option>
                <option value="19">5ft 11in</option>
                <option value="20">6ft</option>
                <option value="21">6ft 1in</option>
                <option value="22">6ft 2in</option>
                <option value="23">6ft 3in</option>
                <option value="24">6ft 4in</option>
                <option value="25">6ft 5in</option>
                <option value="26">6ft 6in</option>
                <option value="27">6ft 7in</option>
                <option value="28">6ft 8in</option>
                <option value="29">6ft 9in</option>
                <option value="30">6ft 10in</option>
                <option value="31">6ft 11in</option>
                <option value="32">7ft</option>
                <option value="33">Above 7ft</option>
              </select> 
              &nbsp;&nbsp;to&nbsp; <select name="txtHeight2" class="forminput" id="txtHeight2" style="width:100px;">
                <option value="">- Select -</option>
                <option value="1">Below 4ft</option>
                <option value="2">4ft 6in</option>
                <option value="3">4ft 7in</option>
                <option value="4">4ft 8in</option>
                <option value="5">4ft 9in</option>
                <option value="6">4ft 10in</option>
                <option value="7">4ft 11in</option>
                <option value="8">5ft</option>
                <option value="9">5ft 1in</option>
                <option value="10">5ft 2in</option>
                <option value="11">5ft 3in</option>
                <option value="12">5ft 4in</option>
                <option value="13">5ft 5in</option>
                <option value="14">5ft 6in</option>
                <option value="15">5ft 7in</option>
                <option value="16">5ft 8in</option>
                <option value="17">5ft 9in</option>
                <option value="18">5ft 10in</option>
                <option value="19">5ft 11in</option>
                <option value="20">6ft</option>
                <option value="21">6ft 1in</option>
                <option value="22">6ft 2in</option>
                <option value="23">6ft 3in</option>
                <option value="24">6ft 4in</option>
                <option value="25">6ft 5in</option>
                <option value="26">6ft 6in</option>
                <option value="27">6ft 7in</option>
                <option value="28">6ft 8in</option>
                <option value="29">6ft 9in</option>
                <option value="30">6ft 10in</option>
                <option value="31" selected>6ft 11in</option>
                <option value="32">7ft</option>
                <option value="33">Above 7ft</option>
                                          </select></td>
          </tr>
          <tr>
            <td colspan="2" class="bodysmall">To make a selection, click on it and click on the &quot;Add&quot; button. Repeat for multiple selections. To remove a selection, click on it and click on the &quot;Remove&quot; button.</td>
            </tr>
          <tr>
            <td><div align="left">Denomination</div></td>
            <td><div align="left">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="42%" rowspan="2"><div align="left">
                    <select name="religion[]" size="5" multiple class="forminput" id="religion" style="width:160px;">
                      <option value="Any" selected>Any</option>
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
                    </select>
                  </div></td>
                  <td width="17%"><input name="button" type="button" class="forminput"
			 onClick="moveOptions(this.form.religion, this.form.religionsel);" value="   Add   " />
                    <br /></td>
                  <td width="41%" rowspan="2"><div align="right">
                    <select name="religionsel[]" size="5" multiple id="religionsel" style="width:160px;" class="forminput">
                    </select>
                  </div></td>
                </tr>
                <tr>
                  <td><input name="button2" type="button" class="forminput"
			 onclick="moveOptions(religionsel, this.form.religion);" value="Remove" /></td>
                </tr>
              </table>
            </div></td>
          </tr>
          <tr>
            <td><div align="left">Caste</div></td>
            <td><div align="left">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td rowspan="3"><select name="caste[]" size="5" multiple class="forminput" id="caste" style="width:160px;">
                    <option value="Any">Any</option>
					
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
                  </select></td>
                  <td><input name="button3" type="button" class="forminput"
			 onClick="moveOptions(this.form.caste, this.form.castesel);" value="   Add   " /></td>
                  <td rowspan="3"><div align="right">
                    <select name="castesel[]" size="5" multiple id="castesel" style="width:160px;" class="forminput">
                                        </select>
                  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input name="button22" type="button" class="forminput"
			 onclick="moveOptions(castesel, this.form.caste);" value="Remove" /></td>
                </tr>
              </table>
            </div></td>
          </tr>
          
          <tr>
            <td>Sub caste <span class="Alert">*</span></td>
            <td><input name="txtsc" type="text" class="forminput" id="txtsc" size="40" maxlength="50"> 
              (Eg: Brahmin) </td>
          </tr>
          <tr>
            <td>Education</td>
            <td><div align="left">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td rowspan="3"><div align="left">
                    <select name="txtEdu[]" size="5" multiple class="forminput" id="txtEdu" style="width:160px;">
                      <option value="Any">Any</option>
                      <option value="Bachelors">Bachelors</option>
                      <option value="Masters">Masters</option>
                      <option value="Doctorate">Doctorate</option>
                      <option value="Diploma">Diploma</option>
                      <option value="Undergraduate">Undergraduate</option>
                      <option value="Associates degree">Associates degree</option>
                      <option value="Honours degree">Honours degree</option>
                      <option value="Trade school">Trade school</option>
                      <option value="High school">High school</option>
                      <option value="Less than high school">Less than high school</option>
                    </select>
</div></td>
                  <td><input name="button32" type="button" class="forminput"
			 onClick="moveOptions(this.form.txtEdu, this.form.txtEdusel);" value="   Add   " /></td>
                  <td rowspan="3"><div align="right">
                    <select name="txtEdusel[]" size="5" multiple id="txtEdusel" style="width:160px;" class="forminput">
                                              </select>
                  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input name="button222" type="button" class="forminput"
			 onclick="moveOptions(txtEdusel, this.form.txtEdu);" value="Remove" /></td>
                </tr>
              </table>
            </div></td>
          </tr>
          <tr>
            <td>Citizenship</td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="3"><div align="left">
                  <select name="txtRes[]" size="5" multiple class="forminput" id="txtRes" style="width:160px;">
                    <option value="Any">Any</option>
					<option value="Citizen">Citizen</option>
                    <option value="Permanent Resident">Permanent Resident</option>
                    <option value="Student Visa">Student Visa</option>
                    <option value="Temporary Visa">Temporary Visa</option>
                    <option value="Work permit">Work permit</option>
                  </select></div></td>
                <td><input name="button322" type="button" class="forminput"
			 onClick="moveOptions(this.form.txtRes, this.form.txtRessel);" value="   Add   " /></td>
                <td rowspan="3"><div align="right">
                  <select name="txtRessel[]" size="5" multiple id="txtRessel" style="width:160px;" class="forminput">
                                    </select>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><input name="button2222" type="button" class="forminput"
			 onclick="moveOptions(txtRessel, this.form.txtRes);" value="Remove" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>Country Living in </td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="3"><div align="left"><span class="formselect">
<select name="txtCountry[]" size="5" multiple class="forminput" id="txtCountry" style="width:160px;">
<option value="India" selected>India</option>
<option value="USA">USA</option>
<option value="UK">UK</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua">Antigua</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Barbuda">Barbuda</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Virgin islands">British Virgin isl.</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman isl">Cayman Islands</option>
<option value="Central African Rep">Central African Rep.</option>
<option value="Chad">Chad</option>
<option value="Channel isl">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Congo">Congo</option>
<option value="cook isl">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Curacao">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value=" Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Faeroe isl">Faeroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Gemany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="GB">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea Bissau">Guinea Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="Indonesia">Indonesia</option>
<option value="Irak">Irak</option>
<option value="Iran">Iran</option>
<option value="Ireland">Ireland</option>
<option value="Northern Ireland">Ireland, Northern</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value=Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value=Kuwait">Kuwait</option>
<option value=Kyrgyzstan">Kyrgyzstan</option>
<option value=Latvia">Latvia</option>
<option value=Lebanon">Lebanon</option>
<option value="Liberia">Liberia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall isl">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar/Burma</option>
<option value="Namibia">Namibia</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value=""Palau>Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Rwanda">Rwanda</option>
<option value="Saba">Saba</option>
<option value="Saipan">Saipan</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Scotland">Scotland</option>
<option value="Senegal">Senegal</option>
<option value=""Seychelles>Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovac Republic">Slovak Republic</option>
<option value="Slovenia">Slovenia</option>
<option value="South Africa">South Africa</option>
<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Trinidad-Tobago">Trinidad-Tobago</option>
<option value="Tunesia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="U.S. Virgin isl">U.S. Virgin Islands</option>
<option value="USA">U.S.A.</option>
<option value="Uganda">Uganda</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Urugay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Wales">Wales</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></span></div></td>
                <td><input name="button3222" type="button" class="forminput"
			 onClick="moveOptions(this.form.txtCountry, this.form.txtCountrysel);" value="   Add   " /></td>
                <td rowspan="3"><div align="right">
                  <select name="txtCountrysel[]" size="5" multiple id="txtCountrysel" style="width:160px;" class="forminput">
                                    </select>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><input name="button22222" type="button" class="forminput"
			 onClick="moveOptions(txtCountry, this.form.txtCountry);" value="Remove" /></td>
              </tr>
            </table></td>
          </tr>
          
          <tr>
            <td><div align="left">Show <span class="Alert">*</span></div></td>
            <td><div align="left">
              <input name="txtphoto" type="checkbox" id="txtphoto" value="photo">
            Profiles with Photo</div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left"></div></td>
            <td><div align="left">
              <input name="Submit" type="image" value="Submit" src="pics/search-button.gif" onClick="return validate3();">
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
