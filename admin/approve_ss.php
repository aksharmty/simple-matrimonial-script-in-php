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

$sql = mysql_query("SELECT * FROM successstory where approve='No' LIMIT $from, $max_results"); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Approve Success Stories</title>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
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
        <td width="80%" valign="top">
		<form action="approve_ss_to_yes_submit.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">
		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon13.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">Approve Success Stories <span class="paratext">(Waiting for Approval)</span> </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred"> Below is the list of all InActive success stories waiting approval. You can click on the profile ID to view the success story details.You can   convert the approval   by clicking approve link </div>
                  </div></td>
                </tr>
              </table>
              <br />
              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">
                <tr>
                  <td><div align="center" class="BlueBoxheader"><?php $StrAction=$_GET['Action'];
					if ($StrAction == "not check")
					{
					
					echo "You must Check atleast One ID";
					
					}
					?>
					</div></td>
                </tr>
              </table>
              <br /></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">
			
			
			<table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">
              <tr>
                <td>
				<?php
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM successstory where approve ='No' "),0); 
	
	if($total_results ==0)
	/*
	{
	print "<script>";
     print "self.location='noresults.php';"; // Comment this line if you don't want to redirect
     print "</script>";
	}
	*/
	echo "";
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
                  <span class="Partext1"><?php echo " " . $total_results ." Success Stories Found" ?></span></td>
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
             
              <table width="98%" border="0" align="center" cellpadding="4" cellspacing="0" class="blackbox">
			 
                <tr>
                  <td width="4%" bgcolor="#ECECEC" class="HeadText1">&nbsp;</td>
                  <td width="10%" bgcolor="#ECECEC" class="paratext">ID</td>
                  <td width="22%" bgcolor="#ECECEC" class="paratext">Bride Name </td>
                  <td width="19%" bgcolor="#ECECEC" class="paratext">Groom Name </td>
                  <td width="12%" bgcolor="#ECECEC" class="paratext">Wedding on </td>
                  <td width="11%" bgcolor="#ECECEC" class="paratext">Status</td>
                  <td width="10%" bgcolor="#ECECEC" class="paratext">View</td>
                  <td width="12%" bgcolor="#ECECEC" class="HeadText1"><span class="paratext">Check Approve </span></td>
                </tr>
				 <?php while($row = mysql_fetch_array($sql)){ ?>
                <TR bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                  <td class="smalltextgrey"><img src="images/icon13.gif" width="19" height="16" /></td>

                  <td class="smalltextgrey"><a href="#" onclick="MM_openBrWindow('viewss.php?id=<?php echo $row['ID'] ?>&amp;Action=approve','ss','resizable=yes,scrollbars=yes,width=450,height=500')"><?php echo $row['ID'] ?></a></td>
                  <td class="smalltextgrey"><?php echo $row['bridename']?> (<?php echo $row['brideid']?>) </td>
                  <td class="smalltextgrey"><?php echo $row['groomname']?>(<?php echo $row['groomid']?>)</td>
                  <td class="smalltextgrey"><span class="smalltextred"><?php echo $row['marriagedate']?></span></td>
                  <td class="smalltextred"><?php echo $row['approve']?></td>
                  <td class="smalltextgrey"><a href="#" onclick="MM_openBrWindow('viewss.php?id=<?php echo $row['ID'] ?>','ss','scrollbars=yes,resizable=yes,width=450,height=500')">View</a></td>
                  <td class="smalltextgrey"> <div align="center">
                    <input name="chkapprove[]" type="checkbox" id="chkapprove[]" value="<?php echo $row['ID']?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="2" colspan="8" background="images/dot.gif" class="smalltextgrey"></td>
                  </tr>
				<?php }  ?>
              </table>
			  
              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
                <tr>
                  <td><div align="right">
                    <input name="Submit" type="submit" class="green-button" value="Approve" />
                  </div></td>
                </tr>
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
              </table>
			  
			  
			  </td>
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
