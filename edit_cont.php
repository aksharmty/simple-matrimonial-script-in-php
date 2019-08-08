<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');
$str_add = $_POST['txtAddress'];
$str_cou = $_POST['txtCountry'];
$str_sta = $_POST['ResidingState'];
$str_cit = $_POST['City'];
$str_pho = $_POST['txtPhone'];
$str_mob = $_POST['txtMobile'];
$str_res = $_POST['txtRes'];

$strid = $_SESSION['matriid'];

$update1 = mysql_query("update register set Address ='$str_add',City='$str_cit',State='$str_sta',Country='$str_cou',Phone='$str_pho', Mobile='$str_mob',Residencystatus='$str_res'  WHERE MatriID= '$strid' ");

	print "<script>";
    print " self.location='modifyprofile.php?action=contsuccess&#q5';"; // Comment this line if you don't want to redirect
    print "</script>";


?>

