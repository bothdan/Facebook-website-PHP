<?php 
ob_start();
include ('header.php');
include ('phpconect.php');
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
$user_id = $_REQUEST['UID'];
$photo_id = $_REQUEST['PID'];
$album_id = $_REQUEST['AID'];
echo "User Name: $user_id<br>" ;
echo "Album Name: $album_id<br>" ;
echo "Photo Name: $photo_id<br>" ;
?>
<?php 
$delete = mysql_query("DELETE FROM items WHERE userid='$user_id' AND name='$album_id' AND img_location='$photo_id'");
//echo "Photo Deleted!";

header("location:viewalbum.php?UID=$user_id&album=$album_id");
?>


