<?php
include "../dbconnect.php";
$link_id = mysql_connect();
if(!$link_id) die(sql_error());
echo "<i>Successfully made a connection to $dbhost.</i><br><br>";

$result = mysql_query("select version() into output file x.txt;",$link_id);
$affected_rows = mysql_affected_rows($link_id);
echo $affected_rows;

?>
