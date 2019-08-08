<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>
<?
$strmatriid = $_GET['MatriID'];
?>

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
.style9 {color: #FF6600}
.style6 {font-size: 11px; }
-->
</style>
</head>
<body>


  <table width="570" height="400" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id=checkpass runat=server>
    
    <tr>
      <td valign="top"><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;<br>
</span>
        <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="39%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">View Protected photo </span></div></td>
            <td width="61%">&nbsp;</td>
          </tr>
        </table>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
          <tr>
            <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
                <tr>
                  <td>The Photo has been protected by the owner of this profile. Members are given the feature to protect their Photo from viewing by anyone. If the Photo is protected, then you need a Photo Password to view it. <br>
                    <br>
Contact the profile and make a request for the Photo Password.<br>
<br>
<span class="style9">If you have already obtained the Photo Password then enter the Password below and click on the 'View' button.</span></td>
                </tr>
                <tr>
                  <td><div align="center"><br>
				      <span class="biggertext"><strong>
				  <? $straction = $_GET['action'];
				  if ($straction == "wrong")  { ?>
				  You have entered Wrong Photo Password
				  
				  <? } ?>
			          </strong></span><br>
		            <br>
				  
                    <br>
                  </div></td>
                </tr>
                <tr>
                  <td><div align="center">
				  <form action="viewprotectphotoform_submit.php" method="post">
                      <table width="374" border="0" cellpadding="2" cellspacing="2" class="submenubox">
                        <tr>
                          <td height="19" colspan="2" bgcolor="#F3F7D2"><strong>View photo <em><span class="style6">
                            <input name="txthidid" type="hidden" id="txthidid" value="<? echo $strmatriid ?>" />
                          </span></em></strong></td>
                        </tr>
                        
                        <tr>
                          <td width="121">Enter Password : </td>
                          <td width="237"><input name="txtppwd" type="text" class="forminput" id="txtppwd" maxlength="50"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><span class="h3blue style2">
                            <input name="Submit" type="image" value="Submit" src="pics/viewphoto.gif">
                          </span></td>
                        </tr>
                      </table>
				  </form> 	  
                  </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center">Note : <strong class="Alert">If you have not password <a href="photopasswordrequest.php?MatriID=<? echo $strmatriid; ?>">click here</a> to Request Photo Password.</strong></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
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

</body>
</html>
