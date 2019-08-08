<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?php
///////////////////// THIS IS THE MAIN FILE FOR THE MEMBERS ////////////////////////////////////

include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
$member = mysql_query("SELECT *,Left(profile,200) as profile1 FROM register where matriid='$strid' ");




////////////////////////////////////////////////////////////////////////////////////////////////
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
<script>
imgPrArr=new Array()
function imgPreload(imgP){imgPrArrT=(imgP+",").split(",");for (i in imgPrArrT){if (imgPrArrT[i]!=""){imgPrArr[imgPrArrT[i]]=new Image();imgPrArr[imgPrArrT[i]].src=imgPrArrT[i]}}}

imgPreload("images/i1_2.gif,images/i2_2.gif,images/i3_2.gif")
</script>

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
 <?php  while($row = mysql_fetch_array($member)){ ?>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="118" colspan="2"><div align="right"> </div></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="left">
                  <table width="100%" cellpadding="0" cellspacing="0" " >
                    <tr>
                      <td width="99%" bgcolor="#ECF8FF">OnlyDays More to Expire! So <a href="paymentoptions.php">Click Here</a> for Payment option to Avoid Interruptions </td>
                    </tr>
                    <tr>
                      <td bgcolor="#ECF8FF"><div align="center"><span class="bluetext"> </span></div></td>
                    </tr>
                  </table>
              </div></td>
            </tr>
            <tr>
              <td><div align="center"><span class="bluetext"> </span>
			  
			  
			  
			  
			      <table border="0" cellpadding="5" cellspacing="0" width="100%">
                    <tr>
                      <td>&nbsp;
                          <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p></td>
                      <td valign="top" width="100%"><script>
//This and others free scripts you can find on a site: artdhtml.com

ns4=(navigator.appName.indexOf("Netscape")>=0 && !document.getElementById)? 1 : 0;
ie4=(document.all && !document.getElementById)? 1 : 0;
ie5=(document.getElementById && document.all)? 1 : 0;
ns6=(document.getElementById && navigator.appName.indexOf("Netscape")>=0 )? 1: 0;
w3c=(document.getElementById)? 1 : 0;

wid=(ie4||ie5)?window.document.body.clientWidth-20:window.innerWidth-36

if(ns4){document.write ('<layer name="di1"></layer>')}else{document.write ('<div id="di1" style="position:absolute;z-index:100" ></div>')}

outd=""

if(w3c)div1=document.getElementById('di1')
if(ie4)div1=document.all['di1']
if(ns4)div1=document.layers['di1']

function move_div(x,y){
	if (isNaN(x+y))return
	if(ns4){div1.moveTo(x,y)}else{div1.style.left=x+'px';div1.style.top=y+'px';}
}

function write_div(text){
	if(ns4){
		div1.document.open();
		div1.document.write(text);
		div1.document.close();
	}
	else {div1.innerHTML=text;}
}
 
function big(n){
ondiv=n
		write_div("<a href=javascript:void(0) onmouseout='big_hide()' onmouseover='ondiv=1'><img border=0 name=ib src="+n+"></a>");
		move_div(x,y)
}

function big_hide(){
	ondiv=0;
	t3=window.setTimeout('big_hide2()',100)
}

function big_hide2(){
if (ondiv==0){
	write_div("");
	move_div(-1000,-1000)}
}

y=x=0
function dragIt(evt){if(ie4||ie5){x=window.event.clientX+document.body.scrollLeft; y=window.event.clientY+document.body.scrollTop}else {x=evt.pageX ; y=evt.pageY }}

document.onmousemove = dragIt
if(ns4){document.captureEvents( Event.MOUSEMOVE )}
</script>
                          <!--menu-->
                          <table border="0" cellpadding="5" cellspacing="0">
                            <tr>
                              <td width="20%" align=center>
							  <a href="javascript:void(0)" 
onMouseOver="big('photoprocess.php?image=memphoto1/<?php  echo $row['Photo1']?>&square=200&amp;watermark_text=IOM&amp;watermark_color=fffff; width=150 height=150 hspace=1 vspace=1 border=0 class=submenubox')" 
							  onMouseOut="big_hide()">
							  <img src=photoprocess.php?image=memphoto1/<?php  echo $row['Photo1']?>&square=200&amp;watermark_text=IOM&amp;watermark_color=fffff;" width="150" height="150" hspace="1" vspace="1" border="0" class="submenubox"  >	
							  </a>
							  
							  </td>
                            </tr>
                        </table></td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                  </table>
              </div></td>
            </tr>
            <tr>
              <td><fieldset class="fieldset">
                <legend class="bluetext"><img src="pics/myprofile-icontxt.gif" width="115" height="38" /><a href="payment_options.php"></a></legend>
                <table width="100%" border="0" cellspacing="0">
                  <tr>
                    <td width="150">
					
					
					<table width="150" height="150" border="0" align="center" class="submenubox" id=photo>
                      <tr>
                        <td>
				
						

	  <a href="javascript:void(0)" 
	  onMouseOver="big('http://www.artdhtml.com/free/images/i1_2.gif')" 
	  onMouseOut="big_hide()"></a></td>
                      </tr>
                    </table>
					
					
					</td>
                    <td width="409" valign="top"><table width="100%" cellpadding="3" cellspacing="5">
                        <tr>
                          <td width="46%"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <span class="h3r">Name : 
                            <?php  echo $row['Name']?>
                          </span></td>
                          <td width="51%"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> ID: <span class="style6"> <a href='myprofile_m.php'></a> <strong>
                            <?php  echo $row['MatriID']?>
                          </strong></span></td>
                        </tr>
                        <tr>
                          <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <span class="h3r">Membership :</span></td>
                          <td><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> Created : <span class="Partext1">
                            <?php  echo $row['Regdate']?>
                          </span></td>
                        </tr>
                        <tr>
                          <td colspan="3"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <span class="h3r"> Contacts Allocation:</span></td>
                        </tr>
                        <tr>
                          <td height="20" colspan="2"> days </td>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="4" cellpadding="0" runat="server" id="Videotbl">
                          <tr>
                            <td><img src="pics/template_upgrd_icon.gif" width="18" height="18" />Add a Video clipping Free and let your Prospective partner have a preview of you.</td>
                          </tr>
                          <tr>
                            <td><a href="addvideo.php">Click to Add Video</a> </td>
                          </tr>
                      </table></td>
                  </tr>
                </table>
              </fieldset></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><fieldset >
                <legend><img src="pics/chklist-icontxt.gif" width="118" height="32" /></legend>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#ECF8FF">
                  <tbody>
                    <tr>
                      <td width="6%" height="18">&nbsp;</td>
                      <td width="10%"><strong>Photo:</strong></td>
                      <td width="37%">&nbsp;</td>
                      <td width="15%"><strong>Horoscope:</strong> </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><br /></td>
                      <td><strong>Video:</strong></td>
                      <td>&nbsp;</td>
                      <td valign="bottom"><strong>Photo Protect : </strong></td>
                      <td valign="bottom">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </fieldset></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><fieldset class="fieldset">
                <legend class="bluetext"><img src="pics/mymsg-icontxt.gif" width="146" height="32" /></legend>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
                  <tbody>
                    <tr>
                      <td width="2%" height="18"><div align="center" class="bluesubtitles"></div></td>
                      <td colspan="2" class="h3r"> Express Interest Received 
                        ()</td>
                      <td colspan="2"><span class="h3r">Express Interest Sent 
                        ()</span></td>
                      <td width="2%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><br /></td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="received_acceptedlist.php">Accepted</a> () </td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="sent_Acceptlist.php">Accepted</a> () </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="received_declinedlist.php">Declined</a> () </td>
                      <td colspan="2"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="sent_declinelist.php">Declined</a> () </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="verdana"><span style="FLOAT: right"></span></td>
                      <td colspan="2" class="verdana"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="received_pendinglist.php">Pending</a> () </td>
                      <td colspan="2" class="verdana"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="sent_pendinglist.php">Pending</a> ()</td>
                      <td class="verdana">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td width="29%" align="right">&nbsp;</td>
                      <td width="22%" align="right">&nbsp;</td>
                      <td width="20%" align="right">&nbsp;</td>
                      <td width="25%" align="right">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Personalized Message Received</span></div></td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Personalized Message Sent</span></div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="inbox_msg.php">Inbox</a> () </div></td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="sent_msg.php">Sent</a> () </div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right">&nbsp;</td>
                      <td colspan="2" align="right">&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Photo Protect Password Requesters</span></div></td>
                      <td colspan="2" align="right"><div align="left"><span class="h3r">Received Photo Protect Password </span></div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="Pp_inbox_msg.php">Inbox</a> () </div></td>
                      <td colspan="2" align="right"><div align="left"><img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="Pp_Received_msg.php">Received Photo Password</a> () </div></td>
                      <td align="right">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </fieldset></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
  <?php } mysql_close($con); ?>
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
