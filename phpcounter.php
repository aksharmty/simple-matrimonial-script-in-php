<?
//
// phpcounter.php
//
$myPage = $_SERVER['DOCUMENT_ROOT'];
$lastPeriod = strrpos($myPage,".");
$lastSlash = strrpos($myPage,"/") + 1;
if(!$lastSlash)
{
  $lastSlash=1;
}
$myLength = $lastPeriod-$lastSlash;
$newString = substr($myPage,$lastSlash,$myLength);
$newString = $newString . '.counter';
$existingfile = file_exists($newString);
if(!$existingfile)
{
  $hits[0] = 0;
  $fp = fopen($newString , "w");
  fputs($fp , "$hits[0]");
  fclose($fp);
}
$hits = file($newString);
$hits[0]++;
$fp = fopen($newString , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo $hits[0];
?>
