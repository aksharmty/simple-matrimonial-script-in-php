<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');

$str_gothra = $_POST['txtGothra'];
$str_star = $_POST['txtStar'];
$str_moon = $_POST['txtMoon'];
$str_hm = $_POST['txtHorosMatch'];
$str_manglik = $_POST['txtManglik'];
$str_pb = $_POST['txtPb'];
$str_tb = $_POST['txtTb'];

$strid = $_SESSION['matriid'];

$update1 = mysql_query("update register set Gothram ='$str_gothra',Star='$str_star',Moonsign='$str_moon',Horosmatch='$str_hm',Manglik='$str_manglik',POB='$str_pb',TOB='$str_tb' WHERE MatriID= '$strid' ");
	print "<script>";
    print " self.location='modifyprofile.php?action=srsuccess&#q2';"; // Comment this line if you don't want to redirect
    print "</script>";


?>

