<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
a:link {
	text-decoration: none;
	color: #000;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: underline;
	color: #000;
}
a:active {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #000;
}
</style>
<?php
include ('header.php');
?>
<br><br>
<?php
include('phpconect.php');
$user_id = $_REQUEST['UID'];
echo "
<table cellpadding='5' widith='100%'>
	<tr>
		<td>
		<font face='arial' size='4'>
		My Albums user id: $user_id<p>
		<font size='2'>
		";
		
		$album = mysql_query("SELECT * FROM albums WHERE userid='$user_id'");
		echo "<table width='100%'>";
		
		while ($row3 = mysql_fetch_assoc($album))
		{
			echo "
			<tr>
				<td>
				<a href='viewalbum.php?UID=$user_id&album=".$row3['name']."'><img src='poze/".$row3['cover']."' width='97'  alt='".$row3['name']."' border='0' >
				</td>
				<td>
				<b><a href='viewalbum.php?UID=$user_id&album=".$row3['name']."'>".$row3['name']."</a></b><br>
				".$row3['description']."<br>
				".$row3['count']." items<br>
				<font face='arial' size='2'>
				<a href='deletealbum.php?UID=$user_id&album=".$row3['name']."'>Delete Album</a><br>
				<a href='addphoto.php?UID=$user_id&album=".$row3['name']."'>Add Photos</a></font>
				
				</td>
			
			</tr>
			";
			
		}
		echo "</table>";
		
		echo "<p>
		<font face='arial' size='4'>
		<a href='createalbum.php?UID=$user_id'>Create an album</a><br>
		</font>
		</td>
	</tr>
</table>
";
?>
</body>
