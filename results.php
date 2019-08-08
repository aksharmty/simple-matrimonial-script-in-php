<? session_start();
//
$data = mysql_query("SELECT * FROM siteconfig where ID='1' ") 
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
//
?>


<LINK href="style.css" rel="stylesheet" type="text/css">
<table width="97%" cellpadding="0" cellspacing="0">
<tr>
  <td align="middle"><?php while($row = mysql_fetch_array($sql)){ ?>
    <table width="585" border="0" cellpadding="0" cellspacing="0" class="submenubox">
  <tbody>
  <tr>
  <td valign="middle" align="middle" width="95">
  
<style type="text/css">
.thumbnail{
position: relative;
z-index: 0;
}

.thumbnail:hover{
background-color: transparent;
z-index: 50;
}

.thumbnail span{ /*CSS for enlarged image*/
position: absolute;
background-color: lightyellow;
padding: 5px;
left: -1000px;
border: 1px dashed gray;
visibility: hidden;
color: black;
text-decoration: none;
}

.thumbnail span img{ /*CSS for enlarged image*/
border-width: 0;
padding: 2px;
}

.thumbnail:hover span{ /*CSS for enlarged image on hover*/
visibility: visible;
top: 0;
left: 60px; /*position where enlarged image should offset horizontally */

}

.style3 {font-size: 14px; text-decoration: none; font-weight: bold;}
</style>



<?php if($row['Photo1']=="nophoto.gif")
{ ?>
<img src="pics/smallphotonotavailable.gif" width="80" height="80" border="0" class="submenubox"/>
<? }
else if($row['Photo1Approve']== "No")
{ ?>
<img src="pics/smallphotonotapprove.gif" width="80" height="80" border="0" class="submenubox"/>
<? }
else if($row['PhotoProtect']== "Yes")
{ 
?>
<div align="center"><img src="pics/smallphotoprotect.gif" width="80" height="80" border="0" class="submenubox" /></div>
<? }
else if( $row['PhotoProtect']!= "Yes" and $row['Photo1']!="nophoto.gif" )
{ ?>

<div align="center">
<a class="thumbnail" href="viewprofile.php?id=<?php echo $row['MatriID']?>" target="_blank"> 


<img src="photoprocess.php?image=<?php echo $row['Photo1']?>&maxim_size=150&watermark_text=MatrimonialPHPScript.co.cc&watermark_color=ffffff;" alt="<?php echo $row['Name']?>" border="0" class="submenubox"/>



<span> 
<img src="photoprocess.php?image=<?php echo $row['Photo1']?>&maxim_size=300&watermark_text=MatrimonialPHPScript.co.cc&watermark_color=ffffff;" alt="<?php echo $row['Name']?>" border="0" class="submenubox"/>
</span>

</a>

</div>

<? } ?>




</td>
  <td width="1" height="100%" valign="top" bgcolor="#FBEED6"></td>
  <td width="422" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="4">
    <tr>
      <td width="2%"></td>
      <td width="94%"><div align="left"><span class="orangebold">
	  <a href="viewprofile.php?id=<?php echo $row['MatriID']?>" title="<?php echo $row['Caste']?> Matrimony - <?php echo $row['Subcaste']?> Matrimonial - <?php echo $info['Webname']; ?>" target="_blank" >
	  <?php echo $row['MatriID']?>
	  </a>
	  </span></div></td>
    </tr>
    <tr>
      <td></td>
      <td><div align="left"><strong>Age</strong>: <?php echo $row['Age']?> <strong>Height</strong>: <span class="smalltextgrey">
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
	  
	  </span></div></td>
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
      <td><div align="left">
        <div align="left"><span class="smalltextgrey">
          <?php 
		  $strprofile =  $row['Profile1'];
		  $newprofile = wordwrap($strprofile, 8, "\n", true);
		  echo "$newprofile\n";
		  ?>
        </span> <a href="viewprofile.php?id=<?php echo $row['MatriID']?>" target="_blank">More...</a> </div>
      </div></td>
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
    <td valign="center" width="7">&nbsp;</td>
    <td valign="center" width="250"><div align="left">Last Login : <span class="smalltextgrey"><?php echo $row['lastlogindate']?></span></div></td>
  <td valign="center" align="right" height="24">


<?php
if(!session_is_registered(myusername))
{
?>		
<div align="right">
<img height="7" hspace="3" src="http://imgs.tamilmatrimony.com/images/brown-arrow.gif" width="6" align="absmiddle" vspace="5" border="0" /><a onClick="" href="#" target="_blank">Register FREE to contact this member</a><img height="1" src="pics/trans.gif" width="5" border="0" />
</div>   
<?
}
else
{
}
?>
  
  </td>
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

