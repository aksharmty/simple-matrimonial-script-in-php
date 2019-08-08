<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 

////////// TOTAL MEMBERS
$Totaldata = mysql_query(" SELECT Count(*) as Totalmembers FROM register ") 
or die(mysql_error()); 
$Tot = mysql_fetch_array( $Totaldata );

////////////TOT INACTIVE MEMBERS
$InActivedata = mysql_query(" SELECT Count(MatriID) as TotInA FROM register where Status='InActive' ") 
or die(mysql_error()); 
$InA = mysql_fetch_array( $InActivedata );

//////////// TOT ACTIVE MEMBERS
$Activedata = mysql_query(" SELECT Count(MatriID) as TotA FROM register where Status='Active' ") 
or die(mysql_error()); 
$A = mysql_fetch_array( $Activedata );

//////////// TOT PAID MEMBERS
$Paiddata = mysql_query(" SELECT Count(MatriID) as TotP FROM register where Status != 'Active' and Status != 'InActive' ") 
or die(mysql_error()); 
$P = mysql_fetch_array( $Paiddata );

//////////// TOT FEATURED MEMBERS
$Feadata = mysql_query(" SELECT Count(MatriID) as TotFea FROM register where Status='Featured' ") 
or die(mysql_error()); 
$Fea = mysql_fetch_array( $Feadata );

//////////// TOT PLATINUM MEMBERS
$Pladata = mysql_query(" SELECT Count(MatriID) as TotPla FROM register where Status='PLATINUM' ") 
or die(mysql_error()); 
$Pla = mysql_fetch_array( $Pladata );

//////////// TOT DIAMOND MEMBERS
$Diadata = mysql_query(" SELECT Count(MatriID) as TotDia FROM register where Status='DIAMOND' ") 
or die(mysql_error()); 
$Dia = mysql_fetch_array( $Diadata );

//////////// TOT GOLD MEMBERS
$Goldata = mysql_query(" SELECT Count(MatriID) as TotGol FROM register where Status='GOLD' ") 
or die(mysql_error()); 
$Gol = mysql_fetch_array( $Goldata );

//////////// TOT MALE MEMBERS
$Maledata = mysql_query(" SELECT Count(Gender) as TotMale FROM register where Gender='Male' ") 
or die(mysql_error()); 
$Male = mysql_fetch_array( $Maledata );

//////////// TOT FEMALE MEMBERS
$Femaledata = mysql_query(" SELECT Count(Gender) as TotFemale FROM register where Gender='Female' ") 
or die(mysql_error()); 
$Female = mysql_fetch_array( $Femaledata );

//////////// TOT HINDUS MEMBERS
$Hindudata = mysql_query(" SELECT Count(Religion) as TotHindus FROM register where Religion='Hindu' ") 
or die(mysql_error()); 
$Hindus = mysql_fetch_array( $Hindudata );

//////////// TOT CHRISTIANS MEMBERS
$Christdata = mysql_query(" SELECT Count(Religion) as TotChrist FROM register where Religion='Christian' ") 
or die(mysql_error()); 
$Christ = mysql_fetch_array( $Christdata );

//////////// TOT MUSLIMS MEMBERS
$Muslimdata = mysql_query(" SELECT Count(Religion) as TotMuslims FROM register where Religion='Muslim' ") 
or die(mysql_error()); 
$Muslims = mysql_fetch_array( $Muslimdata );

//////////// TOT SIKH MEMBERS
$Sikhdata = mysql_query(" SELECT Count(Religion) as TotSikh FROM register where Religion='Sikh' ") 
or die(mysql_error()); 
$Sikh = mysql_fetch_array( $Sikhdata );

?>

<link href="style.css" rel="stylesheet" type="text/css">
<table width="195" border="0" cellpadding="0" cellspacing="4">
  <tr>
    <td height="25" colspan="2" class="paratext"> <div align="center">Site Statistics </div></td>
  </tr>
  
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="99%" class="smalltextgrey">Total Members : <span class="smalltextred"><?php echo $Tot['Totalmembers']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">In Active Members : <span class="smalltextred"><?php echo $InA['TotInA']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Active Members : <span class="smalltextred"><?php echo $A['TotA']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Paid Members : <span class="smalltextred"><?php echo $P['TotP']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Featured Members : <span class="smalltextred"><?php echo $Fea['TotFea']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Platinum Members : <span class="smalltextred"><?php echo $Pla['TotPla']; ?></span></td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Diamond Members : <span class="smalltextred"><?php echo $Dia['TotDia']; ?></span></td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Gold Members : <span class="smalltextred"><?php echo $Gol['TotGol']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Male Profiles : <span class="smalltextred"><?php echo $Male['TotMale']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Female Profiles : <span class="smalltextred"><?php echo $Female['TotFemale']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Hindus : <span class="smalltextred"><?php echo $Hindus['TotHindus']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Christians : <span class="smalltextred"><?php echo $Christ['TotChrist']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Muslims : <span class="smalltextred"><?php echo $Muslims['TotMuslims']; ?></span> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Sikh : <span class="smalltextred"><?php echo $Sikh['TotSikh']; ?></span> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
