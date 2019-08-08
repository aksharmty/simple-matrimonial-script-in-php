<!--
Written by Joe Abi Raad
http://joeabiraad.com
joe.abiraad@gmail.com

Happy Coding :D
-->
<title>Demos - Ajax Login form ( PHP & Javascript )</title>
<script type="text/javascript" src="js/_ajax.new.js?<?=rand()?>"></script>
<script type="text/javascript" src="js/_formdata2querystring.js"></script>
<script type="text/javascript" src="js/_applogin.js?<?=rand()?>"></script>
<link rel="stylesheet" href="css/style.css?<?=rand()?>" type="text/css">
<div id="logindiv">
<form id="loginForm" method="POST" action="index.php">
<div id="promptDiv" class="basePrompt">
<span id="msg1"></span>
<span id="msg2"></span>
</div>
<div class="fieldTitle">Email:</div>
<div class="fieldEntry">
<input id="email" name="email" type="text" value="" alt="Email should be email@gospam.biz" title="Email should be email@gospam.biz">
</div>
<div class="fieldTitle">Password:</div>
<div class="fieldEntry">
<input id="password" name="password" type="password" value="" alt="Password should be iwannalogin" title="Password should be iwannalogin">
</div>
<div id="buttonDiv">
<input type="submit" id="submitButton" name="submitButton" value="Submit"/>
</div>
		<small>
		<u>Hint:</u><br />
		Email should be: email@gospam.biz <br />
		Pass should be: iwannalogin
		</small>
</form>
</div>
<
