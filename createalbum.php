<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
ob_start();
include ('header.php');
include('phpconect.php');
$album_name = $_POST['album_name'];
$albumdescription = $_POST['albumdescription'];
$location = $_POST['location'];
$privacy = $_POST['privacy'];
$user_id = $_REQUEST['UID'];
$count =0;
$album_date = date("y/m/d");
$cover = $user_id."/album_no_cover.png";
if ($albumdescription)
{
	if (strlen($albumdescription)>100)
		echo "Description too long!";
	else 
	{
	$create = mysql_query("INSERT INTO albums VALUES ('','$user_id','$album_name','$albumdescription','$count','$cover','$privacy','$location','$album_date')");
	//echo "Album created! <a href='#'>Create an album</a>";
	//include('addphoto.php');
	header("location:addphoto.php?UID=$user_id&album=$album_name");
	
	}
}
if (!$album_name&&!$albumdescription)
{
	if(strlen($album_name)>20)
		echo "Album name too long";
		else
		{
	echo "
		<table cellpadding='5' width='100%'>
			<tr>
				<td>
				<font face='arial' size='2'>
				<img src='img/album_edit.png'> Add New Photos<b>$album_name</b>
				
				<form action='createalbum.php?UID=$user_id' method='POST'>
					Album Name: <input type='text' name='album_name' maxlenght='20' size='20'><br>
					Location: <input type='text' name='location' maxlenght='100' size='20'><br>
					Description: <textarea name='albumdescription' maxlenght='100' rows='3' cols='20'></textarea><br>
					Privacy: <select name='privacy' size='1'>
    <option value='0'>Everyone</option>
    <option value='1'>Friends of Friends</option>
    <option value='3'>Only Friends</option>
    <option value='4'>Only Me</option>
    </select><br>
					
					
					<input type='submit' name='submit' value='Create'>	
					
					
				</form>
				
				</td>			
			</tr>
		
		</table>
		
	";
		}
	
}

?>
</body>