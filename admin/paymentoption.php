<?php
$result = mysql_query("SELECT * from membershipplan ");
?>
<table width="750" align="center">
  <tbody>
    <tr>
      <td class="heading" align="left" width="650"><strong>Payment Methods </strong></td>
    </tr>
    <tr>
      <td class="smalltxt"><img height="5" src="pay_files/trans(1).gif" 
            width="1" /><br />
        Only a paid membership will give you the advantage of 
        contacting profiles on a <br />
        personalized level. Become a paid member 
        today.</td>
    </tr>
  </tbody>
</table>
<br />
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td valign="top" width="511"><table cellspacing="0" cellpadding="0" width="500" border="0">
        <tbody>
          <tr>
            <td 
                valign="top" class="bodylight" 
                style="WIDTH: 235px; HEIGHT: 21px; BACKGROUND-COLOR: #5f9ec9"><img height="1" src="pay_files/trans(1).gif" 
                  width="1" /><br />
                  <font class="formheadertxt"><b>&nbsp;&nbsp;Select 
                    Membership Package</b></font></td>
            <td valign="top" height="21">&nbsp;</td>
            <td valign="top"></td>
          </tr>
        </tbody>
      </table>
          <table 
            style="BORDER-RIGHT: #5f9ec9 1px solid; BORDER-TOP: #5f9ec9 1px solid; BORDER-LEFT: #5f9ec9 1px solid; WIDTH: 500px; BORDER-BOTTOM: #5f9ec9 1px solid" 
            cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td valign="top">
				
				<?php  while($row = mysql_fetch_array($result)){ ?>
				<table 
                  style="BORDER-RIGHT: #F5F5F5 10px solid; BORDER-TOP: #F5F5F5 10px solid; BORDER-LEFT: #F5F5F5 10px solid; WIDTH: 498px; BORDER-BOTTOM: #F5F5F5 10px solid" 
                  cellspacing="0" cellpadding="0" bgcolor="#ffffff" border="0">
                    <tbody>
                      <tr>
                        <td valign="center" width="89" height="30"><div align="left"><font 
                        style="FONT-SIZE: 11px; COLOR: #1670ae; FONT-FAMILY: verdana"><b>&nbsp;<span class="Partext1">
                          <?php  echo $row['plandisplayname']?>
                        </span></b></font></div></td>
                        <td width="128" valign="center"><div align="left"><font 
                        style="FONT-SIZE: 11px; COLOR: #1670ae; FONT-FAMILY: verdana"><b>
                          <?php  echo $row['planduration']?>
                          &nbsp;days </b></font></div></td>
                        <td width="142" valign="center"><div align="left"><span class="Partext1">Rs. <?php  echo $row['planamount']?>
                        </span></div></td>
                        <td width="33" valign="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td valign="top" bgcolor="#F5F5F5" colspan="4"><img height="1" 
                        src="pay_files/trans(1).gif" width="1" /></td>
                      </tr>
                    </tbody>
                </table>
				<? } ?>
				</td>
              </tr>
            </tbody>
          </table>
        <br />
          <table cellspacing="0" cellpadding="0" width="500" border="0">
            <tbody>
              <tr>
                <td 
                style="WIDTH: 200px; HEIGHT: 21px; BACKGROUND-COLOR: #5f9ec9" 
                valign="top"><img height="1" src="pay_files/trans(1).gif" 
                  width="1" /><br />
                    <font class="formheadertxt"><b>&nbsp;&nbsp;                    Payment Modes</b></font></td>
                <td valign="top">&nbsp;</td>
                <td valign="top"></td>
              </tr>
            </tbody>
          </table>
        <table 
            style="BORDER-RIGHT: #5f9ec9 1px solid; BORDER-TOP: #5f9ec9 1px solid; BORDER-LEFT: #5f9ec9 1px solid; WIDTH: 500px; BORDER-BOTTOM: #5f9ec9 1px solid" 
            cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td valign="top"><table 
                  style="BORDER-RIGHT: #F5F5F5 10px solid; BORDER-TOP: #F5F5F5 10px solid; BORDER-LEFT: #F5F5F5 10px solid; WIDTH: 498px; BORDER-BOTTOM: #F5F5F5 10px solid" 
                  cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                      <tr>
                        <td valign="top" width="5">&nbsp;</td>
                        <td valign="top" width="20"><img height="10" 
                        src="pay_files/trans(1).gif" width="1" /></td>
                        <td valign="center" height="60"><img height="25" alt="" 
                        hspace="5" src="pay_files/visa-card.gif" width="38" 
                        border="0" /><img height="25" alt="" hspace="5" 
                        src="pay_files/master-card.gif" width="38" border="0" /><img 
                        height="25" alt="" hspace="5" 
                        src="pay_files/dinners-card.gif" width="38" border="0" /><img 
                        height="25" alt="" hspace="5" src="pay_files/citi-card.gif" 
                        width="38" border="0" /><img height="25" alt="" hspace="5" 
                        src="pay_files/ae-card.gif" width="38" border="0" /><img 
                        height="25" alt="" hspace="5" src="pay_files/g-card.gif" 
                        width="38" border="0" /><br />
                            <font 
                        style="FONT-SIZE: 10px; COLOR: #16619a; FONT-FAMILY: verdana">&nbsp;&nbsp;Visa 
                              / MasterCard / Diners Club International / Citibank 
                              eCards.</font></td>
                      </tr>
                      <tr>
                        <td valign="top" colspan="3"><img height="7" 
                        src="pay_files/trans(1).gif" width="1" /></td>
                      </tr>
                      <tr>
                        <td valign="top" bgcolor="#F5F5F5" colspan="3"><img height="1" 
                        src="pay_files/trans(1).gif" width="1" /></td>
                      </tr>
                      <tr>
                        <td valign="top" colspan="3"><img height="7" 
                        src="pay_files/trans(1).gif" width="1" /></td>
                      </tr>
                      <tr>
                        <td colspan="3" valign="top"><img height="1" 
                        src="pay_files/trans(1).gif" width="5" />                          <div align="center"><a href="membership_select.aspx"><img src="pics/paypal.jpg" width="231" height="74" border="0" /></a></div></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
            </tbody>
          </table>
      
          <br />
          <table cellspacing="0" cellpadding="0" width="500" border="0">
            <tbody>
              <tr>
                <td 
                style="WIDTH: 180px; HEIGHT: 21px; BACKGROUND-COLOR: #5f9ec9" 
                valign="top"><img height="1" src="pay_files/trans(1).gif" 
                  width="1" /><br />
                    <font class="formheadertxt"><b>&nbsp;&nbsp;Check or 
                      Demand Draft</b></font></td>
                <td valign="top">&nbsp;</td>
                <td valign="top"></td>
              </tr>
            </tbody>
          </table>
        <table 
            style="BORDER-RIGHT: #5f9ec9 1px solid; BORDER-TOP: #5f9ec9 1px solid; BORDER-LEFT: #5f9ec9 1px solid; WIDTH: 500px; BORDER-BOTTOM: #5f9ec9 1px solid" 
            cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td valign="top"><table 
                  style="BORDER-RIGHT: #F5F5F5 10px solid; BORDER-TOP: #F5F5F5 10px solid; BORDER-LEFT: #F5F5F5 10px solid; WIDTH: 498px; BORDER-BOTTOM: #F5F5F5 10px solid" 
                  cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                      <tr>
                        <td class="normaltxt1" valign="center"><p><strong>INDIA</strong><br />
                          You can make payment through online to&nbsp;the following account&nbsp;.</p>
                          <p>HDFC Bank <br>
							Account Holder Name: Your Company Name<br>
							Account No.: Your Company A/c No.<br>
							Branch Name: A/c Branch Name&nbsp;</p>
                          <p>Send Demand Draft in favour of&nbsp; 'Your Company 
							Name' </p>
                          <p>or </p>
                          <p>Money Order to the following address.</p>
                          <p style="margin-top: 0; margin-bottom: 0">Your 
							Company Name</p>
						<p style="margin-top: 0; margin-bottom: 0">Company 
						Address</p>
						<p style="margin-top: 0; margin-bottom: 0">Contact No. : <br />
                            <a href="#"></a></p></td>
                      </tr>
                      <tr>
                        <td 
            height="10"></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
            </tbody>
          </table>
        <br /></td>
      <td valign="top" width="10">&nbsp;</td>
      <td width="259" align="left" 
          
          valign="top"><table 
            style="BORDER-RIGHT: #5f9ec9 1px solid; BORDER-TOP: #5f9ec9 1px solid; MARGIN-TOP: 12px; BORDER-LEFT: #5f9ec9 1px solid; BORDER-BOTTOM: #5f9ec9 1px solid" 
            cellspacing="0" cellpadding="0" width="230" align="left" bgcolor="#ffffff" 
            border="0">
        <tbody>
          <tr bgcolor="#5f9ec9">
            <td valign="top"><font 
                  style="PADDING-LEFT: 3px; FONT-SIZE: 11px; COLOR: #ffffff; FONT-FAMILY: verdana"><b>Membership 
              Benefits</b></font></td>
            <td valign="top"><font 
                  style="FONT-SIZE: 11px; COLOR: #ffffff; FONT-FAMILY: verdana"><b>Paid&nbsp;</b></font></td>
            <td valign="top"><font 
                  style="FONT-SIZE: 11px; COLOR: #ffffff; FONT-FAMILY: verdana"><b>Free</b></font></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Create 
              your profile</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Add 
              photos</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Search 
              for suitable matches</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Create 
              a favorite list</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Send 
              Interests</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Send 
              Mails</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/no.gif" width="7" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Reply 
              to Mails</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#e2edf6" colspan="3"><img height="1" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
          <tr>
            <td valign="top"><font 
                  style="PADDING-LEFT: 5px; FONT-SIZE: 10px; COLOR: #5f9ec9; FONT-FAMILY: verdana">Chat 
              freely with anyone</font></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/yes.gif" width="15" border="0" /></td>
            <td valign="top" align="middle"><img height="12" alt="" 
                  src="pay_files/no.gif" width="7" border="0" /></td>
          </tr>
          <tr>
            <td valign="top" colspan="3"><img height="5" 
                  src="pay_files/trans(1).gif" width="1" /></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
