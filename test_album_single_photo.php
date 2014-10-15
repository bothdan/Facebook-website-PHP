<style type="text/css">
<!--
a:hover {
	color: #5F76C8;
	font-size: 10pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:active {
	color: #5F76C8;
	font-size: 10pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:link {
	color: #5F76C8;
	font-size: 10pt;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:link:hover {
	color: #5F76C8;
	font-size: 10pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:visited {
	color: #5F76C8;
	font-size: 10pt;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:visited:hover {
	color: #5F76C8;
	font-size: 10pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}


</style>
<?php
$host = "localhost";
$username = "tutoriallogin";
$password = "tutunul";
$db_name = "tutoriallogin";
$tbl_login = "logintable";
$tbl_poze = "poze";
$tbl_items = "items";
$tbl_album = "albums";
$tbl_friends = "friends";
$tbl_commercials = "commercials";
$tbl_gifts = "gifts";
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
// database connection stuff here
//From Here on is the script
$screen = 0;
$screen = $_REQUEST['screen'];
$rows_per_page = 1;
$sql = "SELECT * FROM $tbl_items";
$result = mysql_query($sql);
$total_records = mysql_num_rows($result);
$pages = ceil($total_records / $rows_per_page);
mysql_free_result($result);

if (!isset($screen))
  $screen = 1;
$start = $screen * $rows_per_page;
$sql = "SELECT img_location FROM $tbl_items LIMIT $start, $rows_per_page ";
//$sql .= "LIMIT $start, $rows_per_page";

$result = mysql_query($sql);
$rows = mysql_num_rows($result);
for ($i = 0; $i < $rows; $i++) {
  $description = mysql_result($result, $i, 0);
  echo "poze/$description";?>
  <br>
  
  <img src="<?php echo "poze/$description" ;?>" alt="<?php echo $description;?>" width="200"  >
  <br>
  <?php echo "poze/$description";?>
  <br>
<?php }
echo "<p><hr></p>\n";
// let's create the dynamic links now
if ($screen != 0) {
  $xx = $screen - 1;
  $url = "test_album_single_photo.php?screen=".$xx;
  echo "<a href=\"$url\">Previous</a>\n";
}


if ($pages-$screen !=1 ) {
  
  $xx = $screen + 1;
  $url = "test_album_single_photo.php?screen=".$xx ; 
  echo "<a href=\"$url\">Next</a>\n";
 
}
$pag = $screen + 1;
echo $pag. ' of '. $pages;
echo $start;
?>
