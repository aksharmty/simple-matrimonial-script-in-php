<?php
include '../dbconnect.php'; 


$tableName  = 'register';
$backupFile = 'backup/mypet.sql';
$query      = "SELECT * INTO OUTFILE '$backupFile' FROM $tableName";
$result = mysql_query($query);



?> 