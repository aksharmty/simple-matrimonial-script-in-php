<?
$textfile ="random.txt";
$items = file("$textfile");
$item = rand(0, sizeof($items)-1);
echo $items[$item];
?>