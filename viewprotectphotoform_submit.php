<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php include("dbconnect.php"); ?>

<?php

	$strpass  = $_POST['txtppwd'];
	$strpassid  = $_POST['txthidid'];
	
$sql="SELECT MatriID,PhotoprotectPassword FROM register WHERE MatriID= '$strpassid' and PhotoprotectPassword='$strpass' ";
			$result=mysql_query($sql);
			while($row = mysql_fetch_array($result))
 			 {
			// $strusername = $row['MatriID'];
			 }
			
			// Mysql_num_row is counting table row
			$count=@mysql_num_rows($result);
			if($count==1)
			{
  	print "<script>";
    print " self.location='viewphoto.php?id=$strpassid';"; // Comment this line if you don't want to redirect
    print "</script>";
			}
			else 
			{
	 print "<script>";
     print " self.location='viewprotectphotoform.php?action=wrong';"; // Comment this line if you don't want to redirect
     print "</script>";	
			}
?>


