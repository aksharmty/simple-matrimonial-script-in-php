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

<script language="javascript" src="includes/timepicker.js"></script> 

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
<?php while($row = mysql_fetch_array($memcontrol)) { ?>
 
  
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Modify Profile    </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td> 
	  <form action="edit_socio.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Socio Religious Attributes</span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Gothra(m)</td>
          <td width="78%"><input name="txtGothra" type="text" class="forminput" id="txtGothra" style="width:215px;" value="<? echo $row['Gothram']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td>Star(Nakshatra)</td>
          <td><span style="DISPLAY: block">
            <select name="txtStar" class="forminput" id="txtStar" style="width:215px;">
			 <option value="<? echo $row['Star']; ?>" selected><? echo $row['Star']; ?></option>
              <option value="Does not matter">Does not matter</option>
              <option value="ASHWINI">ASHWINI</option>
              <option value="BHARANI">BHARANI</option>
              <option value="KRITIKA">KRITIKA</option>
              <option value="ROHINI">ROHINI</option>
              <option value="MRIGASHIRA">MRIGASHIRA</option>
              <option value="AARDRA">AARDRA</option>
              <option value="PUNARVASU">PUNARVASU</option>
              <option value="PUSHYA">PUSHYA</option>
              <option value="AASLESHA">AASLESHA</option>
              <option value="MAGHA">MAGHA</option>
              <option value="PURVA PHALGUNI">PURVA PHALGUNI</option>
              <option value="UTTARA PHALGUNI">UTTARA PHALGUNI</option>
              <option value="HASTA">HASTA</option>
              <option value="CHITRA">CHITRA</option>
              <option value="SWATI">SWATI</option>
              <option value="VISHAKHA">VISHAKHA</option>
              <option value="ANURADHA">ANURADHA</option>
              <option value="JYESHTHA">JYESHTHA</option>
              <option value="MOOLA">MOOLA</option>
              <option value="POORVAASHADHA">POORVAASHADHA</option>
              <option value="UTTARAASHADHA">UTTARAASHADHA</option>
              <option value="SHRAVANI">SHRAVANI</option>
              <option value="DHANISTHA">DHANISTHA</option>
              <option value="SHATABHISHA">SHATABHISHA</option>
              <option value="PURVA BHADRAPADA">PURVA BHADRAPADA</option>
              <option value="UTTARA BHADRAPADA">UTTARA BHADRAPADA</option>
              <option value="REVATI">REVATI</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td>Moonsign</td>
          <td><select name="txtMoon" class="forminput" id="txtMoon" style="width:215px;">
		   <option value="<? echo $row['Moonsign']; ?>" selected><? echo $row['Moonsign']; ?></option>
            <option value="Does not matter">Does not matter</option>
            <option value="Mesh (Aries)">Mesh (Aries)</option>
            <option value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
            <option value="Mithun (Gemini)">Mithun (Gemini)</option>
            <option value="Karka (Cancer)">Karka (Cancer)</option>
            <option value="Simha (Leo)">Simha (Leo)</option>
            <option value="Kanya (Virgo)">Kanya (Virgo)</option>
            <option value="Tula (Libra)">Tula (Libra)</option>
            <option value="Vrischika (Scorpio)">Vrischika (Scorpio)</option>
            <option value="Dhanu (Sagittarious)">Dhanu (Sagittarious)</option>
            <option value="Makar (Capricorn)">Makar (Capricorn)</option>
            <option value="Kumbha (Aquarious)">Kumbha (Aquarious)</option>
            <option value="Meen (Pisces)">Meen (Pisces)</option>
          </select></td>
        </tr>
        <tr>
          <td>Horoscope Match </td>
          <td><select name="txtHorosMatch" class="forminput" id="txtHorosMatch" style="width:215px;">
            <option value="<? echo $row['Horosmatch']; ?>"><? echo $row['Horosmatch']; ?></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
            <option value="Does not matter">Does not matter</option>
                    </select></td>
        </tr>
        <tr>
          <td>Manglik</td>
          <td><select name="txtManglik" class="forminput" id="txtManglik" style="width:215px;">
            <option value="<? echo $row['Manglik']; ?>"><? echo $row['Manglik']; ?></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
            <option value="Do not know">Do not know</option>
            <option value="Not applicable">Not applicable</option>
                    </select></td>
        </tr>
        <tr>
          <td><span class="bodywk">Place of Birth </span></td>
          <td><input name="txtPb" type="text" class="forminput" id="txtPb" style="width:215px;" value="<? echo $row['POB']; ?>" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td><span class="bodywk">Time of Birth </span></td>
          <td><table cellpadding="0" cellspacing="0">
            <tr valign=center>
              <td><div align="left">
                  <input name="txtTb" type='text' class="forminput" id='timepicker1' onBlur="validateDatePicker(this)" value='<? echo $row['TOB']; ?>' size=8 maxlength=8>
              </div></td>
              <td><div align="left"><img src="timePickerImages/timepicker.gif" alt="Pick a Time!" width="30" height="20" border="0" style="cursor:hand" onClick="selectTime(this,timepicker1)"></div></td>
            </tr>
          </table></td>
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
