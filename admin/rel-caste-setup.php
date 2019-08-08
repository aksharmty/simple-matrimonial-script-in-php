<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
///////// Getting the Religon data from Mysql table for first list box//////////
$quer1=mysql_query("SELECT DISTINCT religion,religion_id FROM religion"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<script language="javascript">
function validate()
  {
  if (form1.Religion.selectedIndex == 0 )
		 {
			alert( "Please Select Religion" );
			form1.Religion.focus( );
			return false;
		}
		
 if (form1.Caste.value == "" )
		 {
			alert( "Caste Required." );
			form1.Caste.focus( );
			return false;
		}
	}

</script>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
      <tr>
        <td colspan="2"><?php include("adminheader.php");?></td>
      </tr>
      <tr>
        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>
        <td width="80%" valign="top"><table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><img src="images/icon26.gif" width="19" height="16" /> <span class="headertext">Religion-caste Master Setup <span class="paratext"></span> </span></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
          </tr>
          
          <tr>
            <td colspan="3" valign="top" class="HeadText1">
			<form id="form1" name="form1" method="post" action="rel-caste-setup-submit.php" onsubmit="return validate()">
              <table width="100%" border="0" cellpadding="3" cellspacing="3">
                <tr>
                  <td width="7">&nbsp;</td>
                  <td width="117"><strong class="paratext">Set Religion-Caste </strong></td>
                  <td width="248"><?php if($_GET['Action']=="Success"){
				  echo "<font color=red>";
				  echo "Caste Added Successful";
				  echo "</font>";
				  }
				  else if($_GET['Action']=="Exists"){
				  echo "<font color=red>";
				  echo "Caste Already Exists";
				  echo "</font>";
				  } ?>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Select Religion : </td>
                  <td class="Partext1"><?php 
//////////        Starting of religion drop downlist /////////
echo "
<select name='Religion' >
  <option selected='selected'>Select one</option>
  ";
while($noticia2 = mysql_fetch_array($quer1)) { 

echo "
  <option value='$noticia2[religion_id]'>$noticia2[religion]</option>
  "."<br />
  ";}

echo "
</select>
";
//////////////////  This will end the religion drop down list ///////////
?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Partext1">Enter Caste : </td>
                  <td class="Partext1"><input name="Caste" type="text" id="Caste" maxlength="50" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input name="Submit" type="submit" class="green-button" value="Submit" /></td>
                </tr>
              </table>
            </form></td>
            <td valign="top" class="HeadText1">
			
			<iframe bgcolor="red" frameborder=0 scrolling="no" width="250" height="170" marginheight=0 marginwidth=0 name=archive src="rel-caste-preview.php"></iframe>
			</td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
