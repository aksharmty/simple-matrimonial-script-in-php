<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?
$streiid = $_GET['eiid'];
$streiidgen = $_GET['gen'];
?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

</HEAD>
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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Express Interest   </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td>Express Interest by sending pre-set messages to members   for free. You will be intimated <br />
            by e-mail if someone is interested in you. Go   ahead, select a message and send a free interest.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
		  <form name="eiform" id="eiform" action="express_int_send_submit.php"  method="post">		  
		  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="body">
              <tbody>
                <tr>
                  <td colspan="2" valign="center" bgcolor="#FFFFFF"><strong>Send Express Interest Message to : <?php echo $streiid ?></span> 
                    <input name="txteiid" type="hidden" id="txteiid" value="<?php echo $streiid ?>">
                    <input name="txteiidgen" type="hidden" id="txteiidgen" value="<?php echo $streiidgen ?>">
                  </strong></td>
                </tr>
                <tr>
                  <td valign="center"><input name="INTERESTMSG" type="radio" id="INTERESTMSG" value="1" checked="checked"/></td>
                  <td valign="center">I am interested in   your profile. If you are interested in my profile, please contact   me.</td>
                </tr>
                <tr>
                  <td valign="center"><input type="radio" value="2" name="INTERESTMSG" id="INTERESTMSG"/></td>
                  <td valign="center">I have gone through   your details and feel we have lot in common. Would sure like to know your   opinion on this?</td>
                </tr>
                <tr>
                  <td valign="center"><input type="radio" value="3" name="INTERESTMSG" id="INTERESTMSG"/></td>
                  <td valign="center">You are someone   special I wish to know better. Please contact me at the   earliest.</td>
                </tr>
                <tr>
                  <td valign="center"><input type="radio" value="4" name="INTERESTMSG" id="INTERESTMSG"/></td>
                  <td valign="center">We found your   profile to be a good match. Please contact us to proceed   further.</td>
                </tr>
                <tr>
                  <td valign="center"><input type="radio" value="5" name="INTERESTMSG" id="INTERESTMSG"/></td>
                  <td valign="center">You are the kind of   person we were searching for. Please send us your contact   details.</td>
                </tr>
                <tr>
                  <td colspan="2" valign="center"><input name="Submit" type="image" value="Submit" src="pics/submit_but.gif"></td>
                  </tr>
              </tbody>
          </table>
		  </form>
		  </td>
        </tr>
        <tr>
          <td><div align="right">Ready to take the next step?</div></td>
        </tr>
        <tr>
          <td><table cellspacing="0" cellpadding="5" width="100%" border="0" runat="server" id="personal_msg_infobox" visible="false">
              <tbody>
                <tr>
                  <td><img height="211" alt="" src="pics/contact_profile.gif" width="321" border="0" /></td>
                  <td><table width="100%" bgcolor="C4E9F9">
                      <tbody>
                        <tr>
                          <td><p>How   would you like to send your very own personally typed messages?</p>
                              <p>Express   Interest is ideal to start communication but to get the contact details of a   member and to send personalized e-mails you must upgrade your membership to paid   membership. </p>
                            <p><a href="paymentoptions.php">Click here</a> to become a paid   member.</p></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>How it works? <br />
            An   e-mail will be sent to the opposite member (without revealing your contact   information) expressing your interest. The opposite member has the option to   'Accept' or 'Decline' your interest and you will be notified of his/her decision   via e-mail. Similarly, you have the option to 'Accept' or 'Decline' members who   express their interest in you. </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  </TD>
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
