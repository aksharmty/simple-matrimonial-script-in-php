<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>

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
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","adar","agar Brahmin","aidu","air","air Vaniya","ambiar","epali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Born Again","Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","adar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Does not matter","Does not matter",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Does not matter"?"Does not matter":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

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
<?php while($row = mysql_fetch_array($memcontrol)) { ?>
 
  
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Modify Profile    </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><br>

	  <form action="edit_hob.php" method="post" >
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Modify Hobbies and Interests </span><span class="bodysg"><a href="modify_fam.php"></a></span></td>
        </tr>
        
        <tr>
          <td width="22%">Hobbies  : </td>
          <td width="78%"><select name="txtHobby" class="forminput" id="txtHobby" style="width:200px;">
		  <option value="<? echo $row['Hobbies']; ?>"><? echo $row['Hobbies']; ?></option>
            <option value="Acting">Acting</option>
            <option value="Astronomy">Astronomy</option>
            <option value="Astrology">Astrology</option>
            <option value="Collectibles">Collectibles</option>
            <option value="Cooking">Cooking</option>
            <option value="Crosswords">Crosswords</option>
            <option value="Dancing">Dancing</option>
            <option value="Film-making">Film-making</option>
            <option value="Fishing">Fishing</option>
            <option value="Gardening/ landscaping">Gardening/ landscaping</option>
            <option value="Graphology">Graphology</option>
            <option value="ature">Nature</option>
            <option value="umerology">Numerology</option>
            <option value="Painting">Painting</option>
            <option value="Palmistry">Palmistry</option>
            <option value="Pets">Pets</option>
            <option value="Photography">Photography</option>
            <option value="Playing musical instruments">Playing musical instruments</option>
            <option value="Puzzles">Puzzles</option>
            <option value="o Hobbies">Not interest</option>
          </select></td>
        </tr>
        <tr>
          <td>Other Hobby   : </td>
          <td><input name="txtOh" type="text" class="forminput" id="txtOh" style="width:200px;" value="<? echo $row['OtherHobbies']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td>Interests  : </td>
          <td><select name="txtInterest" class="forminput" id="select" style="width:200px;">
		   <option value="<? echo $row['Interests']; ?>"><? echo $row['Interests']; ?></option>
            <option value="Adventure sports">Adventure sports</option>
            <option value="Book clubs">Book clubs</option>
            <option value="Computer games">Computer games</option>
            <option value="Health & fitness">Health & fitness</option>
            <option value="Internet">Internet</option>
            <option value="Learning new languages">Learning new languages</option>
            <option value="Movies">Movies</option>
            <option value="Music">Music</option>
            <option value="Politics">Politics</option>
            <option value="Reading">Reading</option>
            <option value="Social service">Social service</option>
            <option value="Sports"> Sports</option>
            <option value="Television">Television</option>
            <option value="Theatre">Theatre</option>
            <option value="Travel">Travel</option>
            <option value="Writing">Writing</option>
            <option value="Yoga">Yoga</option>
            <option value="Alternative healing / medicine">Alternative healing / medicine</option>
            <option value="ot interest" >Not interest</option>
          </select></td>
        </tr>
        <tr>
          <td>Other Interest   : </td>
          <td><input name="txtOi" type="text" class="forminput" id="txtOi" size="40" maxlength="40" style="width:200px;" value="<? echo $row['OtherInterests']; ?>"></td>
        </tr>
        
        
        
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">
            <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	  </form>
	   </td>
    </tr>
  </table>
  <? } ?>
  <p>&nbsp;</p></TD>
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
