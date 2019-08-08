<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 
$strid=$_SESSION['username']; 
$memchk = mysql_query("SELECT *, MatriID,Name,date_format(MemshipExpiryDate,'%d-%m-%Y') as memexpdate FROM register where MatriID='$strid' ");
$StrPlan=$_GET['plan'];
$result = mysql_query("SELECT * from membershipplan where plandisplayname = '$StrPlan' ");
?>
<?
function createRandomPassword() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }

    return $pass;

}
//$stremail = $_GET['emid'];
$password = createRandomPassword();
?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?></TITLE>
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
<TD width="180" height="303" valign="top" bgcolor="#e3edf6">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp; <span class="bodysg">Continue Pay... </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><div align="center"> <br>
              <?php 
$StrPlan=$_GET['plan'];
if ($StrPlan == "PLATINUM")
{ ?>
              <table width="95%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" class="tborder">
                <?php  while($row = mysql_fetch_array($memchk)){ ?>
				<?php  while($rrow = mysql_fetch_array($result)){ ?>
                <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                  <td width="18" colspan="2" class="Partext1">
                      <table width="300" cellpadding="2" cellspacing="2">
                        <tr>
                          <td>Plan</td>
                          <td><?  echo $_GET['plan']  ?></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="on0" value="Name">
                            Name</td>
                          <td><input name="os0" type="text" value="<? echo $row['Name'] ?>" maxlength="60"></td>
                        </tr>
                        <tr>
                          <td>OrderID</td>
                          <td><? echo $password?></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="on1" value="ID">
                            ID</td>
                          <td><input name="os1" type="text" value="<? echo $row['MatriID'] ?>" maxlength="60"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><form action="https://www.ccavenue.com/shopzone/cc_details.jsp" method="post" >
            <input type="hidden" name="Order_Id" value="<? echo $password ?>">
            <input type="hidden" name="Amount" value="<? echo $rrow['planamount']; ?>">
            <input type="hidden" name="Merchant_Id" value="M_ziaul08_8686">
            <input type="hidden" name="billing_cust_name" value="<? echo $row['Name']; ?>"> 
            <input type="hidden" name="billing_cust_address" value=""> 
            <input type="hidden" name="billing_cust_country" value=""> 
            <input type="hidden" name="billing_cust_tel" value=""> 
            <input type="hidden" name="billing_cust_email" value=""> 
            <input type="hidden" name="billing_zip_code" value=""> 
            <input type="hidden" name="billing_cust_state" value=""> 
            <input type="hidden" name="billing_cust_city" value=""> 
            <input type="hidden" name="billing_cust_notes" value=""> 
            <input type="hidden" name="delivery_cust_name" value=""> 
            <input type="hidden" name="delivery_cust_address" value=""> 
            <input type="hidden" name="delivery_cust_tel" value=""> 
            <input type="hidden" name="delivery_zip_code" value=""> 
            <input type="hidden" name="delivery_cust_state" value=""> 
            <input type="hidden" name="delivery_cust_city" value=""> 
            <input type="image" src="submit.gif">
            </form></td>
                        </tr>
                      </table>
                    </td>
                </tr>
                <? } ?>
				<? } ?>
              </table>
        <? } ?>
		<?php 
