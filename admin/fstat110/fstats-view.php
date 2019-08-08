<?
/*
#####################################################################
#                          Free Statistics                          #
#                           Version 1.1.0                           #
#                       ©2003 Free-Webhosts.com                     #
#####################################################################

#####################################################################
#                                                                   #
#  Author      :  Free-Webhosts.com                                 #
#  Date        :  July 31, 2003                                     #
#  Website     :  http://www.free-webhosts.com/                     #
#  Contact     :  http://www.free-webhosts.com/contact.php          #
#  License     :  FREE (GPL);  See Copyright and Terms below, or    #
#                 http://www.free-webhosts.com/free-statistics.php  #
#                                                                   #
#####################################################################


See readme.txt for installation, copyright, change log, and other notes.


###########################################################################################
###########################################################################################
*/



require "config.php";

if(isset($_GET['last_x_days'])) $last_x_days=$_GET['last_x_days']; # register globals off?
if (isset($last_x_days))
{
  $last_x_days=round($last_x_days);
  if ($last_x_days>0) $limit=$last_x_days;
}


if ($no_cache == 1)
{
  # no cache
  header("Expires: Tue, 17 Jun 2003 01:00:00 GMT");			# Date in the past
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");	# always modified
  header("Cache-Control: no-store, no-cache, must-revalidate");	# HTTP/1.1
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");							# HTTP/1.0
}

function diff_of_days($start_date,$end_date)
{
	// Gets the difference in days between two dates.(YYYY-MM-DD)
      // total numbers of days in range = diff_of_days($start_date,$end_date) + 1
	$s_parts = explode("-",$start_date);
	$e_parts = explode("-",$end_date);
	$s_timestamp = mktime(0,0,0,$s_parts[1],$s_parts[2],$s_parts[0]);
	$e_timestamp = mktime(0,0,0,$e_parts[1],$e_parts[2],$e_parts[0]);
	$difference = abs($e_timestamp - $s_timestamp)/86400;
	return($difference);
}

function date_x_days_ago($start_date,$xdays)
{
	// Gets the date x days before $start_date. (YYYY-MM-DD)
	$s_parts = explode("-",$start_date);
	$e_timestamp = mktime(0,0,0,$s_parts[1],$s_parts[2]-$xdays,$s_parts[0]);
	$end_date = date("Y-m-d",$e_timestamp);
	return($end_date);
}

$today = date("Y-m-d");
$time1 = date("H:i:s");
$time2 = date("g:i a");


