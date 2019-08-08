<!-- 
=================================================
=== PIG version 0.2.0.4 from 20 OCT 2009
=== Artem Komarov / Linker
=== Changes from pig-0.2.0.3:
=================================================
=== Add: phpinfo() generator
=== Mod: some cosmetics(button re-arrange, suicide now closes the window)
=================================================
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
        "http://www.w3.org/TR/REC-html40/loose.dtd">
		
<HEAD>

	<STYLE TYPE="text/css">

		green { color : green }
		red { color : red }
		
		#pig 
		{
			position: fixed;
			right: 10px;
			bottom: 10px;
		}

	</STYLE>

</HEAD>
		
<BODY id="body">

<?
//DEFINITIONS

define ('DEBUG', false);
define ('VERSION', '0.2.0.4');

if( DEBUG )
	ini_set( 'display_errors', '1' );
	
LogEvent("QUERY_STRING: " . $_SERVER['QUERY_STRING']);

$controlpanelarr = array
(
	1 => array
	(
		"iis","iis2-1","iis2-2","iis2","iis3","iis4","iis5","iis6","iis7","iis8","iis9","iis10","iis11","iis12","iis13","iis14","iis15",
		"iis16","iis17","iis18","iis19","iis64","web","web2","web3","web4","web5","web6","web7","web8","web9","web10","web11","web12",
		"web14","web15","web16","web17","web18","web19","web20","web21","web22","web23","web24","web25","web26","web28","web29","web30",
		"web31","web32","web33","web34","web35","web36","web38","web39","web40","web41","web42","web43","web44","web45","web46","web47",
		"web48","web49","web50","web51","web52","wb53","web54","web55","web56","web57","web58","web98","web107","web160","web218",
		"web224","web236","web254","web257","web1000"
	),
	2 => array
	(
		"iis20","iis21","iis22","iis23","iis24","iis25","iis26","iis27","iis28","iis29","iis30","iis31","iis32","iis33","iis34","iis35",
		"iis36","iis37","iis38","iis39","iis40","iis41","iis42","web59","web60","web61","web62","web63","web64","web65",
		"web66","web67","web68","web69","web70","web71","web72","web73","web74","web75","web76","web77","web78","web79","web80",
		"web81","web82","web83","web84","web85","web86","web87","web88","web89","web90","web91","web92","web93","web94","web95",
		"web96","web97","web99","web100","web101","web105","web106","web207","web208","web225","web246","web256","web258"
	),
	3 => array
	(
		"iis43","iis44","iis45","iis46","iis47","iis48","iis49","iis50","iis51","iis52","iis53","iis54","iis55","iis56","iis57","iis58",
		"iis59","iis60","iis61","iis62","iis63","iis65","iis66","iis67","iis68","iis69","iis70","iis71","iis72","iis73","iis74","iis75",
		"iis76","iis77","iis78","iis79","web102","web103","web104","web108","web109","web110","web111","web112","web113","web114",
		"web115","web116","web117","web118","web119","web120","web121","web122","web123","web124","web125","web126","web127","web128",
		"web129","web130","web131","web132","web133","web134","web135","web136","web137","web138","web139","web140","web141","web142",
		"web143","web144","web145","web146","web147","web204","web205","web206","web226","web237","web252","web259","web2000"
	),
	4 => array
	(
		"iis80","iis81","iis82","iis83","iis84","iis85","iis86","iis87","iis88","iis89","iis90","iis91","iis92","iis93","iis94","iis95",
		"iis96","iis97","iis98","iis99","iis100","iis101","iis102","iis103","iis104","iis105","iis106","iis107","iis108","iis109",
		"iis110","iis111","iis112","iis113","iis114","iis115","iis116","iis117","iis118","iis119","iis120","iis121","iis122","iis123",
		"iis124","iis125","iis126","iis127","iis128","iis129","iis130","iis131","iis135","iis136","iis137","web148","web149","web150",
		"web151","web152","web153","web154","web155","web156","web157","web158","web159","web161","web162","web163","web164","web165",
		"web166","web167","web168","web169","web170","web171","web172","web173","web174","web175","web176","web177","web178","web179",
		"web180","web181","web182","web183","web184","web185","web186","web187","web188","web189","web190","web191","web192","web193",
		"web194","web195","web196","web197","web198","web199","web200","web201","web202","web203","web209","web210","web211","web212",
		"web213","web214","web219","web220","web221","web227","web238","web245","web255","web260"
	),
	5 => array
	(
		"iis132","iis133","iis134","iis138","iis139","iis140","web215","web216","web217","web222","web223","web228","web229","web230",
		"web231","web232","web233","web234","web235","web239","web240","web241","web242","web243","web244","web247","web248","web249",
		"web253","web261"
	)
);

define('WIN','WINNT');
define('LINUX','Linux');
define('N','<br>');
//debug levels:
define( 'INFO', 0 );
define( 'WARN', 1 );
define( 'ERR', 2);

define('DS', PHP_OS == WIN ? "\\" : "/" );
define('DIRSCANFN', 'pig-dirscan.pl');

