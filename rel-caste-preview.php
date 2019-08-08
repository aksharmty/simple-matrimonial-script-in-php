
<?php
include('dbconnect.php'); 

?>

<link href="style.css" rel="stylesheet" type="text/css">
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='rel-caste-preview.php?cat=' + val ;
}

</script>

<?

@$cat=$_GET['cat']; // Use this line or below line if register_global is off
//@$cat=$HTTP_GET_VARS['cat']; // Use this line or above line if register_global is off

///////// Getting the data from Mysql table for first list box//////////
$quer2=mysql_query("SELECT DISTINCT religion,religion_id FROM religion"); 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($cat) and strlen($cat) > 0){
$quer=mysql_query("SELECT DISTINCT caste FROM caste where religion_id=$cat order by caste"); 
}else{$quer=mysql_query("SELECT DISTINCT caste FROM caste order by caste"); }  
?>





<? echo "<form method=post name=f1>"; ?>


							<?	//////////        Starting of first drop downlist /////////
echo " <select name='cat' onchange=\"reload(this.form)\" class='forminput'>";
while($noticia2 = mysql_fetch_array($quer2)) { 
if($noticia2['religion_id']==@$cat){echo "<option selected value='$noticia2[religion_id]'>$noticia2[religion]</option>"."<BR>";}
else{echo  "<option value='$noticia2[religion_id]'>$noticia2[religion]</option>";}
}
echo "</select>";

//////////////////  This will end the first drop down list /////////// ?>
							
								<? //////////        Starting of second drop downlist /////////
echo "<select name='subcat' class='forminput'>";
while($noticia = mysql_fetch_array($quer)) { 
echo  "<option value='$noticia[caste]'>$noticia[caste]</option>";
}
echo "</select>"; ?>
								
<? echo "</form>";
?>


