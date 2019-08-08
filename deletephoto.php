<?php include("memprotect.php");
include('dbconnect.php'); 

				
$strid=$_SESSION['username']; 



if($_GET['Choice']=="1")
{ 	

// REMOVE OLD PHOTO1 FROM THE SERVER -- memphoto1 folder
	$stroldphoto1 = $_GET['op'];
	$myFile = "memphoto1/".$stroldphoto1;
	unlink($myFile); 
			
$update1 = mysql_query("update register set Photo1='nophoto.gif', Photo1Approve='No' where MatriID='$strid'")
or die("Could not update data because ".mysql_error());

	 print "<script>";
     print " self.location='addphoto.php';"; // Comment this line if you don't want to redirect
     print "</script>";

}
elseif ($_GET['Choice']=="2")

{

// REMOVE OLD PHOTO2 FROM THE SERVER -- memphoto2 folder
	$stroldphoto2 = $_GET['op'];
	$myFile = "memphoto2/".$stroldphoto2;
	unlink($myFile);
	
	
$update2 = mysql_query("update register set Photo2='nophoto.gif', Photo2Approve='No' where MatriID='$strid'")
or die("Could not update data because ".mysql_error());

	 print "<script>";
     print " self.location='addphoto.php';"; // Comment this line if you don't want to redirect
     print "</script>";
	 
}
elseif ($_GET['Choice']=="3")
{

// REMOVE OLD PHOTO3 FROM THE SERVER -- memphoto3 folder
	$stroldphoto3 = $_GET['op'];
	$myFile = "memphoto3/".$stroldphoto3;
	unlink($myFile);
	
$update3 = mysql_query("update register set Photo3='nophoto.gif', Photo3Approve='No' where MatriID='$strid'")
or die("Could not update data because ".mysql_error());

	 print "<script>";
     print " self.location='addphoto.php';"; // Comment this line if you don't want to redirect
     print "</script>";
}

?>