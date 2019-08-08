<LINK href="style.css" rel="stylesheet" type="text/css">
<!-- ''''''''''''''NORMAL ''''''''''''''' -->
<body bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>
	<?php
session_start();
if(!session_is_registered(myusername))
{
?>
	<table width="170" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="pics/Lmenutop.png" width="170" height="25" /></td>
      </tr>
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="7"><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td width="97"><div align="left">&nbsp;&nbsp;<a class="black" href="searchoption.php"><span class="bodylink">Search Profiles</span></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td background="pics/Lmenumid.png"><table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="pics/reddot.gif"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="7"><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td width="97"><div align="left">&nbsp;&nbsp;<a class="black" href="membership.php"><span class="bodylink">Membership</span></a><a class="black" href="search.php"></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td background="pics/Lmenumid.png"><table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="pics/reddot.gif"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td><div align="left">&nbsp;&nbsp;<a class="black" href="paymentoptions.php"><span class="bodylink">Payment Option</span></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td background="pics/Lmenumid.png"><table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="pics/reddot.gif"></td>
            </tr>
        </table></td>
      </tr>
      
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td><div align="left">&nbsp;&nbsp;<a class="black" href="referafriend.php"><span class="bodylink">Refer a Friend</span></a><a class="black" href="search.php"></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td background="pics/Lmenumid.png"><table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="pics/reddot.gif"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td><div align="left">&nbsp;&nbsp;<a class="black" href="shareexperience.php"><span class="bodylink">Share experience</span></a><a class="black" href="search.php"></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td background="pics/Lmenumid.png"><table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="pics/reddot.gif"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td><div align="left">&nbsp;&nbsp;<a class="black" href="successstory.php"><span class="bodylink">Read Success Stories </span></a><a class="black" href="search.php"></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td background="pics/Lmenumid.png"><table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="pics/reddot.gif"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td><div align="left">&nbsp;&nbsp;<a href="shareexperience.php"><span class="bodylink"><span style="text-decoration: none"><font color="#000000">Your 
				Experience</font></span></span></a><a class="black" href="search.php"></a></div></td>
            </tr>
        </table></td>
      </tr>
		<tr>
        <td height="25" background="pics/Lmenumid.png"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img height="5" 
                                src="pics/pics/Redarrowbullent.gif" 
                                width="7" /></td>
              <td><div align="left">&nbsp;&nbsp;<span class="bodylink"><a href="contactus.php"><span style="text-decoration: none"><font color="#000000">Contact 
				Us</font></span></a></span><a class="black" href="search.php"></a></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="pics/Lmenubot.png" width="170" height="11" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?
}
else
{
?>

      <table width="95%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td><div align="center" class="ACTIVE"><strong>[<?php echo "Logged in " .$_SESSION['matriid']; ?>]</strong></div></td>
        </tr>
      </table>
      <!-- ''''''''''''''MEMBER ONLY''''''''''''''''''' -->
      <table width="170" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="21" background="pics/bglmtop.gif" >&nbsp;</td>
        </tr>
        <tr>
          <td background="pics/bglmmain.gif"><table class="white" cellspacing="0" cellpadding="0" width="160" 
                        align="center" border="0">
              <tbody>
                <tr>
                  <td valign="top"><div class="t">
                      <div class="b">
                        <div class="l">
                          <div class="r">
                            <div class="bl">
                              <div class="br">
                                <div class="tl">
                                  <div class="tr">
                                    <table class="white" cellspacing="0" cellpadding="0" width="160" 
                        align="center" border="0">
                                      <tbody>
                                        <tr>
                                          <td valign="top"><div class="t">
                                              <div class="b">
                                                <div class="l">
                                                  <div class="r">
                                                    <div class="bl">
                                                      <div class="br">
                                                        <div class="tl">
                                                          <div class="tr">
                                                            <table cellspacing="2" cellpadding="0" width="155" 
                              align="center" border="0">
                                                              <tbody>
                                                                <tr>
                                                                  <td 
                                height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Account </strong></div></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                  <td valign="center" align="middle" 
                                background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                  <td height="20" align="right" valign="center"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td align="left" valign="center"><a href="myprofile.php"><span class="bodylink">&nbsp;My Profile</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="middle" 
                                background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td width="17" height="20" align="right" valign="center"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td width="150" align="left" valign="center">&nbsp;<a class="black" href="modifyprofile.php"><span class="bodylink">Modify My Profile </span></a><a class="black" href="membership.php"></a> </td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="middle" 
                                background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="changepassword.php"><span class="bodylink">Change Password</span></a><a class="black" href="paymentoptions.php"></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="middle" 
                                background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a href="delmyprofile.php"><span class="bodylink">Delete Profile</span></a> </td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="middle" 
                                background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Search </strong></div></td>
                                                                </tr>
                                                                <tr>
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a href="simplesearch.php"><span class="bodylink">Quick Search </span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a href="adv_search.php"><span class="bodylink">Advanced Search</span> </a></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="keyword_search.php"><span class="bodylink">Keyword Search </span></a><a class="black" href="shareexperience.php"></a><a class="black" href="referafriend.php"></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="edu_search.php"><span class="bodylink">Education Search</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a href="occu_search.php"><span class="bodylink">Occupational  Search</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a href="id_search.php"><span class="bodylink">Members ID Search</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="mymatches.php"><span class="bodylink">My Matches</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Messages </strong></div></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="myint.php"><span class="bodylink">Interests Received</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="mymessage.php"><span class="bodylink">Message Received </span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Photo</strong></div></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="addphoto.php"><span class="bodylink">Manage My photo</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Horoscope </strong></div></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="addhoros.php"><span class="bodylink">Manage My Horoscope</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Membership </strong></div></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="mymembership.php"><span class="bodylink">My Membership </span></a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td background="pics/reddot.gif" 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                                <tr valign="bottom">
                                                                  <td valign="center" align="right" height="20"><img 
                                height="5" 
                                src="pics/Redarrowbullent.gif" 
                                width="7" /></td>
                                                                  <td valign="center" align="left">&nbsp;<a class="black" href="myorders.php"><span class="bodylink">My Orders </span></a></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                  <td 
                                colspan="2" height="1"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
        <tr>
          <td><img src="pics/bglmbot.gif" width="170" height="18" /></td>
        </tr>
      </table>
    <?
}
?></td>
  </tr>
</table>
