
<style type="text/css">
<!--
#text_info_black{
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 8pt;
	font-weight: normal;
}
#text_centerd {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 9px;
	font-weight: normal;
	text-align: center;
	}
#gray_white_bg{
	background-image: url(img/gray_white_bg.png);
	background-repeat: repeat-x;
}
#cell_gray_bottom{
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10pt;
	font-weight: bold;
	background-color: #EDEFF4;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 1px;
	border-left-width: 0px;
	border-bottom-color: #D8DFEA;
	border-bottom-style: solid;
	vertical-align: middle;
	}
#cell_blank_gray {
	background-color: #EDEFF4;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	}
#div_album{
	background-color: #F7F7F7;
	width: 760px;
	height: auto;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-color: #BBBBBB;
	border-style: solid;
	margin: 5px;
	padding: 10px;
	float: center;
	vertical-align: middle;
	word-spacing: normal;
	position: absolute;
	visibility: visible;
	min-width: 760px;
	max-width: 760px;
	text-align: center;
	
	}
#div_photo{
	background-color: #FFF;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-color: #BBBBBB;
	border-style: solid;
	margin: 5px;
    padding: 5px;
    float: left;

	}
#div_photo_frame{
	
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	
	margin: 0px;
	padding: 0px;
	float: left;
	width: 170px;
	height: 170px;
	min-width: 170px;
	max-width: 170px;
	min-height: 170px;
	max-height: 170px;
	text-align: center;
	vertical-align: middle;
	}
</style>
<?php
include('header.php');
?>
<br><br>
  <?php
include('phpconect.php');
$album_name = $_GET['album'];
$user_id = $_REQUEST['UID'];
$sql5 = "SELECT * FROM $tbl_items WHERE userid = '$user_id' AND name = '$album_name' ";
$result5 = mysql_query($sql5);
$row5 = mysql_fetch_array ($result5);
$count = mysql_num_rows($result5);
mysql_query("UPDATE $tbl_album SET count=$count WHERE userid='$user_id' AND name='$album_name' ");

//if ($count) {
//mysql_query("UPDATE $tbl_album SET count=$count WHERE userid='$user_id' AND name='$album_name' ");
//}
?>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="cell_blank_gray" colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td id="cell_gray_bottom" width="15%">&nbsp;</td>
    <td  width="2%" rowspan="2" valign="top"><img src= "<?php echo $main_photo ?>" alt="<?php echo $first;?>&nbsp;<?php echo $last;?>" width="50"  hspace="0" vspace="0" border="0" align="top" /></td>
    <td id="cell_gray_bottom" width="70%" valign="top"  >&nbsp;Your Photos - <?php echo $album_name?></td>
    <td  id="cell_gray_bottom" width="15%">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <td  width="70%" bgcolor="#FFFFFF">&nbsp;&nbsp;<a href="photos.php?UID=<?php echo $user_id?>">Back to My Photos</a></td>
    <td  width="15%" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td  width="2%" valign="top">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF">
	</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td id = "text_info_black" colspan="2" bgcolor="#FFFFFF"><?php echo $count ;?> Photos | <a href="#">Edit Photos</a> | <a href="#">Organize Photos</a> | <a href="addphoto.php?UID=<?php echo $user_id?>&album=<?php echo $album_name ?>">Add More Photos</a></td>
    <td bgcolor="#FFFFFF"><?php
$image = mysql_query("SELECT * FROM items WHERE userid='$user_id' AND name='$album_name' ORDER BY photo_date");
?></td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF">
    <div id="div_album">
      <?php if (mysql_num_rows($image)<=0)
	 echo "No Photos in Album ".$album_name." Yet";
	?>
<?php
	$size_w = 105;
	$size_h = 138;
	$i = 0;
?>
<?php
while ($row4 = mysql_fetch_assoc($image))
{
$path = "poze/".$row4['img_location'];
$img_size = getimagesize("$path");
list($w,$h) = $img_size;
$i++;
if ($w<$h){
$var = $size_w;
}
else{
$var = $size_h;
}
$screen = $i - 1;
//PATH=".$row4['img_location']."&
echo " <div id='div_photo_frame' ><div id ='div_photo' ><a href='photo_view.php?UID=$user_id&AID=$album_name&scr=$screen'/><img src='poze/".$row4['img_location']."' width='$var' alt='".$row4['description']."' border='2' ></div></div>";
} ?>


    </div></td>
    <td width="15%" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td colspan="2" bgcolor="#FFFFFF">
</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF" id="text_centerd">www.dan-facebook.com/viewalbum.php?UID=<?php echo $user_id?>&amp;album=<?php echo $album_name?></td>
    <td width="15%" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
