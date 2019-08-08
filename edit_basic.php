<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');
$str_name = $_POST['txtName'];
$str_lang = $_POST['Language'];
$str_rel = $_POST['religion'];
$str_caste = $_POST['caste'];
$str_sc = $_POST['txtSubcaste'];
$str_email = $_POST['EMAILconfirm'];
$strid = $_SESSION['matriid'];
//$_SESSION['matriid']

// check if the email is taken
$check = "select ConfirmEmail from register where ConfirmEmail = '$str_email' AND MatriID <> '$strid';"; 
$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry); 
if ($num_rows != 0) { 

	print "<script>";
    print " self.location='modifyprofile.php?action=emailtaken';"; // Comment this line if you don't want to redirect
    print "</script>";
} 

else 

{
$update1 = mysql_query("update register set Name ='$str_name',Language='$str_lang',Religion='$str_rel',Caste='$str_caste',Subcaste='$str_sc',ConfirmEmail='$str_email' WHERE MatriID= '$strid' ");
	print "<script>";
    print " self.location='modifyprofile.php?action=bisuccess&#q1';"; // Comment this line if you don't want to redirect
    print "</script>";
}


?>

