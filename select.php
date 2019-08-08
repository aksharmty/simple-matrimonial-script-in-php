<?php
$con = mysql_connect("localhost","root","selva");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("matri", $con);
  $result = mysql_query("SELECT * FROM register");
  while($row = mysql_fetch_array($result))
  {
  echo $row['Thislogin'] . " " . $row['Lastlogin'];
  echo "<br />";
  }mysql_close($con);
?>