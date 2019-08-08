<?php include("config.php"); ?>



<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
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
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
<?php 
$StrAction=$_GET['Action'];
if ($StrAction == "success")
{
	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";
	echo "<tr>";
	echo "<td class=Alert><strong>Referring Message has been sent to your Friend. Thank you</strong> </td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Refer this Site to your Another Friend.";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}
?>
           </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" background="pics/heading_bg.gif"><div align="left">&nbsp;&nbsp;<strong>Refer a Friend</strong></div></td>
          <td width="63%">&nbsp;</td>
        </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
  <tr>
    <td>
	<FORM action="reffriend_submit.php" method="post" name="form" onSubmit="MM_validateForm('yourname','','R','youremail','','RisEmail','friendname','','R','friendemail','','RisEmail');return document.MM_returnValue" >
	<table width="97%" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2" >Everybody could use the gift of love...and there is atleast one person in your family or circle of friends who is single. Let them know about us and maybe they will be thanking you for the rest of their lives.</td>
      </tr>
      <tr>
        <td valign="center" align="middle" 
                                
      colspan="2" height="1"><div align="center"></div></td>
      </tr>
      <tr>
        <td colspan="2" ><div align="right"><span class="style7"> *</span> Mandatory Field(s)</div></td>
      </tr>
      <tr>
        <td width="35%" class="text11"><span class="style7">*</span> Your Name:</td>
        <td width="65%"><span class="text11"> <span class="style7">*</span> Your Email:</span></td>
      </tr>
      <tr>
        <td class="text11"><input name="yourname" type="text" id="yourname"></td>
        <td><span class="text11">
          <input name="youremail" type="text" id="youremail">
        </span></td>
      </tr>
      <tr>
        <td class="text11">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="text11">Friend Name</td>
        <td><span class="text11">Friend Email </span></td>
      </tr>
      <tr>
        <td class="text11"><input name="friendname" type="text" id="friendname"></td>
        <td><span class="text11">
          <input name="friendemail" type="text" id="friendemail">
        </span></td>
      </tr>

      <tr>
        <td colspan="2" class="text11"><input name="Submit" type="submit" class="form" value="Submit" /></td>
      </tr>
    </table>
	</FORM>
	</td>
  </tr>
</table>
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
