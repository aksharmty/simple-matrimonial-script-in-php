<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>


<?php
session_start();
include('dbconnect.php');
			// username and password sent from signup form 
			//$myusername = $_POST['txtusername']; 
			$strreceiver = $_POST['txteiid'];
			$streigen = $_POST['txteigender'];
			$strsender = $_SESSION['matriid'];
			//$mypassword = md5($_POST['txtpassword']);
			 

			$sql="SELECT * FROM expressinterest  WHERE eisender= '$strsender' and eireceiver='$strreceiver' OR eisender= '$strreceiver' and eireceiver='$strsender' " ;
			$result=mysql_query($sql);
			
			
			$count=@mysql_num_rows($result);
		
			
			if($count==1){

			 
			//header('location:no.php?Action=Success');
	 print "<script>";
     print " self.location='express_int_already_sent_warn.php';"; // Comment this line if you don't want to redirect
     print "</script>";
		
			}
			else {
			
	print "<script>";
     print " self.location='express_int_form.php?eiid=$strreceiver&gen=$streigen';"; // Comment this line if you don't want to redirect
     print "</script>";
			//exit();
			

}
?>

