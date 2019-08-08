function IsEmpty(obj, obj_type)
{
	if (obj_type == "text" || obj_type == "password" || obj_type == "textarea")	
		{
			var objValue;
			objValue = obj.value.replace(/\s+$/,"");	
			if (objValue.length == 0) 
			{
			//obj.focus();
			return true;
			}
		}
}

function newWin(url)
{
	window.open(url,'','width=600,height=370,scrollbars=yes, resizable=yes,left=100,top=20');
}

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}


function IsNumeric(strString)
   //  check for valid numeric strings	
   {
   var strValidChars = "0123456789.-";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;

   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
         blnResult = false;
         }
      }
   return blnResult;
   }

function Validateany( NumStr, String )
	{
 		for( var Idx = 0; Idx < NumStr.length; Idx ++ )
 		{
			 var Char = NumStr.charAt( Idx );
			 var Match = false;

				for( var Idx1 = 0; Idx1 < String.length; Idx1 ++)
				{
					 if( Char == String.charAt( Idx1 ) )
					 Match = true;
				}

				if ( !Match )
					return false;
 		}

        	return true;
	}

function validateMe()
{
	if (IsEmpty(document.pleadgeFrm.name,"text"))
	{
		alert ("Please enter your name");
		document.pleadgeFrm.name.focus();
		return false;
	}

	if (!IsEmpty(document.pleadgeFrm.name,"text"))
	{
		if (!Validateany(document.pleadgeFrm.name.value,'1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ. '))
		{
			alert ("Special character/s are not allowed in the name");
			document.pleadgeFrm.name.focus();
			return false;
		}
	}

	if (IsEmpty(document.pleadgeFrm.age,"text"))
	{
		alert ("Please enter your age");
		document.pleadgeFrm.age.focus();
		return false;
	}
	if (document.pleadgeFrm.age.value != "")
	{
		if (IsNumeric(document.pleadgeFrm.age.value) == false)
		{
			alert ("Please enter numeric value for age")
			document.pleadgeFrm.age.focus();
			return false;
		}

	}

	if (!document.pleadgeFrm.sex[0].checked && !document.pleadgeFrm.sex[1].checked)
	{
		alert("Please select your gender")
		document.pleadgeFrm.sex[0].focus();return false;
	}
	
	if (IsEmpty(document.pleadgeFrm.address,"text"))
	{
		alert ("Please enter your address");
		document.pleadgeFrm.address.focus();
		return false;
	}
	if (document.pleadgeFrm.state.options[document.pleadgeFrm.state.selectedIndex].value=="0")
	{
		alert ("Please select your state");
		document.pleadgeFrm.state.focus();
		return false;
	}
	if (document.pleadgeFrm.city.options[document.pleadgeFrm.city.selectedIndex].value=="0")
	{
		alert ("Please select your city");
		document.pleadgeFrm.city.focus();
		return false;
	}
	if (IsEmpty(document.pleadgeFrm.pinno,"text"))
	{
		alert ("Please enter your pincode");
		document.pleadgeFrm.pinno.focus();
		return false;
	}
	if (document.pleadgeFrm.pinno.value != "")
	{
		if (IsNumeric(document.pleadgeFrm.pinno.value) == false)
		{
			alert ("Please enter numeric value for pincode")
			document.pleadgeFrm.pinno.focus();
			return false;
		}
	}
	if (IsEmpty(document.pleadgeFrm.phone,"text"))
	{
		alert ("Please enter your phone no");
		document.pleadgeFrm.phone.focus();
		return false;
	}
	if (document.pleadgeFrm.phone.value != "")
	{
		if (IsNumeric(document.pleadgeFrm.phone.value) == false)
		{
			alert ("Please enter a valid phone no")
			document.pleadgeFrm.phone.focus();
			return false;
		}
	}
	if (IsEmpty(document.pleadgeFrm.email,"text"))
	{
		alert ("Please enter your email");
		document.pleadgeFrm.email.focus();
		return false;
	}
	if (document.pleadgeFrm.email.value != "")
	{
		if (echeck(document.pleadgeFrm.email.value)==false){			
			document.pleadgeFrm.email.focus();
			return false
		}
	}
	//if (document.pleadgeFrm.Category.value == "")
	//{
	//	alert ("Please Select your Category");
	//	return false;
	//}
		
}



function validateFeedback()
{
	if (IsEmpty(document.feedbackFrm.name,"text"))
	{
		alert ("Please enter your name");
		document.feedbackFrm.name.focus();
		return false;
	}

	if (!IsEmpty(document.feedbackFrm.name,"text"))
	{
		if (!Validateany(document.feedbackFrm.name.value,'1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ. '))
		{
			alert ("Special character/s are not allowed in the name");
			document.feedbackFrm.name.focus();
			return false;
		}
	}

	if (IsEmpty(document.feedbackFrm.email,"text"))
	{
		alert ("Please enter your email");
		document.feedbackFrm.email.focus();
		return false;
	}
	if (document.feedbackFrm.email.value != "")
	{
		if (echeck(document.feedbackFrm.email.value)==false){			
			document.feedbackFrm.email.focus();
			return false
		}
	}
	if (IsEmpty(document.feedbackFrm.feedback,"textarea"))
	{
		alert ("Please enter your suggestions / feedback");
		document.feedbackFrm.feedback.focus();
		return false;
	}

}


function validateAmbassador()
{
	if (IsEmpty(document.sightFrm.comments,"textarea"))
	{
		alert ("Please enter your comments");
		document.sightFrm.comments.focus();
		return false;
	}
}