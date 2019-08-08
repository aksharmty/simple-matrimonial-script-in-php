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
      <td><br>

	  <form action="edit_fam.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Family Details </span><span class="bodysg"> &nbsp;<a href="modify_fam.php"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Family Details   : </td>
          <td width="78%"><textarea name="txtFD" rows="3" id="txtFD" style="width:150px;"><? echo $row['FamilyDetails']; ?></textarea></td>
        </tr>
        <tr>
          <td>Family Values   : </td>
          <td><select name="txtFV" class="forminput" id="txtFV" style="width:150px;">
		   <option value="<? echo $row['Familyvalues']; ?>" selected><? echo $row['Familyvalues']; ?></option>
            <option value="Traditional">Traditional</option>
            <option value="Orthodox">Orthodox</option>
            <option value="Liberal">Liberal</option>
            <option value="Moderate">Moderate</option>
          </select></td>
        </tr>
        <tr>
          <td>Family Type : </td>
          <td><select name="txtFT" class="forminput" id="txtFT" style="width:150px;">
		  <option value="<? echo $row['FamilyType']; ?>" selected><? echo $row['FamilyType']; ?></option>
            <option value="Seperate Family">Seperate Family</option>
            <option value="Joint Family" >Joint Family</option>
          </select></td>
        </tr>
        <tr>
          <td>Family Status  : </td>
          <td><select name="txtFS" class="forminput" id="txtFS" style="width:150px;">
		  <option value="<? echo $row['FamilyStatus']; ?>" selected><? echo $row['FamilyStatus']; ?></option>
            <option value="Rich">Rich</option>
            <option value="Upper Middle Class">Upper Middle Class</option>
            <option value="High Class">High Class</option>
            <option value="Middle Class">Middle Class</option>
            <option value="Do not want to tell at this time">Do not want to tell at this time</option>
          </select></td>
        </tr>
        <tr>
          <td>Family Origin  : </td>
          <td><input name="txtFO" type="text" class="forminput" id="txtFO" style="width:200px;" value="<? echo $row['FamilyOrigin']; ?>" size="40" maxlength="40"></td>
        </tr>
        
        <tr>
          <td>No of Brothers  : </td>
          <td><select name="txtFS1" class="forminput" id="txtFS1" style="width:95px;">
		  
		  <option value="<? echo $row['noofbrothers']; ?>" selected><? echo $row['noofbrothers']; ?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3 ">3</option>
            <option value="4">4</option>
            <option value="4 +">4 +</option>
          </select></td>
        </tr>
        <tr>
          <td>No of Sisters : </td>
		  
          <td><select name="txtFS2" class="forminput" id="txtFS2" style="width:95px;">
		   <option value="<? echo $row['noofsisters']; ?>" selected><? echo $row['noofsisters']; ?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3 ">3</option>
            <option value="4">4</option>
            <option value="4 +">4 +</option>
          </select></td>
        </tr>
        <tr>
          <td>No of Brothers  Married : </td>
          <td><select name="nbm" class="forminput" id="nbm" style="width:95px;">
		   <option value="<? echo $row['nbm']; ?>" selected><? echo $row['nbm']; ?></option>
            <option value="No married brother">No married brother</option>
            <option value="One married brother">One married brother</option>
            <option value="Two married brother">Two married brother</option>
            <option value="Three married brother">Three married brother</option>
            <option value="Four married brother">Four married brothers</option>
            <option value="Above four married brother">Above four married brother</option>
          </select></td>
        </tr>
        <tr>
          <td>No of Sisiters  Married : </td>
          <td><select name="nsm" class="forminput" id="nsm" style="width:95px;">
		   <option value="<? echo $row['nsm']; ?>" selected><? echo $row['nsm']; ?></option>
            <option value="No married sister">No married sister</option>
            <option value="One married sister">One married sister</option>
            <option value="Two married sisters">Two married sisters</option>
            <option value="Three married sisters">Three married sisters</option>
            <option value="Four married sisters">Four married sistes</option>
            <option value="Above four married sisters">Above four married sisters</option>
          </select></td>
        </tr>
        <tr>
          <td>Father Name :</td>
		  
          <td><input name="txtFANAME" type="text" class="forminput" id="txtFANAME" size="40" maxlength="20" style="width:150px;" value="<? echo $row['Fathername']; ?>" ></td>
        </tr>
        <tr>
          <td>Father Occupation : </td>
		  
          <td><input name="txtFFO" type="text" class="forminput" id="txtFFO" size="40" maxlength="10" style="width:150px;" value="<? echo $row['Fathersoccupation']; ?>"></td>
        </tr>
        <tr>
          <td>Mother Name :</td>
		  
          <td><input name="txtMONAME" type="text" class="forminput" id="txtMONAME" size="40" maxlength="20" style="width:150px;"    value="<? echo $row['Mothersname']; ?>" ></td>
        </tr>
        <tr>
          <td>Mother Occupation : </td>
		 
          <td><input name="txtFMO" type="text" class="forminput" id="txtFMO" size="40" maxlength="40" style="width:150px;" value="<? echo $row['Mothersoccupation']; ?>"></td>
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
