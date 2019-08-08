<?php include("config.php"); ?>
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
				
				// Usage
				$password = createRandomPassword();
				//echo $password;
?>
<?php
session_start();
include('dbconnect.php');
$stremail= strip_tags($_POST['email']);
			 

$sql="SELECT MatriID,ConfirmEmail,ConfirmPassword FROM register  WHERE ConfirmEmail='$stremail' ";
$result=mysql_query($sql);
$count=@mysql_num_rows($result);
if($count==1){

 


				
				//echo "Your random password is: $password";

		$setnewpassword = md5($password);
			
		$update1 = mysql_query("UPDATE register SET ConfirmPassword='$setnewpassword' WHERE ConfirmEmail = '$stremail' ")
		or die("Could not update data because ".mysql_error());
		
		/////////////////// SEND FORGOT PASSWORD TO MEMBER EMAIL //////////////////////////////////////////////	
		//$strmememail = $row['ConfirmEmail'];
		$reccontrol = mysql_query("SELECT * FROM register where ConfirmEmail = '$stremail' ");
		while($row = mysql_fetch_array($reccontrol))
		{
		
		$strmemname = $row['Name'];
		$strmatid = $row['MatriId'];
		$strsitename = $info['Webname'];
		$logo = $info['Weblogopath'];
		
		
		$to =  $row['ConfirmEmail'];
		$from = $info['ContactEmail'];
		$subject = "$strmemname ($strmatid) - Your forgot password at $strsitename.";
		
		$message = "
		<html>
		<style type=text/css>
		<!--
		.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
		.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
		-->
		</style>
		<body>		
		<table width=600 border=0 cellspacing=0 cellpadding=0>
		<tr>
		<td background=$strsitename/pics/email_top.gif width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>
		<tr>
		<td><img src=$logo border=0></td>
		</tr>
		</table></td>
		</tr>
		<tr>
		<td background=$strsitename/pics/email_middle.gif><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
		<tr>
		<td width=562 valign=top class=style3>Dear $strmemname </td>
		</tr>
		<tr>
		<td valign=top class=style3>Hi, we have reset your password at $strsitename
		<br>
		New Password : $password
		</td>
		</tr>
		<tr>
		<td valign=top class=style3> <br>
		Kindly logon to $strsitename and change your password. </td>
		
		</tr>
		<tr>
		<td valign=top class=style2>You are receiving this mail as a registered member of $strsitename. This is a computer auto generated message. Please do not Reply.
		
		</td>
		</tr>
		</table></td>
		</tr>
		<tr>
		<td><img src=pics/email_bottom.gif width=600 height=18></td>
		</tr>
		</table>
		</body>
		</html>
		";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:'.$from."\r\n"
		.'Reply-To: $to'."\r\n";
		$success = mail($to,$subject, $message, $headers); 
		}	
		


}
else 
{
 print "<script>";
     print " self.location='forgotpassword.php?Action=err';"; // Comment this line if you don't want to redirect
     print "</script>";
}
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
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Forgot Password  </strong></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Your Password has been Sent to your Email.<br>
          <br>
          Kindly check your Email and note your new Password.
</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
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
