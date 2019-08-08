<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 

$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>



<HTML><HEAD>
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
<?php include("leftbanner.php");?></TD>
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
	  
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q1" id="q1"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "bisuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}
else if ($StrAction == "emailtaken")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Email Id you entered already taken. Please enter a New Email.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}
?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Basic Information</span><span class="bodysg">&nbsp;
            
              <a href="modify_basic.php"><img src="pics/edit.gif" alt="Modify Basic information" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Name : </td>
          <td width="78%"><? echo $row['Name']; ?></td>
        </tr>
        <tr>
          <td>Mother tongue  : </td>
          <td><? echo $row['Language']; ?></td>
        </tr>
        <tr>
          <td>Religion : </td>
          <td><? echo $row['Religion']; ?></td>
        </tr>
        <tr>
          <td>Caste : </td>
          <td><? echo $row['Caste']; ?></td>
        </tr>
        <tr>
          <td>Sub Caste  : </td>
          <td><? echo $row['Subcaste']; ?></td>
        </tr>
        <tr>
          <td>Email : </td>
          <td><? echo $row['ConfirmEmail']; ?></td>
        </tr>
      </table>
	  <br>
	 
	  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td bgcolor="#6ACDF7"></td>
        </tr>
      </table>
	  <br>
	  
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q2" id="q2"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "srsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Socio Religious Attributes</span><span class="bodysg"> &nbsp;<a href="modify_socio.php"><img src="pics/edit.gif" alt="Modify Socio Religious Attributes" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Gothra(m) : </td>
          <td width="78%"><? echo $row['Gothram']; ?></td>
        </tr>
        <tr>
          <td>Star(Nakshatra) : </td>
          <td><? echo $row['Star']; ?></td>
        </tr>
        <tr>
          <td>Moonsign : </td>
          <td><? echo $row['Moonsign']; ?></td>
        </tr>
        <tr>
          <td>Horoscope Match  : </td>
          <td><? echo $row['Horosmatch']; ?></td>
        </tr>
        <tr>
          <td>Manglik : </td>
          <td><? echo $row['Manglik']; ?></td>
        </tr>
        <tr>
          <td><span class="bodywk">Place of Birth  : </span></td>
          <td><? echo $row['POB']; ?></td>
        </tr>
        <tr>
          <td><span class="bodywk">Time of Birth  : </span></td>
          <td><? echo $row['TOB']; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	 
	  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td bgcolor="#6ACDF7"></td>
        </tr>
      </table>
	  <br>
	  <br>
	
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q3" id="q3"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "edusuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Education and Occupation</span><span class="bodysg"> &nbsp;<a href="modify_edu.php"><img src="pics/edit.gif" alt="Modify Education and Occupation" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Education : </td>
          <td width="78%"><? echo $row['Education']; ?></td>
        </tr>
        <tr>
          <td>Edu Details  : </td>
          <td><? echo $row['EducationDetails']; ?></td>
        </tr>
        <tr>
          <td><span class="Alert"> </span><span class="Alert"> </span>Annual income  : </td>
          <td><? echo $row['Occupation']; ?></td>
        </tr>
        <tr>
          <td>Occupation  : </td>
          <td><? echo $row['Annualincome']; ?></td>
        </tr>
        <tr>
          <td>Employed in  : </td>
          <td><? echo $row['Employedin']; ?></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>
	  <br>
	  
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q4"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "physuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Physical Attributes </span><span class="bodysg"> &nbsp;<a href="modify_phy.php"><img src="pics/edit.gif" alt="Modify Physical Attributes" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Height  : </td>
          <td width="78%">
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
		  
		  </td>
        </tr>
        <tr>
          <td>Weight  : </td>
          <td><? echo $row['Weight']; ?></td>
        </tr>
        <tr>
          <td>Blood Group  : </td>
          <td><? echo $row['BloodGroup']; ?></td>
        </tr>
        <tr>
          <td>Complexion : </td>
          <td><? echo $row['Complexion']; ?></td>
        </tr>
        <tr>
          <td>Body type  : </td>
          <td><? echo $row['Bodytype']; ?></td>
        </tr>
        
        <tr>
          <td>Diet  : </td>
          <td><? echo $row['Diet']; ?></td>
        </tr>
        <tr>
          <td>Smoke  : </td>
          <td><? echo $row['Smoke']; ?></td>
        </tr>
        <tr>
          <td>Drink  : </td>
          <td><? echo $row['Drink']; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>
	  
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q5" id="q5"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "contsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Contact Details </span><span class="bodysg"> &nbsp;<a href="modify_con.php"><img src="pics/edit.gif" alt="Modify Contact Details" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Address  : </td>
          <td width="78%"><? echo $row['Address']; ?></td>
        </tr>
        <tr>
          <td>Country  : </td>
          <td><? echo $row['Country']; ?></td>
        </tr>
        <tr>
          <td>State : </td>
          <td><? echo $row['State']; ?></td>
        </tr>
        <tr>
          <td>City  : </td>
          <td><? echo $row['City']; ?></td>
        </tr>
        <tr>
          <td>Phone : </td>
          <td><? echo $row['Phone']; ?></td>
        </tr>
        
        <tr>
          <td>Mobile  : </td>
          <td><? echo $row['Mobile']; ?></td>
        </tr>
        <tr>
          <td>Residence in : </td>
          <td><? echo $row['Residencystatus']; ?></td>
        </tr>
      </table>
	  <br>

	  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>
	  
	  
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q6" id="q6"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "abousuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Profile&nbsp; <a href="modify_abo.php"><img src="pics/edit.gif" alt="Modify About me" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Profile  : </td>
          <td width="78%" valign="top"><? echo $row['Profile']; ?></td>
        </tr>
      </table>
	
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>

	   
	
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q7" id="q7"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "famsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Family Details </span><span class="bodysg">&nbsp; &nbsp;<a href="modify_fam.php"><img src="pics/edit.gif" alt="Modify Family Details" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Family Details   : </td>
          <td width="78%"><? echo $row['FamilyDetails']; ?></td>
        </tr>
        <tr>
          <td>Family Values   : </td>
          <td><? echo $row['Familyvalues']; ?></td>
        </tr>
        <tr>
          <td>Family Type : </td>
          <td><? echo $row['FamilyType']; ?></td>
        </tr>
        <tr>
          <td>Family Status  : </td>
          <td><? echo $row['FamilyStatus']; ?></td>
        </tr>
        <tr>
          <td>Family Origin  : </td>
          <td><? echo $row['FamilyOrigin']; ?></td>
        </tr>
        
        <tr>
          <td>No of Brothers  : </td>
          <td><? echo $row['noofbrothers']; ?></td>
        </tr>
        <tr>
          <td>No of Sisters : </td>
          <td><? echo $row['noofsisters']; ?></td>
        </tr>
        <tr>
          <td>Father Name :</td>
          <td><? echo $row['Fathername']; ?></td>
        </tr>
        <tr>
          <td>Father Occupation : </td>
          <td><? echo $row['Fathersoccupation']; ?></td>
        </tr>
        <tr>
          <td>Mother Name :</td>
          <td><? echo $row['Mothersname']; ?></td>
        </tr>
        <tr>
          <td>Mother Occupation : </td>
          <td><? echo $row['Mothersoccupation']; ?></td>
        </tr>
      </table>
	 
	 
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table> 
	   <br>
	 
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q8" id="q8"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "parsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Partner Preference &nbsp; <a href="modify_par.php"><img src="pics/edit.gif" alt="Modify Partner Preference" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Looking for    : </td>
          <td width="78%"><? echo $row['Looking']; ?></td>
        </tr>
        <tr>
          <td>Age   : </td>
          <td>From  <? echo $row['PE_FromAge']; ?>&nbsp; to&nbsp; <? echo $row['PE_ToAge']; ?></td>
        </tr>
        <tr>
          <td>Expectations : </td>
          <td><? echo $row['PartnerExpectations']; ?></td>
        </tr>
        <tr>
          <td>Country Living in   : </td>
          <td><? echo $row['PE_Countrylivingin']; ?></td>
        </tr>
        <tr>
          <td>Height  : </td>
          <td><? echo $row['PE_Height']; ?></td>
        </tr>
        
        <tr>
          <td>Complexion  : </td>
          <td><? echo $row['PE_Complexion']; ?></td>
        </tr>
        <tr>
          <td>Education : </td>
          <td><? echo $row['PE_Education']; ?></td>
        </tr>
        <tr>
          <td>Religion  :</td>
          <td><? echo $row['PE_Religion']; ?></td>
        </tr>
        <tr>
          <td>Caste  : </td>
          <td><? echo $row['PE_Caste']; ?></td>
        </tr>
        <tr>
          <td>Resident Status  :</td>
          <td><? echo $row['PE_Residentstatus']; ?></td>
        </tr>
      </table>
	
	   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
         <tr>
           <td bgcolor="#6ACDF7"></td>
         </tr>
       </table>
	   <br>
	 
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg"><span class="h3r"><A name="q9" id="q9"></A></span>
                <?php 
$StrAction=$_GET['action'];
if ($StrAction == "hobsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">Hobbies and Interest&nbsp; <a href="modify_hob.php"><img src="pics/edit.gif" alt="Modify Hobbies and Interest" width="34" height="16" border="0"></a></span></td>
        </tr>
        <tr>
          <td width="22%">Hobbies  : </td>
          <td width="78%"><? echo $row['Hobbies']; ?></td>
        </tr>
        <tr>
          <td>Other Hobby   : </td>
          <td width="78%"><? echo $row['OtherHobbies']; ?></td>
        </tr>
        
        <tr>
          <td>Interests  : </td>
          <td width="78%"><? echo $row['Interests']; ?></td>
        </tr>
        <tr>
          <td>Other Interest   : </td>
          <td valign="top"><? echo $row['OtherInterests']; ?></td>
        </tr>
      </table>
	 
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
