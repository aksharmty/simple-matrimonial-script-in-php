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
       
	 
	  <form action="edit_phy.php" method="post">
	  <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2"><div align="center"><span class="bodysg">
            <span class="h3r"><A name="q4"></A></span>
            <?php 
$StrAction=$_GET['action'];
if ($StrAction == "physuccess")
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
          <td colspan="2"><span class="h3r">Physical Attributes </span><span class="bodysg"> &nbsp;</span></td>
        </tr>
        <tr>
          <td width="22%">Height </td>
          <td width="78%"><select name="txtHeight" class="forminput" id="txtHeight" style="width:215px;">
              <option value="<? echo $row['Height']; ?>" selected>
			  
			  
			  <?php  
$strheight = $row['Height'];
if($strheight =="1") { echo "Below 4ft"; }
else if($strheight =="2") { echo "4ft 6in"; }
else if($strheight =="3") { echo "4ft 7in"; }
else if($strheight =="4") { echo "4ft 8in"; }
else if($strheight =="5") { echo "4ft 9in"; }
else if($strheight =="6") { echo "4ft 10in"; }
else if($strheight =="7") { echo "4ft 11in"; }
else if($strheight =="8") { echo "5ft"; }
else if($strheight =="9") { echo "5ft 1in"; }
else if($strheight =="10") { echo "5ft 2in"; }
else if($strheight =="11") { echo "5ft 3in"; }
else if($strheight =="12") { echo "5ft 4in"; }
else if($strheight =="13") { echo "5ft 5in"; }
else if($strheight =="14") { echo "5ft 6in"; }
else if($strheight =="15") { echo "5ft 7in"; }
else if($strheight =="16") { echo "5ft 8in"; }
else if($strheight =="17") { echo "5ft 9in"; }
else if($strheight =="18") { echo "5ft 10in"; }
else if($strheight =="19") { echo "5ft 11in"; }
else if($strheight =="20") { echo "6ft"; }
else if($strheight =="21") { echo "6ft 1in"; }
else if($strheight =="22") { echo "6ft 2in"; }
else if($strheight =="23") { echo "6ft 3in"; }
else if($strheight =="24") { echo "6ft 4in"; }
else if($strheight =="25") { echo "6ft 5in"; }
else if($strheight =="26") { echo "6ft 6in"; }
else if($strheight =="27") { echo "6ft 7in"; }
else if($strheight =="28") { echo "6ft 8in"; }
else if($strheight =="29") { echo "6ft 9in"; }
else if($strheight =="30") { echo "6ft 10in"; }
else if($strheight =="31") { echo "6ft 11in"; }
else if($strheight =="32") { echo "7ft"; }
else if($strheight =="33") { echo "Above 7ft"; }
?>
			  </option>
              <option value="1">Below 4ft</option>
              <option value="2">4ft 6in</option>
              <option value="3">4ft 7in</option>
              <option value="4">4ft 8in</option>
              <option value="5">4ft 9in</option>
              <option value="6">4ft 10in</option>
              <option value="7">4ft 11in</option>
              <option value="8">5ft</option>
              <option value="9">5ft 1in</option>
              <option value="10">5ft 2in</option>
              <option value="11">5ft 3in</option>
              <option value="12">5ft 4in</option>
              <option value="13">5ft 5in</option>
              <option value="14">5ft 6in</option>
              <option value="15">5ft 7in</option>
              <option value="16">5ft 8in</option>
              <option value="17">5ft 9in</option>
              <option value="18">5ft 10in</option>
              <option value="19">5ft 11in</option>
              <option value="20">6ft</option>
              <option value="21">6ft 1in</option>
              <option value="22">6ft 2in</option>
              <option value="23">6ft 3in</option>
              <option value="24">6ft 4in</option>
              <option value="25">6ft 5in</option>
              <option value="26">6ft 6in</option>
              <option value="27">6ft 7in</option>
              <option value="28">6ft 8in</option>
              <option value="29">6ft 9in</option>
              <option value="30">6ft 10in</option>
              <option value="31">6ft 11in</option>
              <option value="32">7ft</option>
              <option value="33">Above 7ft</option>
            </select></td>
        </tr>
        <tr>
          <td>Weight </td>
          <td><select name="txtWeight" class="forminput" id="txtWeight" style="width:215px;">
            <option value="<? echo $row['Weight']; ?>" selected><? echo $row['Weight']; ?></option>
            <option value="41 kg">41 kg</option>
            <option value="42 kg">42 kg</option>
            <option value="43 kg">43 kg</option>
            <option value="44 kg">44 kg</option>
            <option value="45 kg">45 kg</option>
            <option value="46 kg">46 kg</option>
            <option value="47 kg">47 kg</option>
            <option value="48 kg">48 kg</option>
            <option value="49 kg">49 kg</option>
            <option value="50 kg">50 kg</option>
            <option value="51 kg">51 kg</option>
            <option value="52 kg">52 kg</option>
            <option value="53 kg">53 kg</option>
            <option value="54 kg">54 kg</option>
            <option value="55 kg">55 kg</option>
            <option value="56 kg">56 kg</option>
            <option value="57 kg">57 kg</option>
            <option value="58 kg">58 kg</option>
            <option value="59 kg">59 kg</option>
            <option value="60 kg">60 kg</option>
            <option value="61 kg">61 kg</option>
            <option value="62 kg">62 kg</option>
            <option value="63 kg">63 kg</option>
            <option value="64 kg">64 kg</option>
            <option value="65 kg">65 kg</option>
            <option value="66 kg">66 kg</option>
            <option value="67 kg">67 kg</option>
            <option value="68 kg">68 kg</option>
            <option value="69 kg">69 kg</option>
            <option value="70 kg">70 kg</option>
            <option value="71 kg">71 kg</option>
            <option value="72 kg">72 kg</option>
            <option value="73 kg">73 kg</option>
            <option value="74 kg">74 kg</option>
            <option value="75 kg">75 kg</option>
            <option value="76 kg">76 kg</option>
            <option value="77 kg">77 kg</option>
            <option value="78 kg">78 kg</option>
            <option value="79 kg">79 kg</option>
            <option value="80 kg">80 kg</option>
            <option value="81 kg">81 kg</option>
            <option value="82 kg">82 kg</option>
            <option value="83 kg">83 kg</option>
            <option value="84 kg">84 kg</option>
            <option value="85 kg">85 kg</option>
            <option value="86 kg">86 kg</option>
            <option value="87 kg">87 kg</option>
            <option value="88 kg">88 kg</option>
            <option value="89 kg">89 kg</option>
            <option value="90 kg">90 kg</option>
            <option value="91 kg">91 kg</option>
            <option value="92 kg">92 kg</option>
            <option value="93 kg">93 kg</option>
            <option value="94 kg">94 kg</option>
            <option value="95 kg">95 kg</option>
            <option value="96 kg">96 kg</option>
            <option value="97 kg">97 kg</option>
            <option value="98 kg">98 kg</option>
            <option value="99 kg">99 kg</option>
            <option value="100 kg">100 kg</option>
            <option value="101 kg">101 kg</option>
            <option value="102 kg">102 kg</option>
            <option value="103 kg">103 kg</option>
            <option value="104 kg">104 kg</option>
            <option value="105 kg">105 kg</option>
            <option value="106 kg">106 kg</option>
            <option value="107 kg">107 kg</option>
            <option value="108 kg">108 kg</option>
            <option value="109 kg">109 kg</option>
            <option value="110 kg">110 kg</option>
            <option value="111 kg">111 kg</option>
            <option value="112 kg">112 kg</option>
            <option value="113 kg">113 kg</option>
            <option value="114 kg">114 kg</option>
            <option value="115 kg">115 kg</option>
            <option value="116 kg">116 kg</option>
            <option value="117 kg">117 kg</option>
            <option value="118 kg">118 kg</option>
            <option value="119 kg">119 kg</option>
            <option value="120 kg">120 kg</option>
            <option value="121 kg">121 kg</option>
            <option value="122 kg">122 kg</option>
            <option value="123 kg">123 kg</option>
            <option value="124 kg">124 kg</option>
            <option value="125 kg">125 kg</option>
            <option value="126 kg">126 kg</option>
            <option value="127 kg">127 kg</option>
            <option value="128 kg">128 kg</option>
            <option value="129 kg">129 kg</option>
            <option value="130 kg">139 kg</option>
            <option value="132 kg">130 kg</option>
            <option value="131 kg">131 kg</option>
            <option value="132 kg">132 kg</option>
            <option value="133 kg">133 kg</option>
            <option value="134 kg">134 kg</option>
            <option value="135 kg">135 kg</option>
            <option value="136 kg">136 kg</option>
            <option value="137 kg">137 kg</option>
            <option value="138 kg">138 kg</option>
            <option value="139 kg">139 kg</option>
            <option value="140 kg">140 kg</option>
          </select></td>
        </tr>
        <tr>
          <td>Blood Group </td>
          <td><select  name="txtBlood" class="forminput" id="txtBlood" style="width:215px;">
           <option value="<? echo $row['BloodGroup']; ?>" selected><? echo $row['BloodGroup']; ?></option>
            <option>A+</option>
            <option>A-</option>
            <option>A1 +</option>
            <option>A1 -</option>
            <option>A1B +</option>
            <option>A1B -</option>
            <option>A2 +</option>
            <option>A2 -</option>
            <option>A2B +</option>
            <option>A2B -</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
          </select></td>
        </tr>
        <tr>
          <td>Complexion</td>
          <td><select name="txtComplexion" class="forminput" id="txtComplexion" style="width:215px;">
            <option value="<? echo $row['Complexion']; ?>" selected><? echo $row['Complexion']; ?></option>
            <option value="Very Fair">Very Fair</option>
            <option value="Fair">Fair</option>
            <option value="Wheatish">Wheatish</option>
            <option value="Wheatish Medium">Wheatish Medium</option>
            <option value="Wheatish Brown">Wheatish Brown</option>
            <option value="Dark">Dark</option>
          </select></td>
        </tr>
        <tr>
          <td>Body type </td>
          <td><select name="txtBody" class="forminput" id="txtBody" style="width:215px;">
            <option value="<? echo $row['Bodytype']; ?>"><? echo $row['Bodytype']; ?></option>
            <option value="Slim">Slim</option>
            <option value="Average">Average</option>
            <option value="Heavy">Heavy</option>
            <option value="Athletic">Athletic</option>
                    </select></td>
        </tr>
        
        <tr>
          <td>Diet</td>
          <td><select name="txtDiet" class="forminput" id="txtDiet" style="width:215px;">
		   <option value="<? echo $row['Diet']; ?>"><? echo $row['Diet']; ?></option>
            <option value="Veg">Veg</option>
            <option value="Eggetarian">Eggetarian</option>
            <option value="Occasionally Non-Veg">Occasionally Non-Veg</option>
            <option value="Non-Veg">Non-Veg</option>
            <option value="Jain">Jain</option>
            <option value="Vegan">Vegan</option>
          </select></td>
        </tr>
        <tr>
          <td>Smoke</td>
          <td><select name="txtSmoke" class="forminput" id="txtSmoke" style="width:215px;">
            <option value="<? echo $row['Smoke']; ?>"><? echo $row['Smoke']; ?></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Occasionally">Occasionally</option>
                    </select></td>
        </tr>
        <tr>
          <td>Drink</td>
          <td><select name="txtDrink" class="forminput" id="txtDrink" style="width:215px;">
            <option value="<? echo $row['Drink']; ?>"><? echo $row['Drink']; ?></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Occasionally">Occasionally</option>
                    </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="bodysg">
            <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">
            <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></span></td>
        </tr>
      </table>
	  <br>
	  <br>
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
