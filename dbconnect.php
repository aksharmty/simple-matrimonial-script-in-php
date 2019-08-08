<?php
// This is for Mysql Database Connection String File for Remote Machine
ob_start();
$con = mysql_connect("localhost","jeevansa_sunita","hgRTR$#$#@92138164422019") or die ('Error Connectiong to mysql: '.mysql_error());
$dbname = "jeevansa_index";
mysql_select_db($dbname,$con) or die ("Select Error: ".mysql_error());
?>