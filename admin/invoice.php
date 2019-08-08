<?php include("../config.php"); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
$strid=$_GET['id']; 
$memchk = mysql_query("SELECT * FROM paiddetails where Paidid = '$strid' order by Paidid  desc");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<LINK href="style.css" rel="stylesheet" type="text/css">
<title>Invoice</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<?php  while($row = mysql_fetch_array($memchk)){ ?>
<table width="83%" border="0" align="center" cellpadding="5" cellspacing="1" class="blackbox">
  <tr>
    <td colspan="5"><div align="left"><img src="<?php echo $info['Weblogopath']; ?>" /></div></td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"><img src="../pics/invoice.gif" width="122" height="31" /></div></td>
  </tr>
  <tr>
    <td width="8%" valign="top">Bill To : </td>
    <td width="43%">
      <span class="bodysg">
      <?php  echo $row['Pname']?>
      <br />
      <?php  echo $row['Pemail']?>
      <br />
      <?php  echo $row['Paddress']?>
      </span><span class="Partext1"><br />
      </span></td>
    <td width="6%">&nbsp;</td>
    <td width="16%" valign="top"><div align="right">Ship To : </div></td>
    <td width="27%"><span class="bodysg">
      <?php  echo $row['Pname']?>
      <br />
      <?php  echo $row['Pemail']?>
      <br />
      <?php  echo $row['Paddress']?>
    </span></td>
  </tr>
  
  <tr>
    <td colspan="2"><em>Payment mode : 
      <?php  echo $row['Ppaymode']?>
    </em></td>
    <td colspan="3"><div align="right">Date :<span class="Partext1">
      <?php  echo $row['Pactivedate']?>
    </span> </div></td>
  </tr>
  
  <tr>
    <td height="23" bgcolor="#D5D5D5"><div align="left"><strong>No</strong></div></td>
    <td height="23" bgcolor="#D5D5D5"><div align="center"><strong>Item</strong></div></td>
    <td height="23" bgcolor="#D5D5D5"><div align="center"><strong>Qty</strong></div></td>
    <td bgcolor="#D5D5D5"><div align="center"><strong>Unit Price</strong></div></td>
    <td height="23" bgcolor="#D5D5D5"><div align="center"><strong>Price</strong></div></td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5"><span class="Partext1">
      <?php  echo $row['Paidid']?>
    </span></td>
    <td bgcolor="#F5F5F5">
      <span class="bodyp">
    <?php  echo $row['Pplan']?>
    Membership for 
    <?php  echo $row['Pplanduration']?>
    days</span></td>
    <td bgcolor="#F5F5F5"><div align="center">1</div></td>
    <td bgcolor="#F5F5F5"><div align="center"><span class="Partext1">
      Rs.<?php  echo $row['Pamount']?>
    </span></div></td>
    <td bgcolor="#F5F5F5"><div align="center"><span class="Partext1">
      Rs.<?php  echo $row['Pamount']?>
    </span></div></td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
    <td bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#ECE9D8">&nbsp;</td>
    <td bgcolor="#ECE9D8">&nbsp;</td>
    <td bgcolor="#ECE9D8">&nbsp;</td>
    <td bgcolor="#ECE9D8"><div align="right"><strong>Total</strong></div></td>
    <td bgcolor="#ECE9D8"><div align="center"><span class="Partext1">
      Rs.<?php  echo $row['Pamount']?>
    </span></div></td>
  </tr>
</table>
<div align="center"><br />
  <table width="97%" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><div align="center">
<FORM>
<INPUT TYPE="button" class="Alert" onClick="window.print()" value="Print">
</FORM>  
</div></td>
    </tr>
  </table>
  <br />
  <? } ?>
</div>
</body>
</html>
