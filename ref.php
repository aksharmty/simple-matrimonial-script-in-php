<?php
$ref = $_SERVER["HTTP_REFERER"];
//echo $ref;
if ( $ref == 'http://www.mydomain.com/gatepage.php' )
{
//record visit
}
else
{
//send to gatepage.php
header("Location:http://www.somegatepage.com");
exit;
}
?>

