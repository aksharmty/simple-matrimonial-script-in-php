<?php include('protect.php'); ?>
<?php
include '../dbconnect.php'; 
$strid = $_POST['txtID'];
$result = mysql_query("SELECT MatriID,Name,ConfirmEmail,Noofcontacts,Status, Memshipexpirydate, DATEDIFF( CURRENT_DATE, Memshipexpirydate ) AS expdays
FROM register WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) <1 AND Status <> 'InActive' AND Status <> 'Active' AND MatriID = '$strid' ");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reset Assured Contacts to Paid members</title>
<style type="text/css">
<!--
.style4 {color: #FF0000;
	font-weight: bold;
}
.style4 {color: #000000}
-->
</style>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
      <tr>
        <td colspan="2"><?php include("adminheader.php");?></td>
      </tr>
      <tr>
        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>
        <td width="80%"><table width="100%" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="22" colspan="3" valign="middle"><img src="images/icon1.gif" width="19" height="16" /></td>
            <td width="98%" height="22" valign="middle"><span class="headertext">RESET ASSURED CONTACT ALLOCATIONS</span></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><br />
              <table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">
                <tr>
                  <td class="smalltextred">Every Paid member has an allocated ASSURED CONTACTS (ability to view contact details other profiles). The number varies for each plan as per your setting. Hence,using this option, a paid member you can RESET the assured contacts </td>
                </tr>
              </table>              
                <br />
				<form action="reset_contact_no_submit.php" method="post">
				<?php
				
				
				if(mysql_num_rows($result) == 0){
				///echo "Nothing Selected";
				
				 print "<script>";
     print " self.location='reset_contact_allocate.php?action=noteligible';"; // Comment this line if you don't want to redirect
     print "</script>";
				
				} else {
				
				while($row = mysql_fetch_array($result))
				{  ?>
				
   				<table width="600" border="0" align="center" cellpadding="5" cellspacing="0" class="submenubox" id="tbl" runat="server" visible="false">
                    <tr>
                      <td width="33%" class="paratext"><div align="left">Matri ID : </div></td>
                      <td width="67%"><? echo $row['MatriID']; ?>
                        <input name="txtID" type="hidden" id="txtID" value="<?php echo $row['MatriID']; ?>" /></td>
                    </tr>
                    <tr>
                      <td class="paratext"><div align="left">Name : </div></td>
                      <td ><? echo $row['Name']; ?></td>
                    </tr>
                    <tr>
                      <td class="paratext"><div align="left">Email : </div></td>
                      <td ><? echo $row['ConfirmEmail']; ?></td>
                    </tr>
                    <tr>
                      <td class="paratext"><div align="left">Membsership : </div></td>
                      <td ><? echo $row['Status']; ?></td>
                    </tr>
                    <tr>
                      <td class="paratext"><div align="left">Expiry Date : </div></td>
                      <td ><? echo $row['Memshipexpirydate']; ?></td>
                    </tr>
                    <tr>
                      <td class="paratext"><div align="left">Remining Days : </div></td>
                      <td ><? echo $row['expdays']; ?></td>
                    </tr>
                    <tr>
                      <td class="paratext"><div align="left">Remining Assured Contacts : </div></td>
                      <td class="style4" ><? echo $row['Noofcontacts']; ?></td>
                    </tr>
                    <tr>
                      <td valign="middle" class="paratext"><div align="left"><span class="bluetext">Reset  assured contacts:</span></div></td>
                      <td><br />
                        <input name="txtcontact" type="text" id="txtcontact" value="<? echo $row['Noofcontacts'];?>" />
                      <br />
                        <span class="smalltextred">(Reset number to this profile for View other member's Phone and address) </span></td>
                    </tr>
                    
                    <tr>
                      <td class="text11">&nbsp;</td>
                      <td class="text11"><input type="submit" name="Submit" value="Reset Assured Contact" /></td>
                    </tr>
                  </table>
				
	<?php  } } ?>				

		
			
				
				
				</form>
				<p align="center">&nbsp;</p></td>
            </tr>
          
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
