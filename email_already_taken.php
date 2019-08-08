<?php

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html40/loose.dtd">
<HTML>

<HEAD>


<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META name="vs_defaultClientScript" content="JavaScript">
<TITLE>Free Online Registration</TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css">
<STYLE type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</STYLE>
</HEAD>

<SCRIPT language="javascript">
function ValidateNo( NumStr, String ) 
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


	function ValidateEmail( Email )
	{
		var atCharPresent = false;
		var dotPresent = false;

		for ( var Idx = 0; Idx < Email.length; Idx++ )
		{
			if ( Email.charAt ( Idx ) == '@' )
				atCharPresent = true;
			if ( Email.charAt ( Idx ) == '.' )
				dotPresent = true;
		}

		if ( !atCharPresent || !dotPresent )
			return false;

		return true;
	}

	function ResetValues( )
	{
		var MatriForm = this.document.MatriForm;
		
		MatriForm.EMAIL.value = "";
		MatriForm.EMAILconfirm.value = "";
		
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
				
		// Check E-mail field
		if ( MatriForm.EMAIL.value == "" )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease enter a New valid E-mail ID." );
			MatriForm.EMAIL.focus( );
			return false;
		}
		else
		{
			if ( !ValidateEmail( MatriForm.EMAIL.value ) )
			{
				alert( "Hello " + document.MatriForm.txtName.value + "\nInvalid E-mail " + MatriForm.EMAIL.value );
				MatriForm.EMAIL.focus( );
				return false;
			}
			for ( var Idx = 0; Idx < MatriForm.EMAIL.value.length; Idx++ )
			{
				if ( MatriForm.EMAIL.value.charAt(Idx) == '	' 
					|| MatriForm.EMAIL.value.charAt(Idx) == ' ' 
					|| MatriForm.EMAIL.value.charAt(Idx) == ',' 
					|| MatriForm.EMAIL.value.charAt(Idx) == '/' 
					|| MatriForm.EMAIL.value.charAt(Idx) == '\\' 
					|| MatriForm.EMAIL.value.charAt(Idx) == ';' )
				{
					alert( "Hello " + document.MatriForm.txtName.value + "\nBlanks or other invalid characters are not allowed in the e-mail ID.\n Please enter only one E-mail ID." );
					MatriForm.EMAIL.focus( );
					return false;
				}
			}
		}

		if ( MatriForm.EMAILconfirm.value != "" && MatriForm.EMAILconfirm.value == "" )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nPlease enter confirm E-mail address" );
			MatriForm.EMAILconfirm.focus( );
			return false;
		}

		if ( MatriForm.EMAIL.value != MatriForm.EMAILconfirm.value )
		{
			alert( "Hello " + document.MatriForm.txtName.value + "\nE-mail address did not match, please enter a  confirm E-mail" );
			MatriForm.EMAILconfirm.focus( );
			return false;
		}


	
		return true;
	}

		</SCRIPT> 
		


