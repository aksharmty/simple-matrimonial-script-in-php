<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script>
<body onLoad="document.form1.txtusername.focus();">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td width="7%"><img src="images/admin-curve.gif" width="69" height="632" /></td>
    <td width="93%" valign="top"><table width="100%" height="500" border="0" cellpadding="3" cellspacing="3" id="inner">
      <tr>
        <td><div align="center">
            <?php 
					$StrAction=$_GET['Action'];
					if ($StrAction == "wrong")
					{
					echo "<span class=error>";
					echo "Wrong Username or Password";
					echo "</span>";
					}
					?>
            <br />
            <br />
          </div>
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="GreenBox">
              <tr>
                <form name="form1" id="form1" method="post" action="login_submit.php" onsubmit="return memloginvalidate()">
                  <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                      <tr>
                        <td colspan="3" class="smalltextgrey"><div align="center"><strong>Administrator Login Area </strong></div></td>
                      </tr>
                      <tr>
                        <td width="78"><strong class="Text1">Username</strong></td>
                        <td width="6">:</td>
                        <td width="294"><input name="txtusername" type="text" class="forminput" id="txtusername" maxlength="20" /></td>
                      </tr>
                      <tr>
                        <td><strong class="Text1">Password</strong></td>
                        <td>:</td>
                        <td><input name="txtpassword" type="password" class="forminput" id="txtpassword" maxlength="20" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input name="Submit" type="submit" class="green-button" value="Login" /></td>
                      </tr>
                  </table></td>
                </form>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
