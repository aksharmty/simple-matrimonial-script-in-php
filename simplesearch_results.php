<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 

$StrGender = $_GET['txtGender'];
$StrSAge = $_GET['txtSAge'];
$StrEAge = $_GET['txtEAge'];
$StrReligion = $_GET['religion'];
$StrCaste = $_GET['caste'];
$StrPhoto = $_GET['txtphoto'];



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

// Perform MySQL query on only the current page number's results 
if($StrPhoto=="Show profiles with Photo" AND $StrCaste=="Any" )
{
$sql = mysql_query("SELECT *, Left(profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate,PhotoProtect  FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif'order by ID DESC LIMIT $from, $max_results ")
or die("Could not select data because ".mysql_error());
}	
else if($StrPhoto=="Show profiles with Photo" AND $StrCaste!="Any") 
{
$sql = mysql_query("SELECT *, Left(profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate,PhotoProtect  FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion' AND Caste = '$StrCaste' AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
or die("Could not select data because ".mysql_error());
}

else if($StrPhoto!="Show profiles with Photo" AND $StrCaste!="Any") 
{
$sql = mysql_query("SELECT  *, Left(profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate,PhotoProtect  FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND Caste='$StrCaste'  AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
or die("Could not select data because ".mysql_error());
}

else if($StrPhoto!="Show profiles with Photo" AND $StrCaste=="Any") 
{
$sql = mysql_query("SELECT  *, Left(profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate,PhotoProtect  FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND  Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
or die("Could not select data because ".mysql_error());
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY class="body" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">



<DIV align="center">
<TABLE width="780" border="0" cellpadding="0" cellspacing="0" class="BlueTborder">
          <TR>
            <TD height="7"><?php include("header.php");?></TD>
             <TR>
            <TD height="9"><?php include("topmenu.php");?></TD>
          </TR>

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
      <table width="97%" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" valign="bottom"><img src="pics/serarch-top.gif" width="582" height="32" /></td>
        </tr>
        <tr>
          <td background="pics/search-mid.gif"><table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="187" class="bodyg"><div align="left"><strong>Gender : <?php echo $StrGender; ?></strong></div></td>
              <td width="171" class="bodyg"><div align="left"><strong>Age : </strong><strong><?php echo $StrSAge; ?></strong> - <strong><?php echo $StrEAge; ?></strong></div></td>
              <td width="182" class="bodyg"><div align="left"><strong>Religion : </strong><strong><?php echo $StrReligion; ?></strong></div></td>
            </tr>
            <tr>
              <td class="bodyg"><div align="left"><strong>Caste : </strong><strong><?php echo $StrCaste; ?></strong></div></td>
              <td colspan="2" class="bodyg"><div align="left"><strong>Photo : </strong><strong>
			  <?php if($StrPhoto =="Show profiles with Photo") 
			  {
			   echo $StrPhoto;
			   }
			   else
			   {
			   echo "Show all" ;
			   }
			   ?>
			  
			  </strong></div></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="18" background="pics/search-bot.gif"><table width="540" height="15" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="243">&nbsp;</td>
              <td width="88"><div align="center"><a href="javascript:history.go(-1);">Refine Search </a></div></td>
              <td width="63">&nbsp;</td>
              <td width="91"><div align="center"><a href="adv_search.php">Regular Search </a></div></td>
              <td width="55">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%">&nbsp;</td>
          </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
	<?php
// Figure out the total number of results in DB: 
//= mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register"),0); 

if($StrPhoto=="Show profiles with Photo" AND $StrCaste=="Any" )
{
$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC "),0); 
}	
else if($StrPhoto=="Show profiles with Photo" AND $StrCaste!="Any") 
{
$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion' AND Caste = '$StrCaste' AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC "),0);  
}

else if($StrPhoto!="Show profiles with Photo" AND $StrCaste!="Any") 
{
$total_results  = mysql_result(mysql_query("SELECT  COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND Caste='$StrCaste'  AND Status <> 'InActive' order by ID DESC "),0); 
}

else if($StrPhoto!="Show profiles with Photo" AND $StrCaste=="Any") 
{
$total_results  = mysql_result(mysql_query("SELECT  COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND  Status <> 'InActive' order by ID DESC "),0); 
}

	
	if($total_results ==0)
	{
	print "<script>";
    print "self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
    print "</script>";
	}
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
	
		
		
          <td><div align="left">
 
 <span class="Partext1"></span> <?php echo " " . $total_results ." Profiles Found" ?> </div></td>
          <td><div align="right"><span class="Partext1">
		  
		  
<?php
 
$url = "txtGender=$StrGender&txtSAge=$StrSAge&txtEAge=$StrEAge&religion=$StrReligion&caste=$StrCaste&txtphoto=$StrPhoto";

//Paging info
echo "Page ";
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 
echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 
} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 

echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 

//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$var1=".urlencode($SearchString) ."\">Next</a>";
 
//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&SearchString=.urlencode($SearchString) .\">Next</a>"; 
//$Nav = "<A HREF=\"Search.php?page=" . $i . "page=$next&SearchString=" .urlencode($SearchString) . "\">Next</A>"; 
} 
?>
          </span></div></td>
        </tr>
      </table>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><?php require 'results.php'; ?></td>
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

echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 

} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 
} 
?>
          </span></div></td>
        </tr>
      </table></TD>
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