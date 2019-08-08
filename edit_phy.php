<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');

$str_hei = $_POST['txtHeight'];
$str_wei = $_POST['txtWeight'];
$str_blood = $_POST['txtBlood'];
$str_comp = $_POST['txtComplexion'];
$str_bt = $_POST['txtBody'];
$str_diet = $_POST['txtDiet'];
$str_smoke = $_POST['txtSmoke'];
$str_drink = $_POST['txtDrink'];
$strid = $_SESSION['matriid'];

$update1 = mysql_query("update register set Height ='$str_hei',Weight='$str_wei',BloodGroup='$str_blood',Complexion='$str_comp',Bodytype='$str_bt', Diet='$str_diet',Smoke='$str_smoke',Drink='$str_drink' WHERE MatriID= '$strid' ");

	print "<script>";
    print " self.location='modifyprofile.php?action=physuccess&#q4';"; // Comment this line if you don't want to redirect
    print "</script>";


?>