?><html><head>
<title>Free statistics - Daily Hits</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<style type="text/css">
<!--
BODY { COLOR: #344684; FONT-FAMILY: Arial, Helvetica, sans-serif; SCROLLBAR-FACE-COLOR: #0080FF; SCROLLBAR-HIGHLIGHT-COLOR: #FFFFFF; SCROLLBAR-SHADOW-COLOR: #5b6bb6; SCROLLBAR-3DLIGHT-COLOR: #000000; SCROLLBAR-ARROW-COLOR: #fdfc65; SCROLLBAR-TRACK-COLOR: #B9C9FF; SCROLLBAR-DARKSHADOW-COLOR: #000000; }
A:hover { FONT-FAMILY: Arial, Helvetica, sans-serif; COLOR: #FF0000; FONT-WEIGHT: bold; TEXT-DECORATION: underline
}
-->
</style>
</head>
<body>

<?


do {      // BEGIN MAIN ============================================================



$xConn=mysql_connect($host,$uid,$pwd);
mysql_select_db($db,$xConn);


# find first date recorded
$strsql="SELECT * FROM stats_day ORDER BY date LIMIT 0, 1";
if (!($result = mysql_query($strsql)))
{
  $strError0="Open Stats Database Failed<br>";
  $strError1="Error Number: ".mysql_errno().$BR;
  $strError2="Error Description: ".mysql_error.$BR;
  $strError5="Query: ".$strsql.$BR.$BR."strWhere: ".$strWhere.$BR;
  $strError0=$BR.$strError0.$strError1.$strError2.$strError5;
  echo $strError0;
  break;
}
$intTotalRecs=mysql_num_rows($result);
if (($intTotalRecs==0))
  { ?>
<P align=center><font size=5 color=red>No days recorded in database.</font><p>
<? break;
  }
$row=mysql_fetch_row($result);
$first_day=$row[0];
$ndays = diff_of_days($first_day,$today)+1;
$ndaysf = number_format($ndays);


if ($limit>$ndays) $limit=$ndays;
$start_date = date_x_days_ago($today,$limit-1);
if (($start_date < $first_day)) $start_date = $first_day;


$strsql="SELECT * FROM stats_day WHERE date >= '$start_date' ORDER BY date DESC LIMIT 0, $limit";
if (!($result = mysql_query($strsql)))
{
  $strError0="Open Stats Database Failed<br>";
  $strError1="Error Number: ".mysql_errno().$BR;
  $strError2="Error Description: ".mysql_error.$BR;
  $strError5="Query: ".$strsql.$BR.$BR."strWhere: ".$strWhere.$BR;
  $strError0=$BR.$strError0.$strError1.$strError2.$strError5;
  echo $strError0;
  break;
}
$intTotalRecs=mysql_num_rows($result);
if (($intTotalRecs==0))
  { ?>
<P align=center><font size=5 color=red>No non-zero days recorded in database within specified range.</font><p>
<P align=center><b>Hits are recorded since</b> <font color=blue><b><? echo $first_day; ?></b></font> (<? echo $ndaysf; ?> days)</p>

<? break;
  }


$x=0;
$high_hits=0;
$total_hits=0;
$high_day="";
$newest_date="";
$newest2_date="";

while(($row=mysql_fetch_row($result)))
{
  $date[$x]=$row[0];
  $hits[$x]=$row[1];
  $total_hits+=$row[1];
  if($x==0) { $newest_date = $row[0]; $newest_hits=$row[1]; }
  if($x==1) { $newest2_date = $row[0]; $newest2_hits=$row[1]+$newest_hits; }
  if($row[1]>$high_hits) { $high_hits=$row[1]; $high_day=$row[0];}
  if (!isset($low_hits)) { $low_hits=$row[1];  $low_day=$row[0]; }
  if($row[1]<$low_hits)  { $low_hits=$row[1];  $low_day=$row[0];}
  $x++;
}


$number_days=$x;



# fill in array with days that had 0 hits and therefore not recorded
$date[$x]="0000-00-00";		# create next array values to prevent error below
$hits[$x]=0;
if($number_days==$limit) {$date2=$date; $hits2=$hits;} else
{
$currentday=$today;
$currentindex=0;
for ($x=0; $x<$limit; $x++)
{
  $date2[$x]=$currentday;
  if ($date[$currentindex]==$currentday)
  {
    $hits2[$x]=$hits[$currentindex];
    $currentindex++;
  }
  else
  {
    $hits2[$x]=0;
  }
  if (!isset($low_hits)) { $low_hits=$hits2[0];  $low_day=$date2[0]; }
  if($hits2[$x]<=$low_hits)  { $low_hits=$hits2[$x];  $low_day=$date2[$x];}
  $currentday = date_x_days_ago($currentday,1);
}
}



$date=$date2;
$hits=$hits2;
$number_days=$limit;
$today = date("Y") . "-" . date("m") . "-" . date("d");


$proj_hits = 0;
$proj_hitsf = 0;
if($newest_date==$today)
{
  $mins = date("i") + date("G")*60.0;	# minutes used today
  $proj_hits = $newest_hits * (1440.0/$mins);
  if(isset($newest2_hits))
    $proj_hits = $newest_hits + ( (1440.0-$mins)*($newest2_hits/($mins+1440.0)) );
  $proj_hits = round($proj_hits);
  $proj_hitsf = number_format($proj_hits);
}
$average_hits = ($total_hits + $proj_hits - $hits2[0]) / $number_days;
$average_hits =  round($average_hits,2);
$total_hitsf   = number_format($total_hits);
$high_hitsf    = number_format($high_hits);
$low_hitsf     = number_format($low_hits);
$average_hitsf = number_format($average_hits);
if($high_hits==0) $high2=1;
else
{
  $high2=$high_hits;
  if ($proj_hits>$high2) $high2=$proj_hits;
}



?>

<div align=center><center>
<table border=0 cellpadding=10 cellspacing=0><tr><td valign=top>

<div align=center><center>
<table border=1 cellpadding=5 cellspacing=0>
<tr bgColor="#0000FF">
<th colspan=2 align=center><font color="#B9C9FF">General Statistics</font></th>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Projected hits for today</b></td>
<td align=center><font color=red><b><? echo $proj_hitsf; ?></b></font>
</td>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Server </b><b>date</b></td>
<td align=center><font color=blue><b><? echo $today; ?></b></font></td>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Server time</b></td>
<td align=center><font color=blue><b><? echo $time1; ?> </b></font>(<? echo $time2; ?>)</td>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Hits are recorded since</b></td>
<td align=center><font color=blue><b><? echo $first_day; ?></b></font> (<? echo $ndaysf; ?> days)</td>
</tr>
</table></center></div>

</td><td>

<div align=center><center>
<table border=1 cellpadding=5 cellspacing=0>
<tr bgcolor="#0000FF">
<th colspan=3 align=center><font color="#B9C9FF">Hits For Last <font color="yellow" size="+1"><? echo $number_days; ?></font> Days</font></th>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Total</b></td>
<td colspan=2 align=center><font color=red><b><? echo $total_hitsf; ?></b></font></td>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Average</b></td>
<td colspan=2 align=center><font color=red><b><? echo $average_hitsf; ?></b></font></td>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Most</b></td>
<td align=right><font color=red><b><? echo $high_hitsf; ?></b></font></td>
<td align=center><font color=blue><b><? echo $high_day; ?></b></font>
</td>
</tr>
<tr>
<td bgcolor="#B9C9FF"><b>Least</b></td>
<td align=right><font color=red><b><? echo $low_hitsf; ?></b></font></td>
<td align=center><font color=blue><b><? echo $low_day; ?></b></font></td>
</tr>
</table></center></div>

</td></tr>
</table></center></div>


<?


echo "
<h1 align=center><font size=5 color=blue face=Arial>Hits graph for last $limit days</font></h1><p>
<center>

<table border=1 cellPadding=0 cellSpacing=0><tr><td bgColor=\"#EEEEEE\">
<table border=0 cellPadding=5 cellSpacing=0>

<tr bgColor=\"#B9C9FF\"><th align=center>Date</th><th align=center>Hits</th><th align=center>Graph</th></tr>
";

for ($x=0; $x<$number_days; $x++)			# display graph
{
$width=$bar_width * ($hits[$x] / $high2);
$width=round($width);
$hitsf = number_format($hits[$x]);
$projbar="";
if ($proj_hits>0 && $x==0)
{
  $width2 = $bar_width * (($proj_hits-$hits[$x])/ $high2);
  $width2 = round($width2);
  if ($width2>0)
    $projbar = "<img src=\"$bar2_image\" border=0 width=$width2 height=$bar_height alt=\"Projected: $proj_hits\">";
}
echo "<tr>
<td>$date[$x]</td>
<td align=right><b>$hitsf</b></td>
<td><img src=\"$bar_image\" border=0 width=$width height=$bar_height>$projbar</td>
</tr>\n";
}

echo "\n</table><td></tr></table>\n\n</center>\n\n";



} while(0);

mysql_close();

?>

<br>

<div align=center><center>
<table border=1 cellspacing=0 cellpadding=10 bgcolor="#C0C0C0"><tr><td>
<form method="GET">
<p align=center><b>Show stats for last 
<input type="text" name="last_x_days" size=5 value="<? echo $limit?>"> days.<br>
<input type="submit" value="Submit"><input type="reset" value="Reset"></b></p>
</form></td></tr>
</table></center></div>

<p>

<p align=center><font size=2><br>
</font>

<p>

</body></html>
