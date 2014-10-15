<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html><head>
<title>CSS DropDown Menu without JavaScript, PureCSS, Rollover</title>
<style type="text/css">
body { padding: 3em; }

#cssm1 *  { padding:0; margin: 0; font: 1em arial; }

#cssm1 { position: absolute;  z-index: 99; margin: 0 auto; float: left; line-height: 20px; }

#cssm1 a { display: block; border: 1px solid #fff; background: #abc; text-decoration: none; padding: 3px 10px; }
#cssm1 a:hover { background: #789; }


#cssm1 ul li, #cssm1 ul li ul li  { width: 120px; list-style-type:none; }

#cssm1 ul li { float: left; width: 120px; }

#cssm1 ul li ul, #cssm1:hover ul li ul, #cssm1:hover ul li:hover ul li ul{ 
	display:none;
	list-style-type:none; 
	width: 120px;
	}

#cssm1:hover ul, #cssm1:hover ul li:hover ul, #cssm1:hover ul li:hover ul li:hover ul { 
	display:block; 
	}

#cssm1:hover ul li:hover ul li:hover ul { 
	position: absolute;
	margin-left: 120px;
	margin-top: -20px;
	}




</style>

</head><body>
<div>
<h1>CSS DropDown/Rollover Menu without Javascript</h1>
<p>This is a dhtml menu like rollover menus with javascript. Tested with major web-browsers like Mozilla Firefox 3, Microsoft Internet Explorer 8, Opera 9.5, Google Chrome, Apple Safari, ...</p>
</div>

<div id="cssm1">
	<ul>
		<li><a href="http://www.cafewebmaster.com">Home</a></li>
		<li><a href="#">Design &nbsp; &nbsp; »</a>
				<ul>
				<li><a href="#">Graphics</a></li>
				<li><a href="#">Themes &nbsp; &nbsp; »</a>
					<ul>
						<li><a href="#">Joomla</a>
						<li><a href="#">Drupal</a>
						<li><a href="#">Wordpress</a>
					</ul>
				</li>
			</ul>
		
		</li>
		<li><a href="#">Download</a></li>
		<li><a href="#">Menus &nbsp; &nbsp;  »</a>
			<ul>
				<li><a href="#">Javascript</a></li>
				<li><a href="#">CSS &nbsp; &nbsp; »</a>
					<ul>
						<li><a href="#">Left Menu</a>
						<li><a href="#">DropDown</a>
						<li><a href="#">...</a>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">...</a></li>
		
	</ul>
</div>
</body></html>
