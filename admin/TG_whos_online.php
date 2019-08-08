<?
/**
 *
 * TG WHO'S ONLINE
 * Copyright 2005 - 2006 (c) TOXIC GOBLIN
 * http://www.toxicgoblin.com
 * 
 */
 
//Optional Database Connection Information
//**Uncomment the following 2 lines and edit the values if you do not already have an active database connection**
//
include '../dbconnect.php'; 

//Fetch Time
$timestamp = time();
$timeout = $timestamp - 900;

//Insert User
$insert = mysql_query("INSERT INTO whos_online (timestamp, ip, file) VALUES('$timestamp','".$_SERVER['REMOTE_ADDR']."','".$_SERVER['PHP_SELF']."')") or die("Error in who's online insert query!");
//Delete Users
$delete = mysql_query("DELETE FROM whos_online WHERE timestamp<$timeout") or die("Error in who's online delete query!");
//Fetch Users Online
$result = mysql_query("SELECT DISTINCT ip FROM whos_online") or die("Error in who's online result query!");
$users = mysql_num_rows($result);

//Show Who's Online
if($users == 1) {
print("$users User Online.\n");
} else {
print("$users Users Online.\n");
}
?>