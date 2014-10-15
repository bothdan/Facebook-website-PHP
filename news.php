<?php
$host = "localhost";
$username = "tutoriallogin";
$password = "tutunul";
$db_name = "tutoriallogin";
$tbl_name = "logintable";

mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
					 
$sql = "SELECT * FROM $tbl_name WHERE user='$myusername' and pass='$mypassword'";
$result = mysql_query($sql);


$row = mysql_fetch_array ($result);
$poza = $row['pic'];
$membru = $row['user'];
$first = $row['first'];
$last = $row['last'];
$id = $row['id'];
if($row != "") {
	session_register("myusername");
	session_register("mypassword");
	//header("location:login_success.php");
	//echo "$membru welcome to ur page";
	?>
<style type="text/css">
<!--
.txt_aliniat_dreapta {
	text-align: right;
	color: #FFF;
}
.txt_white {
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.txt_alb {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.txt_aliniat_dreapta .txt_white .txt_white {
	color: #FFF;
	text-decoration: none;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
.txt_black {
	color: #000;
}
.txt_black {
	font-size: 16px;
}
.txt_black {
	font-family: "Lucida Console", Monaco, monospace;
}
.txt_black {
	font-weight: bold;
}
.txt_black {
	font-family: Arial, Helvetica, sans-serif;
}
.txt_black {
	font-size: 16px;
}
.txt_black {
	font-size: 16pt;
}
.txt_black {
	font-weight: bold;
}
-->
</style>

    <title>Facebook | <?php echo $first;?> <?php echo $last;?></title><body leftmargin="0" topmargin="0"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" bgcolor="#3A5A97"><table width="824" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="177" height="50" bgcolor="#3A5A97"><img src="img/facebook_logo.jpg" alt="" width="100" /></td>
            <td width="291" nowrap="nowrap" bgcolor="#3A5A97" class="txt_white"> <span class="txt_alb">Home <a href="profile.php?key=<?php echo $id ?>">Profile</a> Friends Inbox</span></td>
            <td width="356" nowrap="nowrap" bgcolor="#3A5A97" class="txt_aliniat_dreapta"><span class="txt_white">
              <?php echo $first;?> <?php echo $last;?> 
            Settings <a href="logout.php" class="txt_white">Logout</a></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="10" colspan="7" bgcolor="#EDEFF4">&nbsp;</td>
          </tr>
          <tr>
            <td width="15%" height="19" bgcolor="#EDEFF4">&nbsp;</td>
            <td width="18" bgcolor="#EDEFF4">&nbsp;</td>
            <td width="200" rowspan="2" align="left" valign="top" nowrap="nowrap">welcome</td>
            <td width="18" bgcolor="#EDEFF4">&nbsp;</td>
            <td width="40%" height="10" bgcolor="#EDEFF4"><?php echo $first;?> <?php echo $last;?></td>
            <td width="20%" bgcolor="#EDEFF4">&nbsp;</td>
            <td width="15%" bgcolor="#EDEFF4">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td width="40%">jgfgf</td>
            <td>&nbsp;</td>
            <td width="10%">&nbsp;</td>
          </tr>
        </table>
          <p><a href="<?php echo $poza ?>"></a></p>
        <p>
          <?php
	echo $poza;
	

}
else {
	echo "Wrong Username or Password";
}
?>
        </p>
        <p>&nbsp; </p>
        <p><a href="logout.php" style="color: #00F">Logout </a></p>
<p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
    </table>
    <p>
    <p>    
    <p>    
    <p>    
    <p><a href="<?php echo $poza ?>"></a>