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
<SCRIPT language=javascript src="city.js"></SCRIPT>
<SCRIPT language=javascript src="category.js"></SCRIPT>

<script language="javascript">
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
	// Check Address 
		if ( MatriForm.txtAddress.value == "" )
		{
			alert( "Please enter your Address." );
			MatriForm.txtAddress.focus( );
			return false;
		}
			
			// Check phone 
		if ( MatriForm.txtPhone.value == "" )
		{
			alert( "Please enter your phone no." );
			MatriForm.txtPhone.focus( );
			return false;
		}
		
		
			// Check mobile
		if ( MatriForm.txtMobile.value == "" )
		{
			alert( "Please enter your mobile no." );
			MatriForm.txtMobile.focus( );
			return false;
		}
		
		
		
		if ((document.MatriForm.txtMobile.value.length < 10 ))
		{
			alert( "Mobile number must be minimum 10 numbers." );	
			document.MatriForm.txtMobile.focus( );
			return false;
		}
		
		
		
		if ((document.MatriForm.txtPhone.value.length < 5 ))
		{
			alert( "Phone number must be minimum 5 numbers." );	
			document.MatriForm.txtPhone.focus( );
			return false;
		}
	
		
		return true;
	}

</script> 

<script>
function check_phone(field_name)
{
	var i, max, field_info
	field_info = eval("document.MatriForm." + field_name);
	max = field_info.value.length;
	
	for (i = 0; i < max; i++)
	{
		if(isNaN(field_info.value.charAt(i)))
		{
			alert("You Must Enter A Number.");
			field_info.value = "";
			field_info.focus();
			return false;
		}
	}
			return true;
}
</script>


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
       
	 
	 
	  <form action="edit_cont.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Contact Details </span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Address </td>
          <td width="78%"><textarea name="txtAddress" rows="4" id="txtAddress" style="width:210px;"><? echo $row['Address']; ?></textarea>
            <br>
            <span class="style2">The contact address is only for Official purpose and will not be discloded to others</span></td>
        </tr>
        <tr>
          <td>Country </td>
          <td><span class="formselect">
            <select name="txtCountry" class="forminput" id="txtCountry" style="width:215px;">
			 <option value="<? echo $row['Country']; ?>"><? echo $row['Country']; ?></option>
              <option>Pakistan</option>
              <option>USA</option>
              <option>United Kingdom</option>
              <option>United Arab Emirates</option>
              <option>Canada</option>
              <option>Australia</option>
              <option>India</option>
              <option>Saudi Arabia</option>
              <option>Kuwait</option>
              <option>South Africa</option>
              <option>Afghanistan</option>
              <option>Albania</option>
              <option>Algeria</option>
              <option>American Samoa</option>
              <option>Andorra</option>
              <option>Angola</option>
              <option>Anguilla</option>
              <option>Antigua &amp; Barbuda</option>
              <option>Argentina</option>
              <option>Armenia</option>
              <option>Australia</option>
              <option>Austria</option>
              <option>Azerbaijan</option>
              <option>Bahamas</option>
              <option>Bahrain</option>
              <option>Bangladesh</option>
              <option>Barbados</option>
              <option>Belarus</option>
              <option>Belgium</option>
              <option>Belize</option>
              <option>Bermuda</option>
              <option>Bhutan</option>
              <option>Bolivia</option>
              <option>Bosnia and Herzegovina</option>
              <option>Botswana</option>
              <option>Brazil</option>
              <option>Brunei</option>
              <option>Bulgaria</option>
              <option>Burkina Faso</option>
              <option>Burundi</option>
              <option>Cambodia</option>
              <option>Cameroon</option>
              <option>Canada</option>
              <option>Cape Verde</option>
              <option>Cayman Islands</option>
              <option>Central African Republic</option>
              <option>Chad</option>
              <option>Chile</option>
              <option>China</option>
              <option>Colombia</option>
              <option>Comoros</option>
              <option>Congo</option>
              <option>Congo (DRC)</option>
              <option>Cook Islands</option>
              <option>Costa Rica</option>
              <option>Cote d'Ivoire</option>
              <option>Croatia (Hrvatska)</option>
              <option>Cuba</option>
              <option>Cyprus</option>
              <option>Czech Republic</option>
              <option>Denmark</option>
              <option>Djibouti</option>
              <option>Dominica</option>
              <option>Dominican Republic</option>
              <option>East Timor</option>
              <option>Ecuador</option>
              <option>Egypt</option>
              <option>El Salvador</option>
              <option>Equatorial Guinea</option>
              <option>Eritrea</option>
              <option>Estonia</option>
              <option>Ethiopia</option>
              <option>Falkland Islands</option>
              <option>Faroe Islands</option>
              <option>Fiji Islands</option>
              <option>Finland</option>
              <option>France</option>
              <option>French Guiana</option>
              <option>French Polynesia</option>
              <option>Gabon</option>
              <option>Gambia</option>
              <option>Georgia</option>
              <option>Germany</option>
              <option>Ghana</option>
              <option>Gibraltar</option>
              <option>Greece</option>
              <option>Greenland</option>
              <option>Grenada</option>
              <option>Guadeloupe</option>
              <option>Guam</option>
              <option>Guatemala</option>
              <option>Guinea</option>
              <option>Guinea-Bissau</option>
              <option>Guyana</option>
              <option>Haiti</option>
              <option>Honduras</option>
              <option>Hong Kong SAR</option>
              <option>Hungary</option>
              <option>Iceland</option>
              <option>India</option>
              <option>Indonesia</option>
              <option>Iran</option>
              <option>Iraq</option>
              <option>Ireland</option>
              <option>Israel</option>
              <option>Italy</option>
              <option>Jamaica</option>
              <option>Japan</option>
              <option>Jordan</option>
              <option>Kazakhstan</option>
              <option>Kenya</option>
              <option>Kiribati</option>
              <option>Korea</option>
              <option>Kuwait</option>
              <option>Kyrgyzstan</option>
              <option>Laos</option>
              <option>Latvia</option>
              <option>Lebanon</option>
              <option>Lesotho</option>
              <option>Liberia</option>
              <option>Libya</option>
              <option>Liechtenstein</option>
              <option>Lithuania</option>
              <option>Luxembourg</option>
              <option>Macao SAR</option>
              <option>Macedonia</option>
              <option>Madagascar</option>
              <option>Malawi</option>
              <option>Malaysia</option>
              <option>Maldives</option>
              <option>Mali</option>
              <option>Malta</option>
              <option>Martinique</option>
              <option>Mauritania</option>
              <option>Mauritius</option>
              <option>Mayotte</option>
              <option>Mexico</option>
              <option>Micronesia</option>
              <option>Moldova</option>
              <option>Monaco</option>
              <option>Mongolia</option>
              <option>Montserrat</option>
              <option>Morocco</option>
              <option>Mozambique</option>
              <option>Myanmar</option>
              <option>Namibia</option>
              <option>Nauru</option>
              <option>Nepal</option>
              <option>Netherlands</option>
              <option>Netherlands Antilles</option>
              <option>New Caledonia</option>
              <option>New Zealand</option>
              <option>Nicaragua</option>
              <option>Niger</option>
              <option>Nigeria</option>
              <option>Niue</option>
              <option>Norfolk Island</option>
              <option>North Korea</option>
              <option>Norway</option>
              <option>Oman</option>
              <option>Pakistan</option>
              <option>Panama</option>
              <option>Papua New Guinea</option>
              <option>Paraguay</option>
              <option>Peru</option>
              <option>Philippines</option>
              <option>Pitcairn Islands</option>
              <option>Poland</option>
              <option>Portugal</option>
              <option>Puerto Rico</option>
              <option>Qatar</option>
              <option>Reunion</option>
              <option>Romania</option>
              <option>Russia</option>
              <option>Rwanda</option>
              <option>Samoa</option>
              <option>San Marino</option>
              <option>Sao Tome and Principe</option>
              <option>Saudi Arabia</option>
              <option>Senegal</option>
              <option>Serbia and Montenegro</option>
              <option>Seychelles</option>
              <option>Sierra Leone</option>
              <option>Singapore</option>
              <option>Slovakia</option>
              <option>Slovenia</option>
              <option>Solomon Islands</option>
              <option>Somalia</option>
              <option>South Africa</option>
              <option>Spain</option>
              <option>Sri Lanka</option>
              <option>St. Helena</option>
              <option>St. Kitts and Nevis</option>
              <option>St. Lucia</option>
              <option>St. Pierre and Miquelon</option>
              <option>St. Vincent &amp; Grenadines</option>
              <option>Sudan</option>
              <option>Suriname</option>
              <option>Swaziland</option>
              <option>Sweden</option>
              <option>Switzerland</option>
              <option>Syria</option>
              <option>Taiwan</option>
              <option>Tajikistan</option>
              <option>Tanzania</option>
              <option>Thailand</option>
              <option>Togo</option>
              <option>Tokelau</option>
              <option>Tonga</option>
              <option>Trinidad and Tobago</option>
              <option>Tunisia</option>
              <option>Turkey</option>
              <option>Turkmenistan</option>
              <option>Turks and Caicos Islands</option>
              <option>Tuvalu</option>
              <option>Uganda</option>
              <option>Ukraine</option>
              <option>United Arab Emirates</option>
              <option>United Kingdom</option>
              <option>Uruguay</option>
              <option>USA</option>
              <option>Uzbekistan</option>
              <option>Vanuatu</option>
              <option>Venezuela</option>
              <option>Vietnam</option>
              <option>Virgin Islands</option>
              <option>Virgin Islands (British)</option>
              <option>Wallis and Futuna</option>
              <option>Yemen</option>
              <option>Yugoslavia</option>
              <option>Zambia</option>
              <option>Zimbabwe</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td>State</td>
          <td><select 
