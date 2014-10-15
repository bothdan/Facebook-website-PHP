<?php
include('header.php');
include('phpconect.php');
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$album_name = $_GET['album'];
$user_id = $_REQUEST['UID'];

echo  "User ID: $user_id<br>";
echo  "Album Name: $album_name</br>";


$delete = mysql_query("DELETE FROM albums WHERE name='$album_name' AND userid='$user_id'");
echo "Album Deleted!";
?>