$StrPlan=$_GET['plan'];
if ($StrPlan == "DIAMOND")
{ ?>
              <table width="95%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" class="tborder">
                <?php  while($row = mysql_fetch_array($memchk)){ ?>
				<?php  while($rrow = mysql_fetch_array($result)){ ?>
                <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                  <td width="18" colspan="2" class="Partext1">
                      <table width="300" cellpadding="2" cellspacing="2">
                        <tr>
                          <td>Plan</td>
                          <td><?  echo $_GET['plan']  ?></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="on0" value="Name">
                            Name</td>
                          <td><input name="os0" type="text" value="<? echo $row['Name'] ?>" maxlength="60"></td>
                        </tr>
                        <tr>
                          <td>OrderID</td>
                          <td><? echo $password?></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="on1" value="ID">
                            ID</td>
                          <td><input name="os1" type="text" value="<? echo $row['MatriID'] ?>" maxlength="60"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td> <form action="https://www.ccavenue.com/shopzone/cc_details.jsp" method="post" >
            <input type="hidden" name="Order_Id" value="<? echo $password ?>">
            <input type="hidden" name="Amount" value="<? echo $rrow['planamount']; ?>">
            <input type="hidden" name="Merchant_Id" value="M_ziaul08_8686">
            <input type="hidden" name="billing_cust_name" value="<? echo $row['Name']; ?>"> 
            <input type="hidden" name="billing_cust_address" value=""> 
            <input type="hidden" name="billing_cust_country" value=""> 
            <input type="hidden" name="billing_cust_tel" value=""> 
            <input type="hidden" name="billing_cust_email" value=""> 
            <input type="hidden" name="billing_zip_code" value=""> 
            <input type="hidden" name="billing_cust_state" value=""> 
            <input type="hidden" name="billing_cust_city" value=""> 
            <input type="hidden" name="billing_cust_notes" value=""> 
            <input type="hidden" name="delivery_cust_name" value=""> 
            <input type="hidden" name="delivery_cust_address" value=""> 
            <input type="hidden" name="delivery_cust_tel" value=""> 
            <input type="hidden" name="delivery_zip_code" value=""> 
            <input type="hidden" name="delivery_cust_state" value=""> 
            <input type="hidden" name="delivery_cust_city" value=""> 
            <input type="image" src="submit.gif">
            </form></td>
                        </tr>
                      </table>
                   </td>
                </tr>
                <? } ?>
				 <? } ?>
              </table>
        <? } ?>
		
              <?php 
$StrPlan=$_GET['plan'];
if ($StrPlan == "GOLDEN")
{ ?>
              <table width="95%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" class="tborder">
                <?php  while($row = mysql_fetch_array($memchk)){ ?>
				<?php  while($rrow = mysql_fetch_array($result)){ ?>
				                <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                  <td width="18" colspan="2" class="Partext1">
                      <table width="300" cellpadding="2" cellspacing="2">
                        <tr>
                          <td>Plan</td>
                          <td><?  echo $_GET['plan']  ?></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="on0" value="Name">
                            Name</td>
                          <td><input name="os0" type="text" value="<? echo $row['Name'] ?>" maxlength="60"></td>
                        </tr>
                        <tr>
                          <td>OrderID</td>
                          <td><? echo $password?></td>
                        </tr>
                        <tr>
                          <td><input type="hidden" name="on1" value="ID">
                            ID</td>
                          <td><input name="os1" type="text" value="<? echo $row['MatriID'] ?>" maxlength="60"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><form action="https://www.ccavenue.com/shopzone/cc_details.jsp" method="post" >
            <input type="hidden" name="Order_Id" value="<? echo $password ?>">
            <input type="hidden" name="Amount" value="<? echo $rrow['planamount']; ?>">
            <input type="hidden" name="Merchant_Id" value="M_ziaul08_8686">
            <input type="hidden" name="billing_cust_name" value="<? echo $row['Name']; ?>"> 
            <input type="hidden" name="billing_cust_address" value=""> 
            <input type="hidden" name="billing_cust_country" value=""> 
            <input type="hidden" name="billing_cust_tel" value=""> 
            <input type="hidden" name="billing_cust_email" value=""> 
            <input type="hidden" name="billing_zip_code" value=""> 
            <input type="hidden" name="billing_cust_state" value=""> 
            <input type="hidden" name="billing_cust_city" value=""> 
            <input type="hidden" name="billing_cust_notes" value=""> 
            <input type="hidden" name="delivery_cust_name" value=""> 
            <input type="hidden" name="delivery_cust_address" value=""> 
            <input type="hidden" name="delivery_cust_tel" value=""> 
            <input type="hidden" name="delivery_zip_code" value=""> 
            <input type="hidden" name="delivery_cust_state" value=""> 
            <input type="hidden" name="delivery_cust_city" value=""> 
            <input type="image" src="submit.gif">
            </form></td>
                        </tr>
                      </table>
                   </td>
                </tr>
                <? } ?>				
				<? } ?>
              </table>
        <? } ?>
              
              <br>
              <br>
      </div></td>
    </tr>
  </table>
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
