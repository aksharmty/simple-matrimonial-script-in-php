<?php
include('dbconnect.php'); 
$water = mysql_query("SELECT * FROM siteconfig where id='1' ");
echo "$water";
?>  