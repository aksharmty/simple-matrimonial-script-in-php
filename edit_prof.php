<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');
$str_prof = $_POST['txtmsg'];
$strid = $_SESSION['matriid'];

$update1 = mysql_query("update register set Profile ='$str_prof'   WHERE MatriID= '$strid' ");

	print "<script>";
    print " self.location='modifyprofile.php?action=abousuccess&#q6';"; // Comment this line if you don't want to redirect
    print "</script>";


?>

