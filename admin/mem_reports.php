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
$max_results = 25; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);  

// Perform MySQL query on only the current page number's results 
$status = $_GET['status'];
if ($status =='Paid')
{
$sql = mysql_query("SELECT * FROM register where status <> 'InActive' and Status <> 'Active' LIMIT $from, $max_results "); 
}
else if ($status =='Active')
{
$sql = mysql_query("SELECT * FROM register where Status ='Active' LIMIT $from, $max_results "); 
}
else if ($status =='InActive')
{
$sql = mysql_query("SELECT * FROM register where Status ='InActive' LIMIT $from, $max_results "); 
}
else if ($status =='Featured')
{
$sql = mysql_query("SELECT * FROM register where Status ='Featured' LIMIT $from, $max_results "); 
}
else if ($status =='All')
{
$sql = mysql_query("SELECT * FROM register LIMIT $from, $max_results ORDER BY ID DESC"); 
}
//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Reports</title>
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
        <td width="80%">
		<form action="approve_inactive_to_active_submit.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">
		<table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="3%">&nbsp;</td>
                <td width="97%" class="headertext">&nbsp;</td>
              </tr>
            </table>
              <br />
              <br />
              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">
                <tr>
                  <td><div align="center" class="headertext">
				  <?php $StrAction=$_GET['status'];
					if ($StrAction == "InActive")
					{
					echo " <img src=images/icon7.gif width=19 height=16 /> InActive Members";
					}
					else if ($StrAction == "Active")
					{
					echo " <img src=images/icon5.gif width=19 height=16 /> Active Members";
					}
					else if ($StrAction == "Paid")
					{
					echo " <img src=images/icon5.gif width=19 height=16 /> Paid Members";
					}
					else if ($StrAction == "Featured")
					{
					echo " <img src=images/icon5.gif width=19 height=16 /> Featured Members";
					}
					else if ($StrAction == "All")
					{
					echo " <img src=images/icon5.gif width=19 height=16 /> All Members";
					}
					?>
					</div></td>
                </tr>
              </table>
              <br /></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1"><table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">
              <tr>
                <td><?php
// Figure out the total number of results in DB: 



if ($status =='Paid')
{
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Status <> 'InActive' and Status <> 'Active' "),0);  
}
else if ($status =='Active')
{
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Status = 'Active' "),0);  
}
else if ($status =='InActive')
{
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Status = 'InActive' "),0); 
}
else if ($status =='Featured')
{
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Status = 'Featured' "),0); 
}
else if ($status =='All')
{
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register  "),0); 
}


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
              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
                <tr>
                  <td></td>
                </tr>
              </table>
             
              <table width="98%" border="0" align="center" cellpadding="4" cellspacing="0">
			 
                <tr>
                  <td width="4%" bgcolor="#FFFFCC" class="HeadText1">&nbsp;</td>
                  <td width="8%" bgcolor="#FFFFCC" class="HeadText1"><strong>ID</strong></td>
                  <td width="17%" bgcolor="#FFFFCC" class="HeadText1"><strong>Email</strong></td>
                  <td width="17%" bgcolor="#FFFFCC" class="HeadText1"><strong>Name</strong></td>
                  <td width="10%" bgcolor="#FFFFCC" class="HeadText1"><strong>Gender</strong></td>
                  <td width="15%" bgcolor="#FFFFCC" class="HeadText1"><strong>Reg On</strong></td>
                  <td width="13%" bgcolor="#FFFFCC" class="HeadText1"><strong>Status</strong></td>
                  <td width="16%" bgcolor="#FFFFCC" class="HeadText1"><strong>Full View </strong></td>
                  </tr>
				 <?php while($row = mysql_fetch_array($sql)){ ?>
                <TR bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                  <td class="smalltextgrey">&nbsp;</td>

                  <td class="smalltextgrey"><?php echo $row['MatriID']?></td>
                  <td class="smalltextgrey"><?php echo $row['ConfirmEmail']?></td>
                  <td class="smalltextgrey"><?php echo $row['Name']?></td>
                  <td class="smalltextgrey"><?php echo $row['Gender']?></td>
                  <td class="smalltextgrey"><?php echo $row['Regdate']?></td>
                  <td class="smalltextgrey"><?php echo $row['Status']?></td>
                  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID']?>">View</a></td>
                  </tr>
                <tr>
                  <td height="2" colspan="8" background="images/dot.gif" class="smalltextgrey"></td>
                  </tr>
				<?php }  ?>
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
          
        </table>
		</form>
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
