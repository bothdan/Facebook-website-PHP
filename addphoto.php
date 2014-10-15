<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include ('header.php');

include('phpconect.php');
$user_id = $_REQUEST['UID'];
$album_name = $_REQUEST['album'];
?>
<br><br><br>
<style type="text/css">
<!--
.buton{
	text-align: center;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	background-color: #3B5998;
	color: #FFF;
	border-top-width: 0px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 0px;
	line-height: 20px;
	border-top-color: #D9DFEA;
	border-right-color: #0E1F5B;
	border-bottom-color: #0E1F5B;
	border-left-color: #D9DFEA;
}

.buton2{
	text-align: center;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	background-color: #F0F0F0;
	color: #000;
	border-top-width: 0px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 0px;
	line-height: 20px;
	border-right-color: #000;
	border-bottom-color: #000;
	border-top-color: #E7E7E7;
	border-left-color: #E7E7E7;
}

#info_text{
	text-align: center;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	color: #666;
	font-size: 9px;
}
#tabs {
	text-align: center;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	color: #000;
	font-size: 11px;
	font-weight: bold;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 0px;
	line-height: 18px;
	background-color: #F1F1F1;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
}

#tin_link{
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	font-size: 10px;
	color: #6078CD;
	font-weight: bold;
	text-decoration: underline;
	text-align: right;
	
}

#tabs_blue {
	text-align: center;
	font-family:"lucida grande", tahoma, verdana, arial, sans-serif;
	color: #FFF;
	background-color: #6D84B4;
	font-size: 11px;
	font-weight: bold;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-color: #3B5998;
	border-bottom-color: #3B5998;
	border-left-color: #3B5998;
	border-right-color: #5973A9;
	line-height: 18px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
}
body {
	margin-left: 0px;
	margin-top: 0px;
}
body table tr td table tr td {
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}
body table tr td table tr td {
	font-weight: bold;
	font-size: 14px;
	color: #000;
}
#photo_type {
	font-size: 10px;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	font-weight: bold;
	color: #666;
	
}
#agree_type {
	font-size: 10px;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	font-weight: bold;
	color: #666;
	text-align: center;
}
.agree_type_bg {
	font-size: 10px;
	font-family:"lucida grande", tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color: #F00;
	text-align: center;
	background-color: #F7F7F7;
}
-->
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" nowrap>&nbsp;</td>
    <td width="750"><table width="750" border="0" cellspacing="0" cellpadding="0" >
      <tr>
        <td height="30" colspan="2" valign="top"><img src="img/album_edit.png" alt="" width="16" height="14"> <span class="UIMediaHeader_Title">Upload Photos -</span> <b><?php echo $album_name;?></b></td>
        </tr>
      <tr>
        <td width="65%"><table width="333" border="0" align="left" cellpadding="0" cellspacing="0" bordercolor="silver" >
          <tr>
            <td id="tabs_blue" bordercolor="#3B5998" >Add Photos</td>
            <td id="tabs">Organize</td>
            <td id="tabs">Edit Info</td>
            <td id="tabs">Delete</td>
          </tr>
        </table></td>
        <td width="35%" id="tin_link"><a href="viewalbum.php?UID=<?php echo $user_id ?>&album=<?php echo $album_name ?>">Back to Album</a></td>
      </tr>
      <tr>
        <td colspan="2">
        <form action="album_photo_add.php?UID=<?php echo $user_id ?>&aln=<?php echo $album_name?>" method="POST" enctype="multipart/form-data">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#F7F7F7">
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td width="45%" rowspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="60%">&nbsp;</td>
                <td width="40%"><TABLE border="0" cellSpacing="0">
                  <TBODY>
                    <TR>
                      <TD id="photo_type">Photos:<BR>
                        You can upload <BR>
                        JPG, GIF or   PNG<BR>
                        files.</TD>
                    </TR>
                  </TBODY>
                </TABLE></td>
              </tr>
            </table></td>
            <td width="55%"><input type="file" name="img1" ></td>
          </tr>
          <tr>
            <td width="55%"><input type="file" name="img2" ></td>
          </tr>
          <tr>
            <td width="55%"><input type="file" name="img3" ></td>
          </tr>
          <tr>
            <td width="55%"><input type="file" name="img4" ></td>
          </tr>
          <tr>
            <td width="55%"><input type="file" name="img5" ></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="middle">
              <INPUT id="agree" value="1" type="checkbox" name="agree" class="agree_type_bg">
              <span id="info_text">I certify that I have the right to   distribute these photos and that they do not violate the <A href="http://www.facebook.com/terms.php">Terms of Use</A>.</span></td>
            </tr>
          <tr>
            <td height="64" colspan="2" align="center" valign="baseline"><label>
              <br>
              <br>
              <input name="button" type="submit" class="buton" id="button" value="Upload Photos">
<span id="info_text">or</span>  
<input type="submit" name="button2" id="button2" value=" Cancel " class="buton2" >
            </label></td>
            </tr>
          <tr>
            <td height="34" colspan="2" align="center" valign="top"><p id="info_text">The file size limit 5 MB. If your upload does not work, try uploading a   smaller picture.</p></td>
            </tr>
          <tr>
            <td height="37" colspan="2" align="center" valign="baseline"><span id="info_text">Got a camera phone? <A href="/mobile/?v=photos">Upload photos straight from your phone.</A></span></td>
            </tr>
        </table></form></td>
        </tr>
    </table></td>
    <td width="300" nowrap>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
