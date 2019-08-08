<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
$strid=$_GET['ID']; 
$result = mysql_query("SELECT *,Left(profile,200) as profile1 FROM register where matriid='$strid' ");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
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
        <td width="80%"><table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="0" colspan="4" valign="middle">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">
			<!-- RESULTS START -->
			<?php  while($row = mysql_fetch_array($result)){ ?>
			<table width="7"  border="0" align="center" cellpadding="0" cellspacing="0" class="blackbox">
              <tr>
                <td><div align="center">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td 
width="20%" valign="top" bgcolor="#E8FDA6" style="PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; PADDING-TOP: 5px"><div align="left" class="headertext"><strong> <span class="smalltextgrey"><img src="images/icon7.gif" width="19" height="16" /></span> Profile</strong></div></td>
                          <td valign="top" bgcolor="#E8FDA6" style="PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; PADDING-TOP: 5px"><div align="right"></div>
                              <div align="right"></div>
                            <div align="center"><a href="#"></a></div>
                            <div align="right"></div></td>
                        </tr>
                        <tr>
                          
 <td height="2" colspan="2" background="images/dot.gif" class="smalltextgrey"></td>				
                        </tr>
                      </tbody>
                    </table>
                  <!--		<div style="padding-left:0px;padding-top:5px;padding-bottom:5px;"><font class="leftmenuhead"><font color="#EF6F1F">View Profile</font></div>-->
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="379" valign="top" ><table width="100%" border="0" cellspacing="3" cellpadding="0">
                            <tr>
                              <td width="10"><div align="left"></div></td>
                              <td width="290" class="h1dp"><div align="left" class="paratext"><strong>
                                MatriID: 
                                      <?php  echo $row['MatriID']?>
                              </strong></div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left" class="Partext1">Posted by:
                                    <?php  echo $row['Profilecreatedby']?>
                              </div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left" class="Partext1">Last login :
                                    <?php# (Container.DataItem("lastlogin']) ?>
                              </div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left" class="Partext1">Registered On:
                                    <?php  echo $row['Regdate']?>
                              </div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left"></div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left" class="Partext1">I am
                                <?php  echo $row['Age']?>
                                ,
                                <?php  echo $row['Maritalstatus']?>
                                <?php  echo $row['Religion']?>
                                <?php  echo $row['Gender']?>
                                living in<br />
                                <?php  echo $row['State']?>
                                ,
                                <?php  echo $row['Country']?>
                              </div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left"></div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left">
  <span class="Partext1"><?php  echo $row['profile1']?>
  </span>  <span class="smalltextred">&nbsp;... more</span> <a href='#q1'>&raquo;&raquo;</a></div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><div align="left"></div></td>
                            </tr>
                            <tr>
                              <td><div align="left"></div></td>
                              <td><asp:ImageButton ID="Button1"  runat="server"  ImageUrl="Images/ei.gif" OnClick="Express_Interest_Click"/>                              </td>
                            </tr>
                        </table></td>
                        <td><div align="center"><span class="Partext1">
                         
                        </span>
                            <table width="200" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="center"> <img src=../photo1/<?php  echo $row['Photo1']?> border=0></div></td>
                              </tr>
                              <tr>
                                <td><a href="#" class="paratext" onclick="MM_openBrWindow('viewphotos.php','vp','resizable=yes')">View Photos </a></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Basic  Information</b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="139" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Name :</div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Name']?>
                            &nbsp;<a href="#" onclick="MM_openBrWindow('viewhoros_m.aspx?MatriID=<?php  echo $row['MatriID']?>','va','scrollbars=yes,width=620,height=550')">
                              <?php  echo $row['Horoscheck']?>
                              </a> &nbsp;<a href="videos/<?php  echo $row['video']?>">
                                <?php  echo $row['videocheck']?>
                              </a> </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Gender :</div></td>
                          <td width="159" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Gender']?>                          
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Age :</div></td>
                          <td width="190" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Age']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Date of Birth  :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['DOB']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Place of Birth :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['POB']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Marital Status :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Maritalstatus']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 
width="102"><div align="left">Children Status :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Childrenlivingstatus']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
<td valign="top" colspan="4" height="1"><img height="1" 
src="" width="100%" /></td>
 </tr>
 
 
 <tr bgcolor="#ffffff">
                          <td width="139" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Time of Birth  :</div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Tob']?>
                          </div></td>
                        </tr>
						
						<tr bgcolor="#eeebda">
