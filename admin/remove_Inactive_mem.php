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

$sql = mysql_query("SELECT * FROM register where Status='InActive' LIMIT $from, $max_results"); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Remove InActive Members</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<script language="javascript">
function goDel() 
{ 
    var recslen =  document.forms[0].length; 
    var checkboxes="" 
    for(i=1;i<recslen;i++) 
    { 
        if(document.forms[0].elements[i].checked==true) 
        checkboxes+= " " + document.forms[0].elements[i].name 
    } 
    
    if(checkboxes.length>0) 
    { 
        var con=confirm("Are you sure you want to delete. \n\n Once Delete you can not retrieve again.\n\n Backup your Database first then do delete."); 
        if(con) 
        { 
            document.forms[0].action="approve_mem_to_del_submit.php?recsno="+checkboxes 
            document.forms[0].submit() 
        } 
    } 
    else 
    { 
        alert("No profile is selected.") 
    } 
} 

function selectall() 
{ 
//        var formname=document.getElementById(formname); 

        var recslen = document.forms[0].length; 
        
        if(document.forms[0].topcheckbox.checked==true) 
            { 
                for(i=1;i<recslen;i++) { 
                document.forms[0].elements[i].checked=true; 
                } 
    } 
    else 
    { 
        for(i=1;i<recslen;i++) 
        document.forms[0].elements[i].checked=false; 
    } 
} 
</script>

<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
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
        <td width="80%" valign="top">
		
		<form action="" method="post" name="" id="">
		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon27.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">Remove InActive Members </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred"> Below is the list of all InActive Members.&nbsp; You can click on the  ID to view the register details. and you can clicking Delete link to Permanently remove the members from database. </div>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Status ='InActive' "),0); 
	
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
                  <td width="110" bgcolor="#ECECEC"><input name="topcheckbox" type="checkbox" class="check" id="topcheckbox" onclick="selectall();" value="ON" />
                    Select All </td>
                  <td colspan="3" align="center" bgcolor="#ECECEC">&nbsp;</td>
                </tr>
                <tr>
                  <td><strong><a href="javascript:goDel()">Delete</a></strong></td>
                  <td width="104" class="paratext">MatriID</td>
                  <td width="125" class="paratext">Profile</td>
                  <td width="243" class="paratext">Status</td>
                </tr>
                <? 
         
        
        
          while($row=mysql_fetch_array($sql)) { 
		 
          ?>
                <tr>
                  <td><input name="<? echo $row['MatriID']; ?>" type="checkbox" class="check" /></td>
                  <td><? echo $row['ID']; ?></td>
                  <td><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>" target="_blank">View</a></td>
                  <td><? echo $row['Status']; ?></td>
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
