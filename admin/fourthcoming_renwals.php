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

$sql = mysql_query("SELECT MatriID, Status,date_format(Memshipexpirydate,'%d-%M-%Y') as Memshipexpirydate, DATEDIFF( CURRENT_DATE, Memshipexpirydate ) AS expdays
FROM register
WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) <1
LIMIT 0 , 30 "); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fourth Coming Renewals</title>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var win = null;
function newWindow(mypage,myname,w,h,features) {
  var winl = (screen.width-w)/2;
  var wint = (screen.height-h)/2;
  if (winl < 0) winl = 0;
  if (wint < 0) wint = 0;
  var settings = 'height=' + h + ',';
  settings += 'width=' + w + ',';
  settings += 'top=' + wint + ',';
  settings += 'left=' + winl + ',';
  settings += features;
  win = window.open(mypage,myname,settings);
  win.window.focus();
}
//  End -->
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
		
		
		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon16.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">RENEW - Fourthcoming members </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred"> Below is a  list of profiles that fourthcoming expired members. You can directly select &nbsp;ID  below to renew membership.<br />
                      You can click RENEW Now Link to do renewal of membership.</div>
                  </div></td>
                </tr>
              </table>
              <br />
              <br /></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">
			
			
			<table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">
              <tr>
                <td>
				<?php
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) <1 "),0); 
	
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
             
              <table width="600" border="0" align="center" cellpadding="2" cellspacing="0" class="blackbox">
                
                <tr>
                  <td width="90" height="20" bgcolor="#ECECEC" class="paratext">Matri ID </td>
				  <td width="111" bgcolor="#ECECEC" class="paratext">Status </td>
                  <td width="199" bgcolor="#ECECEC" class="paratext">Membership will expire on </td>
                  <td width="93" bgcolor="#ECECEC" class="paratext">Expiry Days</td>
                  <td width="85" bgcolor="#ECECEC" class="paratext">Action</td>
                </tr>
                <? 
         
        
        
          while($row=mysql_fetch_array($sql)) { 
		 
          ?>
                <tr>
                  <td height="20"><a href="viewprofile.php?ID=<? echo $row['MatriID']; ?>" target="_blank"><? echo $row['MatriID']; ?></a></td>
				  <td height="20"><? echo $row['Status']; ?></td>
                  <td height="20"><? echo $row['Memshipexpirydate']; ?></td>
                  <td height="20"><? echo $row['expdays']; ?></td>
                  <td height="20"> <a href="#" onClick="newWindow('renew_paid_form.php?id=<?php  echo $row['MatriID']?>','','400','400')">Renew Now </a></td>
				  
                </tr>
                <? } ?>
              </table>
              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">
                <tr>
                  <td>&nbsp;</td>
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
