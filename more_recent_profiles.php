<?php include("config.php"); 
include('dbconnect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">

	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
	
	<style type="text/css">
/* CSS Tooltip  */
* {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; }
a:hover {background:#ffffff; text-decoration:none;} /*BG color is a must for IE6*/
a.tooltip span {display:none; padding:2px 3px; margin-left:0px; width:100px;}
a.tooltip:hover span{display:inline; position:absolute; border:1px solid #cccccc; background:#ffffff; color:#6c6c6c;}
    </style>


<style>
		img.imageborder {
			display: block;
			padding:2px;
			border:solid;
			border-color: #dddddd #aaaaaa #aaaaaa #dddddd;
			border-width: 1px 2px 2px 1px;
			background-color:white;
		}
	</style>


<link href="style.css" rel="stylesheet" type="text/css">


	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
	.style2 {	color: #DD7502;
	font-weight: bold;
	font-size: 13px;
}
    </style>
</HEAD>
<BODY class="body">
<DIV align="center">
<TABLE width="750" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?></TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR >
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" >
<?php include("left.php");?>
<?php include("leftbanner.php");?></TD>
<TD valign="top"><br />
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="2%">&nbsp;</td>
    <td width="23%"><div align="left" class="blueheadtext"><span class="style2">Photo Gallery </span></div></td>
    <td width="75%"><div align="left"></div></td>
  </tr>
</table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="blueinnerbox">
    <tr>
      <td><table width="520" border="0" align="center" cellpadding="5" cellspacing="5" >
        
        <tr>
          <td height="30"><div align="center">
              <?php  
$sql = "SELECT Name, MatriID,
Status , Photo1approve, regdate, Photo1
FROM register
WHERE Photo1 <> 'nophoto.gif'
AND Status <> 'InActive'
AND Photo1Approve = 'Yes'
ORDER BY  rand()
"; 
$result = @mysql_query($sql); 
$recordCount = mysql_num_rows($result); 
// main data array 

$data = array(); 
while ($row = mysql_fetch_row($result)) { 
        $data[] = $row[1]; 

		
} 
$totCols = 5; 
$col = 0; 
$perCol = ceil( $recordCount / $totCols ); 
// build the columns 
while ($col < $totCols) { 
   $start = $col * $perCol; 
   $col_data = array_slice($data, $start, $perCol); 
   print "<td style=\"width:290px;line-height:1.3em;vertical-align:top;\">\n"; 
   // add data to current column 


   foreach ($col_data as $item) {  
//$cat = mysql_query("SELECT * FROM register where matriid = '$item' ");

$cat = mysql_query("SELECT MatriID,REPLACE(Name, ' ', '' ) as rname,Name,Education,Occupation,PhotoProtect,City,Photo1,Status,Photo1Approve 
FROM register WHERE Photo1 <> 'nophoto.gif' AND Status <> 'InActive' AND Photo1Approve = 'Yes' AND PhotoProtect = 'No' AND  MatriID = '$item' ORDER BY rand()  ");

	 while($crow = mysql_fetch_array($cat))
		{
	 ?>
              <a class="tooltip" href="photoprocess_ajax.php?image=<?php echo $crow['Photo1']?>&amp;watermark_text=<?php echo $info['Webname']; ?>&amp;watermark_color=ffffff;" rel="lightbox"> <img src="photoprocess_ajax.php?image=<?php echo $crow['Photo1']?>&maxim_size=100;" width="50" height="75"  border="0" class="imageborder" /> </a><span class="lightbluelink">
              <div align="center" class="lowerstyle"> <a style="text-decoration:none" href="viewprofile<?php echo $crow['MatriID']?>.htm" class="tooltip">
                <?php  echo $crow['Name']; ?>
                <br />
                <span> I am a <?php echo $crow['Occupation']?> from <?php echo $crow['City']?> </span></a> </div>
                <?php  } print " <br/>";  
		 
   } 
   print "</td>\n"; 
   $col++; 
} 

?>
              </span> <br />
          </div></td>
        </tr>
        <tr>
          <td height="30">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p></TD></TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD class="greyborder"><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>
</BODY>
</HTML>
