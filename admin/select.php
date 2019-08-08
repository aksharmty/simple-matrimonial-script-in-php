<?
$plan = mysql_query("SELECT * from membershipplan ");
echo( '<select name="txtplan">' ); 
while($row = mysql_fetch_array($plan))
{ 
echo  '<option value='.$row['plandisplayname'].'>'.$row['plandisplayname'].'</option>';
} 
echo '</select>';  
?>