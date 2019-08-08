<?php include('protect.php'); ?>
<?php
include('../dbconnect.php'); 

$Strid = $_GET['ID'];
	// UPDATE HOROS STATUS from No to Yes
	$update1 = mysql_query("update register set HorosApprove='Yes' where MatriId = '$Strid'")
	or die("Could not update data because ".mysql_error());
	
	//header('location:approve_horos.php?Action=Approved');
	 print "<script>";
     print " self.location='horosapproveconfirm.php';"; // Comment this line if you don't want to redirect
     print "</script>";
?>