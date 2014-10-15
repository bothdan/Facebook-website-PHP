<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "header.php" ?>
<br><br>
<?php include "phpconect.php" ?>
<?php include "var_list.php" ?>
<title></title>
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

.txt_black {
	color: #000;
	font-size: 16px;
	font-family: "Lucida Console", Monaco, monospace;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>

<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="15%" height="19" bgcolor="#FFFFFF"><?php include "phpconect.php" ?>
              <?php include "var_list.php" ?>

		</td>
            <td>&nbsp;</td>
            <td width="40%" height="10">&nbsp;</td>
            <td width="20%"><a href="album.php?UID=<?php echo $id ?>" ></a></td>
            <td width="15%">&nbsp;</td>
          </tr>
          <tr>
            <td height="19" bgcolor="#FFFFFF">&nbsp;</td>
            <td><table width="0" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td nowrap><img src="img/news_feed.png" width="126" height="26" alt="News Feed"></td>
              </tr>
              <tr>
                <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','img/pages_over.png',1)"><img src="img/pages.png" alt="Pages" name="Image5" width="126" height="26" border="0"></a></td>
              </tr>
              <tr>
                <td nowrap><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','img/status_updates_over.png',1)"><img src="img/status_updates.png" alt="Status Updates" name="Image6" width="126" height="26" border="0"></a></td>
              </tr>
              <tr>
                <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','img/photos_over.png',1)"><img src="img/photos.png" alt="Photos" name="Image7" width="126" height="26" border="0"></a></td>
              </tr>
              <tr>
                <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','img/links_over.png',1)"><img src="img/links.png" alt="Links" name="Image8" width="126" height="27" border="0"></a></td>
              </tr>
              <tr>
                <td height="10" valign="baseline"><a href="more.php" class="txt_alb"><span class="txt_link_blue">&nbsp;&nbsp;More</span></a></td>
              </tr>
            </table></td>
            <td height="10"><?php echo $first;?> <?php echo $last;?></td>
            <td><a href="photos.php?UID=<?php echo $id ?>">photos</a><br><a href="album.php?UID=<?php echo $id ?>" >album</a></td>
            <td>&nbsp;</td>
          </tr>
          </table>
          <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
</table>
</body>