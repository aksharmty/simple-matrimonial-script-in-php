<?php include('protect.php'); ?>
<?php
include('../dbconnect.php'); 

$Strid = $_GET['ID'];
	// UPDATE PHOTO1 STATUS from No to Yes
	$update1 = mysql_query("update register set Photo2Approve='Yes' where MatriId = '$Strid'")
	or die("Could not update data because ".mysql_error());
	
	print "<script>";
     print " self.location='approve_photo_confirm.php';"; // Comment this line if you don't want to redirect
     print "</script>";
?>