if(version_compare(PHP_VERSION,'5.0.0','<')){$phpver=4;}else{$phpver=5;}

$logFH = NULL;

$serverdomainname=GetServerDomainName();
$controlpanel = GetCPNumber($serverdomainname);
$serverphpinipath='';
$php_ini_contents='';
$php_ini_contents_arr=array();
$wasNewLine = true;
preg_match(PHP_OS==LINUX?'#/hsphere/local/home/([^/]*)/([^/]*)/([^/]*)#':'/d:\\\\hshome\\\\([^\\\\]*)\\\\([^\\\\]*)\\\\([^\\\\]*)/i',__FILE__,$matches);
$username=$matches[1];
$domainname=$matches[2];
$rootdir=PHP_OS==LINUX?'/hsphere/local/home/':'d:\\hshome\\';
$rootdir.=$username;
SetPhpIniPath($domainname);
srand();
$inodeQuota = 0;
$inodeFiles = 0;
$overQuota = false;

//contents of php5-custom-ini.cgi
$custom_php_cgi = 
"#!/bin/sh
export PHP_FCGI_CHILDREN=3
exec /hsphere/shared/php5/bin/php-cgi -c ";

$htaccess = 
"AddHandler phpini-cgi .php .htm
Action phpini-cgi /cgi-bin/php5-custom-ini.cgi";

$searchpattern = 
"ddHandler phpini-cgi .php .htm
Action phpini-cgi /cgi-bin/php5-custom-ini.cgi";//this will never return 0 in strpos which may be interpreted as false

