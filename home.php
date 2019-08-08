<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>India Matrimony live - Matrimonial Service</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="EN"> 
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>


						
<SCRIPT language="JavaScript">
<!-- Start
// Set up the image files to be used.
var theImages = new Array() // do not change this
// To add more image files, continue with the
// pattern below, adding to the array.



theImages[0] = 'images/pic1.jpg'
theImages[1] = 'images/pic2.jpg'
theImages[2] = 'images/pic3.jpg'
theImages[3] = 'images/pic4.jpg'


// do not edit anything below this line

var j = 0
var p = theImages.length;
var preBuffer = new Array()
for (i = 0; i < p; i++){
   preBuffer[i] = new Image()
   preBuffer[i].src = theImages[i]
}
var whichImage = Math.round(Math.random()*(p-1));
function showImage(){
document.write('<img src="'+theImages[whichImage]+'">');
}

//  End -->
            </SCRIPT>



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
			MatriForm.ta.focus( );
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
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","Nadar","Nagar Brahmin","Naidu","Nair","Nair Vaniya","Nambiar","Nepali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav","Devanga chettier", "24 manai chettier","Vaniya chettier", "Jangumar", "Andipandaram", "Ariyavaisiyar","Vannar"];
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
  <TABLE width="780" border="0" cellpadding="0" cellspacing="0" class="bordertopless">
  <!--DWLayoutTable-->
  <TR>
    <TD width="780" height="164">
		
		
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
  <TR>
    <TD width="780" height="37">
      <div align="left">
        
        <?php include("header.php");?>      </div></TD></TR>
  <TR>
    <TD valign="center" align="middle" background="pics/home-bgline.gif" height="1"></TD>
  </TR>
  <TR>
    <TD height="13" valign="top" bgcolor="#FFFFFF">
	
	<?php include("topmenu2.php");?>
	</TD>
  </TR>
					<!--DWLayoutTable-->
					
					<TR>
					
					<TD valign="center" align="middle" background="pics/home-bgline.gif" height="1"></TD>
					</TR>
					
					<TR>
					  <TD valign="top" bgcolor="#FFFFFF"><table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><table width="780" border="0">
                              <tr>
                                <td width="57%" height="188"><script language="JavaScript" type="text/javascript">
