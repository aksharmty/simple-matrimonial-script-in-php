<?php include('protect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login</title>
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
	<form action="renew_paid_form_confirm_submit.php" method="post">
	
	<table width="100%" height="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
	
      <tr>
        <td width="3%" >&nbsp;</td>
        <td colspan="2"><div align="center" class="paratext">Renew Membership Confirm </div></td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td width="28%" class="Partext1">Matri ID : </td>
        <td width="69%" class="H1Text"><? echo $_POST['txthidmid']; ?>
          <input name="txtp1" type="hidden" id="txtp1" value="<? echo $_POST['txthidmid']; ?>" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td class="Partext1">Name : </td>
        <td class="H1Text"><? echo $_POST['txthidname']; ?>
          <input type="hidden" name="txtp2" value="<? echo $_POST['txthidname']; ?>" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td class="Partext1">Email : </td>
        <td class="H1Text"><? echo $_POST['txthidemail']; ?>
          <input type="hidden" name="txtp3" value="<? echo $_POST['txthidemail']; ?>" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td class="Partext1">Address : </td>
        <td class="H1Text"><? echo $_POST['txthidaddress']; ?>
          <input type="hidden" name="txtp4" value="<? echo $_POST['txthidaddress']; ?>" /></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Payment Mode&nbsp; : </td>
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtpaymentmode']; ?>
          <input type="hidden" name="txtp5" value="<? echo $_POST['txtpaymentmode']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Activation Date&nbsp; : </td>
		
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtad']; ?>
          <input type="hidden" name="txtp6" value="<? echo $_POST['txtad']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Plan : </td>
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtplan']; ?>
          <input type="hidden" name="txtp7" value="<? echo $_POST['txtplan']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Plan Duration : </td>
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtduration']; ?> days
            <input type="hidden" name="txtp82" value="<? echo $_POST['txtduration']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">No of Contacts </td>
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtplancontact']; ?>
          <input type="hidden" name="txtp8" value="<? echo $_POST['txtplancontact']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Amount : </td>
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtplanamount']; ?>
          <input type="hidden" name="txtp9" value="<? echo $_POST['txtplanamount']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td class="Partext1">Bank Details : </td>
        <td class="H1Text"><span class="Partext1"><? echo $_POST['txtbankdet']; ?>
          <input type="hidden" name="txtp10" value="<? echo $_POST['txtbankdet']; ?>" />
        </span></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td colspan="2">
          <div align="left">
            <input name="Submit" type="submit" class="formselect" value="Confirm" />  
            <input name="button2" type="button" class="formselect" onclick="history.go(-1)" value="Cancel" />
          </div></td></tr>
      <tr>
        <td height="24" colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
      </tr>
    </table>
	
	</form>
	</td>
  </tr>
</table>

</body>
</html>
