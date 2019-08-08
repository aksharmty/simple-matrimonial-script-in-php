<?php
session_start();
if(!session_is_registered(myusername))
{
?>		

		<!-- MEMBER NOT LOGGED IN -->
		<p><img src="pics/menu.jpg" width="780" height="37" border="0" usemap="#MapMap" />
		  <map name="MapMap" id="MapMap">
		    <area shape="rect" coords="8,4,51,22" href="index.php" />
            <area shape="rect" coords="69,6,146,22" href="registration1.php" />
            <area shape="rect" coords="168,5,255,22" href="login.php" />
            <area shape="rect" coords="280,5,369,20" href="searchoption.php" />
            <area shape="rect" coords="394,4,472,20" href="membership.php" />
            <area shape="rect" coords="496,5,526,19" href="help.php" />
            <area shape="rect" coords="549,5,651,20" href="successstory.php"/>
            <area shape="rect" coords="669,4,771,19" href="paymentoptions.php" />
          </map>
		  <?
}
else
{
?>
	      <!-- MEMBER LOGGED IN -->
	      <img src="pics/menu_login.jpg" width="780" height="37" border="0" usemap="#Map3Map" />
	      <map name="Map3Map" id="Map3Map">
	        <area shape="rect" coords="15,3,101,24" href="mymatri.php" />
	        <area shape="rect" coords="143,4,250,24" href="searchoption.php" />
	        <area shape="rect" coords="294,6,425,22" href="myint.php" />
	        <area shape="rect" coords="459,4,537,19" href="mymessage.php" />
	        <area shape="rect" coords="579,3,681,21" href="membership.php" />
	        <area shape="rect" coords="723,5,772,21" href="logout.php" />
          </map>
	      <?
}
?>
		</p>		
		