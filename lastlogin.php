<?


// Show the date and time in the timezone
   global $_SESSION;
   session_start();
    include 'dbconnect.php'; 
	$strid=$_SESSION['username']; 
   // $username = $_SESSION["user"]["username"];
    //$query       = db_query("SELECT timezone, lastlog FROM users WHERE username = '$username'");
	//$query       = db_query("SELECT timezone, lastlog,MatriID FROM register WHERE MatriID = '$strid'");
   // $result   = db_fetch_object($query);
$result = mysql_query("SELECT timezone, lastlog,MatriID FROM register WHERE MatriID = '$strid'");
    
    // Date, Time and Timezone
    $date      = date("d-m-Y");
    $format  = "g:i a";
    $tz      = "$result->timezone";
    $lastlog = "$result->lastlog";
   // $time      = createDate($format, time(), $tz); 
    
    echo '<p>It is currently '. date($date) .' and the time is '. $time .'. ';
    
    if (date($date, $lastlog) == date($date)) {
        echo 'Your last logon was Today.</p>';
    } elseif (date($date, $lastlog) == date($date, strtotime("-1 day"))) {
        echo 'Your last logon was Yesterday.</p>';
    } else {
        $last = date($date, $lastlog);
        echo 'Your last logon was at '. $last .'.</p>';
    }
    

?>