name=ResidingState class="forminput" onChange="fillSelectFromArray(this.form.City, ((this.selectedIndex == -1) ? null : residingcity[this.selectedIndex-1]));" style="width:215px">
             <option value="<? echo $row['State']; ?>"><? echo $row['State']; ?></option>
            <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
            <option value="Daman &amp; Diu">Daman &amp; Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
            <option value="Jharkand">Jharkand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="LakshadeepLakshadeep">LakshadeepLakshadeep</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Orissa">Orissa</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttaranchal">Uttaranchal</option>
            <option value="West Bengal">West Bengal</option>
          </select></td>
        </tr>
        <tr>
          <td>City </td>
          <td><select name=City class="forminput"style="width:215px" >
             <option value="<? echo $row['City']; ?>"><? echo $row['City']; ?></option>
          </select></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input name="txtPhone" type="text" class="forminput" id="txtPhone" style="width:100px;" value="<? echo $row['Phone']; ?>"  size="10" maxlength="10" onKeyUp="check_phone('txtPhone')"></td>
        </tr>
        
        <tr>
          <td>Mobile </td>
          <td><input name="txtMobile" type="text" class="forminput" id="txtMobile" style="width:210px;" value="<? echo $row['Mobile']; ?>"  size="40" maxlength="40" onKeyUp="check_phone('txtMobile')"></td>
        </tr>
        <tr>
          <td>Residence in</td>
          <td><select name="txtRes" class="forminput" id="txtCitizen" style="width:215px;">
		  <option value="<? echo $row['Residencystatus']; ?>"><? echo $row['Residencystatus']; ?></option>
            <option value="Citizen">Citizen</option>
            <option value="Permanent Resident">Permanent Resident</option>
            <option value="Student Visa">Student Visa</option>
            <option value="Temporary Visa">Temporary Visa</option>
            <option value="Work permit">Work permit</option>
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
