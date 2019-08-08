<? 
/* PHP based Contact form with multiple recipients. Receipients are loaded from a text file. 
The script uses the PHP mail() function. 

Programmed by Christian Haensel, christian@chftp.com, LINK1http://www.chftp.comLINK1 
Exclusively published on weberdev.com. If you like my scripts, please let me know or link to me. 

You may copy, redistirubte, change and alter my scripts as long as this information remains intact 
*/ 
// The file containing the contact information 
// Data line layout: 
// Number;Name;Email;department 
// like Christian Haensel;christian@chftp.com;Webdesign 
$rec_file    =    "contacts.txt"; 
$rec    =    file($rec_file); 

function getContacts($rec) { 
    foreach($rec as $line) { 
        list($cnumber, $cname, $cemail, $cdept) = split(";", $line); 
        echo '<option value="'.$cnumber.'">'.$cdept.' -> '.$cname.'</option>'."\n"; 
    } 
} 


// Form output if user is not sending 
if(!isset($_POST['do'])) { 
    echo ' 
    <b>Select a contact</b><p> 
    <form name="contact" method="post" action="'.$PHP_SELF.'"> 
    <select name="contacts">'; 
    getContacts($rec); 
    echo '</select> 
    <br /> 
    <b>Your name:</b><br><input type="text" name="sender"><br> 
    <b>Your Email:</b><br><input type="text" name="email"><br> 
    <b>Your message:</b><br><textarea name="message"></textarea><br> 
    <input type="hidden" name="do" value="sendmail"> 
    <input type="submit" value="Send" /> 
    </form>'; 

} else { 
    // Get Contact Details from textfile 
    foreach($rec as $line) { 
        $number    =    $_POST['contacts']; 
        list($cnumber, $cname, $cemail, $cdept) = split(";", $line); 
        if($cnumber == $number) { 
            $contname    =    $cname; 
            $contemail    =    $cemail; 
        } 
    } 
    // Send the email 
    $sender_name    =    $_POST['sender']; 
    $sender_email    =    $_POST['email']; 
    $sender_msg        =    $_POST['message']; 
    $headers = "From: ".$sender_name." <".$sender_email."> \r\n"; 
    $headers.= "Content-Type: text/plain; charset=ISO-8859-1 "; 
    $headers .= "MIME-Version: 1.0 "; 
    $email_subject    =    "New message from ".$sender_name; 
    $mail_text        =    ' 
    Hello '.$contname.' 
    
    '.$sender_name.' is sending you the following message: 
    ---------------------------------------------------------- 
    '.$sender_msg.' 
    ---------------------------------------------------------- 
    The sender email address is '.$sender_email; 
    
    mail($contemail, $email_subject, $mail_text, $headers); 
    echo '<b>Thank you!</b><p>Your message has been sent to '.$contemail.'.'; 
} 
?>