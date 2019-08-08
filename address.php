<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style></head>
<body>
<?

// View Address For PAID MEMBERS (Should be into Membership and contact Allocation) ////
$adview = mysql_query("SELECT MatriID,Noofcontacts,Status FROM register WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) <1 AND Status <> 'InActive' AND Status <> 'Active' AND Noofcontacts >0 AND MatriID ='".$_SESSION['username']."' ");
if(mysql_num_rows($adview) == 0)
{
	// NO CONTACT			
} 
else 
{


		$strid=$_SESSION['viewprofile'];
		$result = mysql_query("SELECT * FROM register Where MatriID ='$strid' ");
		while($row = mysql_fetch_array($result)) 
		{  ?>
		<table width="90%" border="0" cellpadding="2" cellspacing="2" bgcolor="#ECECEC">
		<tr>
		<td width="35%" bgcolor="#FFFFFF">Matri ID : </td>
		<td width="65%" bgcolor="#FFFFFF"><? echo $row['MatriID'] ?></td>
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">Name : </td>
		<td bgcolor="#FFFFFF"><? echo $row['Name'] ?></td>
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">Email : </td>
		<td bgcolor="#FFFFFF"><? echo $row['ConfirmEmail'] ?></td>
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">Address : </td>
		<td bgcolor="#FFFFFF"><? echo $row['Address'] ?></td>
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">Phone : </td>
		<td bgcolor="#FFFFFF"><? echo $row['Phone'] ?></td>
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">Mobile : </td>
		<td bgcolor="#FFFFFF"><? echo $row['Mobile'] ?></td>
		</tr>
		</table>
		<? } ?>
<? 
}
/// DECRESE ONE ASSURED CONTACTS //////////////////////// FOR LOGGED MEMBER 
$update = mysql_query("UPDATE register SET Noofcontacts = (Noofcontacts-1) WHERE MatriID ='".$_SESSION['username']."' ");
?>	
	
</body>
</html>