//PERL script for Windows - resturns domain list in JSON format
$dirScanFileContent = '
#!c:\\perl\\perl
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\\n\\n";
$rootdir = \'' . addslashes($rootdir) . '\';
opendir(DH, $rootdir);
@dirContent = readdir DH;
print(\'{"domains":[\');
foreach(@dirContent)
{
	if( -d $rootdir.\'\\\\\'.$_ ) 
		{ print(\'"\'.$_.\'",\'); }
}
print("]}");
';

//Added at the beginning of each generated php.ini file
$phpIniHeader = 
';                           |PIG v' . VERSION . '|
';

?>

<!-- ----------------------- FUNCTIONS ---------------------- -->

<?
//Error handling
function myErrorHandler($errNumber, $errMessage, $errFile, $errLine, $errContext)
{
echo "<b>ERROR </b>at line $errLine: $errMessage<br>Context:<br><pre>";
var_dump($errContext);
echo "</pre>";
}

$phpver = PHP_VERSION;
if( $phpver[0] == '4' )
{ set_error_handler("myErrorHandler"); }//In PHP4 there should be only one argument
else
{ set_error_handler("myErrorHandler", E_WARNING); }

//PHP4 Compatiblity Functions
function stripos4($haystack, $needle)
	{ return strpos($haystack, stristr( $haystack, $needle )); }
	
function file_put_contents4($fn, $data)
{
	$f = fopen($fn, 'w');
	fwrite($f, $data);
	fclose($f);
}

function file_get_contents4($fn)
{
	$f = fopen($fn, 'r');
	$content = fread($f, filesize($fn));
	fclose($f);
	return $content;
}

//General Functions
function nop()//used as placeholder where nothing to do but should be anything(like condition()?(nothing):(something))
{}

function GetQuota()
{
	global $inodeQuota, $inodeFiles, $overQuota;
	if( PHP_OS == LINUX )
	{
		ob_start();
		echo "<pre>";
		system('quota -s');
		$sQuota = ob_get_clean();
		$aQuota = split("\n", $sQuota);
		$sKey = $aQuota[1] . ' ';
		$sVal = $aQuota[2] . ' ';
		$isLimit = false;
		do
		{
			$sKey = ltrim($sKey);
			$isElementFound =   $sKey != '';
			$isNull = false;
			if($isElementFound)
			{	
				$iKeyLen = strcspn($sKey, ' ');
				$aKey[] = substr($sKey, 0, $iKeyLen);
				if( trim(substr($sVal, 0, $iKeyLen)) == '' )//check if there's empty value under the Key
				{
					$sVal = ltrim($sVal);
					$isNull = true;
					$iValLen = $iKeyLen;
					$aVal[] = '';
				}
				else
				{
					$isNull = false;
					$sVal = ltrim($sVal);
					$iValLen = strcspn($sVal, ' ');
					$aVal[] = substr($sVal, 0, $iValLen);//Extract value
				}
				//Delete extracted value from start of string
				if( ! $isNull)//otherwise it has been already trimmed
					$sVal = substr($sVal, $iValLen, strlen($sVal) - $iValLen);
				$sKey = substr($sKey, $iKeyLen + 1, strlen($sKey) - $iKeyLen);
			}
		}
		while ($isElementFound);
		
		$aQuota['Key'] = $aKey;
		$aQuota['Val'] = $aVal;
		$inodeFiles = $aQuota['Val'][5];
		$inodeQuota = $aQuota['Val'][7];
		$overQuota = str_replace('k', '000', $inodeFiles) > str_replace('k', '000', $inodeQuota) ? true : false;
	}
}

function SetPhpIniPath($domain)
{
	global $rootdir,$domaindir,$phpinipath,$controlpanel;
	
	$domaindir = $rootdir . DS . $domain;
	if(PHP_OS==LINUX)//detect php.ini path, root dir and domain dir
	{
		$phpinipath=$domaindir.'/cgi-bin/php.ini';
	}
	else
	{
		$phpver = PHP_VERSION;
		$phpinipath=$domaindir.'\\php'.$phpver[0].'.ini';
	}
}

function LogEvent( $event )
{
	if( DEBUG )
	{
		global $logFH;
		
		if( is_null($logFH) )
		{
			$logFH = fopen("pig.log", "a");
			$date = date("Y-m-d   H:i:s");
			fputs($logFH, "--------------------- LogStart: $date ---------------------\n");
		}
		
		fputs($logFH, $event . "\n");
	}
}

function LogMsg ( $text, $newLine = true, $logLevel = INFO )
{
	if ( DEBUG )
	{
	global $wasNewLine;
	if( $wasNewLine) 
		echo 'Log: ';
	
		switch ( $logLevel )
		{
			case INFO:
				echo '<B>' . $text . '</B>';
				break;
			
			case WARN:
				echo '<green>' . $text . '</green>';
				break;
				
			case ERR:
				echo '<red>' . $text . '</red>';
				break;
		}//switch
		
		if( $newLine ) 
		{ 
			echo N;
			$wasNewLine = true;
		}//if( $newLine ) 
		else
		{
			$wasNewLine = false;
		}
		
	}//if ( DEBUG )
	
}//Log()



function PlaceCustomPhpIni($domain)
{
	
	global $rootdir;
	global $controlpanel;
	global $htaccess;
	global $custom_php_cgi;
	global $serverdomainname;
	global $searchpattern;
	global $php_ini_contents;
	global $domaindir;
	global $set_postmaster;
	global $phpinipath;
	global $doNothing;
	
	SetPhpIniPath($domain);
	LogMsg("PlaceCustomPhpIni: $domain", true, WARN );
	if(PHP_OS==LINUX)
	{
		$path=$domaindir.'/'.'cgi-bin';
		
		if( ! $doNothing ) 
		{
			file_exists($path) ? nop() : mkdir( $path );
			chmod($path,0755);
		}
		
		if($controlpanel >= 8)
		{
			if(file_exists($domaindir.'/.htaccess'))
			{
				$htacontent=file_get_contents4($domaindir.'/.htaccess');
				if(strpos($htacontent,$searchpattern)==false)
				{
					$htacontent="$htaccess\n$htacontent";
				}
				else//php handler in htaccess found
				{
					LogMsg( '** Handler Found' );
				}
			}
			else//htaccess not exists
			{
				$htacontent=$htaccess;
			}
			if( ! $doNothing )
			{
				file_put_contents4($domaindir.'/.htaccess',$htacontent);
				file_put_contents4($path.'/php5-custom-ini.cgi',$custom_php_cgi . $phpinipath);
				chmod($path.'/php5-custom-ini.cgi',0755);
			}
		}//controlpanel>=8
	}//LINUX
	if( $set_postmaster )
		switch (PHP_OS)
		{
			case WIN: UpdateParameter('sendmail_from','postmaster@'.$domain); break;
			case LINUX: UpdateParameter('sendmail_path','/usr/sbin/sendmail -t -i -fpostmaster@'.$domain); break;
		}
	if( DEBUG ) echo '<PRE>' . $php_ini_contents . '</PRE><BR>';
	$doNothing ? nop() : file_put_contents4( $phpinipath, $php_ini_contents );
}

function UpdateParameter( $key, $value)
	{
		if( $key )
		{
			LogMsg( "UpdateParameter:: Updating: $key = $value: ", false);
			
			global $php_ini_contents;
			global $php_ini_contents_arr;
			
			if ( $value == '') 
				$value = 0;
				
			if ( ( stristr( $php_ini_contents, $key ) != false ) && ( $key != 'zend_extension' ) )//key exists: change the value
			{
				LogMsg( 'Replace' );
				$php_ini_contents = preg_replace( '/^.*' . $key . '[^=]*=.*$/im', '  ' . $key . ' = ' . $value, $php_ini_contents );
				$php_ini_contents_arr = explode( "\n", $php_ini_contents );
			}
			
			else//add the new key
			
			{
				LogMsg( 'Add' );
				$arr = array();
				$w = 0;
				
				for( $q=0; $q < count( $php_ini_contents_arr ); $q++)
				{
					$arr[ $w ] = $php_ini_contents_arr[ $q ];
					LogMsg( '	UpdateParameter:: $arr[ $w ] = ' . $arr[ $w ] );
					switch ( $key ) 
					{
						case 'sendmail_from':
							if ( strcmp( $arr[ $w ], '[mail function]' ) == 0 )
							{
								LogMsg( 'UpdateParameter:: [mail function] section found' );
								$w++;
								$arr[ $w ] = '  ' . $key . ' = ' . $value;
							}
							break;
							
						case 'zend_extension':
							if( strcmp( $arr[ $w ], '[Zend]' ) == 0)
							{
								LogMsg('UpdateParameter:: [Zend] section found');
								$w++;
								$arr[ $w ] = '  ' . $key . ' = ' . $value;
							}
							break;

						default:
							if( strcmp( $arr[ $w ], '[PHP]') == 0)
							{
							LogMsg( 'UpdateParameter:: [PHP] section found' );
							$w++;
							$arr[ $w ] = '  ' . $key . ' = ' . $value;
							}
					}//switch
					
					$w++;
				}//for
				
				$php_ini_contents = implode( "\n", $arr );
			}//else: add new key
				
		}//if($key)
		
	}//function
	
function GetServerDomainName()//(C) Code by Roman Rott
{
	ob_start();
	phpinfo();
	$phpinfo = array('phpinfo' => array());
	if(preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER))
	foreach($matches as $match)
		if(strlen($match[1]))
			$phpinfo[$match[1]] = array();
		elseif(isset($match[3]))
			$phpinfo[end(array_keys($phpinfo))][$match[2]] = isset($match[4]) ? array($match[3], $match[4]) : $match[3];
		else
		   $phpinfo[end(array_keys($phpinfo))][] = $match[2];
	preg_match('/.+(((web)|(iis))[^\s]+)\s.*/i',$phpinfo['phpinfo']['System'],$matches);
		if(!stripos4($matches[1],'opentransfer.com')&&$matches[1]!='')$matches[1]=$matches[1].'.opentransfer.com';
		$matches[1]=strtolower($matches[1]);
	return $matches[1]!=''?$matches[1]:false;
}
	
function GetCPNumber($serverDomainName)
{
	global $controlpanelarr;
	preg_match('/[^\d]+(\d{0,4})/', $serverDomainName, $matches);
	$serverNumber = $matches[1];//matches '123' in 'iis123.opentransfer.com'
	$serverName = $matches[0];//matches 'iis123' in 'iis123.opentransfer.com'
	$CP = 0;
	if( $serverNumber >= 300 ) $CP = 6;
	if( $serverNumber >= 400 ) $CP = 7;
	if( $serverNumber >= 500 ) $CP = 8;
	if( $serverNumber >= 900 ) $CP = 9;
	if( 0 == $CP )
		for( $i = 1; $i <= 5; $i++ )
			if( in_array($serverName, $controlpanelarr[$i]) )
				$CP = $i;
	return $CP;

}

function GetDirList()
{
	global $dirScanFileContent;
	global $rootdir, $domainname;
	
	LogEvent("GetDirList()");
	
	if( PHP_OS == 'WINNT' )
	{
		file_put_contents4(DIRSCANFN, $dirScanFileContent);
		echo "<script>AJAXGetDirList('" . DIRSCANFN . "');</script>"; // call AJAX function to retrieve directory listing
	}
	else
	{
		$dh = opendir($rootdir);
		$json = '{"domains":['; // format data for JS update script
		while( $el = readdir($dh) )
			if( is_dir($rootdir . '/' . $el) &&   preg_match("/\w+\.\w+/",$el) &&   $el != "ssl.conf" )
				$json .= '"' . $el . '",';
		$json .= ']}';
		echo "<script>UpdateDirList('$json');</script>"; // call JS function with formed JSON string
	}
}

function GetServerPhpIniPath()
{
	global $serverphpinipath;
	global $rootdir, $domainname;
	
	LogEvent("GetServerPhpIniPath()");
	
	$phpver = PHP_VERSION;
	if( ($phpver[0] == '4')   ||   (PHP_OS == LINUX   &&   $phpver[0] == '5') )
	{
		LogEvent("--- PHP version 4");
		ob_start(); 
		phpinfo(); 
		$phpinfo_full = ob_get_contents(); 
		ob_end_clean(); 
		$phpinfo = preg_replace ('/<[^>]*>/', '', $phpinfo_full);
		preg_match ('/Configuration\ File\ \(php\.ini\)\ Path[ \t]*([^\t\n]*)/', $phpinfo, $matches); 
		$serverphpinipath = trim($matches[1]);
	}
	else
		{ 	$serverphpinipath = php_ini_loaded_file(); }
		
	LogEvent("--- \$serverphpinipath = $serverphpinipath");
	
	/*Here we need to check if php.ini was loaded from domain folder. If it is so - some settings may be incorrect, 
	we need original file from the server, so this one should be renamed. We will rename it back after script
	will be reloaded.*/
	if( stristr($serverphpinipath, $domainname) )
	{
		LogEvent("--- $domainname found in \$serverphpinipath");
		rename($serverphpinipath, $serverphpinipath . '.old');
		
		$char =   $_SERVER['QUERY_STRING'] == '' ? '' : '&';
		$refreshURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . $char . 'rename=' . base64_encode($serverphpinipath);
		LogEvent("--- Redirect: $refreshURL");
		?>
			<script>
			window.location = '<?=$refreshURL;?>';
			</script>
		<?
		exit;
	}
	
	if( strstr($serverphpinipath,'.ini') == false )
	{
		LogEvent("--- .ini part not found in $serverphpinipath");
		$serverphpinipath .= DS . 'php.ini';
		LogEvent("--- New value: $serverphpinipath");
	}
	
	if( isset($_GET['rename']) )//Rename back previously renamed file
	{
		$fn = base64_decode($_GET['rename']);
		LogEvent("--- Renaming from $fn.old to $fn");
		rename($fn . '.old', $fn);
	}	

}
	
function LoadPhpIni(&$contents)
{
	global $serverphpinipath;
	global $php_ini_contents_arr;
	global $domainname;
	global $controlpanel;
	global $phpver;
	global $phpIniHeader;
	
	LogMsg( 'LoadPhpIni:: $serverphpinipath = ' . $serverphpinipath );
	$contents = file_get_contents4( $serverphpinipath );
	if( $contents == '' ) die('No content: ' . $serverphpinipath);
	$contents = $phpIniHeader . $contents;
	$php_ini_contents_arr = explode( "\n", $contents);
}
?>
<script>
var cbflag=true;
var fcbPostmaster=false;
var sDefaultSendmailFrom='';
var iDomainsChecked=999;//value doesn't make sense, this is only for function to determine it should be initialized
//Modified code from: http://www.citforum.ru/internet/javascript/dynamic_form/
var c=0;
function addline()
{
	c++;
	newline='<TR><TD><INPUT TYPE="text" NAME="add_param_name['+c+']"> = <TD><INPUT TYPE="text" NAME="add_param_val['+c+']">';
	s=document.getElementById('table').innerHTML;
	s=s.replace(/[\r\n]/g,'');
	
	re=/(.*)(<\/TBODY>.*)/i; 
	s=s.replace(re,'$1'+newline+'$2');
	document.getElementById('table').innerHTML=s;
	return false; 
}

function DomainClick(cbnum)
{
if(iDomainsChecked==999)iDomainsChecked=document.form.cb.length;
if(iDomainsChecked==1)//if at start this eq to 1 than after processing it will certainly change, disallow manual edit of sendmail_from
{
document.getElementById('tSendmailFrom').disabled=true;
document.getElementById('tSendmailFrom').value='<leave unchanged>';
}
if(document.form.cb[cbnum].checked==true)
{iDomainsChecked++;}else{iDomainsChecked--;}
if(iDomainsChecked==1)//Only one domain chosen, allow manually modify sendmail_from
{
document.getElementById('tSendmailFrom').disabled=false;
}
//Check "All" button if all domains checked one by one, uncheck if all unchecked
if(iDomainsChecked==0)document.getElementById('cbAll').checked=false;
if(iDomainsChecked==document.form.cb.length)document.getElementById('cbAll').checked=true;
}

function SetDefaultSendmailFrom(value)
{sDefaultSendmailFrom=value;}

function Swap(field)
{
	if(!cbflag)
		{
		for (i = 0; i < field.length; i++)
			field[i].checked = true ;
		iDomainsChecked=field.length;
		}
	else
		{
		for (i = 0; i < field.length; i++)
			field[i].checked = false ;
		iDomainsChecked=0;
		}
cbflag=!cbflag;
}

function SwapPostmaster()
{
var s;
if(fcbPostmaster)
	{
	if(iDomainsChecked==1)
	{s=sDefaultSendmailFrom}else{s='<leave unchanged>';}
	document.getElementById('tSendmailFrom').value=s;
	}
	else
	{
	sPostmaster=document.getElementById('tSendmailFrom').value;
	document.getElementById('tSendmailFrom').value='postmaster@<domain.com>';
	}
fcbPostmaster=!fcbPostmaster;
}



//		UPDATE DIRECTORY LIST SECTION IN THE TABLE
//		JSON - JSON object from which domain list will be retrieved

function UpdateDirList(JSON)
{
	cell = document.getElementById('domains');
	if( JSON == '' )
		{ JSON = '{"domains":["<?=$domainname;?>"]}'; }
	else
		{ cell.innerHTML = ''; }
	obj = eval( "(" + JSON + ")" );
	REdomain = /\w+\.\w+/;
	for ( var i = 0; i < obj.domains.length; i++ )
	{
		if( 
			obj.domains[i] != '.'   &&
			obj.domains[i] != '..'  &&
			REdomain.exec(obj.domains[i]) != null
		)
			{ cell.innerHTML = cell.innerHTML + '<INPUT TYPE="checkbox" ID="cb" NAME="domain[' + i + ']" VALUE="' + obj.domains[i] + '" ONCLICK=DomainClick(' + i + ') CHECKED> ' + obj.domains[i] + '<BR>'; }
	}

}



//		GET DIRECTORY LISTING IN JSON FORMAT FROM PERL SCRIPT. USED ON WINDOWS TO TRICK RESTRICTED ACCESS TO USERS'S FOLDER FOR PHP 
//		filename - PERL SCRIPT FILE GOING TO BE EXECUTED

function AJAXGetDirList(filename)
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if( xmlhttp.readyState == 4 )
		{
			cell = document.getElementById('domains');
			cell.innerHTML = '';
			if( xmlhttp.status != 200 )
			{
				cell.innerHTML = '<span style="color:red">There was an error retrieving directory listing.<br> Probably PERL does not work. Please make sure PERL works for this domain<br></span>';
				UpdateDirList('');
			}
			else
				{ UpdateDirList(xmlhttp.responseText); }
		}
	}
	xmlhttp.open("GET", filename, true);
	xmlhttp.send(null);
}

function AJAXGenPHPInfo()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if( xmlhttp.readyState == 4 )
		{
			div = document.getElementById('dPHPInfo');
			if( xmlhttp.status != 200 )
				{ text = '<span style="color:red">There was an error generating phpinfo()</span>'; }
			else
				{ text = xmlhttp.responseText; }
			div.innerHTML = text;
		}
	}
	xmlhttp.open("GET", '<?=$_SERVER['PHP_SELF'];?>?genPHPInfo', true);
	xmlhttp.send(null);
}

