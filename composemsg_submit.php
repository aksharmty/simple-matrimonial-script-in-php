<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php

// Remove HTML tags
include 'dbconnect.php'; 
$_POST['txtTo']= strip_tags($_POST['txtTo']);
$_POST['txtmsg']= strip_tags($_POST['txtmsg']);
$strdate = date('d-M-Y'); 

$insert1 = mysql_query("insert into sentmessage (ToID,FromID,Msg,SendDate) values ('".$_POST['txtTo']."','".$_SESSION['matriid']."','".$_POST['txtmsg']."','$strdate ')")
or die("Could not insert data because ".mysql_error());

///////////////////////////////////////////////////////
$insert2 = mysql_query("insert into receivemessage (ToID,FromID,Msg,SendDate) values ('".$_POST['txtTo']."','".$_SESSION['matriid']."','".$_POST['txtmsg']."','$strdate ')")
or die("Could not insert data because ".mysql_error());
///////////////////////////////////////////


 	 print "<script>";
     print " self.location='composemsgconfirm.php';"; // Comment this line if you don't want to redirect
     print "</script>";






?>