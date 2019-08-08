<?php include('protect.php'); ?>
<?php
include('../dbconnect.php'); 

?>


<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='rel-caste-preview.php?cat=' + val ;
}

</script>
<link href="style.css" rel="stylesheet" type="text/css">
<table width="250" border="0" cellpadding="0" cellspacing="0" bgcolor="#DCF0F8" class="blackbox">
  <tr>
    <td width="18" class="paratext">&nbsp;</td>
    <td width="380" class="paratext"><strong>Preview</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	
	<?

/*
If register_global is off in your server then after reloading of the page to get the value of cat from query string we have to take special care.
To read more on register_global visit.
  http://www.plus2net.com/php_tutorial/register-globals.php
*/
@$cat=$_GET['cat']; // Use this line or below line if register_global is off
//@$cat=$HTTP_GET_VARS['cat']; // Use this line or above line if register_global is off

///////// Getting the data from Mysql table for first list box//////////
$quer2=mysql_query("SELECT DISTINCT religion,religion_id FROM religion"); 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($cat) and strlen($cat) > 0){
$quer=mysql_query("SELECT DISTINCT caste FROM caste where religion_id=$cat order by caste"); 
}else{$quer=mysql_query("SELECT DISTINCT caste FROM caste order by caste"); } 
////////// end of query for second subcategory drop down list box ///////////////////////////

echo "<form method=post name=f1>";
/// Add your form processing page address to action in above line. Example  action=dd-check.php////
echo "</br>";
//////////        Starting of first drop downlist /////////
echo " Religion : <select name='cat' onchange=\"reload(this.form)\">";
while($noticia2 = mysql_fetch_array($quer2)) { 
if($noticia2['religion_id']==@$cat)
{
echo "<option selected value='$noticia2[religion_id]'>$noticia2[religion]</option>"."<BR>";}
else{echo  "<option value='$noticia2[religion_id]'>$noticia2[religion]</option>";}
}
echo "</select>";
echo "</br>";
echo "</br>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "Caste &nbsp;&nbsp;&nbsp;: <select name='subcat' size=4>";
while($noticia = mysql_fetch_array($quer)) { 
echo  "<option value='$noticia[caste]'>$noticia[caste]</option>";
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////
//// Add your other form fields as needed here/////

echo "</form>";
?>	</td>
  </tr>
</table>
