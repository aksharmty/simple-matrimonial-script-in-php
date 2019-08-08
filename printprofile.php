<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_GET['id']; 
$result = mysql_query("SELECT *,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate FROM register where matriid='$strid' ");
$count=@mysql_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row
			
	 if($count!=1)
	 {
	 print "<script>";
     print " self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
     print "</script>";
	 }
?>
<LINK href="style.css" rel="stylesheet" type="text/css">


<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td valign="top"><div align="center">
      <table width="600" height="0" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF" id="content">
        
        <tr>
          <td><?php  while($row = mysql_fetch_array($result)){ ?>
              <table width="560" border="0" align="center" cellpadding="1" cellspacing="1">
                <tr>
                  <td>
				 <img src= <?php echo $info['Weblogopath']; ?> border="0" >
				  
				  </td>
                </tr>
                <tr>
                  <td><div align="center"><img src="pics/print.gif" width="16" height="16" align="absmiddle"> <a href="javascript:print();">PRINT NOW</a> </div></td>
                </tr>
              </table>
              <br />
              <table width="588" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="18">&nbsp;</td>
                </tr>
                <tr>
                  <td><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="379" valign="top" ><table width="100%" border="0" cellspacing="2" cellpadding="1">
                            <tr>
                              <td width="14" class="h1dp">&nbsp;</td>
                              <td width="356" ><div align="left" class="paratext"><strong> MatriID:
                                <?php  echo $row['MatriID']?>
                              </strong></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><div align="left" class="Partext1">Posted by:
                                <?php  echo $row['Profilecreatedby']?>
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><div align="left" class="Partext1">Last login :
                                <?php  echo $row['lastlogindate']?>
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><div align="left" class="Partext1">Registered On:
                                <?php  echo $row['Regdate']?>
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><div align="left"></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
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
                              <td>&nbsp;</td>
                              <td><div align="left"></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><div align="left">
                                 
								  <?php 
		  $strprofile =  $row['profile1'];
		  $newprofile = wordwrap($strprofile, 8, "\n", true);
		  echo "$newprofile\n";
		  ?>
								  
								  
                                  <span class="smalltextred">&nbsp;... more</span> <a href='#q1'>&raquo;&raquo;</a></div></td>
                            </tr>
                        </table></td>
                        <td><div align="center">
                            <table width="150" height="150" border="0" align="center" class="submenubox" id="photo">
                              <tr>
                                <td><?php if($row['Photo1']=="nophoto.gif")
{ ?>
                                    <img src="pics/nophoto.gif" width="139" height="175" border="0" class="submenubox"/>
                                    <? }
else if($row['Photo1Approve']== "No")
{ ?>
                                    <img src="pics/bigphotonotapprove.gif" width="137" height="177" border="0" class="submenubox"/>
                                    <? }
else if($row['PhotoProtect']== "Yes")
{ 
?>

<div align="center"><img src="pics/bigphotoprotect.gif" width="137" height="177" border="0" class="submenubox" />
<br>
<a href="#" onClick="MM_openBrWindow('photopasswordrequest.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> Request Photo </a>
<br><br>

<a href="#" onClick="MM_openBrWindow('viewprotectphotoform.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> View Photo </a></div>

                                  <? }
else if( $row['PhotoProtect']!= "Yes" and $row['Photo1']!="nophoto.gif" )
{ ?>
                                    <div align="center"> 
									<a href="#"> 
									
									<img src="photoprocess.php?image=<?php echo $row['Photo1']?>&square=150&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php  echo $row['MatriID']?>" hspace="1" vspace="1" border="0" class="submenubox" onClick="MM_openBrWindow('viewphoto.php?id=<?php  echo $row['MatriID']?>&amp;Choice=1','vp','resizable=yes,width=600,height=450')" />									</a>									</div>
                                  <? } ?>
                                  <br>
								  <div align="center">
<?php ///////////// HOROSCOPE VIEW ////// 
$strhoros = $row['HorosApprove'];
if ($strhoros =="Yes"){ ?>
<a href="#" onClick="MM_openBrWindow('viewhoros.php?MatriID=<?php  echo $row['MatriID']?>','va','scrollbars=yes,width=620,height=550')">View Horoscope </a> 
<? } else { } ?>
								</div>							    </td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table>
            <br />
            
              <br />
              <table width="7"  border="0" align="center" cellpadding="0" cellspacing="0" class="blackbox">
                <tr>
                  <td><div align="center">
                      <!--		<div style="padding-left:0px;padding-top:5px;padding-bottom:5px;"><font class="leftmenuhead"><font color="#EF6F1F">View Profile</font></div>-->
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Basic  Information</b></div></td>
                          </tr>
                          <tr bgcolor="#ffffff">
                            <td width="139" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Name :</div></td>
                            <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                                <?php  echo $row['Name']?>
                              &nbsp;</div></td>
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
                                <?php  echo $row['childrenlivingstatus']?>
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
                                <?php  echo $row['TOB']?>
                            </div></td>
                          </tr>
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Education and Occupation </b></div></td>
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
                                <?php  echo $row['EducationDetails']?>
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
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="#FFFFFF"  
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b> Socio Religious Background </b></div></td>
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
                                <?php  echo $row['Caste']?>
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
                                <?php  echo $row['Subcaste']?>
                            </div></td>
                            <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Gothram:</div></td>
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
                                <?php  echo $row['Moonsign']?>
                            </div></td>
                            <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">Horoscope Match  : </div></td>
                            <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top"><div align="left">
                                <?php  echo $row['Horosmatch']?>
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
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Physical Status and Lifestyle </b></div></td>
                          </tr>
                          <tr bgcolor="#ffffff">
                            <td width="140" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Height :</div></td>
                            <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 
width="156"><div align="left">
<?php  
$strheight = $row['Height'];
if($strheight =="1") { echo "Below 4ft"; }
else if($strheight =="2") { echo "4ft 6in"; }
else if($strheight =="3") { echo "4ft 7in"; }
else if($strheight =="4") { echo "4ft 8in"; }
else if($strheight =="5") { echo "4ft 9in"; }
else if($strheight =="6") { echo "4ft 10in"; }
else if($strheight =="7") { echo "4ft 11in"; }
else if($strheight =="8") { echo "5ft"; }
else if($strheight =="9") { echo "5ft 1in"; }
else if($strheight =="10") { echo "5ft 2in"; }
else if($strheight =="11") { echo "5ft 3in"; }
else if($strheight =="12") { echo "5ft 4in"; }
else if($strheight =="13") { echo "5ft 5in"; }
else if($strheight =="14") { echo "5ft 6in"; }
else if($strheight =="15") { echo "5ft 7in"; }
else if($strheight =="16") { echo "5ft 8in"; }
else if($strheight =="17") { echo "5ft 9in"; }
else if($strheight =="18") { echo "5ft 10in"; }
else if($strheight =="19") { echo "5ft 11in"; }
else if($strheight =="20") { echo "6ft"; }
else if($strheight =="21") { echo "6ft 1in"; }
else if($strheight =="22") { echo "6ft 2in"; }
else if($strheight =="23") { echo "6ft 3in"; }
else if($strheight =="24") { echo "6ft 4in"; }
else if($strheight =="25") { echo "6ft 5in"; }
else if($strheight =="26") { echo "6ft 6in"; }
else if($strheight =="27") { echo "6ft 7in"; }
else if($strheight =="28") { echo "6ft 8in"; }
else if($strheight =="29") { echo "6ft 9in"; }
else if($strheight =="30") { echo "6ft 10in"; }
else if($strheight =="31") { echo "6ft 11in"; }
else if($strheight =="32") { echo "7ft"; }
else if($strheight =="33") { echo "Above 7ft"; }
?>
                            </div></td>
                            <td width="104" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Weight :</div></td>
                            <td width="190" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                                <?php  echo $row['Weight']?>
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
valign="top"><div align="left">Body Type:</div></td>
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
                                <?php  echo $row['Complexion']?>
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
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Profile Description </b></div></td>
                          </tr>
                          <tr bgcolor="#ffffff">
                            <td width="106" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">I am Looking : </div></td>
                            <td width="442" colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                             
								 <?php  echo $row['Looking']?>
                            </div></td>
                          </tr>
                          <tr bgcolor="#EEEBDA">
                            <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                          </tr>
                          <tr bgcolor="#ffffff">
                            <td colspan="4" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left"><a name="q1" id="q1"></a>
                                   
									<?php 
		  $strprofile =  $row['Profile'];
		  $newprofile = wordwrap($strprofile, 8, "\n", true);
		  echo "$newprofile\n";
		  ?>
                              </div></td>
                          </tr>
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Family Details </b></div></td>
                          </tr>
                          <tr bgcolor="#ffffff">
                            <td width="140" 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Details:</div></td>
                            <td colspan="3" valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                                <?php  echo $row['FamilyDetails']?>
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
                                <?php  echo $row['Familyvalues']?>
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
                                <?php  echo $row['FamilyStatus']?>
                            </div></td>
                            <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Father Occupation  : </div></td>
                            <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                                <?php  echo $row['Fathersoccupation']?>
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
                                <?php  echo $row['Mothersoccupation']?>
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
                            <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 
src="" width="100%" /></div></td>
                          </tr>
                          <tr bgcolor="#ffffff">
                            <td class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 
valign="top">No Of Brothers Married : </td>
                            <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                              <?php  echo $row['nbm']?>
                            </div></td>
                            <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left"><span class="smalltextgrey" style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px">No Of Sisters Married : </span></div></td>
                            <td 
valign="top" class="smalltextgrey" 
style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
                              <?php  echo $row['nsm']?>
                            </div></td>
                          </tr>
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="orangesubtitles" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Partner Preference </b></div></td>
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
                              <?php  echo $row['Looking']?>
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
                                <?php  echo $row['PartnerExpectations']?>
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
                        </tbody>
                      </table>
                    <br />
                      <table width="590" border="0" cellpadding="0" cellspacing="2" class="submenubox">
                        <tbody>
                          <tr bgcolor="#FFFFFF" class="rowlightbrown">
                            <td colspan="4" 
valign="top" bgcolor="" class="lstrongarial" 
style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #000000; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Hobies and Interests </b></div></td>
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
              <!-- RESULTS END -->          </td>
        </tr>
        <tr>
          <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
