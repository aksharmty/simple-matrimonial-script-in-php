<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY class="body">
<script language="javascript" type="text/javascript">

function validate()
  {
 
		if ( form.txtmsg.value == "" )
		 {
			alert( "Please enter Your Message." );
			form.txtmsg.focus( );
			return false;
		}
		
}
</script>
<script language="JavaScript">
<!--

function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->
//-->
</script>



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
<?php include("left.php");?></TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Send Personalised Message </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>
	  <?php 
	  if ($_SESSION['status'] != 'InActive' and $_SESSION['status'] != 'Active')
	  {
	  ?>
	  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>You can use this option to send your PERSONALIZED message to  Interested  member.</td>
        </tr>
        <tr>
          <td><form name="form" action="composemsg_submit.php" method="post" onSubmit="return validate()">
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Message To : <?php $strTo = $_POST['txtTo']; echo $strTo; ?>
                  <input name="txtTo" type="hidden" id="txtTo" value="<?php echo $strTo ?>"></td>
              </tr>
              <tr>
                <td><textarea name="txtmsg" cols="65" rows="12" wrap="physical" id="txtmsg"
onKeyDown="textCounter(document.form.txtmsg,document.form.remLen1,1000)" onKeyUp="textCounter(document.form.txtmsg,document.form.remLen1,1000)" runat="server"></textarea>
                    <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" readonly="readonly" />
                  Characters left </td>
              </tr>
              <tr>
                <td><div align="right">
                  <input name="Submit" type="image" value="Submit" src="pics/button-send.gif" />
                &nbsp;&nbsp;&nbsp;</div></td>
              </tr>
            </table>
          </form></td>
        </tr>
        
      </table>        
	  <? } else { ?>
	  <table width="70%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">Only Paid Members can send the Personalised message. </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
	 <? } ?>
	  
	  </td>
    </tr>
        </table>
        </td>
</tr>
  </table>
  </TD>
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
