<?php
include('dbconnect.php');
session_start();
    # this is processed when the form is submitted
    # back on to this page (POST METHOD)
 	//Define Posting values
////////////////////

$Str_Accept= $_SESSION['Accept'];
$Str_ConfirmEmail = $_SESSION['ConfirmEmail'];
$Str_ConfirmPassword =$_SESSION['ConfirmPassword'];
$Str_ProfileCreatedby =$_SESSION['ProfileCreatedby'];
$Str_Referenceby =$_SESSION['Referenceby'];
$Str_Name =$_SESSION['Name'];
$Str_Gender =$_SESSION['Gender'];
$Str_DateofBirth =$_SESSION['DateofBirth'];
$Str_Age =$_SESSION['Age'];
$Str_Timeofbirth =$_SESSION['Timeofbirth'];
$Str_Placeofbirth =$_SESSION['Placeofbirth'];
$Str_MaritalStatus =$_SESSION['MaritalStatus'];
$Str_ChildrenLivingStatus =$_SESSION['ChildrenLivingStatus'];
$Str_Education =$_SESSION['Education'];
$Str_EduDetails =$_SESSION['EduDetails'];
$Str_Occupation =$_SESSION['Occupation'];
$Str_Employedin =$_SESSION['Employedin'];
$Str_Annualincome =$_SESSION['Annualincome'];
$Str_Religion =$_SESSION['Religion'];
$Str_Caste =$_SESSION['Caste'];
$Str_SubCaste =$_SESSION['SubCaste'];
$Str_Gothra =$_SESSION['Gothra'];
$Str_Mothertongue =$_SESSION['Mothertongue'];
$Str_Star =$_SESSION['Star'];
$Str_Moonsign =$_SESSION['Moonsign'];
$Str_HoroscopeMatch =$_SESSION['HoroscopeMatch'];
$Str_Manglik =$_SESSION['Manglik'];
$Str_Height =$_SESSION['Height'];
$Str_Weight =$_SESSION['Weight'];
$Str_BloodGroup =$_SESSION['BloodGroup'];
$Str_Bodytype =$_SESSION['Bodytype'];
$Str_Complexion =$_SESSION['Complexion'];
$Str_Diet =$_SESSION['Diet'];
$Str_Smoke =$_SESSION['Smoke'];
$Str_Drink =$_SESSION['Drink'];
$Str_Address =$_SESSION['Address'];
$Str_City =$_SESSION['City'];
$Str_State =$_SESSION['State'];
$Str_Country =$_SESSION['Country'];
$Str_Phone =$_SESSION['Phone'];
$Str_Residencein =$_SESSION['Residencein'];
$Str_Profile= $_POST['txtmsg'];
$Str_Fathername= $_POST['txtFANAME'];
$Str_Mothername= $_POST['txtMONAME'];
$Str_Fatherlivingstatus= $_POST['txtFalive'];
$Str_Motherlivingstatus= $_POST['txtMalive'];
$Str_FatherOccupation= $_POST['txtFFO'];
$Str_MotherOccupation= $_POST['txtFMO'];
$Str_LookingFor= $_POST['txtLooking']; 
$Str_FamilyValues= $_POST['txtFV'];
$Str_FamilyType= $_POST['txtFT'];
$Str_FamilyStatus= $_POST['txtFS'];
$Str_FamilyDetails= $_POST['txtFD']; 
$Str_FamilyOrigin= $_POST['txtFO'];
$Str_FamilyMembers1= $_POST['txtFS1'];
$Str_FamilyMembers2= $_POST['txtFS2'];  
$Str_PFAge= $_POST['Fromage'];
$Str_PTAge= $_POST['Toage'];
$Str_PExpectations= $_POST['txtPPE'];
$Str_PCountryLivingin= $_POST['txtPcountry'];
$Str_PHeight= $_POST['txtPHeight'];
$Str_PComplexion= $_POST['txtPComplexion'];
$Str_PEducation= $_POST['txtPEdu'];
$Str_PReligion= $_POST['Religion']; 
$Str_PCaste= $_POST['Caste'];
$Str_PResidentStatus= $_POST['txtPReS'];
$Str_Hobbies= $_POST['txtHobby']; 
$Str_OtherHobbies= $_POST['txtOh'];
$Str_Interests= $_POST['txtInterest'];
$Str_OtherInterests= $_POST['txtOi'];
$str_regdate=date("d-m-Y"); 
$str_Status = "InActive";	
$str_ip=$_SERVER['REMOTE_ADDR']; 
$str_ref=$_SERVER['HTTP_REFERER']; 
$str_agent=$_SERVER['HTTP_USER_AGENT'];

if(isset($_POST['Submit']))
{					
					// Username already taken hint
					$result=  mysql_query("SELECT ConfirmEmail FROM register WHERE ConfirmEmail='$Str_ConfirmEmail'");
					$result = mysql_num_rows($result);
					
					if($result=="0")
					{
					if (! $con)
					die("Couldn't connect to MySQL");

					# setup SQL statement
$SQL=mysql_query("INSERT INTO register (Matriid,Termsofservice,ConfirmEmail,ConfirmPassword,Profilecreatedby,Referenceby,Name,Gender,DOB,Age,TOB) VALUES ('NULL','$Str_Accept','$Str_ConfirmEmail','$Str_ConfirmPassword','$Str_ProfileCreatedby','$Str_Referenceby','$Str_Name','$Str_Gender','$Str_DateofBirth','$Str_Age','$Str_Timeofbirth')") or die("Insert Error: ".mysql_error());
					
					//print "Register successful";	
//header ("Location: proff_signup_confirm.php?param1=" &$Str_txtcompname & "&param2="&$Str_email & "&param3="&$Str_uword); 
					header ("Location: register_confirm.php");

					} 
					else 
					//echo "The username you have chosen already exists!";
				header ("Location: buyer_signup_uname_already_taken.php"); 
 

					exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
sdasd sadsdas
</body>
</html>
