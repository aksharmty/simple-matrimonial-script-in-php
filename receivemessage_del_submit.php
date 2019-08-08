<?php include('memprotect.php'); ?>
<?php
include('dbconnect.php'); 



$recsno=$_GET["recsno"]; 
$data=trim($recsno); 
$ex=explode(" ",$data); 
$size=sizeof($ex); 
for($i=0;$i<$size;$i++) 
{ 
    $id=trim($ex[$i]); 
    $sql="delete from receivemessage where rid='$id'"; 
    $result=mysql_query($sql);
    
} 

 	print "<script>";
     print " self.location='inbox_msg.php?action=s';"; // Comment this line if you don't want to redirect
     print "</script>";

?>