<!-- Start
showImage();
//  End -->
                      </script>
                                </td>
                                <td width="43%"><table width="319" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td><img src="pics/search_heading.gif" width="200" height="20" /></td>
                                    </tr>
                                    <tr>
                                      <td><table  height="159" cellspacing="0" cellpadding="0" 
            width="319" align="center" border="0">
                                          <tbody>
                                            <tr>
                                              <td colspan="3" valign="bottom" bgcolor="#FFFFFF"><img src="pics/top-quicksearch.gif" width="319" height="15" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="3" bgcolor="#a2bc4f" class="style">
											  
											  <form action="simplesearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
											  <table  height="162" cellspacing="4" cellpadding="0" 
            width="292" align="center" border="0">
                                                <tbody>
                                                  
                                                  <tr>
                                                    <td width="72" height="20" class="style style1">Looking For </td>
                                                    <td width="139"><input name="txtGender" type="radio" class="forminput" value="Male" />
                                                      Male 
                                                      &nbsp;
                            <input name="txtGender" type="radio" class="forminput" value="Female" checked="checked" />
                                                      Female </td>
                                                  </tr>
                                                  <tr>
                                                    <td height="18" class="style style1">Age</td>
                                                    <td>From
                                                      <input name="txtSAge" class="forminput" id="txtSAge" value="20" size="2" maxlength="2" onkeyup="check_Age('txtSAge')" />
                                                      &nbsp; to &nbsp;
                                                      <input name="txtEAge" class="forminput" id="txtEAge" value="60" size="2" maxlength="2" onkeyup="check_Age('txtEAge')" />
                                                      years </td>
                                                  </tr>
                                                  <tr>
                                                    <td height="19" class="style style1">Religion</td>
                                                    <td><select name="religion" class="forminput" id="religion" onchange="return caste_disable(document.MatriForm.religion);" style="width:180px;">
                                                        <option value="- Select -" selected="selected">- Select -</option>
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
                                                    </select></td>
                                                  </tr>
                                                  <tr>
                                                    <td height="19" class="style style1">Caste</td>
                                                    <td><select name="caste" class="forminput" id="caste" style="width:180px;">
                                                        <option value="Any">Any</option>
                                                    </select></td>
                                                  </tr>
                                                  <tr>
                                                    <td height="14" align="right" valign="bottom"><div align="left">
                                                        <input name="Submit2" type="image" value="Search" src="pics/search-button.gif" />
                                                    </div></td>
                                                    <td><input name="txtphoto" type="checkbox" id="txtphoto" value="Show profiles with Photo" />
                                                      Profiles with Photo</td>
                                                  </tr>
                                                </tbody>
                                              </table>
											  </form>
											  
											  </td>
                                            </tr>
                                            
                                            <tr>
                                              <td colspan="3" valign="top"><img src="pics/bot-quicksearch.gif" width="319" height="15" /></td>
                                            </tr>
                                          </tbody>
                                      </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td><table width="780" 
            border="0" cellpadding="2" cellspacing="4" bgcolor="#d5e9a2" class="border1">
                              <tbody>
                                <tr>
                                  <td width="8" bgcolor="#d5e9a2">&nbsp;</td>
                                  <td width="99" rowspan="2" bgcolor="#d5e9a2"><span class="h2r"><img 
                  src="pics/bull.gif" width="7" height="9" hspace="2" 
                  align="absmiddle" /></span><span class="style2"><strong>Register</strong></span><span class="h2r"><br />
                                    </span><span class="style3">and create your <br />
                                      Profile 
                                      FREE </span></td>
                                  <td width="119" rowspan="2" bgcolor="#d5e9a2"><span class="h2r"><img 
                  src="pics/bull.gif" width="7" height="9" hspace="2" 
                  align="absmiddle" /></span><span class="style2"><strong>Search</strong></span><span class="h2r"><br />
                                    </span><span class="style3">for members 
                                      who<br />
                                      meet your criteria.</span></td>
                                  <td width="92" rowspan="2" bgcolor="#d5e9a2"><span class="h2r"><img 
                  src="pics/bull.gif" width="7" height="9" hspace="2" 
                  align="absmiddle" /></span><span class="style2"><strong>Contact</strong></span><span class="h2r"><br />
                                    </span><span class="style3">members you <br />
                                      like via email</span>. </td>
                                  <td width="169" rowspan="2" bgcolor="#d5e9a2"><a 
                  href="http://apnavichola.com/register.aspx"></a><img src="pics/register.gif" width="168" height="54" border="0" usemap="#MapMapMap" /></td>
                                  <td width="241" rowspan="2" bgcolor="#d5e9a2"><table cellspacing="0" cellpadding="0" width="100%">
                                      <tbody>
                                        <tr>
                                          <td><span class="style2"><strong>View Members Address?</strong></span><span class="link3 style12"> <a 
                        href="login.aspx">Click 
                                            here</a></span></td>
                                        </tr>
                                      </tbody>
                                  </table></td>
                                </tr>
                                <tr bgcolor="#FBE28C">
                                  <td height="24" bgcolor="#d5e9a2">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                              <map name="MapMapMap" id="MapMapMap">
                                <area shape="rect" coords="18,10,157,45" href="register.aspx" />
                            </map></td>
                        </tr>
                      </table></TD>
					</TR>
					<TR valign="top">
					<TD bgcolor="#FFFFFF"><TABLE width="780" border="0" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF">
					<TR>
					  <TD colspan="2" valign="top" bgcolor="#FFFFFF"><table width="488" border="0" align="left" cellpadding="5" cellspacing="4">
                        <tr>
                          <td colspan="2"><div align="left"><span class="style4"><strong>Community   Search </strong></span> </div>
                              <div></div></td>
                        </tr>
                        <tr>
                          <td width="14%"><div>
                              <div align="left">Religion:</div>
                          </div></td>
                          <td width="83%"><div align="left"><a href="Religion_search_results.php?ID=Christian" target="_blank" class="none style8">Christian</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Religion_search_results.php?ID=Hindu" target="_blank" class="none style8">Hindu</a>&nbsp;<span class="style7">|</span>&nbsp;<a  href="Religion_search_results.php?ID=Muslim" target="_blank" class="none style8">Muslim</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Religion_search_results.php?ID=Jain" target="_blank" class="none style8">Jain</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Religion_search_results.php?ID=Sikh" target="_blank" class="none style8">Sikh</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="advancesearch.php" target="_blank" class="style8"><u>More...</u></a></div></td>
                        </tr>
                        <tr>
                          <td><div align="left">Caste:</div></td>
                          <td><div align="left"><a href="Caste_search_results.php?ID=Brahmin" target="_blank" class="none style8">Brahmin</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Caste_search_results.php?ID=Chettiar" target="_blank" class="none style8">Chettiar</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Caste_search_results.php?ID=Gounder" target="_blank" class="none style8">Gounder</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Caste_search_results.php?ID=Naidu" target="_blank" class="none style8">Naidu</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="advancesearch.php" title="Mukkulathor  Matrimonial" target="_blank" class="style8">More...</a></div></td>
                        </tr>
                        <tr>
                          <td><div align="left">Education:</div></td>
                          <td><div align="left"><a href="Edu_search_results.php?ID=Bachelors" target="_blank" class="none style8">Bachelors Degree</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Edu_search_results.php?ID=Honours degree" target="_blank" class="none style8">Honours</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="Edu_search_results.php?ID=Diploma" target="_blank" class="none style8">Diploma</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="advancesearch.php" target="_blank" class="style8">More...</a></div></td>
                        </tr>
                        <tr>
                          <td><div align="left">City:</div></td>
                          <td><div align="left"><a href="city_search_results.php?ID=Delhi" target="_blank" class="none style8">Delhi</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="city_search_results.php?ID=Calcutta" target="_blank" class="none style8">Calcutta</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="city_search_results.php?ID=Mumbai" target="_blank" class="none style8">Mumbai</a>&nbsp;<span class="style7">|</span>&nbsp;<a href="city_search_results.php?ID=chennai" target="_blank" class="none style8">Chennai</a><span class="style7"> |</span> <a href="city_search_results.php" target="_blank" class="style8">More...</a></div></td>
                        </tr>
                        
                      </table></TD>
					  <TD width="227" bgcolor="#FFFFFF">
					  
					  
					  <FORM  name="form1" id="form1" method="post" action="memlogin_submit.php">
          <TABLE width="100%" border="0" cellspacing="2" cellpadding="3">
            <TR>
              <TD><FONT 
					color="#9a440d"><B>Member Login</B></FONT></TD>
            </TR>
            
            <TR>
              <TD><FONT color="#9a440d">ID/E-mail :</FONT>&nbsp;
                  <asp:TextBox ID="txtusername" runat="server" MaxLength="30" CssClass="forminput" Width="100"></asp:TextBox>
                  <input name="txtusername" type="text" Class="forminput" maxlength="50"  />              </TD>
            </TR>
            <TR>
              <TD><FONT color="#9a440d">Password :</FONT>&nbsp;
                  <input name="txtpassword" type="password" Class="forminput" id="txtpassword" maxlength="50"  /></TD>
            </TR>
            <TR>
              <TD><input name="Submit" type="image" value="Submit" src="pics/lgn-button.gif" />
                &nbsp;&nbsp;<A class="txtsmall" title="Forgot Password?" 
					href="forgotpassword.php"><FONT 
					color="#9a440d">Forgot Password?</FONT></A></TD>
            </TR>
          </TABLE>
      </FORM>
					  
					  </TD>
					</TR>
					<TR>
					<TD height="1" colspan="3" align="middle" valign="center" background="pics/newuser-regline.gif"></TD>
					</TR>
					<TR>
					<TD width="426" bgcolor="#FFFFFF"><STRONG><IMG src="pics/greynext.gif" width="14" height="15" align="absmiddle" />Over 350 New Profiles everyday</STRONG><BR />
					&nbsp;&nbsp;&nbsp;The Right Way to Get Started on your marriage ! </TD>
					<TD colspan="2" bgcolor="#FFFFFF"><STRONG><IMG src="pics/greynext.gif" width="14" height="15" align="absmiddle" /></STRONG>Avail value added services, become a <BR />
					<STRONG>&nbsp;&nbsp;&nbsp;Premium   Member</STRONG> <STRONG><A href="paymentoptions.aspx"><u>Click here&raquo;</u></A></STRONG></TD>
					</TR>
					<TR>
					  <TD bgcolor="#FFFFFF">&nbsp;</TD>
					  <TD colspan="2" bgcolor="#FFFFFF">&nbsp;</TD>
					  </TR>
					</TABLE></TD>
					</TR>
					
					<TR valign="top">
					<TD bgcolor="#FFFFFF"><DIV align="center"><img src="pics/flower.gif" width="780" height="19"></DIV></TD>
					</TR>
					<TR valign="top">
					  <TD bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</TD>
					</TR>
					<TR valign="top">
					 
		  </TR>
					<TR valign="top">
					  <TD bgcolor="#FFFFFF"><?php include("footer.php");?></TD>
				  </TR>
					<TR valign="top">
					  <TD bgcolor="#FFFFFF"></TD>
		  </TR>
</TABLE>
	  </TD>
  </TR>
</TABLE>
  <p><br>
  </p>
</DIV>

</BODY>
</HTML>
