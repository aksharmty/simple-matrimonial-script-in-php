<?php include("config.php"); 
include('dbconnect.php'); ?>

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

<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  
  <tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td ><div align="center">
<?php  
$sql = "SELECT Name, MatriID,
Status, Photo1Approve, Regdate, Photo1 
FROM register
WHERE Photo1 <> 'nophoto.gif'
AND Status = 'featured'
AND Photo1Approve = 'Yes'
ORDER BY rand()
LIMIT 6"; 
$result = @mysql_query($sql); 
$recordCount = mysql_num_rows($result); 
// main data array 

$data = array(); 
while ($row = mysql_fetch_row($result)) { 
        $data[] = $row[1]; 

		
} 
$totCols = 6; 
$col = 0; 
$perCol = ceil( $recordCount / $totCols ); 
// build the columns 
while ($col < $totCols) { 
   $start = $col * $perCol; 
   $col_data = array_slice($data, $start, $perCol); 
   print "<td style=\"width:50px;line-height:1.3em;vertical-align:top;\">\n"; 
   // add data to current column 


   foreach ($col_data as $item) {  
//$cat = mysql_query("SELECT * FROM register where matriid = '$item' ");

$cat = mysql_query("SELECT MatriID,REPLACE(Name, ' ', '' ) as rname,Education,Occupation,City,Photo1,Status,PhotoProtect,Photo1Approve  
FROM register WHERE Photo1 <> 'nophoto.gif' AND Status = 'featured'  AND Photo1Approve = 'Yes' AND PhotoProtect = 'No'  AND MatriID = '$item' ORDER BY rand() LIMIT 6 ");

	 while($crow = mysql_fetch_array($cat))
		{
	 ?>
	<br />
 
<div align="center">	 
<a class="tooltip"  href="viewprofile<?php echo $crow['MatriID']?>.htm">

<?php if ($crow['thump_photo1'] == '' ) { ?> 
<img src="photoprocess.php?image=<?php echo $crow['Photo1']?>&maxim_size=100;" width="75" height="100" border="0" class="imageborder" /><?php } else { ?>
<img src="photoprocess.php?image=<?php echo $crow['thump_photo1']?>&square=100;"   border="0" class="imageborder" />
<?php } ?>
</a><span class="lightbluelink">

<a href="#" style="text-decoration:none" class="tooltip"> <?php  echo $crow['MatriID']; ?><br />
<span> I am <?php echo $crow['rname']?>   <?php echo $crow['Occupation']?>	  </span></a>	 
<?php  } print " <br/>";  
} 
print "</td>\n"; 
$col++; 
} 
?>
</span></div>
	  
	  </div>    </td>
  </tr>
</table>
