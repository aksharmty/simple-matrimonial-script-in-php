<?php
session_start();
include('dbconnect.php');
			// username and password sent from signup form 
			$myusername = $_POST['txtusername']; 
			$mypassword = md5($_POST['txtpassword']);
			 

			$sql="SELECT MatriID,ConfirmEmail,ConfirmPassword FROM register  WHERE MatriID= '$myusername'  and ConfirmPassword='$mypassword'  OR  ConfirmEmail='$myusername' and ConfirmPassword='$mypassword' ";
			$result=mysql_query($sql);
			while($row = mysql_fetch_array($result))
 			 {
			 $strusername = $row['MatriID'];
			 }
			
			// Mysql_num_row is counting table row
			$count=@mysql_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row
			
			if($count==1){
$update1 = mysql_query("update register set Logincount=(Logincount+1) WHERE MatriID= '$myusername' OR ConfirmEmail='$myusername'");
			
			
			// Register $myusername, $mypassword and redirect to file "login_success.php"
			session_register("myusername");
			$_SESSION['username'] = $strusername;
			//$_SESSION['ConfirmEmail'] = $row['ConfirmEmail']; 
			 
			header('location:authenticate.php?Action=Success');
		//header($_SERVER['HTTP_REFERER']);
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


