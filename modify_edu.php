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
	  
	  <form action="edit_eduocc.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Education and Occupation</span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%"><span class="Alert">* </span>Education</td>
          <td width="78%"><select name="txtEdu" class="forminput" id="txtEdu" style="width:215px;">
            <option value="<? echo $row['Education']; ?>" selected><? echo $row['Education']; ?></option>
            <option value="Bachelors">Bachelors</option>
            <option value="Masters">Masters</option>
            <option value="Doctorate">Doctorate</option>
            <option value="Diploma">Diploma</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Associates degree">Associates degree</option>
            <option value="Honours degree">Honours degree</option>
            <option value="Trade school">Trade school</option>
            <option value="High school">High school</option>
            <option value="Less than high school">Less than high school</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Edu Details </td>
          <td><select name="txtEdudetails" class="forminput" id="txtEdudetails" style="width:215px;">
            <option value="<? echo $row['EducationDetails']; ?>" selected><? echo $row['EducationDetails']; ?></option>
            <option value="Advertising/ Marketing">Advertising/ Marketing</option>
            <option value="Administrative services">Administrative services</option>
            <option value="Architecture">Architecture</option>
            <option value="Armed Forces">Armed Forces</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
            <option value="Computers/ IT">Computers/ IT</option>
            <option value="Education">Education</option>
            <option value="Engineering/ Technology">Engineering/ Technology</option>
            <option value="Fashion">Fashion</option>
            <option value="Finance">Finance</option>
            <option value="Fine Arts">Fine Arts</option>
            <option value="Home Science">Home Science</option>
            <option value="Journalism/Media">Journalism/Media</option>
            <option value="Law">Law</option>
            <option value="Management">Management</option>
            <option value="Medicine">Medicine</option>
            <option value="Nursing/ Health Sciences">Nursing/ Health Sciences</option>
            <option value="Office administration">Office administration</option>
            <option value="Science">Science</option>
            <option value="Shipping">Shipping</option>
            <option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert"> </span><span class="Alert"> </span><span class="bodysg" >&nbsp;</span>&nbsp;Annual income </td>
          <td><select name="txtIncome" class="forminput" id="txtIncome" style="width:215px;">
            <option value="<? echo $row['Occupation']; ?>" selected><? echo $row['Occupation']; ?></option>
            <optgroup label=""></optgroup>
            <optgroup label="Income in Indian Rupees">
            <option value="Under   Rs.50,000">Under   Rs.50,000</option>
            <option value="Rs.50,001 - 1,00,000">Rs.50,001 - 1,00,000</option>
            <option value="Rs.1,00,001 - 2,00,000">Rs.1,00,001 - 2,00,000</option>
            <option value="Rs.2,00,001 -   3,00,000">Rs.2,00,001 -   3,00,000</option>
            <option value="Rs.3,00,001 - 4,00,000">Rs.3,00,001 - 4,00,000</option>
            <option value="Rs.4,00,001 - 5,00,000">Rs.4,00,001 - 5,00,000</option>
            <option value="Rs.5,00,001 -   7,50,000">Rs.5,00,001 -   7,50,000</option>
            <option value="Rs.7,50,001 - 10,00,000">Rs.7,50,001 - 10,00,000</option>
            <option value="Rs.10,00,001 and above">Rs.10,00,001 and above</option>
            </optgroup>
            <optgroup label=""></optgroup>
            <optgroup label="Income in US Dollars">
            <option value="Under $25,000">Under $25,000</option>
            <option value="$25,001 - 50,000">$25,001 - 50,000</option>
            <option value="$50,001 - 75,000">$50,001 - 75,000</option>
            <option value="$75,001 - 100,000">$75,001 - 100,000</option>
            <option value="$100,001 - 150,000">$100,001 - 150,000</option>
            <option value="$150,001 -   200,000">$150,001 -   200,000</option>
            <option value="$200,001 and above">$200,001 and above</option>
            </optgroup>
            <optgroup label=""></optgroup>
            <option value="No Income">No Income</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">*</span> Occupation </td>
          <td><select name="txtOccu" class="forminput" id="txtOccu" style="width:215px;">
            <option value="<? echo $row['Annualincome']; ?>" selected><? echo $row['Annualincome']; ?></option>
            <option value="Not working">Not working</option>
            <option value="Non-mainstream professional">Non-mainstream professional</option>
            <option value="Accountant">Accountant</option>
            <option value="Acting Professional">Acting Professional</option>
            <option value="Actor">Actor</option>
            <option value="Administration Professional">Administration Professional</option>
            <option value="Advertising Professional">Advertising Professional</option>
            <option value="Air Hostess">Air Hostess</option>
            <option value="Architect">Architect</option>
            <option value="Artisan">Artisan</option>
            <option value="Audiologist">Audiologist</option>
            <option value="Banker">Banker</option>
            <option value="Beautician">Beautician</option>
            <option value="Biologist / Botanist">Biologist / Botanist</option>
            <option value="Business Person">Business Person</option>
            <option value="Chartered Accountant">Chartered Accountant</option>
            <option value="Civil Engineer">Civil Engineer</option>
            <option value="Clerical Official">Clerical Official</option>
            <option value="Commercial Pilot">Commercial Pilot</option>
            <option value="Company Secretary">Company Secretary</option>
            <option value="Computer Professional">Computer Professional</option>
            <option value="Consultant">Consultant</option>
            <option value="Contractor">Contractor</option>
            <option value="Cost Accountant">Cost Accountant</option>
            <option value="Creative Person">Creative Person</option>
            <option value="Customer Support Professional">Customer Support Professional</option>
            <option value="Defense Employee">Defense Employee</option>
            <option value="Dentist">Dentist</option>
            <option value="Designer">Designer</option>
            <option value="Doctor">Doctor</option>
            <option value="Economist">Economist</option>
            <option value="Engineer">Engineer</option>
            <option value="Engineer (Mechanical)">Engineer (Mechanical)</option>
            <option value="Engineer (Project)">Engineer (Project)</option>
            <option value="Entertainment Professional">Entertainment Professional</option>
            <option value="Event Manager">Event Manager</option>
            <option value="Executive">Executive</option>
            <option value="Factory worker">Factory worker</option>
            <option value="Farmer">Farmer</option>
            <option value="Fashion Designer">Fashion Designer</option>
            <option value="Finance Professional">Finance Professional</option>
            <option value="Flight Attendant">Flight Attendant</option>
            <option value="Government Employee">Government Employee</option>
            <option value="Health Care Professional">Health Care Professional</option>
            <option value="Home Maker">Home Maker</option>
            <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>
            <option value="Human Resources Professional">Human Resources Professional</option>
            <option value="Interior Designer">Interior Designer</option>
            <option value="Investment Professional">Investment Professional</option>
            <option value="IT / Telecom Professional">IT / Telecom Professional</option>
            <option value="Journalist">Journalist</option>
            <option value="Lawyer">Lawyer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Legal Professional">Legal Professional</option>
            <option value="Manager">Manager</option>
            <option value="Marketing Professional">Marketing Professional</option>
            <option value="Media Professional">Media Professional</option>
            <option value="Medical Professional">Medical Professional</option>
            <option value="Medical Transcriptionist">Medical Transcriptionist</option>
            <option value="Merchant Naval Officer">Merchant Naval Officer</option>
            <option value="Nurse">Nurse</option>
            <option value="Occupational Therapist">Occupational Therapist</option>
            <option value="Optician">Optician</option>
            <option value="Pharmacist">Pharmacist</option>
            <option value="Physician Assistant">Physician Assistant</option>
            <option value="Physicist"></option>
            <option value="Physiotherapist"></option>
            <option value="Pilot">Pilot</option>
            <option value="Politician">Politician</option>
            <option value="Production professional">Production professional</option>
            <option value="Professor">Professor</option>
            <option value="Psychologist">Psychologist</option>
            <option value="Public Relations Professional">Public Relations Professional</option>
            <option value="Real Estate Professional">Real Estate Professional</option>
            <option value="Research Scholar">Research Scholar</option>
            <option value="Retired Person">Retired Person</option>
            <option value="Retail Professional">Retail Professional</option>
            <option value="Sales Professional">Sales Professional</option>
            <option value="Scientist">Scientist</option>
            <option value="Self-employed Person">Self-employed Person</option>
            <option value="Social Worker">Social Worker</option>
            <option value="Software Consultant">Software Consultant</option>
            <option value="Sportsman">Sportsman</option>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
            <option value="Technician">Technician</option>
            <option value="Training Professional">Training Professional</option>
            <option value="Transportation Professional">Transportation Professional</option>
            <option value="Veterinary Doctor">Veterinary Doctor</option>
            <option value="Volunteer">Volunteer</option>
            <option value="Writer">Writer</option>
            <option value="Zoologist">Zoologist</option>
          </select></td>
        </tr>
        <tr>
          <td><span class="Alert">* </span>Employed in </td>
          <td><select name="txtEmp" class="forminput" id="txtEmp" style="width:215px;">
            <option value="<? echo $row['Employedin']; ?>" selected><? echo $row['Employedin']; ?></option>
            <option value="Business">Business</option>
            <option value="Defence">Defence</option>
            <option value="Government">Government</option>
            <option value="Not Employed in">Not Employed in</option>
            <option value="Private">Private</option>
            <option value="Others">Others</option>
          </select></td>
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
