<?php include('protect.php'); ?>
<? 

// Database Connection 
include '../dbconnect.php'; 

// If current page number, use it 
// if not, set one! 

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 5; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);  

// Perform MySQL query on only the current page number's results 

$sql = mysql_query("SELECT matriid,confirmemail,name,gender,regdate,state,country,status,Logincount,date_format(Lastlogin,'%d-%m-%Y') as lastlogindate FROM register  LIMIT $from, $max_results "); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<style type="text/css">
<!--
.alt1 {	BACKGROUND: #f9f9f9; COLOR: #000000
}
.alt2 {	BACKGROUND: #f0f0f0; COLOR: #000000
}
.tborder {	BORDER-RIGHT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BACKGROUND: #ffffff; BORDER-LEFT: #cccccc 1px solid; COLOR: #000000; BORDER-BOTTOM: #cccccc 1px solid
}
.thead {	BACKGROUND: url(images/gradients/gradient_thead.gif) #84a443 repeat-x left top; FONT: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif; COLOR: #ffffff
}
-->
</style>
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
        <td width="80%"><table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">
              <tr>
                <td><?php
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where status ='InActive' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);
?>
                    <span class="Partext1"><?php echo " " . $total_results ." Profiles Found" ?></span></td>
                <td><div align="right"><span class="Partext1">
                    <?php

//Paging info
echo "Page ";


for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
        echo "$i "; 
        } else { 
            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 
    } 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a>"; 
} 
?>
                </span></div></td>
              </tr>
            </table>
            <table class="tborder" cellspacing="1" cellpadding="6" width="98%" align="center" 
border="0">
              <thead>
              </thead>
              <tbody id="collapseobj_similarthreads">
                <tr class="thead" align="middle">
                  <td class="thead" width="34%">Name</td>
                  <td class="thead" nowrap="nowrap" width="20%"><div align="center">State/Country</div></td>
                  <td class="thead" width="14%"><div align="center">Status</div></td>
                  <td class="thead" width="14%"><div align="center">Last Login</div></td>
                  <td class="thead" width="18%"><div align="right">Total Login </div></td>
                </tr>
				 <?php while($row = mysql_fetch_array($sql)){ ?>
                <tr>
                  <td class="alt1" align="left"><span class="smalltextgrey"><?php echo $row['name']?></span></td>
                  <td class="alt2" nowrap="nowrap"><span class="smalltextgrey"><?php echo $row['State']?>,<?php echo $row['Country']?></span></td>
                  <td class="alt1" nowrap="nowrap"><span class="smalltextgrey"><?php echo $row['Status']?></span></td>
                  <td class="alt2" align="middle"><span class="smalltextgrey"><?php echo $row['lastlogindate']?></span></td>
                  <td class="alt1" align="right"><span class="smalltextgrey"><?php echo $row['Logincount']?></span></td>
                </tr>
				<?php }  ?>
              </tbody>
            </table>
              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
                <tr>
                  <td><div align="right"><span class="Partext1">
                      <?php

//Paging info
echo "Page ";


for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
        echo "$i "; 
        } else { 
            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 
    } 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a>"; 
} 
?>
                  </span></div></td>
                </tr>
              </table></td>
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
