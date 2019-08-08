<?php include("config.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST")
{

$strname = $_POST['name'];
$strsitename = $info['Webname'];
$to = $info['ToEmail'];
$from = $_POST['email'];
$subject = "Feedback from $strsitename";
$strmessage = $_POST['comments'];
$message = "
<table width=573 border=0 align=center cellpadding=2 cellspacing=2>
  <tr>
    <td width=562 valign=top class=style3>Dear Sir/madam </td>
  </tr>
  
  <tr>
    <td valign=top class=style3><p><br>
      $strmessage</p>
      <p>Warm regards<br>
        $strname<br>
      </p></td>
  </tr>
</table>
		";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:'.$from."\r\n"
		.'Reply-To: $to'."\r\n";
		$success = mail($to,$subject, $message, $headers); 
		 print "<script>";
     		 print "self.location='logoutconfirm.php?action=success';"; 
     		 print "</script>";
		
 	
}
?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE><?php echo $info['Title']; ?> </TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+=' '+nm+' must contain valid e-mail.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += ''+nm+' is required.\n'; }
  } if (errors) alert('Please Correct the Following:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
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
<TD width="180" height="303" valign="top" bgcolor="#e3edf6">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Logged Out </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" class="viewtextsmall" ><div align="left"></div></td>
        </tr>
      <tr>
        <td colspan="2" class="viewtextsmall" ><strong>&nbsp;&nbsp;You have successfully logged out... </strong></td>
        </tr>
      
      <tr>
        <td height="160" valign="top" ><br />
            <table width="97%" border="0" cellpadding="4" cellspacing="2">
              <tr>
                <td colspan="2" ><div align="left">Dear Member, <br />
                  You have logged out from <?php echo $info['Webname']; ?>  Thank you for using our services. </div></td>
              </tr>
          </table></td>
        <td width="57%" valign="top" ><div align="center"><br />
            <?php 
				$straction = $_GET['action'];
				if ($straction == "success")
				{
				echo "<div class='Alert' style='width:100%;'>Feedback has been Sent Success:\n<ul>";
				echo "</ul></div>"; 
				} 
				else if ($straction == "error")
				{
				echo "<div class='Alert' style='width:100%;'>Error has been occured\n<ul>";
				echo "<li>Invalid Email.</li>\n";
				echo "</ul></div>"; 
				} 
				?>
        </div>
		 <form action="<?=$_SERVER['PHP_SELF']?>" method="post" onSubmit="MM_validateForm('name','','R','email','','RisEmail','comments','','R');return document.MM_returnValue">
            <table width="90%" border="0" align="center" cellpadding="2" cellspacing="0" id="Table13">
              <tbody>
                <tr>
                  <td><div align="left"><span class="smallbold3"><strong>Send your Feedback Here: </strong></span></div></td>
                </tr>
                <tr>
                  <td>Your Name:<br>
                    <input id="name" name="name" runat="server"/>                  </td>
                </tr>
                <tr>
                  <td>Your Email:<br>
                    <input id="email" name="email" runat="server"/>                  </td>
                </tr>
                <tr>
                  <td><p>
                      <textarea id="comments" name="comments" rows="4" cols="30">Share your opinion, comments and criticism</textarea>
                  </p></td>
                </tr>
                <tr>
                  <td>
                      <div align="left">
                        <input name="Submit" type="submit" class="bodysg"  id="btnSubmit" value="Send Feedback" onserverclick="Button_Click"  runat="server" />
                          </div></td>
                </tr>
              </tbody>
          </table>
            </form>
			<br>
			</td>
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
