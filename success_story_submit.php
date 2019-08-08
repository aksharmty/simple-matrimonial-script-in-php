<?php



/**
 * The letter l (lowercase L) and the number 1
 * have been removed, as they can be mistaken
 * for each other.
 */

function createRandomPassword() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }

    return $pass;

}

// Usage
$password = createRandomPassword();
//echo "Your random password is: $password";


//?heck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
 // if (($ext == "jpg") && ($_FILES["uploaded_file"]["type"] == "image/jpg") &&
  if (($ext == "jpg" || $ext == "JPG" || $ext == "jpeg" || $ext == "JPEG" || $ext == "gif" || $ext == "png" ) &&
 
    ($_FILES["uploaded_file"]["size"] < 350000)) {
    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/SuccessStory_Photos/'.$password.$filename;
	  $dbstorefilename = $password.$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
	  
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
          // echo "It's done! The file has been saved as: ".$newname;
/////////////////////////////////////////////////////////////////////////////////////////////////////
include('dbconnect.php');
$strapprove = "No";
$_POST['txtbn']= strip_tags($_POST['BrideName']);
$_POST['txtbid']= strip_tags($_POST['BrideID']);
$_POST['txtgn']= strip_tags($_POST['GroomName']);
$_POST['txtgid']= strip_tags($_POST['GroomID']);
$_POST['txtmdate']= strip_tags($_POST['WeddingDate']);
$_POST['txtmsg']= strip_tags($_POST['Message']);
$sql = mysql_query("insert into successstory (weddingphoto,bridename,brideid,groomname,groomid,marriagedate,successmessage,approve) values ('$dbstorefilename','".$_POST['txtbn']."','".$_POST['txtbid']."','".$_POST['txtgn']."','".$_POST['txtgid']."','".$_POST['txtmdate']."','".$_POST['txtmsg']."','$strapprove')") 
or die("Could not insert data because ".mysql_error());

print "<script>";
print " self.location='ss_success_confirm.php';"; // Comment this line if you don't want to redirect
print "</script>";

/////////////////////////////////////////////////////////////////////////////////////////////////////		   
		   
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
  } else {
    // echo "Error: Only .jpg (or) .gif (or) .png images under 350Kb are accepted for upload";
print "<script>";
print " self.location='successstory.php?Action=err';"; // Comment this line if you don't want to redirect
print "</script>";
  }
} else {
 echo "Error: No file uploaded";
}
?>


