
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css">
<title>Photo Protect Form</title>
<script language="javascript">
function validate()
  {
 if (form.txtppwd.value == "" )
		 {
			alert( "Password Required." );
			form.txtppwd.focus( );
			return false;
		}
		
		if ( form.txtppwd.value.length < 4 )
		{
			alert( "Password must be atleast 4 characters." );	
			form.txtppwd.focus( );
			return false;
		}
		
		if ( form.txtppwd.value.length > 20 )
		{
			alert( "Password must be maximum 20 characters." );	
			form.txtppwd.focus( );
			return false;
		}
		
		
	}

</script>
<style type="text/css">
<!--
.style2 {font-weight: bold}
.style3 {color: #FF0033; font-weight: bold; }
.style8 {color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<form action="photoprotect_submit.php" method="post" name="form" id="form"  onSubmit="return validate()">
  <table width="570" height="400" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id=checkpass runat=server>
    
    <tr>
      <td valign="top"><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;<br>
</span>
        <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="39%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Protect my Photo </span></div></td>
            <td width="61%">&nbsp;</td>
          </tr>
        </table>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
          <tr>
            <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
                <tr>
                  <td>If the photo is protected, then other members can not visible your photo. If anyone interested to view your photo, then they will send a request photo password to you. <br>
                      <br>
                    If you have  obtained the Photo Password request then you can 'Accept/Decline' the Request. </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center">
                      <table width="374" border="0" cellpadding="2" cellspacing="2" class="submenubox">
                        <tr>
                          <td height="19" colspan="2" bgcolor="#F3F7D2"><strong>&nbsp;&nbsp;Set/Reset Password to Protect your Photo</strong></td>
                        </tr>
                        <tr>
                          <td height="25" colspan="2" valign="middle"><div align="center" class="textnormal style8">
                              <div align="center">
                                <div align="center"> </span></div>
                              </div>
                          </div></td>
                        </tr>
                        <tr>
                          <td width="121">Enter Password : </td>
                          <td width="237"><input name="txtppwd" type="text" class="forminput" id="txtppwd" maxlength="50"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><span class="h3blue style2">
                            <input name="Submit" type="image" value="Submit" src="pics/submit_but.gif">
                          </span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center"><a href="javascript:window.close()">X Close Window</a></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          </tr>
        </table>
      <br></td>
    </tr>
  </table>
</form>
</body>
</html>
