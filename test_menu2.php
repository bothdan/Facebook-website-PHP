<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html><head>
<title>CSS DropDown Menu without JavaScript, PureCSS, Rollover</title>
<style type="text/css">
body {
	padding: 3em;
	background-color: #FFF;
}

#cssm1 *  { padding:0; margin: 0; font: 1em arial; }

#cssm1 { position: absolute;  z-index: 99; margin: 0 auto; float: left; line-height: 20px; }

#cssm1 a { display: block; border: 1px solid #F2F2F2; background: #000; text-decoration: none; padding: 0px 0px; }
#cssm1 a:hover { border: 1px solid #999999; background: #000;}


#cssm1 ul li, #cssm1 ul li ul li  { width: 100px; list-style-type:none; padding: 0px -25px; }

#cssm1 ul li { float: left; width: 26px; }

#cssm1 ul li ul, #cssm1:hover ul li ul, #cssm1:hover ul li:hover ul li ul{ 
	display:none;
	list-style-type:none; 
	width: 0px;
	}

#cssm1:hover ul, #cssm1:hover ul li:hover ul, #cssm1:hover ul li:hover ul li:hover ul { 
	display:block; 
	}

-->#cssm1:hover ul li:hover ul li:hover ul { 
-->	position: absolute;
-->	margin-left: 120px;
-->	margin-top: -20px;
-->	}




</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>
<div id="cssm1">
  <ul>
		
		<li><a href="#"><img border="0" src="img/photo.png"></a>
				<ul>
				<li><a href="#">Photos</a></li>
				
			</ul>
		
		</li>
		
		
		
		
		
	</ul>
</div>
</body></html>
