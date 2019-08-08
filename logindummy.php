<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>



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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Modify Profile    </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><span class="bodysg">Basic Information&nbsp;
                <input name="Submit" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
        <tr>
          <td width="22%">Name</td>
          <td width="78%"><input name="txtName" type="text" class="forminput" id="txtName" size="40" maxlength="40" style="width:215px;"></td>
        </tr>
        <tr>
          <td>Mother tongue </td>
          <td><span style="HEIGHT: 24px">
            <select name="Language" class="forminput" id="Language" maxlength="2" style="width:220px;">
              <option value="- Select -">- Select -</option>
              <option value="Tamil">Tamil</option>
              <option value="Hindi">Hindi</option>
              <option value="Gujarati">Gujarati</option>
              <option value="Urdu">Urdu</option>
              <option value="English">English</option>
              <option value="Punjabi">Punjabi</option>
              <option value="Marathi">Marathi</option>
              <option value="Telugu">Telugu</option>
              <option value="Malayalam">Malayalam</option>
              <option value="Bengali">Bengali</option>
              <option value="Kannada">Kannada</option>
              <option value="Sindhi">Sindhi</option>
              <option value="Konkani">Konkani</option>
              <option value="Oriya">Oriya</option>
              <option value="Arabic">Arabic</option>
              <option value="Marwari">Marwari</option>
              <option value="Aka">Aka</option>
              <option value="Assamese">Assamese</option>
              <option value="Awadhi">Awadhi</option>
              <option value="Bhojpuri">Bhojpuri</option>
              <option value="Bhutia">Bhutia</option>
              <option value="Chatlisgarhi">Chatlisgarhi</option>
              <option value="Chinese">Chinese</option>
              <option value="Dogri">Dogri</option>
              <option value="French">French</option>
              <option value="Garhwali">Garhwali</option>
              <option value="Garo">Garo</option>
              <option value="Haryanvi">Haryanvi</option>
              <option value="Kakbarak">Kakbarak</option>
              <option value="Kanauji">Kanauji</option>
              <option value="Kashmiri">Kashmiri</option>
              <option value="Khandesi">Khandesi</option>
              <option value="Khasi">Khasi</option>
              <option value="Koshali">Koshali</option>
              <option value="Kumoani">Kumoani</option>
              <option value="Kutchi">Kutchi</option>
              <option value="Lepcha">Lepcha</option>
              <option value="Magahi">Magahi</option>
              <option value="Maithili">Maithili</option>
              <option value="Malay">Malay</option>
              <option value="Manipuri">Manipuri</option>
              <option value="Miji">Miji</option>
              <option value="Mizo">Mizo</option>
              <option value="Monpa">Monpa</option>
              <option value="Nepali">Nepali</option>
              <option value="Persian">Persian</option>
              <option value="Rajasthani">Rajasthani</option>
              <option value="Russian">Russian</option>
              <option value="Sanskrit">Sanskrit</option>
              <option value="Santhali">Santhali</option>
              <option value="Spanish">Spanish</option>
              <option value="Swedish">Swedish</option>
              <option value="Tagalog">Tagalog</option>
              <option value="Tulu">Tulu</option>
              <option value="Other">Other</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td>Religion</td>
          <td><select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:220px;">
              <option value="- Select -" selected>- Select -</option>
              <option>Hindu</option>
              <option>Christian</option>
              <option>Muslim</option>
              <option>Sikh</option>
              <option>Jain</option>
              <option>Parsi</option>
              <option>Buddhist</option>
              <option>Bahai</option>
              <option>Inter-Religion</option>
              <option>Others</option>
          </select></td>
        </tr>
        <tr>
          <td>Caste</td>
          <td><select name="caste" class="forminput" id="caste" style="width:220px;">
          </select></td>
        </tr>
        <tr>
          <td>Sub Caste </td>
          <td><input name="txtSubcaste" type="text" class="forminput" id="txtSubcaste" size="40" maxlength="50" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input name="EMAILconfirm" type="text" class="forminput" id="EMAILconfirm" size="40" maxlength="40" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="txtp" type="password" class="forminput" id="txtp" size="10" maxlength="10" style="width:215px;"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
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
