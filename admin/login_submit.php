<?php
//ob_start();

include('../dbconnect.php');
    # this is processed when the form is submitted
    # back on to this page (POST METHOD)
 // if ($_SERVER['REQUEST_METHOD'] == "POST")
 // { 

			// Connect to server and select databse.
			//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
			//mysql_select_db("$db_name")or die("cannot select DB");
			
			// username and password sent from signup form 
			$myusername=$_POST['txtusername']; 
			$mypassword=$_POST['txtpassword']; 

			// validation starts
			
			
			//if(!$_POST['txtusername'] | $_POST['txtpassword'])
			//{
			//header("location:login.php?Action=required");
			//}
			

			$sql="SELECT * FROM adminlogin WHERE adminusername='$myusername' and adminpassword='$mypassword'";
			$result=mysql_query($sql);
			
			// Mysql_num_row is counting table row
			$count=@mysql_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row
			
			if($count==1){
			// Register $myusername, $mypassword and redirect to file "login_success.php"
			session_register("adminusername");
			session_register("mypassword"); 
			header("location:index.php");
			}
			else {
			
			//echo "Wrong Username or Password";
			ob_start();
?>

<?PHP
			header('location:login.php?Action=wrong');
			exit();
			
//ob_end_flush();

//}

}
?>

