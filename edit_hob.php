<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');
$str_hob= strip_tags($_POST['txtHobby']);  
$str_ohob= strip_tags($_POST['txtOh']);
$str_int= strip_tags($_POST['txtInterest']);
$str_oint= strip_tags($_POST['txtOi']);
$strid = strip_tags($_SESSION['matriid']);

$update1 = mysql_query("update register set  
Hobbies   ='$str_hob',           
OtherHobbies  ='$str_ohob',               
Interests    ='$str_int',            
OtherInterests ='$str_oint'
WHERE MatriID= '$strid' ")
or die("Could not update data because ".mysql_error());



//echo $str_fd;
	print "<script>";
  print " self.location='modifyprofile.php?action=hobsuccess&#q9';"; // Comment this line if you don't want to redirect
  print "</script>";


?>

