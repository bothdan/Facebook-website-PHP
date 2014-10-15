<?php
$host = "localhost";
$username = "tutoriallogin";
$password = "tutunul";
$db_name = "facebook";
$tbl_name = "logintable";

mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
					 
$sql = "SELECT * FROM $tbl_name WHERE user='$myusername' and pass='$mypassword'";
$result = mysql_query($sql);


$row = mysql_fetch_array ($result);
$i = 1;
$id = $row['id'];
if($row != "") {
	session_register("myusername");
	session_register("mypassword");
	header("location:home.php?UID=$id");
}
else {
	//echo "Wrong Username or Password";
	header("location:login.php?login_attempt=$i&UID=$myusername");
}
?>