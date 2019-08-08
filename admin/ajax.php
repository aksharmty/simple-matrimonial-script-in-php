<?php
session_start(); 
include ('../dbconnect.php');

$username = $_POST['username']; 
$password = $_POST['password']; 

$query = mysql_query("SELECT adminusername,adminpassword FROM adminlogin WHERE adminusername='".$_POST['username']."' AND adminpassword='".$_POST['password']."'"); 
$result = @mysql_num_rows($query); 
$row = @mysql_fetch_array($query); 

if ($result == 1) 
{ 
$_SESSION["adminusername"] = $row["adminusername"]; 

echo "Success!"
 
} 
else 
{ 
echo 'Wrong username or password.'; 
} 

?> 