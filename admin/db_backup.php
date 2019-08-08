

<?php
include '../dbconnect.php';
$dbname="matri";
$dbhost="localhost";
$dbuser = "root";
$dbpass = "selva";
$backupFile = $dbname . date("Y-m-d-H-i-s") . '.gz';
$command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass $dbname | gzip > $backupFile";
system($command);
echo "Backup successful"
?> 