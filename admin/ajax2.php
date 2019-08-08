<?php 
$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = "selva"; 
$dbname = "matri"; 
//Connect to MySQL Server 
mysql_connect($dbhost, $dbuser, $dbpass); 
//Select Database 
mysql_select_db($dbname) or die(mysql_error()); 
// Retrieve data from Query String 
$uid = $_GET['uid']; 
$pwd = $_GET['pwd']; 

$uid = mysql_real_escape_string($uid); 
$pwd = mysql_real_escape_string($pwd); 
//$wpm = mysql_real_escape_string($wpm); 
//build query 

$query = "SELECT adinusername,adminpassword FROM adminlogin WHERE adinusername = '$uid' and adminpassword= '$pwd' "; 
$result = mysql_query($query) or die("Query failed"); 
# print "query executed"; 
$blurb = mysql_fetch_row($result); 

$uid1=$blurb[0]; 
$password1=$blurb[1]; 

if (( $uid1 ¦¦ $password1 )=='') 
{ 
//$display_string= ""; 
//echo ; 
echo "<font face=\"Arial\" size=-1%><p style=\"color:red \"> Login failed;Please try again</p></font>"; 
//print<<< HTML 

//_HTML_; 
} 
else 
{ 
echo "login success"; 
//header('Location: http://www.google.com/'); 
} 

?> 