</script>


<?
//This block appears here to prevent doubled Ecommerce logo in ouput
if( isset($_GET['genPHPInfo']) )
{
	$content = '<? phpinfo(); ?>';
	file_put_contents4('phpinfo.php', $content);
	if( preg_match('/' . $domainname . '(.*)/', __FILE__, $matches) == 0 )
		{ $path = dirname($matches[1]); }
	else
		{ $path = '/'; }
	echo 'http://' . $_SERVER['HTTP_HOST'] . $path . 'phpinfo.php';
	exit;
}
?>

<IMG ALIGN="RIGHT" ALT="Ecommerce logo" WIDTH=140 HEIGHT=76 SRC="data:image/gif;base64,
R0lGODlhjABMAPcAAPnGEIKku8XGxv3+/mqRrv7546K7zUqHp/fWZtWqBxdnj82zWvvPMMnN0n2i
u4Kdtaanp/jSSX2as3Oaterr6+fs8vzmkzZ3mouswuO0BrrN2uzw9KTD1NPc5JiYmJqyxP/21bXL
2Xl5erCPCgwMDLKslnGSrbvQ3Mva44dwG2qGmYSsw8LS3Nvk64mjurLG1PX4+2SMqoOZrdPZ3Z25
yxlXdbbCzdzd3f7idXSVsISFhpOuwZOxxv/1y7Gys5y90PP2+pSqvGZmaN3h5LG+yOTp7am9zOLk
5Cxzl1uEo2VXI/jqtf/fUsvQ1Zq1yEpKSvb29pO1ydPT1Fd8ljU1NuW2EVOMqoyxxvj5+oqEary9
vvDw8CgoKXGNo2qatePm6G2VscTV4FRUVVWCo3yVqtjd4aySLZ+0w7TJ11yLqZqtu9HW2mmOqkR5
m/7roYyitWuLo9Lh6SJtk9rPqmGJp73K1KS+z9vDbGKUsaa0vnSjvNfFhc7T2MmnHP788OnVkMnX
4I2ovqnE1VuAmmCHpKaptK3G1F2Ip6u/zt/r9q7B0Pj6/f/wuanA0LqselmRrmaZs/H09fv8/cS8
nK7J2X2SpHWduJGirnmXsZqwv6KZfJa6zuXatoWgt4Wov5aot8ObBJ/A08zd5zJlgP79+u67A46O
jrW5vPDy9KW4x627xUmAobS1t8/OzHqfuaC2x6rH12udt8bY4lKIp36nv+i9JpuCJKCBCdvXyCNk
h6Sgla/H1tPY7ra0rIKnv2CRrntwTLu5tPHw4rjF0K3E0vfv1XyXrnWPpr7S3lWFplF4jfftzKfD
1JCnvX+ftmxtbzw9P1xXS0CBoo+ltH14adHV45CSlUBuit/o7WaHoKrE1Dt8ntbf55iruHFyc3mm
vm+gui8vL4qfsGOAl87Y4GFhYd3g6qe5ytfY2DBvk5GLeg5ii66ur1iFp5+fn8fQ8VtbXM3S6Yin
v3aZsr6eJbi4ube2tpaGTaCPQMGnTBcXGCIiIh8nLhwcHAAAAP///yH5BAAAAAAALAAAAACMAEwA
AAj/AP8JHEiwoMGDCBMqXMiwocOHECNKnEgx4oYwITicMMRsF5CKIEOKHOkQDYYXdpxMMDEPjIQN
JGPKnCkRSwAeJzQ4cSEhSLNmqGgKHUpUIJYdNEIIcjWGACYJLmAWnUoVJJYPdjScMLBDQg5CdCpU
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
c9d9d957xykgADs=
">