<td valign="top" colspan="4" height="1"><img height="1" 
src="" width="100%" /></td>
 </tr>
 
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Education and Occupation </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="138" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Education :</div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Education']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Edu Details  :</div></td>
                          <td width="160" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Educationdetails']?>
                          </div></td>
                          <td width="102" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Occupation :</div></td>
                          <td width="190" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Occupation']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Employed in   :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Employedin']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Annual Income  :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Annualincome']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b> Socio Religious Background </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="140" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Religion :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 
width="157"><div align="left">
                            <?php  echo $row['Religion']?>
                          </div></td>
                          <td width="103" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Caste/Division :</div></td>
                          <td width="190" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['caste']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Subcaste/Sec :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">
                            <?php  echo $row['subcaste']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"> <div align="left">Gothram:</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">
                            <?php  echo $row['Gothram']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Language :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Language']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Star :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Star']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Moonsign : </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['moonsign']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Horoscope Match  : </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['horosmatch']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Manglik/Dosham : </div></td>
                          <td colspan="3" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Manglik']?>
                          </div></td>
                        </tr>
						
						<tr bgcolor="#eeebda">
<td valign="top" colspan="4" height="1"><img height="1" 
src="" width="100%" /></td>
 </tr>
						
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Physical Status and Lifestyle </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="140" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Height :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 
width="156"><div align="left">
                            <?php  echo $row['Height']?>
                          </div></td>
                          <td width="104" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Weight :</div></td>
                          <td width="190" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['weight']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Blood Group:</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">
                            <?php  echo $row['BloodGroup']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"> <div align="left">Body Type:</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">
                            <?php  echo $row['Bodytype']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Complexion :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['complexion']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Diet :</div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Diet']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Smoke : </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Smoke']?>
                          </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Drink  : </div></td>
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                            <?php  echo $row['Drink']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><img height="1" 
src="" width="100%" /></td>
                        </tr>
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Profile Description </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">I am Looking : </div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Looking']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#EEEBDA">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="132" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Profile Description :</div></td>
                          <td width="458" colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left"><a name="q1"></a>
                            <?php  echo $row['Profile']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><img height="1" 
src="" width="100%" /></td>
                        </tr>
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Family Details </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="140" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Details:</div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Familydetails']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Family Values  :</div></td>
                          <td width="157" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['familyvalues']?>
                          </div></td>
                          <td width="103" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Type :</div></td>
                          <td width="190" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['FamilyType']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Family Status  :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['familystatus']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Father Occupation  : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['FathersOccupation']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Mother Occupation  :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['mothersoccupation']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Origin  : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['FamilyOrigin']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">No Of Brothers  :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['noofbrothers']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">No Of Sisters  : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['noofsisters']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><img height="1" 
src="" width="100%" /></td>
                        </tr>
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="orangesubtitles" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Partner Preference </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="139" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Age :</div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_FromAge']?>
                            Between
                            <?php  echo $row['PE_ToAge']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Looking For  :</div></td>
                          <td width="156" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_lookingfor']?>
                          </div></td>
                          <td width="105" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Complexion  : </div></td>
                          <td width="190" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Complexion']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Height  :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Height']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Partner Preference   : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Partnerexpectations']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Religion  :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Religion']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Caste  : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Caste']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Eating habits   :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Eatinghabbits']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Education  : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Education']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Country Living in   :</div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Countrylivingin']?>
                          </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Resident Status   : </div></td>
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['PE_Residentstatus']?>
                          </div></td>
                        </tr>
                        
                        <tr bgcolor="#eeebda">
                          <td height="1" colspan="4" valign="top"><img height="1" 
src="" width="100%" /></td>
                        </tr>
                      </tbody>
                    </table>
                  <br />
                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                      <tbody>
                        <tr bgcolor="#FFF0B3" class="rowlightbrown">
                          <td colspan="4" 
valign="top" bgcolor="#FFFFCC" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Hobies and Interests </b></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td width="142" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Hobbies :</div></td>
                          <td width="458" colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Hobbies']?>
                            -
                            <?php  echo $row['OtherHobbies']?>
                          </div></td>
                        </tr>
                        <tr bgcolor="#EEEBDA">
                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                        </tr>
                        <tr bgcolor="#ffffff">
                          <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Interest : </div></td>
                          <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                            <?php  echo $row['Interests']?>
                            -
                            <?php  echo $row['OtherInterests']?>
                          </div></td>
                        </tr>
                      </tbody>
                    </table>
                </div></td>
              </tr>
            </table>
			<?php } mysql_close($con); ?>
			<!-- RESULTS END -->
			
			</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
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
