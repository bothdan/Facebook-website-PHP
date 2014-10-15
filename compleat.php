<style type="text/css">



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
$var_pic = $_FILES['pic'];



mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
$sql = "SELECT * FROM $tbl_login WHERE user = '$user_id' ";
$result = mysql_query($sql);
$row = mysql_fetch_array ($result);
$id = $row['id'];

$path = "poze/".$id;
mkdir($path);
$target = "poze/".$id."/"; 
$target1 = $target . basename( $_FILES['pic']['name']); 
$pic1=$target.($_FILES['pic']['name']);
mysql_query("UPDATE $tbl_login SET main_photo = '$target1'  WHERE user = '$user_id' ") ; 
move_uploaded_file($_FILES['pic']['tmp_name'], $target1);
?>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="7" align="center" nowrap id="cell_gray_top">&nbsp;&nbsp;&nbsp;
          <p>Bravo!!!&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="10" colspan="7">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td colspan="2" bgcolor="#EDEDED" id="txt_gray_small">&nbsp;</td>
            <td bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td colspan="2" nowrap bgcolor="#EDEDED" id="txt_gray_small">&nbsp;</td>
            <td bgcolor="#EDEDED">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#EDEDED">&nbsp;</td>
            <td colspan="2" nowrap bgcolor="#EDEDED"><form name="form1" method="post" action="home.php?UID=<?php echo $id;?>">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="30" align="center" nowrap id="txt_gray_med">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="30" align="center" nowrap id="txt_gray_med">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" nowrap id="txt_gray_med2">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center"><a href="#"></a>
                    <input type="submit" name="button" id="button_find" value="Go to Home Page" />
                    <input type="hidden" name="user" value="<?php echo $user_id; ?>">                  </td>
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
