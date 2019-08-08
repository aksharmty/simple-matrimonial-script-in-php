<?php include("config.php"); ?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css"></HEAD>
<SCRIPT language="javascript">
	function validate()
  {
  		 if ( MatriForm.age1.value == "" )
		 {
			alert( "Please enter minimum age." );
			MatriForm.age1.focus( );
			return false;
		}
		
		 if ( MatriForm.age1.value < 18 )
		 {
			alert( "Minimum age should be above 18" );
			MatriForm.age1.focus( );
			return false;
		}
		
		
		if ( MatriForm.age1.value > 60 )
		 {
			alert( "Minimum age should not be above 60" );
			MatriForm.age1.focus( );
			return false;
		}
		
		 if ( MatriForm.age2.value == "" )
		 {
			alert( "Please enter maximum Age" );
			MatriForm.age2.focus( );
			return false;
		}
		
		if ( MatriForm.age2.value > 60 )
		 {
			alert( "Maximum Age should be below 60" );
			MatriForm.age2.focus( );
			return false;
		}
		
		if ( MatriForm.age2.value < 18 )
		 {
			alert( "Maximum Age should not be below 18" );
			MatriForm.age2.focus( );
			return false;
		}
	
		
		
			
}

 </SCRIPT>
 
 


		


<BODY class="body">
<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
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
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Keyword Search </span></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="5" cellspacing="4" id="content">
      <tr>
        <td colspan="2"><p align="justify"><img src="pics/searchlense.gif" width="28" height="28" align="left"> Search based on a Keyword criteria one would look for in a   partner. Results can be viewed as Thumbnail View, Full View. If you like a profile you can Express Interest or Send Mail.</p></td>
      </tr>
      
      <tr>
        <td colspan="2">
		
		<form action="kwsearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
		
		<table width="100%" border="0" cellpadding="3" cellspacing="2">
          <tr>
            <td height="20" colspan="2"><strong><a href="#">Reach out to your spouse with a click of the mouse</a></strong></td>
          </tr>
          <tr>
            <td width="25%"><div align="left">Looking for </div></td>
            <td width="75%"><div align="left">
              <input name="gender" type="radio" class="forminput" value="Male">
Male 
					&nbsp;
                    <input name="gender" type="radio" class="forminput" value="Female" checked>
Female </div></td>
          </tr>
          <tr>
            <td><div align="left">Age</div></td>
            <td><div align="left">From
                <INPUT name="age1" class="forminput" id="age1" value="20" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">
&nbsp; to &nbsp;
<INPUT name="age2" class="forminput" id="age2" value="60" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >
years </div></td>
          </tr>
          
          <tr>
            <td><div align="left">Enter Keyword </div></td>
            <td><div align="left">
              <INPUT name="txtkey" class="forminput" id="txtkey" maxLength="50" >
             (Ex: Software Engineer) </div></td>
          </tr>
          
          <tr>
            <td><div align="left">Show</div></td>
            <td><div align="left">
              <input name="photo" type="checkbox" id="photo" value="photo">
            Profiles with Photo </div></td>
          </tr>
          <tr>
            <td><div align="left"></div></td>
            <td><div align="left">
              <input name="Submit" type="image" value="Submit" src="pics/search-button.gif">
            </div></td>
          </tr>
        </table>
		</form>
		</td>
        </tr>
      
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
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
