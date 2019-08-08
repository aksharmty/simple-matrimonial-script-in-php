<?php include('protect.php'); ?>
<?php
include '../dbconnect.php';
$str1 = $_POST['txtp1'];
$str2 = $_POST['txtp2'];
$str3 = $_POST['txtp3'];
$str4 = $_POST['txtp4'];
$str5 = $_POST['txtp5'];
$str6 = $_POST['txtp6'];
$str7 = $_POST['txtp7'];
$str8 = $_POST['txtp8'];
$str82 = $_POST['txtp82'];
$str9 = $_POST['txtp9'];
$str10 = $_POST['txtp10'];

// insert the data
$insert = mysql_query("insert into paiddetails (Pmatriid,Pname,Pemail,Paddress,Ppaymode,Pactivedate,Pplan,Pplanduration,Pnocontct,Pamount,Pbankdet) values ('$str1','$str2','$str3','$str4','$str5','$str6','$str7','$str82','$str8','$str9','$str10')")
or die("Could not insert data because ".mysql_error());
?>

<?php ////////////////// UPDATE INTO REGISTER TABLE ////////////////////////

$strmid = $_POST['txtp1'];
//$stractivedate = $_POST['txtp6'];
//echo $str82;
$strexpdate = date('Y-m-d', strtotime(".$str82 days"));
$strplan = $_POST['txtp7'];
$strnoc = $_POST['txtp8'];
$strrenday = $_POST['txtp82'];

//$result = mysql_query("SELECT ADDDATE(MemshipExpiryDate ,INTERVAL 31 DAY ) as fdate FROM register where MatriID = '$strmid' ");
//while($row = mysql_fetch_array($result))
 // {
  //echo $row['fdate'];
  //}


$update=mysql_query("Update register set Status='$strplan', MemshipExpiryDate = ADDDATE(MemshipExpiryDate,INTERVAL '$strrenday' 
 DAY) where MatriID = '$strmid' ")
or die("Could not update data because ".mysql_error());


?>

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
window.opener.location.href="fourthcoming_renwals.php";
self.close();
//-->
}
</SCRIPT>
<body>
<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	
	
	<table width="100%" height="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
	
      <tr>
        <td width="3%" >&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        <td colspan="2" rowspan="10" class="Partext1"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="21%"><div align="center" class="H1Text"><? echo $_POST['txtp1']; ?></div></td>
            <td width="79%"><div align="center"><span class="smalltextred">Renewal Membership Activation Successful and <br />
  Confirmation mail has been sent Successful.</span> </div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td height="17">&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        </tr>
      <tr>
        <td >&nbsp;</td>
        <td colspan="2">&nbsp;</td></tr>
      <tr>
        <td height="24" colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
      </tr>
    </table>
	
	
	</td>
  </tr>
</table>

</body>
</html>
