<?php
include 'dbconnect.php';



$strgender = $_POST['txtGender'];
	
foreach ($_POST['txtms'] as $pt) 
{  
$in0 .= "'" . $pt . "',"; 
}
$in0 = substr($in0,0,strlen($in0)-1); 

$strminage = $_POST['txtSAge'];
$strmaxage = $_POST['txtEAge'];
$strminheight = $_POST['txtHeight1'];
$strmaxheight = $_POST['txtHeight2'];
$strphoto = $_POST['txtphoto'];

session_start();
/////////////// FOR Religion //////////////////////////////
foreach($_POST["religionsel"] AS $val)
{
	if ($val == "Any")
		{
		$strreliQ=" Religion LIKE ('%') ";
		}
	else
	{
	
		foreach ($_POST['religionsel'] as $pt) 
		{
		$in1 .= "'" . $pt . "',"; 
		}
		$in1 = substr($in1,0,strlen($in1)-1);
		$strreliQ=" Religion IN ($in1) ";
	}
}		
		
		
	

///////////////////////////////////////////////////////////////


/////////////// FOR Caste //////////////////////////////
foreach($_POST["castesel"] AS $val)
{
	if ($val == "Any")
	{
		$strcastQ=" Caste LIKE ('%') ";
	}
	else
	{
		foreach($_POST["castesel"] AS $pt)
		{
		$in2 .= "'" . $pt . "',"; 
		}
		$in2 = substr($in2,0,strlen($in2)-1);
		$strcastQ=" Caste IN ($in2) ";
	}
	
}
		
///////////////////////////////////////////////////////////////

/////////////// FOR Education //////////////////////////////
foreach($_POST["txtEdusel"] AS $val)
{
	if ($val == "Any")
	{
		$streduQ=" Education LIKE ('%') ";
	}
	else
	{
		foreach($_POST["txtEdusel"] AS $pt)
		{
		$in3 .= "'" . $pt . "',"; 
		}
		$in3 = substr($in3,0,strlen($in3)-1);
		$streduQ=" Education IN ($in3) ";
	}	
}
		
///////////////////////////////////////////////////////////////


/////////////// FOR Citizen //////////////////////////////
foreach($_POST["txtRessel"] AS $val)
{
	if ($val == "Any")
	{
		$strcitiQ=" Residencystatus LIKE ('%') ";
	}
	else
	{
		foreach($_POST["txtRessel"] AS $pt)
		{
		$in4 .= "'" . $pt . "',";
		}
		$in4 = substr($in4,0,strlen($in4)-1);
		$strcitiQ=" Residencystatus IN ($in4) "; 
	}
	
}
		
///////////////////////////////////////////////////////////////


/////////////// FOR Country //////////////////////////////
foreach($_POST["txtCountrysel"] AS $val)
{
	if ($val == "Any")
	{
		$strcountryQ=" Country LIKE ('%') ";
	}
	else
	{
		foreach($_POST["txtCountrysel"] AS $pt)
		{
		$in5 .= "'" . $pt . "',";
		}
		$in5 = substr($in5,0,strlen($in5)-1);
		$strcountryQ=" Country IN ($in5) "; 
	}
	
}
		
///////////////////////////////////////////////////////////////





if($strphoto=="photo")
{
$result = mysql_query("SELECT * FROM register WHERE Gender = ('$strgender') AND Maritalstatus IN ($in0) AND Age BETWEEN ('$strminage') AND ('$strmaxage') AND $strreliQ AND $strcastQ  AND $streduQ AND $strcitiQ AND $strcountryQ AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' ");
}      
else if($strphoto!="photo")
{
$result = mysql_query("SELECT * FROM register WHERE Gender = ('$strgender') AND Maritalstatus IN ($in0) AND Age BETWEEN ('$strminage') AND ('$strmaxage') AND $strreliQ AND $strcastQ  AND $streduQ AND $strcitiQ AND $strcountryQ AND Status <> 'InActive' ");
}      


?>


<table width="50%" border="0" cellspacing="2" cellpadding="1">
<?  $i = 1;
while($row=@mysql_fetch_array($result)) { ?>
  <tr>
    <td>
	<?  echo $i++;  ?>
	</td>
	<td><? echo $row['MatriID'] ?></td>
    <td><? echo $row['Name'] ?></td>
    <td><? echo $row['Gender'] ?></td>
    <td><? echo $row['Age'] ?></td>
    <td><? echo $row['Religion'] ?></td>
	<td><? echo $row['Caste'] ?></td>
	<td><? echo $row['Education'] ?></td>
	<td><? echo $row['Height'] ?></td>
	<td><? echo $row['Residencystatus'] ?></td>
	<td><? echo $row['Country'] ?></td>
	<td><div align="right"><? echo $row['Photo1'] ?></div></td>
  </tr>
  <? } ?>
</table>