<IMG id="pig" ALT="PIG logo" WIDTH=80 HEIGHT=80 SRC="data:image/jpeg;base64,
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsK
CwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQU
FBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCABQAFADASIA
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9TYYY
/JT92v3R/CKf5Mf/ADzX8qIf9TH/ALop9ADPJj/55r+VHkx/881/Kn0UAM8mP/nmv5UeTH/zzX8q
+f8A9qT4p+PvhHrXgnUvCK22p6dqE81heaLc2Rl86QhWSQSq6um1VlztD8c7GCmsk/tgeIZNPmto
fg9rn/CRxru8ufU7SPS5B6rebix/3TCG9QK0jTnJXirnZSweIrRU6UHJbaK59Catr2jaDdaXbaje
2ljcapc/Y7GKd1RrmfY8nloD95tkbtgdlNaXkx/881/Kvz3+J/x08R+MPiz8Ntc+Inw+v/BXhbwx
qEd/LrGnXQ1q0tHVw7yuYEEqBljWIkx4CyPk4zn7w8HeN/D3xD0GDW/C+t6f4h0ef/V32mXKTwse
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
">

<!-- ----------------------- MAIN -------------------- -->
<?php 
//IMPLEMENTATION
//Clicked "Show Me" button - show only phpinfo()
if(isset($_GET['show_phpinfo']))
{
	phpinfo();
	exit();
}
	
