<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?
include('dbconnect.php');
$str_fd = strip_tags($_POST['txtFD']);
$str_fv = strip_tags($_POST['txtFV']);
$str_ft = strip_tags($_POST['txtFT']);
$str_fs = strip_tags($_POST['txtFS']);
$str_fo = strip_tags($_POST['txtFO']);
$str_fs1 = strip_tags($_POST['txtFS1']);
$str_fs2 = strip_tags($_POST['txtFS2']);
$str_nbm = strip_tags($_POST['nbm']);
$str_nsm = strip_tags($_POST['nsm']);
$str_faname = strip_tags($_POST['txtFANAME']);
$str_ffo = strip_tags($_POST['txtFFO']);
$str_moname = strip_tags($_POST['txtMONAME']);
$str_fmo = strip_tags($_POST['txtFMO']);
$strid = strip_tags($_SESSION['matriid']);

$update1 = mysql_query("update register set  
Fathername ='$str_faname',
Mothersname ='$str_moname',
Fathersoccupation  ='$str_ffo',              
Mothersoccupation ='$str_fmo',              
FamilyDetails  ='$str_fd',               
Familyvalues  ='$str_fv',              
FamilyType  ='$str_ft',              
FamilyStatus   ='$str_fs',             
FamilyOrigin  ='$str_fo',               
noofbrothers   ='$str_fs1',              
noofsisters ='$str_fs2',
nbm ='$str_nbm',
nsm ='$str_nsm'
WHERE MatriID= '$strid' ")
or die("Could not update data because ".mysql_error());

//echo $str_fd;
	print "<script>";
  print " self.location='modifyprofile.php?action=famsuccess&#q7';"; // Comment this line if you don't want to redirect
  print "</script>";


?>

