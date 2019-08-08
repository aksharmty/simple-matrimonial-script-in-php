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
$max_results = 10; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);  
$strid = $_SESSION['matriid'];
$sql = mysql_query("Select * from photoprotectrequesters  where ReceiverID = '$strid' and ReceiverResponse = 'Pending' order by preqid desc LIMIT $from, $max_results ");
 
?>


<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #CC0000}
.style2 {	color: #FF0000;
	font-weight: bold;
}
-->
</style>
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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Photo Password Requesters </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>Listed Below are <strong>Photo Password Requesters  </strong>messages. Here you can accept or decline. Once accept your Photo password will send to the requesters. </td>
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
$strid2 = $_SESSION['matriid'];
$total_results =  mysql_result(mysql_query("SELECT COUNT(*) as Num FROM photoprotectrequesters  where ReceiverID = '$strid2' and ReceiverResponse = 'Pending' "),0); 

	
	if($total_results ==0)
	{
	print "No results";
   
	}
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
            <td><div align="left"> <span class="Partext1"></span> <?php echo " " . $total_results ." Request Message Found" ?> </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
             
            </div></td>
            </tr>
        </table>
		<form action="" method="post" name="" id="">
        <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table  height="0" border="0" cellpadding="0" cellspacing="0" width="530">
              <tr>
                <td width="60"><span class="bodysg">From</span></td>
                <td width="214"><span class="bodysg">Request Messages</span></td>
                <td width="75"><div align="left"><span class="bodysg">Received</span> </div></td>
                <td width="95"><span class="style2">Action</span></td>
              </tr>
            </table>
              <?php while($row = mysql_fetch_array($sql))
			{ ?>
              <table width="530"  height="0" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="60"><? echo $row['RequesterID']?></td>
                  <td width="214"><? echo $row['PPReqmsg']?></td>
                  <td width="75"><? echo $row['ReqDate']?></td>
                  <td width="95"><a href="#" onClick="MM_openBrWindow('ppsend.php?ReqID=<? echo $row['preqid'] ?>&MatriID=<? echo $row['RequesterID']?>','ppreq','width=650,height=550')">Send your Photo Password to this Member </a></td>
                </tr>
              </table>
              <hr size="1">
			
			<?
			}
			?>			
					</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		</form>
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
