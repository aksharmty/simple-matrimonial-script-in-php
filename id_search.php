<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
<script language="javascript">
function validate()
  {
   
  
 if (form.txtID.value == "" )
		 {
			alert( "Matri Id Required." );
			form.txtID.focus( );
			return false;
		}
	}

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
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Matrimony ID Search </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>

	<form action="id_search_submit.php"  method="post" name="form" id="form" onSubmit="return validate()">
	<table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="2"><strong>Search for a specific profile</strong> by entering the Matrimony ID</td>
      </tr>
      
      <tr>
        <td width="17%">&nbsp;</td>
        <td width="83%">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style1">*</span> Matrimony ID </td>
        <td>
              
        </span>
        <input name="txtID" type="text" class="forminput" id="txtID" maxlength="50"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></span>
          <input name="Submit" type="image" value="Submit" src="pics/submit_but.gif"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Matrimony ID is the identity of the profile which is provided by the user at the time of creating the profile. Each profile ID is unique; Please ensure &amp; enter the correct Matrimony ID to get the specific result.</div></td>
      </tr>
    </table>
	</form>

	</td>
  </tr>
</table></TD>
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
