<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
$strmid=$_GET['id']; 
$presult = mysql_query("SELECT * FROM register where MatriID='$strmid' ");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Renewal Membership</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
<!-- 
function win(){
window.opener.location.href="approve_active_to_paid.php";
self.close();
//-->
}
</SCRIPT>
<body>
<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	<form action="renew_paid_form_confirm.php" method="post">
	
	<table width="100%" height="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
	<? while($row = mysql_fetch_array($presult)){ ?>
      <tr>
        <td width="3%" >&nbsp;</td>
        <td colspan="2"><div align="center" class="paratext">Renewal Membership  </div></td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td width="28%" class="Partext1">Matri ID : </td>
        <td width="69%" class="Partext1"><? echo $row['MatriID']?>&nbsp;
          <input name="txthidmid" type="hidden" id="txthidmid" value="<? echo $row['MatriID'] ?>" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td class="Partext1">Name : </td>
        <td class="Partext1"><? echo $row['Name']?>
          <input name="txthidname" type="hidden" id="txthidname" value="<? echo $row['Name'] ?>" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td class="Partext1">Email : </td>
        <td class="Partext1"><? echo $row['ConfirmEmail']?>
          <input name="txthidemail" type="hidden" id="txthidemail" value="<? echo $row['ConfirmEmail'] ?>" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td class="Partext1">Address : </td>
        <td class="Partext1"><? echo $row['Address']?>
          <input name="txthidaddress" type="hidden" id="txthidaddress" value="<? echo $row['Address'] ?>" /></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Payment Mode&nbsp; : </td>
        <td><select name="txtpaymentmode" class="formselect" id="txtpaymentmode">
		<option value="Cash">Cash</option>
          <option value="Cheque">Cheque</option>
		   <option value="Credit Card">Credit Card</option>
          <option value="DD">DD</option>
          <option value="Money Order">Money Order</option>
          <option value="Funds Transfer">Funds Transfer</option>
          <option value="Other">Other</option>
        </select></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Activation Date&nbsp; : </td>
		<? $today1 = strtotime ('now');
$today=date("d-m-Y",$today1); ?>
        <td><input name="txtad" type="text" class="forminput" id="txtad" value="<? echo $today; ?>" /></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Plan : </td>
        <td>
<?
$plan = mysql_query("SELECT * from membershipplan ");
echo( '<select name="txtplan" class="formselect">' ); 
while($row = mysql_fetch_array($plan))
{ 
echo  '<option value='.$row['plandisplayname'].'>'.$row['plandisplayname'].'</option>';
} 
echo '</select>';  
?>		</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Duration : </td>
        <td>
<?
$planduration = mysql_query("SELECT * from membershipplan ");
echo( '<select name="txtduration" class="formselect">' ); 
while($row = mysql_fetch_array($planduration))
{ 
echo  '<option value='.$row['planduration'].'>'.$row['planduration'].'</option>';
} 
echo '</select>';  
?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">No of Contacts </td>
        <td>
		<?
$plancontact = mysql_query("SELECT * from membershipplan ");
echo( '<select name="txtplancontact" class="formselect">' ); 
while($row = mysql_fetch_array($plancontact))
{ 
echo  '<option value='.$row['plannoofcontacts'].'>'.$row['plannoofcontacts'].'</option>';
} 
echo '</select>';  
?>		</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Amount : </td>
        <td>
		
		<?
$planamount = mysql_query("SELECT * from membershipplan ");
echo( '<select name="txtplanamount" class="formselect">' ); 
while($row = mysql_fetch_array($planamount))
{ 
echo  '<option value='.$row['planamount'].'>'.$row['planamount'].'</option>';
} 
echo '</select>';  
?>		</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Bank Details : </td>
        <td><textarea name="txtbankdet" cols="30" rows="4" class="forminput" id="txtbankdet"></textarea></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="Submit" type="submit" class="formselect" value="Submit" /></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td colspan="2"><div align="center"></div></td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="24" colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
      </tr>
		<? } ?>
    </table>
	
	</form>
	</td>
  </tr>
</table>

</body>
</html>
