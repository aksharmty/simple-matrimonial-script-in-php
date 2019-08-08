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
                  <div align="left" class="smalltextred"><a href="dbchk.php">Go Back </a></div>
              </div></td>
            </tr>
          </table>
		  
		  <br />
		  <DIV style="OVERFLOW: auto; width:600px; HEIGHT:500px">
          <table width="95%" border="0" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <td>
			  <?
include('../dbconnect.php');
$strquery = $_POST['txtquery'];
if (empty($strquery)) {
echo "Blank Submission";

}
else
{
        $select = mysql_query($strquery)
		or die ("You Entered... Invalid SQL Command.");
        $i = 0;
		
        echo "<table style='font-family: Verdana;font-size: 11px' cellpadding=2 cellspacing=0 border=1 bordercolor='#C8C8C8'>";
        echo "<tr bgcolor=#999999>";
        while($i < mysql_num_fields($select)){
            $column = mysql_fetch_field($select, $i);
            if($column->name != "id"){
                echo "<td><b>".$column->name."</b></td>";
            }
            $i++;
        }
        echo "</tr>";

        while($array = mysql_fetch_array($select)){
            echo "<tr>";
            foreach($array as $column => $value){
                if(!is_int($column) && $column != "id"){
                    echo "<td>$value</td>";
                }
            }
            ?>
               
                
            <? 
            echo "</tr>";
        }

        echo "</table>";
 }      
   ?>

			  
			  </td>
            </tr>
          </table>
		  </DIV>
          <p>&nbsp;</p>
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
