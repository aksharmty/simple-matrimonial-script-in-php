<?php
// DISPLAY ERRORS BUT HIDE NOTICES
error_reporting(E_ALL ^ E_NOTICE);

include("skins/admin/admin_header.php");
$class = "table_menu";


if (is_file("mg2_settings.php")) {
?>

<table class="table_menu" cellpadding="0" cellspacing="0">
<tr valign="top">
  <td align="center" colspan="2">
    <p><strong>MG2 already installed!</strong></p>
    <p>The installation wizard is not available because MG2 has already been configured.</p>
	<a href="index.php" target="_self">View gallery</a>
  </td>
</tr>
</table>

<?php
  exit();
}

if($_REQUEST['step'] == "") {
  include("includes/mg2_functions.php");
  $mg2 = new mg2db;
  $step = "1";
  $failure = "<span class=\"install_failure\">Failure</span>";
  $success = "<span class=\"install_success\">Success</span>";

  @rmdir("x");
  if (@mkdir("x")) {
    $test1 = $success;
    @rmdir("x");
  } else {
    $test1 = $failure;
    $todo = "- Grant the script write access to the gallery folder (CHMOD 777) - <a href=\"http://www.google.dk/search?hl=da&q=chmod+tutorial&meta=\" target=\"_blank\">help!</a><br />";
  }
  
  $test2 = $success;
  @rmdir("pictures/x");
  if (@mkdir("pictures/x")) {
    @rmdir("pictures/x");
  } else {
     $test2 = $failure;
    $todo = "- Create folder called 'pictures' in gallery root <u>using FTP</u> and chmod to 777";
  }

  $test3 = $success;
  if (!is_file("index.php")) $test3 = $failure;
  if (!is_file("admin.php")) $test3 = $failure;
  if (!is_file("includes/mg2_version.php")) $test3 = $failure;
  if (!is_file("includes/mg2admin_functions.php")) $test3 = $failure;
  if (!is_file("includes/mg2_functions.php")) $test3 = $failure;
  if ($test3 != $success) {
    $todo = "- Upload all gallery files<br />";
  }

  if ($mg2->gd_version() < 2) {
    $test4 = $failure;
    $todo = "- Install GD image library (<a href=\"http://www.boutell.com/gd/\" target=\"_blank\">http://www.boutell.com/gd/</a>)";
  } else $test4 = $success . " ($mg2->gd_version_number)";

  include("skins/admin/install.php");
}

if($_REQUEST['step'] == "2") {
  $workdir = opendir("lang");
  while (false !== ($pointer = readdir($workdir))) {
    if ($pointer !== "." && $pointer !== "..") {
      $lang[] = $pointer;
    }
  }
  sort($lang);
  include("skins/admin/install.php");
}

if($_REQUEST['step'] == "3") {
  $filebuffer = "<?php\n";
  $_REQUEST['gallerytitle'] = str_replace("\'","'",$_REQUEST['gallerytitle']);
  $filebuffer.= "$" . "mg2->"."gallerytitle = ".chr(34).$_REQUEST["gallerytitle"].chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."adminemail = ".chr(34).$_REQUEST["adminemail"].chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."defaultlang = ".chr(34).$_REQUEST["defaultlang"].chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."activeskin = ".chr(34)."rounded".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."dateformat = ".chr(34)."d M Y".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."marknew = ".chr(34)."7".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."sendmail = ".chr(34)."1".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."foldericons = ".chr(34)."0".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."showexif = ".chr(34)."1".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."showcomments = ".chr(34)."1".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."autolang = ".chr(34)."1".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."copyright = ".chr(34)."Copyright &copy; 2005".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."password = ".chr(34).md5(strrev(md5($_REQUEST["password"]))).chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."extensions = ".chr(34)."jpeg,jpg,gif,png".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."mediumimage = ".chr(34)."1024".chr(34).";\n";
  $filebuffer.= "$" . "mg2->"."indexfile = ".chr(34)."index.php".chr(34).";\n";
  $filebuffer .= "$" . "mg2->"."thumbquality = ".chr(34)."85".chr(34).";\n";
  $filebuffer .= "$" . "mg2->"."imagecolumns = ".chr(34)."4".chr(34).";\n";
  $filebuffer .= "$" . "mg2->"."imagerows = ".chr(34)."5".chr(34).";\n";
  $filebuffer .= "$" . "mg2->"."slideshowdelay = ".chr(34). "10" .chr(34).";\n";
  $filebuffer .= "$" . "mg2->"."websitelink = ".chr(34).chr(34).";\n";
  $filebuffer .= "$" . "mg2->"."installdate = ".chr(34). time() .chr(34).";\n";
  $filebuffer .= "?>";
  $fd = fopen("mg2_settings.php","w+");
  fwrite($fd,$filebuffer);
  fclose($fd);
  
  include("skins/admin/install.php");
}
include("skins/admin/admin_footer.php");
exit();
?>
