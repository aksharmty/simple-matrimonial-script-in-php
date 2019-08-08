<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>
<?php 
$strid = $_SESSION['matriid'];
  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");
?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

<script language="javascript">
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
	// Check Profile
		if ( MatriForm.txtmsg.value == "" )
		{
			alert( "Please Enter your Profile" );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Min Chars 
		if ( MatriForm.txtmsg.value.length < 50 )
		{
			alert( "Profile must be atleast 50 chars." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Max Chars
		if ( MatriForm.txtmsg.value.length > 1000 )
		{
			alert( "Please do not enter more than 1000 chars. Please shorten your Profile and submit again." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
	
		
		return true;
	}

</script> 

<script>
function smutEngine() {
smut="..";
cmp="sex babes shit fuck damn porno cum cunt prick pecker ass fucking xxx XXX yahoo msn rediff gmail hotmail sify rediffmail www http @ phone mobile contact no address"
+"asshole pedophile man-boy man/boy dong twat";
txt=document.MatriForm.txtmsg.value;
tstx="";
for (var i=0;i<16;i++){
pos=cmp.indexOf(" ");
wrd=cmp.substring(0,pos);
wrdl=wrd.length
cmp=cmp.substring(pos+1,cmp.length);
while (txt.indexOf(wrd)>-1){
pos=txt.indexOf(wrd);
txt=txt.substring(0,pos)+smut.substring(0,wrdl)
+txt.substring((pos+wrdl),txt.length);
   }
}
document.MatriForm.txtmsg.value=txt;
}
// End -->
</script>

<script>
function stringFilter (input) {
s = input.value;
filteredValues = "1234567890@/#$%^&*()_-=|][}.,;:?'{!\><";     // Characters stripped out
var i;
var returnString = "";
for (i = 0; i < s.length; i++) {  // Search through string and append to unfiltered values to returnString.
var c = s.charAt(i);
if (filteredValues.indexOf(c) == -1) returnString += c;
}
input.value = returnString;
}
//  End -->
</script>

	<script language="JavaScript">
<!--
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}

//-->
</script>


</HEAD>
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
<?php while($row = mysql_fetch_array($memcontrol)) { ?>
 
  
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<span class="bodysg">Modify Profile    </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td><br>

	   <form action="edit_prof.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        
        <tr>
          <td colspan="2"><span class="h3r">Profile</span></td>
        </tr>
        <tr>
          <td width="22%">Profile&nbsp;:</td>
          <td width="78%">
		  
		  
	  
            <textarea name="txtmsg" cols="30" rows="7" id="txtmsg" style="width:400px;"
onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" ><? echo $row['Profile']; ?></textarea>
            <br>
            <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" readonly>
            <span class="style1">You could enter details about you or a bried description about yourself.<br>
            <span class="style2">Min 50</span> chas and <span class="style2">Max 1000 chars</span>. (If Profile contains ay details about your <br>
contact information like e-mail,phone number, ete. Your profile will be rejected)</span></td>
        </tr>
        
        <tr>
          <td>Looking&nbsp;:</td>
          <td><select name="txtLooking" class="forminput" id="txtLooking" style="width:250px;">
            <option value="<? echo $row['Looking']; ?>"><? echo $row['Looking']; ?></option>
            <option value="Unmarried">Unmarried</option>
            <option value="Widow/Widower">Widow/Widower</option>
            <option value="Divorcee">Divorcee</option>
            <option value="Separated">Separated</option>
                    </select></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">
            <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	  </form>
	   </td>
    </tr>
  </table>
  <? } ?>
  <p>&nbsp;</p></TD>
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
