<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 

$strgender = $_GET['gender'];
$strms = $_GET['ms'];
$strage1 = $_GET['age1'];
$strage2 = $_GET['age2'];
$strh1 = $_GET['height1'];
$strh2 = $_GET['height2'];
$strrel = $_GET['religion'];
$strcaste = $_GET['caste'];
$strlan = $_GET['language'];
$stredu = $_GET['edu'];
$stroccu = $_GET['occu'];
$strcoun = $_GET['country'];
$strphoto = $_GET['photo'];





if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 10; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);  

// Perform MySQL query on only the current pAge number's results 

if($strphoto!="photo")
{
	
	if($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste'
		AND Status <> 'InActive' order by ID DESC  LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste' AND Religion = '$strrel'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Occupation = '$stroccu'
		AND Status <> 'InActive'  order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Language = '$strlan'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Education = '$stredu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND residecyStatus = '$stroccu'
		AND Status <> 'InActive' order by ID DESC  LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Country = '$strcoun'
		AND Status <> 'InActive' order by ID DESC  LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Language = '$strlan'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Education = '$stredu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Occupation = '$stroccu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Country = '$strcoun'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Education = '$stredu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Occupation = '$stroccu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Country = '$strcoun'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Occupation = '$stroccu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Country = '$strcoun'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu'
		AND Status <> 'InActive' order by ID DESC  LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu' AND Country = '$strcoun'
		AND Status <> 'InActive' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
		
}
elseif($strphoto=="photo")
{
	if($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif'  order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif'  order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste' AND Religion = '$strrel'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Occupation = '$stroccu'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Language = '$strlan'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Education = '$stredu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND residecyStatus = '$stroccu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Country = '$strcoun'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Language = '$strlan'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Education = '$stredu'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Occupation = '$stroccu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Country = '$strcoun'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Education = '$stredu'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC  LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Occupation = '$stroccu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Country = '$strcoun'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Occupation = '$stroccu'
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Country = '$strcoun'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif'  order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$sql = mysql_query("SELECT *, Left(Profile,130) as Profile1,Status,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate,PhotoProtect FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu' AND Country = '$strcoun'
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' order by ID DESC LIMIT $from, $max_results ")
		or die("Could not select data because ".mysql_error());
	}

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY class="body">



<DIV align="center">
<TABLE width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="94%" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
    <tr>
      <td width="37%"><table width="100%" border="0" align="center" cellpadding="2" cellspacing="1">
          <tr>
            <td colspan="3" ><div align="left"><span class="h1pblue">Search Results </span></div></td>
          </tr>
          <tr>
            <td colspan="3" class="bodyg" height="20"><div align="left">You searched for: </div></td>
          </tr>
          <tr>
            <td width="171" class="bodyg"><div align="left" class="bodywk">Gender :<?php echo $_GET['gender']; ?></div></td>
            <td width="150" class="bodyg"><div align="left" class="bodywk">Age :<?php echo $_GET['age1']; ?>-<?php echo $_GET['age2']; ?></div></td>
            <td width="193" class="bodyg"><div align="left" class="bodywk">Religion : <?php echo $_GET['religion']; ?></div></td>
          </tr>
          <tr>
            <td class="bodyg"><div align="left"><span class="bodywk">Caste :<?php echo $_GET['caste']; ?></span></div></td>
            <td class="bodyg"><div align="left"><span class="bodywk">Education :<?php echo $_GET['edu']; ?></span></div></td>
            <td class="bodyg"><div align="left"><span class="bodywk">Occupation :<?php echo $_GET['occu']; ?></span></div></td>
          </tr>
          <tr>
            <td colspan="2" class="bodyg"><div align="left" class="bodywk">Country :<?php echo $_GET['country']; ?></div></td>
            <td class="bodyg"><div align="left"><span class="bodywk">Photo : 
                <?php if($strphoto =="photo") 
			  {
			   echo $strphoto;
			   }
			   else
			   {
			   echo "Show all" ;
			   }
			   ?>
            </span></div></td>
          </tr>
          <tr>
            <td colspan="3" class="bodyg">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="94%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%">&nbsp;</td>
    </tr>
  </table>
  <table width="94%" border="0" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <?php
// Figure out the total number of results in DB: 
//= mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register"),0); 





///////////////////////
if($strphoto!="photo")
{
	
	if($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms'
		 AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun'
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste' AND Religion = '$strrel'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Language = '$strlan'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Education = '$stredu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND residecyStatus = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Country = '$strcoun'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Language = '$strlan'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Education = '$stredu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Country = '$strcoun'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Education = '$stredu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Country = '$strcoun'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Country = '$strcoun'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu' AND Country = '$strcoun'
		
		AND Status <> 'InActive' "),0);
		
	}
		
}
elseif($strphoto=="photo")
{
	if($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Country = '$strcoun' AND Occupation = '$stroccu' AND Education = '$stredu' AND Language = '$strlan' 
		AND Caste = '$strcaste' AND Religion = '$strrel'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Language = '$strlan'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Education = '$stredu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND residecyStatus = '$stroccu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Country = '$strcoun'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Language = '$strlan'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Education = '$stredu'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste!="Any" and $strlan=="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Caste = '$strcaste' AND Country = '$strcoun'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Education = '$stredu'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Language = '$strlan' AND Country = '$strcoun'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Occupation = '$stroccu'
		
		AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel=="Any" and $strcaste=="Any" and $strlan=="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Education = '$stredu' AND Country = '$strcoun'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu=="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu=="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun=="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}
	elseif($strrel!="Any" and $strcaste!="Any" and $strlan!="Any" and $stredu!="Any" and $stroccu!="Any" and $strcoun!="Any")
	{
		$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num  FROM register 
		where Gender ='$strgender' AND Age Between '$strage1' AND '$strage2' AND Maritalstatus = '$strms' 
		AND Religion = '$strrel' AND Caste = '$strcaste' AND Language = '$strlan' and Education = '$stredu' 
		AND Occupation = '$stroccu' AND Country = '$strcoun'
		
		AND Status <> 'InActive'  AND Photo1 <> 'nophoto.gif' "),0);
		
	}

}





	
	if($total_results ==0)
	{
	print "<script>";
    print "self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
    print "</script>";
	}
	
// Figure out the total number of pAges. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
      <td><div align="left"> <span class="Partext1"></span> <?php echo " " . $total_results ."Profiles found" ?> </div></td>
      <td><div align="right"><span class="Partext1">
          <?php


$url="gender=$strgender&ms=$strms&age1=$strage1&age2=$strage2&height1=$strh1&height2=$strh2&religion=$strrel&caste=$strcaste&language=$strlan&edu=$stredu&occu=$stroccu&country=$strcoun&photo=$strphoto";

//Paging info
echo "Page ";
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 
echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 
} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 

echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 

//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$var1=".urlencode($SearchString) ."\">Next</a>";
 
//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&SearchString=.urlencode($SearchString) .\">Next</a>"; 
//$Nav = "<A HREF=\"Search.php?page=" . $i . "page=$next&SearchString=" .urlencode($SearchString) . "\">Next</A>"; 
} 
?>
      </span></div></td>
    </tr>
  </table>
  <table width="94%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><?php require 'results.php'; ?></td>
    </tr>
  </table>
  <table width="94%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td><div align="right"><span class="Partext1">
 <?php

//Paging info
echo "Page ";


for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 

echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 

} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 
} 
?>

      </span></div></td>
    </tr>
  </table></TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
