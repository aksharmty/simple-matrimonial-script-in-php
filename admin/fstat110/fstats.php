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

*/



require "config.php";

$date = date("Y") . "-" . date("m") . "-" . date("d");

$strsql="SELECT * FROM stats_day where date='$date'";

$xConn=mysql_connect($host,$uid,$pwd);
mysql_select_db($db,$xConn);

if (!($result = mysql_query($strsql)))
{
  $strError0="Open Stats2 Database Failed<br>";
  $strError1="Error Number: ".mysql_errno().$BR;
  $strError2="Error Description: ".mysql_error.$BR;
  $strError5="Query: ".$strsql.$BR.$BR."strWhere: ".$strWhere.$BR;
  $strError0=$BR.$strError0.$strError1.$strError2.$strError5;
  echo $strError0;
  break;
}
else
{
  $intTotalRecs=mysql_num_rows($result);
  if ($intTotalRecs>0) mysql_query("UPDATE stats_day SET hits = hits + 1 WHERE date='$date'");
  else mysql_query("INSERT INTO stats_day SET date='$date',hits='1'");
}

mysql_close();

?>
