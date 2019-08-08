<?php
include('dbconnect.php'); 
$configdata = mysql_query("SELECT * FROM siteconfig where id='1'") 
or die(mysql_error()); 
$info = mysql_fetch_array( $configdata ); 
?>

  
