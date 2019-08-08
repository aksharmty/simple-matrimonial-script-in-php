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
	
	   <form action="edit_prof.php" method="post" name="MatriForm" id="MatriForm" >
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q6" id="q6"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "contsuccess")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";
	echo "</tr>";
	echo "</table>";
}

?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2"><span class="h3r">About Yourself</span></td>
        </tr>
        <tr>
          <td width="22%">&nbsp;</td>
          <td width="78%" rowspan="3">
		  
		  
	  
            <textarea name="txtmsg" cols="30" rows="7" id="txtmsg" style="width:400px;"
onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" ></textarea>
            <br>
            <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" readonly>
            <span class="style1">You could enter details about you or a bried description about yourself.<br>
            <span class="style2">Min 50</span> chas and <span class="style2">Max 1000 chars</span>. (If Profile contains ay details about your <br>
contact information like e-mail,phone number, ete. Your profile will be rejected)</span></td>
        </tr>
        <tr>
          <td>Profile</td>
          </tr>
        
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/edit_but.gif" align="absmiddle">
          </span></td>
        </tr>
      </table>
	  </form>
	   <br>
	  <br>