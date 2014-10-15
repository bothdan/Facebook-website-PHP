<?php
include ('header.php');
include('phpconect.php');
$user_id = $_REQUEST['UID'];
$album_name = $_REQUEST['aln'];
?>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php 

//This is the directory where images will be saved 
$path = "poze/".$user_id."/";
//mkdir($path);
$target = $user_id."/"; 
$target1 = $path . basename( $_FILES['img1']['name']); 
$target2 = $path . basename( $_FILES['img2']['name']);
$target3 = $path . basename( $_FILES['img3']['name']);
$target4 = $path . basename( $_FILES['img4']['name']);
$target5 = $path . basename( $_FILES['img5']['name']);

//This gets all the other information from the form 
$var_pic1 = ($_FILES['img1']['name']);
$pic1=$target.($_FILES['img1']['name']);
$var_pic2 = ($_FILES['img2']['name']);
$pic2=$target.($_FILES['img2']['name']);
$var_pic3 = ($_FILES['img3']['name']);
$pic3=$target.($_FILES['img3']['name']);
$var_pic4 = ($_FILES['img4']['name']);
$pic4=$target.($_FILES['img4']['name']);
$var_pic5 = ($_FILES['img5']['name']);
$pic5=$target.($_FILES['img5']['name']);

$photo_date = date("y/m/d");

$description = "No descriptin.";
$agree = $_POST['agree'];

//Writes the information to the database 
if ($var_pic1) {
	mysql_query("INSERT INTO `items` VALUES ('', '$user_id', '$album_name','$description', '$pic1','$agree','$photo_date')") ; 
	move_uploaded_file($_FILES['img1']['tmp_name'], $target1);
	}
	
if ($var_pic2) {
	mysql_query("INSERT INTO `items` VALUES ('', '$user_id', '$album_name','$description', '$pic2','$agree','$photo_date')") ; 
	move_uploaded_file($_FILES['img2']['tmp_name'], $target2);
	}
	
if ($var_pic3) {
	mysql_query("INSERT INTO `items` VALUES ('', '$user_id', '$album_name','$description', '$pic3','$agree','$photo_date')") ; 
	move_uploaded_file($_FILES['img3']['tmp_name'], $target3);
	}
		
if ($var_pic4) {
	mysql_query("INSERT INTO `items` VALUES ('', '$user_id', '$album_name','$description', '$pic4','$agree','$photo_date')") ; 
	move_uploaded_file($_FILES['img4']['tmp_name'], $target4);
	}
	
if ($var_pic5) {
	mysql_query("INSERT INTO `items` VALUES ('', '$user_id', '$album_name','$description', '$pic5','$agree','$photo_date')") ; 
	move_uploaded_file($_FILES['img5']['tmp_name'], $target5);
	}
	
	
header("location:viewalbum.php?UID=$user_id&album=$album_name");

//Writes the photo to the server 
//if(move_uploaded_file($_FILES['img1']['tmp_name'], $target1)) 
//{ 

//Tells you if its all ok 
//echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
//} 
//else { 

//Gives and error if its not 
//echo   "Sorry, there was a problem uploading your file. "; 

//} 
?> 