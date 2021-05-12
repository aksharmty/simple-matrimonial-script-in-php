<?php
include "connect.php";
$content = file_get_contents('sitemap.xml');
$content = str_replace('</urlset>', '', $content);
file_put_contents('sitemap.xml', $content);

$sql = "SELECT * FROM item where tt ='0' order by id desc limit 1";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $id=$row["str"];
    echo "id: " . $row["id"]. " - Name: " . $row["str"]. "<br>";
    $myFile = "sitemap.xml";
    $url ="http://yourdomainname.tld/";
$fh = fopen($myFile, 'a') or die("can't open file");
   fwrite($fh, "<url><loc>");
   fwrite($fh, $url.$id);
   fwrite($fh, "</loc></url>");
   fclose($fh);
   $ttup = mysqli_query($connection,"update item set tt = '1' where id = '$id'");
  }
} else {
  echo "0 results";
}
?>
<?php
$fh1 = fopen($myFile, 'a') or die("can't open file");
   fwrite ($fh1, "</urlset>\n");
   fclose($fh1);
?>