if(isset($_GET['btnSuicide']))
{
	PHP_OS == WIN ? unlink($_SERVER['PATH_TRANSLATED']) : unlink($_SERVER['SCRIPT_FILENAME']);
	echo '<script>window.close();</script>';
	exit();
}


//Normal behavior
if( ! isset( $_POST[ 'submit' ] ) )
{
	?><?//Check new version
	
	echo '<SUB>P.I.G. v' . VERSION . '</SUB><BR>';
	if( DEBUG ) echo '<red><B>DEBUG MODE</B></red><BR>';
	
	GetServerPhpIniPath();
	GetQuota();
	
	?>
	<FORM NAME="form" METHOD="post">
	<? if( DEBUG ) echo '<INPUT TYPE="checkbox" NAME="do_nothing" CHECKED> Do Nothing<BR>'; ?>
	<TABLE BORDER=2>
	<TFOOT>
	<TR><TD COLSPAN=2 ALIGN=center><INPUT TYPE="submit" NAME="submit" VALUE="Submit" <?=$controlpanel==''?'DISABLED':''?>>
	</TFOOT>
	<TBODY ALIGN=center>
	<TR><TD><B>OS<TD><? echo PHP_OS==WIN?"Windows":"Linux"; ?>
	<TR><TD><B>Server<TD><?= $serverdomainname!=''?$serverdomainname:'Unable to detect';?>
	<TR><TD><B>Control Panel<TD><?= $controlpanel != '' ? 'CP' . $controlpanel : 'Unable to detect';?>
	<TR><TD><B>inode Quota<TD><?= $inodeQuota == 0 ? "Not set" : $inodeQuota; ?>
	<TR><TD><B>User Files<TD>
	<?
	if( PHP_OS == LINUX )
		{ echo ( $overQuota &&   $inodeQuota != 0 ) ? "<red>$inodeFiles</red>" : $inodeFiles; }
	else
		echo "<i>Not available</i>";
	?>
	<TR><TD><B>PHP Version<TD><?=PHP_VERSION;?>
	<TR><TD><B>Username<TD><?=$username;?>
	<TR><TD><B>Domain Name<TD><?=$domainname;?>
	<TR><TD><B>Server php.ini location<TD><?=$serverphpinipath;?>
	<TR><TD><B>Place php.ini to<TD><?=$phpinipath;?>
	<TR><TD><B>Loaded php.ini<TD><?=version_compare(PHP_VERSION,'5.2.4','>=') ? php_ini_loaded_file() : 'N/A, PHP ver<5.2.4';?>
	<TR><TD><B>phpinfo()</B><TD><INPUT TYPE="button" VALUE="Show Me" ONCLICK=window.open("<?echo $_SERVER['PHP_SELF'];?>?show_phpinfo")><!--"Show me" button - shows phpinfo() in new window-->
	<TR><TD><B>Choose domains:</B>
	<TD ALIGN=left><INPUT TYPE=checkbox ID="cbAll" ONCLICK=Swap(document.form.cb) CHECKED><B>All</B><BR><HR>
	<span id="domains">
	<img src="data:image/gif;base64,
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
YwSRlycNcWskCkApIyEAOwAAAAAAAAAAAA==
	"> Retrieving directory list...
	</span>
	<TR><TD ROWSPAN=3><B>Recently used parameters:</B><BR>
	<INPUT TYPE=button VALUE="Default" ONCLICK=SetDefaultParams()><INPUT TYPE=button VALUE="Recommended" ONCLICK=SetRecommendedParams()>
	<TR><TD ALIGN=left>
	<INPUT TYPE="CHECKBOX" NAME="parameter[register_globals]" VALUE="1" <?=ini_get('register_globals')=='1'?'CHECKED':'';?>> Register Globals<BR>
	<INPUT TYPE="CHECKBOX" NAME="parameter[display_errors]" VALUE="1" <?=ini_get('display_errors')=='1'?'CHECKED':'';?>> Display Errors<BR>
	<INPUT TYPE="CHECKBOX" NAME="cbPostmaster" VALUE="1" ONCLICK=SwapPostmaster()> Set envelope sender to postmaster@&lt;domain.com&gt;
	<TR><TD><TABLE NAME="textparamtable" BORDER=1>
	<THEAD><TR><TH>Name<TH>Value</THEAD>
	<TBODY><FONT FACE="Courier New">
	<TR><TD>mbstring.language =<TD><INPUT TYPE="TEXT" NAME="parameter[mbstring.language]" VALUE="<?=ini_get('mbstring.language');?>">
	<TR><TD>mbstring.http_input =<TD><INPUT TYPE="TEXT" NAME="parameter[mbstring.http_input]" VALUE="<?=ini_get('mbstring.http_input');?>">
	<TR><TD>mbstring.http_output =<TD><INPUT TYPE="TEXT" NAME="parameter[mbstring.http_output]" VALUE="<?=ini_get('mbstring.http_output');?>">
	<TR><TD>session.save_path =<TD><INPUT TYPE="TEXT" NAME="parameter[session.save_path]" VALUE="<?=ini_get('session.save_path');?>">
	<TR><TD>upload_max_filesize =<TD><INPUT TYPE="TEXT" NAME="parameter[upload_max_filesize]" VALUE="<?=ini_get('upload_max_filesize');?>">
	<TR><TD>post_max_size =<TD><INPUT TYPE="TEXT" NAME="parameter[post_max_size]" VALUE="<?=ini_get('post_max_size');?>">
	<TR><TD>sendmail_from =<TD><INPUT TYPE="TEXT" NAME="parameter[sendmail_from]" ID="tSendmailFrom" VALUE="<leave unchanged>" DISABLED>
	</FONT>
	</TBODY>
	</TABLE>
	<TR><TD><B>Additional parameters:</B><BR><!--Dynamic additional parameters textfields with help of js-->
	<INPUT TYPE="button" VALUE="Add" ONCLICK="return addline();">
	<TD><SPAN ID="table">
	<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=3>
	<THEAD><TR><TH>NAME<TH>VALUE</THEAD>
	<TBODY>
	<TR><TD><INPUT TYPE="text" NAME="add_param_name[0]"> = <TD><INPUT TYPE="text" NAME="add_param_val[0]">
	</TBODY>
	</TABLE>
	</SPAN>
	</TBODY>
	</TABLE>
	<input type="hidden" name="serverPhpIniPath" value="<?=base64_encode($serverphpinipath);?>">
	</FORM>
		
		
		
	<?
	
	GetDirList(); // Populate domains list
	
}
/* **********************
** Process submitted data
** ********************** */
else
{

	// Halt if nothing was selected
	if( ! isset($_POST['domain']) )
	{
		echo '
		No domains specified, nothing to do
		<form>
		<p><input type="submit" value="<< Back"></p>
		</form>
		';
		exit;
	}
	
	// Remove PERL script file if it was created
	if( file_exists(DIRSCANFN) )
		unlink(DIRSCANFN);
	
	$serverphpinipath = base64_decode($_POST['serverPhpIniPath']);

	$doNothing = isset($_POST['do_nothing']);
	if( $doNothing )
		LogMsg( 'PIG: I\'m not going to make any changes to filesystem.', true, WARN );
	LoadPhpIni($php_ini_contents);
	
	while( $element = each( $_POST[ 'parameter' ] ) )
	{
		if ( $element['key'] == 'sendmail_from' && $element['value'] == '<leave unchanged>' ) 
		{
			continue;
		}
		elseif ( $element['key'] == 'session.save_path' && $element['value'] == '' ) 
		{
			continue;
		}
		else
		{
		UpdateParameter($element['key'], $element['value']);
		}
	}
	
	if( ! isset( $_POST[ 'parameter' ] [ 'register_globals' ] ) )
		UpdateParameter( 'register_globals', '0' );
		
	if( ! isset( $_POST[ 'parameter' ] [ 'display_errors' ] ) )
		UpdateParameter( 'display_errors', '0' );
		
	for($q=0;$q<=count($_POST['add_param_name'])-1;$q++)
		UpdateParameter($_POST['add_param_name'][$q],$_POST['add_param_val'][$q]);
		
	$set_postmaster=isset($_POST['cbPostmaster']);
	
	$i = 0;
	while( $element = each( $_POST[ 'domain' ] ) )
	{
		echo("Processing: <b>${element['value']}</b>... ");
		PlaceCustomPhpIni( $element[ 'value' ] );
		echo "Done<br>";
		$i++;
	}
	echo "<p><b>$i</b> domains updated</p>";
	?>
	<P>
	<table border="0">
	<tr>
		<td>
			<table border="0">
			<tr>
				<td>
					<FORM METHOD=GET><INPUT TYPE=SUBMIT VALUE="Suicide" NAME="btnSuicide"></FORM>  
				</td>
				<td>
					<INPUT TYPE="button" VALUE="phpinfo()" ONCLICK=window.open("<?=$_SERVER['PHP_SELF'];?>?show_phpinfo")><BR>
				</td>
				<td>
					<FORM><INPUT TYPE=submit VALUE="<< Back"></FORM>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<input type="button" value="Generate phpinfo()" onclick="AJAXGenPHPInfo();">
		<td>
	</tr>
	</table>
	</P>
	<div id="dPHPInfo"></div>
	<?
}
?>
</body>
</html>