<?
include('dbconnect.php'); 

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

$max_results = 5; 
$from = (($page * $max_results) - $max_results);
$sql = ("SELECT Name,MatriID FROM register LIMIT $from, $max_results");
$rs_result = mysql_query ($sql);
?>
<style type="text/css">
<!--

.Banner	{
	width:		12;
	height:		12;
	font-size:	11px;
	text-align:	center;
	text-decoration: none;
	color:		#003366;
	background:;
	border-top:	1px solid #FF9933;
	border-left:	1px solid #FF9933;
	border-right:	1px solid #FF9933;
	border-bottom:	1px solid #FF9933;
	font-family:	Arial;
	}

#Banner a:hover {
color : #fff;
background : #326F8F;
margin : 0;
}


-->
</style>
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?
while ($row = mysql_fetch_assoc($rs_result)) {
?>
            <tr>
            <td><? echo $row["MatriID"]; ?></td>
            <td><? echo $row["Name"]; ?></td>
            </tr>
<?
};
?>
</table>
<?
$sql = "SELECT COUNT(MatriID) FROM register";
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 5);

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a class=banner href='pagingsimple.php?page=".$i."'>".$i."</a> ";
};
?>

