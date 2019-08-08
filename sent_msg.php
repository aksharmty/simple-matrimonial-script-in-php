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
$sql = mysql_query("SELECT *,Left(Msg,30) as text from sentmessage where FromID = '$strid' order by pid desc LIMIT $from, $max_results ");
 
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
-->
</style>
</HEAD>


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
        var con=confirm("Are you sure you want to delete"); 
        if(con) 
        { 
            document.forms[0].action="sentmessage_del_submit.php?recsno="+checkboxes 
            document.forms[0].submit() 
        } 
    } 
    else 
    { 
        alert("No message is selected.") 
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
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">My Inbox </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>Listed Below are <strong>Sent Personalised </strong>messages.</td>
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
$total_results =  mysql_result(mysql_query("SELECT COUNT(*) as Num FROM sentmessage where FromID ='$strid' "),0); 

	
	if($total_results ==0)
	{
	print "No results";
   
	}
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
            <td><div align="left"> <span class="Partext1"></span> <?php echo " " . $total_results ." Sent Message Found" ?> </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <?php 
$StrAction=$_GET['action'];
if ($StrAction == "s")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Message(s) has been deleted successful.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}
?>
            </div></td>
            </tr>
        </table>
		<form action="" method="post" name="" id="">
        <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
			
			<table  height="0" border="0" cellpadding="0" cellspacing="0" width="98%">
  <tr>
    <td colspan="5" ><input name="topcheckbox" type="checkbox" class="check" id="topcheckbox" onClick="selectall();" value="ON" />
      <span class="Alert">Select All</span></td>
    </tr>
  <tr>
    <td width="61" ><div align="left"><strong><a href="javascript:goDel()" class="style1">Delete</a></strong></div></td>
    <td width="80"><strong>From</strong></td>
    <td width="80"><span class="bodysg">To</span></td>
    <td width="252"><span class="bodysg">Messages</span></td>
    <td width="141"><div align="left"><span class="bodysg">Sent on </span> </div></td>
  </tr>
</table>
<?php while($row = mysql_fetch_array($sql))
			{ ?>
<table width="98%"  height="0" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="61" ><input name="<?php echo $row['pid']?>" type="checkbox" class="check" /></td>
    <td width="80"><?php  echo $row['FromID']?></td>
    <td width="80"><?php  echo $row['ToID']?></td>
    <td width="252"><a href="javascript:void window.open('read_sentmsg.php?fullview=Y&amp;Msgid=<?php  echo $row['pid']?>&amp;recipientID=<?php  echo $row['ToID']?>','','height=468,width=600,resizable=yes,scrollbars=no')"><strong><?php  echo $row['text']?> ...</strong></a></td>
    <td width="141"><?php  echo $row['SendDate']?></td>
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
