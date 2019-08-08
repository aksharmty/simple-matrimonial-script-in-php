<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<? 
// Database Connection 
include 'dbconnect.php'; 


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
$strid = $_SESSION['matriid'];
$sql = mysql_query("Select * from expressinterest where eisender_accept='Decline' and eireceiver='$strid' order by id desc LIMIT $from, $max_results ");

?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

</HEAD>
<BODY class="body">



<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Express Interest Received </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>Listed Below are members who are <strong>Declined</strong>.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        
      </table>
        <table width="97%" border="0" align="center" cellpadding="3" cellspacing="3">
          <tr>
            <?php
// Figure out the total number of results in DB: 
//$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0); 
//$strid = $_SESSION['matriid'];
$total_results =  mysql_result(mysql_query("SELECT COUNT(*) as Num FROM expressinterest where eisender_accept='Decline' and eireceiver='$strid' "),0); 

	
	if($total_results ==0)
	{
	print "No results";
   
	}
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
            <td><div align="left"> <span class="Partext1"></span> <?php echo " " . $total_results ." Message Found" ?> </div></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
			<?php while($row = mysql_fetch_array($sql))
			{ ?>
			Declined From: <a href='memprofile.php?id=<?php echo $row['eireceiver']?>&action=ei' class="redheading2" target="_blank">
			<?php echo $row['eisender']?></a>
			<br>
			Receive Message : <?php echo $row['eimsg']?>
			<br>
			Received On : <?php echo $row['eisentdt']?>
			<br>
			Status :  <?php echo $row['eirec_accept']?><br>
			
			<hr size="1">
			
			<?
			}
			?>			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
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
  <p>&nbsp;</p></TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
