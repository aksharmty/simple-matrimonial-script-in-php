<?

$today1 = strtotime ('now');
$today=date("d.m.Y",$today1);
$f_date1 = mktime(0,0,0,1,18,2002);
$f_date=date("d.m.Y",$f_date1);
$difference = intval(($f_date1 - $today1)/86400+1);

//output

echo"Today is : $today<br>";
echo"Your date : $f_date<br>";
echo"Difference : $difference";

echo datediff('9 July 2003', '4 March 2004', false);

?> 