<BODY >
<FORM action="register_submit1.php" method="post" name="MatriForm" onSubmit="return Validate()">
<DIV align="center">
  
  <TABLE width="780" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <TR>
      <TD width="780" height="164">
	  
	
        <TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
						<?php include("header.php");?>
				</TD>
            </TR>
          <TR>            </TR>
          <TR>
            <TD height="17" colspan="2" valign="top">
						
							
							
							
							</TD>
          </TR>
          
          <TR valign="top">
            <TD height="206" colspan="2">
               
                  <TABLE width="100%" border="0" align="center">
                    <TR>
                      <TD width="570" class="LgHeading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD>
                      <TD width="200">&nbsp;</TD>
                    </TR>
                    <TR>
                        <TD bgcolor=#cccccc colspan=5 height=1><SPACER HEIGHT="1" TYPE="block"></TD>
                    </TR>
                  </TABLE>
                  <TABLE width="100%" border="0" align="center">
                    <TR>
                      <TD width="51">&nbsp;</TD>
                      <TD width="719"><DIV align="left"><SPAN class="LgHeading">Register Final </SPAN></DIV></TD>
                    </TR>
                    
                    <TR>
                      <TD>&nbsp;</TD>
                      <TD>&nbsp;</TD>
                    </TR>
                  </TABLE>
				  
				 
                  
                  <TABLE width="100%" border="0" align="center">
                    <TR>
                      <TD height="28" colspan="3"><DIV align="center"><IMG src="pics/RegStep3.gif" width="474" height="40"></DIV></TD>
                    </TR>
                    <TR>
                      <TD width="7%" height="28">&nbsp;</TD>
                      <TD width="86%" bgcolor="#EC4848"><DIV align="center" class="h3p style1">Email ID you entered already exists. Please enter a new one </DIV></TD>
                      <TD width="7%" height="28">&nbsp;</TD>
                    </TR>
                  </TABLE>
                  <BR>
                  <TABLE width="670" border="0" align="center" cellpadding="0" cellspacing="0"> 
                    <TBODY>
                      <TR>
                        <TD width="8" background="pics/mod3_t_lt.gif" height="8"></TD>
                        <TD width="650" background="pics/mod3_t_bg.gif"  height="8"></TD>
                        <TD width="8" background="pics/mod3_t_rt.gif"  height="8"></TD>
                      </TR>
                      <TR>
                        <TD width="8"  background="pics/mod3_bg_lt.gif"></TD>
                        <TD width="650" bgcolor="#F8F8F8"><!-- Start Content -->
                          <TABLE width="100%" border="0" cellpadding="2" cellspacing="2">
                            <TR>
                              <TD width="26" >&nbsp;</TD>
                              <TD height="28" colspan="3" class="p_headline" ><DIV align="left">Account Information </DIV></TD>
                            </TR>
                            <TR>
                              <TD class="bodysg" >&nbsp;</TD>
                              <TD width="166" ><DIV align="right"><SPAN class="Alert">*</SPAN> Email</DIV></TD>
                              <TD  colspan="2"><DIV align="left">
                                  <INPUT name="EMAIL" type="text" class="forminput" id="EMAIL" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();" size="40" maxlength="50" onFocus="if (this.value == 'Enter New Email here.') this.value = '';" value="Enter New Email here." >
                              </DIV></TD>
                            </TR>
                            <TR>
                              <TD class="bodysg" >&nbsp;</TD>
                              <TD ><DIV align="right"><SPAN class="Alert">*</SPAN> Confirm Email</DIV></TD>
                              <TD  colspan="2"><DIV align="left">
                                  <INPUT name="EMAILconfirm" type="text" class="forminput" id="EMAILconfirm" size="40" maxlength="50" style="width:215px;" onBlur="javascript:this.value=this.value.toLowerCase();" onFocus="if (this.value == 'Enter New Confirm Email here.') this.value = '';" value="Enter New Confirm Email here." >
                              </DIV></TD>
                            </TR>
                            <TR>
                              <TD class="bodysg" >&nbsp;</TD>
                              <TD >&nbsp;</TD>
                              <TD  colspan="2"><INPUT name="txtName" type="hidden" id="txtName" value="<?php $_SESSION['Name'];?>"></TD>
                            </TR>
                          </TABLE>
                        <!-- End Content --></TD>
                        <TD width="8" background="pics/mod3_bg_rt.gif"></TD>
                      </TR>
                      <TR>
                        <TD width="8" background="pics/mod3_b_lt.gif" height="8"></TD>
                        <TD width="439" background="pics/mod3_b_bg.gif" height="8"></TD>
                        <TD width="8" background="pics/mod3_b_rt.gif" height="8"></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                  <BR>
                  <TABLE width="100%" border="0" cellpadding="2" cellspacing="2">
                    <TR>
                      <TD class="bodysg" ><DIV align="center">
                        <INPUT name="Submit" type="image" value="Submit" src="pics/reg1.gif" alt="Register_mw_21116">
                        <A href="javascript:clearform();"></A></DIV></TD>
                    </TR>
                    <TR>
                      <TD class="bodysg" >&nbsp;</TD>
                    </TR>
                  </TABLE>
                  <BR>
              </TD>
							
          </TR>
          
          <TR>
            
		 <?php include("footer.php");?>
            </TR>
        </TABLE>
 

	  </TD>
    </TR>
  </TABLE>
</DIV>
</FORM>
</BODY>
</HTML>
