<?
$data = mysql_query("SELECT * FROM siteconfig where id='1'") 
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
?>


<LINK href="style.css" rel="stylesheet" type="text/css">
<table width="97%" cellpadding="0" cellspacing="0">
<tr>
  <td align="middle"><?php while($row = mysql_fetch_array($sql)){ ?>
    <table width="585" border="0" cellpadding="0" cellspacing="0" class="submenubox">
  <tbody>
  <tr>
  <td valign="middle" align="middle" width="95">
  
  <script>
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
  

<?php if($row['Photo1']=="nophoto.gif")
{ ?>
<img src="pics/photonotavailable.gif" width="75" height="75" border="0" />
<? }
else if($row['Photoprotect']== "Yes")
{ 
?>
<img src="pics/smallphotoprotect.gif" width="80" height="80" border="0" />
<? }
else if( $row['Photoprotect']!= "Yes" and $row['Photo1']!="nophoto.gif" )
{ ?>
<div align="center">
<a href="viewprofile.php?id=<?php echo $row['MatriID']?>" target="_blank"  
onMouseOver="big('photoprocess.php?image=memphoto1/<?php echo $row['Photo1']?>&maxim_size=150&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff; hspace=1 vspace=1 border=0 class=submenubox')" 
onMouseOut="big_hide()"> 
<img src="photoprocess.php?image=memphoto1/<?php echo $row['Photo1']?>&square=75&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php echo $row['Name']?>" border="0" class="submenubox"/>

</a>

</div>

<? } ?>




</td>
  <td width="1" height="100%" valign="top" bgcolor="#FBEED6"></td>
  <td width="422" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="4">
    <tr>
      <td width="2%"></td>
      <td width="94%"><div align="left"><span class="bodysg"><?php echo $row['MatriID']?></span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><strong>Age</strong>: <?php echo $row['Age']?> <strong>Height</strong>: <span class="smalltextgrey"><?php echo $row['Height']?></span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><strong>Religion</strong>: <span class="smalltextgrey"><?php echo $row['Religion']?></span>, <span class="smalltextgrey"><?php echo $row['Caste']?></span>, <span class="smalltextgrey"><?php echo $row['Subcaste']?></span> <strong>Star</strong>: <span class="smalltextgrey"><?php echo $row['Star']?></span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><strong>Location</strong>: <span class="smalltextgrey"><?php echo $row['State']?></span>,<span class="smalltextgrey"><?php echo $row['Country']?></span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><strong>Education</strong>: <span class="smalltextgrey"><?php echo $row['Education']?></span>, <span class="smalltextgrey"><?php echo $row['EducationDetails']?></span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><strong>Occupation</strong>: <span class="smalltextgrey"><?php echo $row['Occupation']?></span>, <span class="smalltextgrey"><?php echo $row['Employedin']?></span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><span class="smalltextgrey"><?php echo $row['Profile1']?></span> <a href="#" target="_blank">More...</a> </div></td>
    </tr>
  </table></td>
  </tr>
  <tr>
  <td valign="top" colspan="3" height="1"><div>
  <div><img height="1" src="pics/trans.gif" width="100%" border="0" /></div>
  </div></td>
  </tr>
  <tr>
  <td valign="top" bgcolor="#fbeed6" colspan="3"><table cellspacing="0" cellpadding="2" width="100%" border="0">
  <tbody>
  <tr>
  <td valign="center" width="7"><input name="ID[]" type="checkbox" value="<?php echo $row['matriid']; ?>" /></td>
  <td valign="center" width="250"><div align="left">Last Login : <span class="smalltextgrey"><?php echo $row['lastlogindate']?></span></div></td>
  <td valign="center" align="right" height="24"><div align="right"><img height="7" hspace="3" src="http://imgs.tamilmatrimony.com/images/brown-arrow.gif" width="6" align="absmiddle" vspace="5" border="0" /><a onClick="" href="#" target="_blank">Register FREE to contact this member</a><img height="1" src="pics/trans.gif" width="5" border="0" /></div></td>
  </tr>
  </tbody>
  </table></td>
  </tr>
  </tbody>
</table>
    <br>
    <br>
    <?php }  ?>

</td></tr>
<tr>
<td valign="top" colspan="2"><img height="1" src="pics/trans.gif" width="1" border="0" /></td>
</tr>
</table>

