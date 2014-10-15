<?php
$host = "localhost";
$username = "tutoriallogin";
$password = "tutunul";
$db_name = "facebook";
$tbl_login = "logintable";
$tbl_poze = "poze";
$tbl_items = "items";
$tbl_album = "albums";
$tbl_friends = "friends";
$tbl_commercials = "commercials";
$tbl_gifts = "gifts";
$tbl_wall = "wall_post";
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());

$user_id = $_REQUEST['UID'];

$sql = "SELECT * FROM $tbl_login WHERE id = '$user_id' ";
$result = mysql_query($sql);
$row = mysql_fetch_array ($result);

$user_name = $row['user'];
$main_photo =$row['main_photo'];

$sql2 = "SELECT * FROM $tbl_items WHERE userid = '$user_id' ";
$result2 = mysql_query($sql2);
$row2 = mysql_fetch_array ($result2);

$nr_row = mysql_num_rows($result2);
?>