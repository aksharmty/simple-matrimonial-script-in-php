<?php include('protect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">
      <tr>
        <td colspan="2"><?php include("adminheader.php");?></td>
      </tr>
      <tr>
        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>
        <td width="80%" valign="top"><table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td colspan="3" valign="middle">&nbsp;</td>
            <td valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" valign="middle"><img src="images/icon12.gif" width="19" height="16" /></td>
            <td width="98%" valign="middle"><span class="headertext">DATABASE CHECK UP </span></td>
          </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
          </tr>
        </table>
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center" class="smalltextgrey">
                  <div align="left" class="smalltextred"> Below is the<span class="verdana"> option for the Database Checkup by entering the mysql query in the text box you can get the reports directly from database.</span></div>
              </div></td>
            </tr>
          </table>
		  
		  <?
include('../dbconnect.php');
    # this is processed when the form is submitted
    # back on to this page (POST METHOD)
  if ($_SERVER['REQUEST_METHOD'] == "POST")
  { 

        # double-up apostrophes
        //$description = str_replace("'","''",$description);
       // $sitename = str_replace("'","''",$sitename);
		//Define Posting values
		$strquery = $_POST['txtquery'];
		
        # setup SQL statement
        $SQL = "($strquery)";
       // $SQL = $SQL . " (Name,DOB,Address,Email,Phone) VALUES ";
       // $SQL = $SQL . " ('$StrName','$StrDOB','$StrAddress','$StrEmail','$StrPhone') ";
		
	
		
		 #execute SQL statement
        $result = mysql_query($SQL);

        # check for error
        if (!$result) { echo("ERROR: " . mysql_error() . "\n$SQL\n");    }

        echo ("<P><B>New Link Added</B></P>\n");

    }

?>

		  
          <br />
          <table width="95%" border="0" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <td><form id="form1" name="form1" method="post" action="sql.php">
                <table width="95%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>TYPE YOUR MYSQL QUERY: </td>
                  </tr>
                  <tr>
                    <td><textarea name="txtquery" cols="90" rows="10" id="txtquery"></textarea></td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="Submit" value="Execute" /></td>
                  </tr>
                </table>
              </form>
              </td>
            </tr>
          </table>
          <p>&nbsp;</p>
<?   mysql_close($con); ?>
		  </td>
      </tr>
      <tr>
        <td colspan="2"><?php include("adminfooter.php");?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
