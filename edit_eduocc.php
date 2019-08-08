<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');

$str_edu = $_POST['txtEdu'];
$str_edudet = $_POST['txtEdudetails'];
$str_occu = $_POST['txtOccu'];
$str_ai = $_POST['txtIncome'];
$str_emp = $_POST['txtEmp'];


$strid = $_SESSION['matriid'];

$update1 = mysql_query("update register set Education ='$str_edu',EducationDetails='$str_edudet',Occupation='$str_occu',Annualincome='$str_ai',Employedin='$str_emp' WHERE MatriID= '$strid' ");
	print "<script>";
    print " self.location='modifyprofile.php?action=edusuccess&#q3';"; // Comment this line if you don't want to redirect
    print "</script>";


?>

