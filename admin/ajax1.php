<SCRIPT language="javascript" type="text/javascript">
var ajaxRequest; // The variable that makes ajax possible! 

try{ 
// Opera 8.0+, Firefox, Safari 
ajaxRequest = new XMLHttpRequest(); 
} catch (e){ 
// Internet Explorer Browsers 
try{ 
ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
} catch (e) { 
try{ 
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
} catch (e){ 
// Something went wrong 
alert("Your browser broke!"); 
return false; 
} 
} 
} 
// Create a function that will receive data sent from the server 
ajaxRequest.onreadystatechange = function(){ 
if(ajaxRequest.readyState == 4){ 
var ajaxDisplay = document.getElementById('ajaxDiv'); 
//if(ajaxRequest.responseText == "login success") 

ajaxDisplay.innerHTML = ajaxRequest.responseText; 
var redi = document.getElementById('ajaxDiv').value; 
if(ajaxRequest.responseText == "login success") 

//window.location.replace="http://someplace.com"; 
document.write('Hello World'); 
//} 
} 
} 
var uid = document.getElementById('uid').value; 
var pwd = document.getElementById('pwd').value; 

var queryString = "?uid=" + uid + "&pwd=" + pwd ; 
ajaxRequest.open("POST", "ajax2.php" + queryString, true); 
ajaxRequest.send(null); 
}

</script>

<STYLE type=text/css>
H1 {
	FONT-SIZE: 22px; MARGIN: 0px 0px 5px; COLOR: #0099ff; FONT-FAMILY: "Trebuchet MS"; TEXT-ALIGN: justify
}
H2 {
	FONT-SIZE: 16px; MARGIN: 0px 0px 5px; COLOR: #000099; FONT-FAMILY: "Trebuchet MS"; TEXT-ALIGN: justify
}
BODY {
	FONT-SIZE: 11px; COLOR: #454545; FONT-FAMILY: Verdana
}
TD {
	FONT-SIZE: 11px; COLOR: #454545; FONT-FAMILY: Verdana
}
TH {
	FONT-SIZE: 11px; COLOR: #454545; FONT-FAMILY: Verdana
}
INPUT {
	FONT-SIZE: 11px; COLOR: #454545; FONT-FAMILY: Verdana
}
SELECT {
	FONT-SIZE: 11px; COLOR: #454545; FONT-FAMILY: Verdana
}
TEXTAREA {
	FONT-SIZE: 11px; COLOR: #454545; FONT-FAMILY: Verdana
}
HR {
	MARGIN: 10px 0px; WIDTH: 100%; COLOR: #000000; HEIGHT: 1px
}
BODY {
	MARGIN: 25px 10px
}
#ajaxTest {
	BORDER-RIGHT: #333333 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: #333333 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; MARGIN: 0px; BORDER-LEFT: #333333 1px solid; PADDING-TOP: 5px; BORDER-BOTTOM: #333333 1px solid; BACKGROUND-COLOR: #efefef; TEXT-ALIGN: justify
}
#ajaxTest2 {
	BORDER-RIGHT: #333333 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: #333333 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; MARGIN: 0px; BORDER-LEFT: #333333 1px solid; PADDING-TOP: 5px; BORDER-BOTTOM: #333333 1px solid; BACKGROUND-COLOR: #efefef; TEXT-ALIGN: justify
}
#wrapper {
	WIDTH: 700px; TEXT-ALIGN: justify
}
#code {
	BORDER-RIGHT: #999999 1px dashed; PADDING-RIGHT: 5px; BORDER-TOP: #999999 1px dashed; PADDING-LEFT: 5px; FONT-SIZE: 10pt; PADDING-BOTTOM: 5px; BORDER-LEFT: #999999 1px dashed; COLOR: #000000; PADDING-TOP: 5px; BORDER-BOTTOM: #999999 1px dashed; FONT-FAMILY: "Courier New", Courier, mono; BACKGROUND-COLOR: #efefef
}
.code {
	FONT-SIZE: 10pt; COLOR: #000000; FONT-FAMILY: "Courier New", Courier, mono
}
A:link {
	TEXT-DECORATION: none
}
A:visited {
	COLOR: #cc0000; TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: none
}
A:active {
	TEXT-DECORATION: none
}
</STYLE>

<META content="MSHTML 6.00.2800.1528" name="GENERATOR"></HEAD>
<BODY>
<form method="post" action="">
<p>Username:<br>
  <input name="uid" type="text" id="uid">
  <p>Password:<br>
    <input name="pwd" type="password" id="pwd">
</p>
<p> 
  <input name="button" type="button" id="submit" onClick="sendRequestPost();" value="Login" />
</p>
  </form>
<DIV id="response"></DIV>
<BR>
<br>
</BODY>
</HTML>




