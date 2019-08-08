<!--     This utility is provided by HIOX INDIA   	-->
<!--     This is a copyright product of HIOXINDIA 	-->
<!--     Visit us at http://www.hioxindia.com         -->
<!--     Visit us at http://www.hscripts.com          -->

<?php

$rip = $_SERVER['REMOTE_ADDR'];
$sd  = time();
$count = 1;
$maxu = 1;

$file1 = "HUOb/ip.txt";
$lines = file($file1);
$line2 = "";

foreach ($lines as $line_num => $line)
	{
		if($line_num == 0)
		{
		   $maxu = $line;
		}
		else
		{
			//echo $line."<br>";
			$fp = strpos($line,'****');
			$nam = substr($line,0,$fp);
			$sp = strpos($line,'++++');
			$val = substr($line,$fp+4,$sp-($fp+4));
			$diff = $sd-$val;

			if($diff < 300 && $nam != $rip)
				{
				 $count = $count+1;
				 $line2 = $line2.$line;
				 //echo $line2; 
				}
		}
	}

$my = $rip."****".$sd."++++\n";
if($count > $maxu)
	$maxu = $count;

$open1 = fopen($file1, "w");
fwrite($open1,"$maxu\n");
fwrite($open1,"$line2");
fwrite($open1,"$my");
fclose($open1);

echo "<table width=180 height=30 bgcolor=#fdfdfd style=\"border: 1px green solid;\"><tr><td align=left valign=top>";
echo "<span style=\"font-family: verdana,arial,helvetica; font-size: 10px;\">";
echo "<a style=\"text-decoration: none; background-color: green; color: #ddccdd;\" href=\"http://www.hscripts.com\">H</a></span></td><td align=center>";
echo "<span style=\"font-family: verdana,arial,helvetica; font-size: 11px; font-weight: bold; color: #aaccaa;\">";
echo "Total users online - <font color=red>$count</font><br>";
echo "Max users at a time - <font color=red>$maxu</font>";
echo "</td></tr></table>";
?>