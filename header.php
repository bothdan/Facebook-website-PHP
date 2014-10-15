<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "phpconect.php" ?>
<?php include "var_list.php" ?>
<style type="text/css">
<!--
#navmenu {
	width: 250px;
	height: 28px;
	padding: 0px;
	margin: 0px auto;
	vertical-align: bottom;	
	}

#navmenu ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	text-align: center;
	vertical-align: bottom;
	}
	
#navmenu ul li {
	width: 48px;
	float: left;
	margin: 0px;
	}
#navmenu ul li a {
	font-family: verdana, arial;
	text-decoration: none;
	display: block;
	width: 48px;
	height: 28px;
	line-height: 28px;
	font-size: 10px;
	background-image: url(img/bluemenu.jpg);
	color: #FFF;
	vertical-align: bottom;
	}

#navmenu a:hover {
	background-position: 0px -28px;
	color: #FFF;
	font-size: 10px;
	}
a:hover {
	color: #5F76C8;
	font-size: 8pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:active {
	color: #5F76C8;
	font-size: 8pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:link {
	color: #5F76C8;
	font-size: 8pt;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:link:hover {
	color: #5F76C8;
	font-size: 8pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:visited {
	color: #5F76C8;
	font-size: 8pt;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
a:visited:hover {
	color: #5F76C8;
	font-size: 8pt;
	text-decoration: underline;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
#menu {
	background-color: #627AAD;
	color: #FFF;
	font-size: 8pt;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight: bold;
	text-decoration: none;
	display: block;
	height: 28px;
	line-height: 28px;
	margin: 0px;
	padding: 0px;
	text-align: center;
	}
#menu a:link{
	background-color: #627AAD;
	color: #FFF;
	font-size: 8pt;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight: bold;
	text-decoration: none;
	display: block;
	height: 28px;
	line-height: 28px;
	margin: 0px;
	padding: 0px;
	text-align: center;
	}
#menu a:active{
	background-color: #627AAD;
	color: #FFF;
	font-size: 8pt;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight: bold;
	text-decoration: none;
	display: block;
	height: 28px;
	line-height: 28px;
	margin: 0px;
	padding: 0px;
	text-align: center;
	}
#menu a:visited{
	background-color: #627AAD;
	color: #FFF;
	font-size: 8pt;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight: bold;
	text-decoration: none;
	display: block;
	height: 28px;
	line-height: 28px;
	margin: 0px;
	padding: 0px;
	text-align: center;
	}
#menu a:hover{
	background-color: #6D86B7;
	color: #FFF;
	font-size: 8pt;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight: bold;
	text-decoration: none;
	display: block;
	height: 28px;
	line-height: 28px;
	margin: 0px;
	padding: 0px;
	text-align: center;
	}
#main_table{
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 0px;
	border-left-width: 1px;
	border-top-color: #1D4088;
	border-right-color: #1D4088;
	border-bottom-color: #1D4088;
	border-left-color: #1D4088;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
}
-->
</style>
<title>Facebook | <?php echo $first;?> <?php echo $last;?></title>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<head>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="bottom" bgcolor="#3A5A97"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="15%" height="38" valign="bottom" bgcolor="#3A5A97"><a href="logout.php">logout </a><a href="profile.php?UID=<?php echo $id ?>"><?php echo $first;?>&nbsp;<?php echo $last;?></a></td>
            <td width="15%" height="38" align="left" valign="bottom" bgcolor="#3A5A97"><table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td><a href="home.php?UID=<?php echo $id ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('logo','','img/facebook_logo_over.png',1)"><img src="img/facebook_logo.png" alt="Home" name="logo" width="103" height="31" border="0" align="left"></a></td>
                <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','img/friend_req_over.png',1)"><img src="img/friend_req.png" alt="Friend Requests" name="Image1" width="24" height="31" border="0" align="left"></a></td>
                <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/messages_over.png',1)"><img src="img/messages.png" alt="Messages" name="Image2" width="24" height="31" border="0" align="left"></a></td>
                <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('notification','','img/notification_over.png',1)"><img src="img/notification.png" alt="Notification" name="notification" width="24" height="31" border="0" align="left"></a></td>
              </tr>
            </table></td>
            <td width="55%" height="38" colspan="3" valign="bottom" bgcolor="#3A5A97"><table id ="main_table" width="100%" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td valign="middle" >
                      <table width="250" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1%" nowrap bgcolor="#3A5A97">&nbsp;</td>
                          <td width="1%" nowrap bgcolor="#FFFFFF"><input name="textfield" type="text" id="textfield" size="45"></td>
                          <td width="1%" nowrap bgcolor="#FFFFFF"><img src="img/search_ico.png" alt="" width="19" height="19" align="absmiddle"></td>
                        </tr>
                      </table></td>
                    <td width="5%"><div id="menu"><a href = "home.php?UID=<?php echo $id ?>">&nbsp;&nbsp;Home&nbsp;&nbsp;</a></div></td>
                    <td width="5%" nowrap><div id="menu"><a href = "profile.php?UID=<?php echo $id ?>">&nbsp;&nbsp;Profile&nbsp;&nbsp;</a></div></td>
                    <td width="5%" nowrap><div id="menu"><a href = "#">&nbsp;&nbsp;Finde Friends&nbsp;&nbsp;</a></div></td>
                    <td width="10%" nowrap><div id="menu"><a href = "#">&nbsp;&nbsp;Account&nbsp;&nbsp;</a></div></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td width="30%" height="38" valign="bottom" nowrap="nowrap" bgcolor="#3A5A97" >&nbsp;</td>
          </tr>
        </table></td>
  </tr>
</table>
</head>