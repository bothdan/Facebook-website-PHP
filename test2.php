<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Search Results | Motherproof</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />	
	<link rel="stylesheet" href="/mpcss/motherproof.css" type="text/css" />
	<script type="text/javascript" src="http://www.motherproof.com/files/motherproof/"></script>
    <script type="text/javascript" src="http://www.motherproof.com/files/jquery_base/"></script>
 
</head>
<body>
 
<div id="container">
	
	<div id="content">
<div id="leader">    <script type="text/javascript">var adSize = '728x90';</script>
 
    <script type="text/javascript">var adMMVal = '';</script>
 
<script type="text/javascript"> 
	// area and aamsz set on includes 
	//Provide URL to adserver 
	adserver = 'http://acc.cars.com'; 
	// Set targeting info because it's on another domain
	var affadvalue = "national";
        if (typeof adAreaValue == 'undefined') adAreaValue = '';
        adAreaValue = adAreaValue.replace(/(<\/?p>|[-\s])/g,'').toUpperCase();
	target = '/ZIP_CODE=/SITE=CARS.COM/AAMSZ='+adSize+'/AFF=' + affadvalue + '/AREA=MOTHERPROOF'+(adAreaValue.length > 0? '.'+adAreaValue : '') + adMMVal;
	// Cache-busting and pageid values 
	random = Math.round(Math.random() * 100000000); 
	if (!pageNum) var pageNum = Math.round(Math.random() * 100000000); 
	document.write('<SCR'); 
	document.write('IPT SRC="' + adserver + '/jserver/acc_random=' + random + target + "/pageid=" + pageNum + '/u=">');
	document.write('</SCR'); 
	document.write('IPT>'); 
</script></div>
<script type="text/javascript"> 
$('#leader').children().css('margin','0 auto')
</script>
	
		<div id="h">
 
			<div id="hL2">
				<a href="http://www.motherproof.com/" id="homeLogo"><span>Motherproof</span></a>
			</div>
 
			<div id="hR">
 
				<p>BROWSE CAR REVIEWS BY:</p>
				<a onclick="box('makemodel','visible'), box('type','hidden'), box('lifestage','hidden')" href="javascript://"><img src="/mpimages/browse_makemodel.gif" alt="MAKE &amp; MODEL" /></a>
				<a href="javascript://" onclick="box('makemodel','hidden'), box('type','visible'), box('lifestage','hidden')"><img src="/mpimages/browse_type.gif" alt="TYPE" /></a>
				<a href="javascript://" onclick="box('makemodel','hidden'), box('type','hidden'), box('lifestage','visible')"><img src="/mpimages/browse_lifestage.gif" alt="LIFESTAGE " /></a>
 
                <div id="makemodel">
                		<a href="javascript://" onclick="box('makemodel','hidden')"><img class="popClose" src="/mpimages/pop_close.gif" border="0" alt="Image" /></a><br />
                		MAKE<br />
                		<select class="" id="makeSelector">
                		<option value="">Select a Make</option>
                        <option>Acura</option><option>Audi</option><option>Bentley</option><option>BMW</option><option>Buick</option><option>Cadillac</option><option>Chevrolet</option><option>Chrysler</option><option>Dodge</option><option>Ford</option><option>GMC</option><option>Honda</option><option>Hummer</option><option>Hyundai</option><option>Infiniti</option><option>Jaguar</option><option>Jeep</option><option>Kia</option><option>Land Rover</option><option>Lexus</option><option>Lincoln</option><option>Mazda</option><option>Mercedes-Benz</option><option>Mercury</option><option>Mini</option><option>Mitsubishi</option><option>Nissan</option><option>Pontiac</option><option>Porsche</option><option>Saab</option><option>Saturn</option><option>Scion</option><option>Subaru</option><option>Suzuki</option><option>Toyota</option><option>Volkswagen</option><option>Volvo</option>
                		</select>
                		MODEL<br />
                		<select class="" id="modelSelector">
                		<option value="">Select a Make</option>
                		</select>
                		<input type="image" src="/mpimages/pop_search.gif" name="submit" id="reviewSearchSubmit" />
                </div>
<form id='mmSearch' method="post" action="http://www.motherproof.com/"  >
<div class='hiddenFields'>
<input type="hidden" name="ACT" value="19" />
<input type="hidden" name="XID" value="48a2d6b7a1e6406324e3d9d0f891f386371b65ff" />
<input type="hidden" name="RP" value="car-reviews&amp;#47;search-results" />
<input type="hidden" name="NRP" value="" />
<input type="hidden" name="RES" value="10" />
<input type="hidden" name="status" value="" />
<input type="hidden" name="search_in" value="" />
<input type="hidden" name="weblog" value="vehicles" />
<input type="hidden" name="site_id" value="1" />
</div>
 
<script type="text/javascript"> 
//<![CDATA[
 
var firstcategory = 1;
var firststatus = 1;
 
function changemenu(index)
{ 
 
	var categories = new Array();
	
	var i = firstcategory;
	var j = firststatus;
	
	var theSearchForm = false
	
	if (document.searchform)
	{
		theSearchForm = document.searchform;
	}
	else if (document.getElementById('mmSearch'))
	{
		theSearchForm = document.getElementById('mmSearch');
	}
	
	if (theSearchForm.elements['weblog_id'])
	{
		var weblog_obj = theSearchForm.elements['weblog_id'];
	}
	else
	{
		var weblog_obj = theSearchForm.elements['weblog_id[]'];
	}
	
	var blogs = weblog_obj.options[index].value;
	
	var reset = 0;
 
	for (var g = 0; g < weblog_obj.options.length; g++)
	{
		if (weblog_obj.options[g].value != 'null' && 
			weblog_obj.options[g].selected == true)
		{
			reset++;
		}
	} 
  
	with (theSearchForm.elements['cat_id[]'])
	{			
		if (blogs == "3")
		{	
            categories[i] = new Option("-------", ""); i++; 
            categories[i] = new Option("2008", "65"); i++; 
            categories[i] = new Option("-------", ""); i++; 
            categories[i] = new Option("Crossovers", "18"); i++; 
            categories[i] = new Option("Hybrids", "20"); i++; 
            categories[i] = new Option("-------", ""); i++; 
            categories[i] = new Option("In Diapers", "4"); i++; 
            categories[i] = new Option("In School", "5"); i++; 
            categories[i] = new Option("-------", ""); i++; 
            categories[i] = new Option("Just for Fun", "21"); i++; 
            categories[i] = new Option("Minivans", "19"); i++; 
            categories[i] = new Option("Sedans", "14"); i++; 
            categories[i] = new Option("SUVs (three rows)", "16"); i++; 
            categories[i] = new Option("SUVs (two rows)", "17"); i++; 
            categories[i] = new Option("-------", ""); i++; 
            categories[i] = new Option("Teens", "6"); i++; 
            categories[i] = new Option("-------", ""); i++; 
            categories[i] = new Option("Trucks", "48"); i++; 
            categories[i] = new Option("Wagons/Hatchbacks", "15"); i++; 
 
		} // END if blogs
			
		 
								
		if (reset > 1)
		{
			 categories = new Array();
		}
 
		spaceString = eval("/!-!/g");
		
		with (theSearchForm.elements['cat_id[]'])
		{
			for (i = length-1; i >= firstcategory; i--)
				options[i] = null;
			
			for (i = firstcategory; i < categories.length; i++)
			{
				options[i] = categories[i];
				options[i].text = options[i].text.replace(spaceString, String.fromCharCode(160));
			}
			
			options[0].selected = true;
		}
		
	}
}
 
//]]>
</script>
	
		
                    <input type="hidden" name="keywords" value="" />
                    <input type="hidden" name="where" value="all" />
                    <input type="hidden" name="cat_id[]" value="all" />
</form>
                <script type="text/javascript">
                $('#mmSearch').find(':input[@name = "search_in"]').val('titles');
                $('#makeSelector').change(function() {
                    if ($(this).val().length > 0)
                        $('#modelSelector').load('http://www.motherproof.com/files/model_list/'+escape($(this).val()));
                    else
                        $('#modelSelector').html('<option value="">Select a Make</option>');
                });
                $('#reviewSearchSubmit').click(function() {
                    var keywords = $('#makeSelector').val()+' '+$('#modelSelector').val();
                    if ($.trim(keywords).length > 0) {
                        $('#mmSearch')
                            .find('input[@name = "keywords"]').val(keywords).end()
                            .submit();
                    }
                });
                if ($('#makeSelector').val().length > 0) $('#makeSelector').val('');
                </script>
 
 
				<div id="type">
            		<a href="javascript://" onclick="box('type','hidden')">
            		<img class="popClose" src="/mpimages/pop_close.gif" border="0" alt="Image" /></a><br />
            		<p>Click on a car body type for search results.</p>
            		<table>
                    <tr>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/suvs-two-rows/"><img src="/mpimages/type_suv2.gif" alt="SUVs (two rows)" /></a></td>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/suvs-three-rows/"><img src="/mpimages/type_suv3.gif" alt="SUVs (three rows)" /></a></td>
                    </tr><tr>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/suvs-two-rows/">SUVs (two rows)</a></td>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/suvs-three-rows/">SUVs (three rows)</a></td>
                    </tr>
                    
            		<tr>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/crossovers/"><img src="/mpimages/type_cross.gif" alt="Crossovers" /></a></td>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/minivans/"><img src="/mpimages/type_mini.gif" alt="Minivans" /></a></td>
            		</tr><tr>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/crossovers/">Crossover</a></td>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/minivans/">Minivans</a></td>
            		</tr>
                    
                    <tr>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/sedans/"><img src="/mpimages/type_sedan.gif" alt="Sedans" /></a></td>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/hybrids/"><img src="/mpimages/type_hybrid.gif" alt="Hybrids" /></a></td>
                    </tr><tr>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/sedans/">Sedan</a></td>
                    <td><a href="http://www.motherproof.com/car-reviews/search-results/category/hybrids/">Hybrids</a></td>
                    </tr>
                    
                    <tr>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/wagons-hatchbacks/"><img src="/mpimages/type_wagon.gif" alt="Wagons/Hatchbacks" /></a></td>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/just-for-fun/"><img src="/mpimages/type_fun.gif" alt="Just for Fun" /></a></td>
            		</tr><tr>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/wagons-hatchbacks/">Wagons/Hatchbacks</a></td>
            		<td><a href="http://www.motherproof.com/car-reviews/search-results/category/just-for-fun/">Just for Fun</a></td>
            		</tr>
 
            		</table>
				</div>
 
				<div id="lifestage">
            		<a href="javascript://" onclick="box('lifestage','hidden')">
            		<img class="popClose" src="/mpimages/pop_close.gif" border="0" alt="Image" /></a><br />
            		<a href="http://www.motherproof.com/car-reviews/search-results/category/in-diapers/"><img src="/mpimages/pop_life1.gif" border="0" alt="Image" /></a>
            		<a href="http://www.motherproof.com/car-reviews/search-results/category/in-school/"><img src="/mpimages/pop_life2.gif" border="0" alt="Image" /></a>
            		<a href="http://www.motherproof.com/car-reviews/search-results/category/teens/"><img src="/mpimages/pop_life3.gif" border="0" alt="Image" /></a>
				</div>
 
			</div><!--end of hR-->
 
			<div class="clear"></div>
 
			<div id="nav">
 
				<div id="navL">
 
					<ul>
						<li><a href="http://www.motherproof.com/" id="home"><span>Motherproof Home</span></a></li>
						<li><a href="http://www.motherproof.com/car-reviews/" id="carReviews"><span>Car Reviews</span></a></li>
						<li><a href="http://www.motherproof.com/lifestyle-trends/" id="lifestyleTrends"><span>Lifestyle &amp; Trends</span></a></li>
						<li><a href="http://www.motherproof.com/advice-safety/" id="adviceSafety"><span>Advice &amp; Safety</span></a></li>
						<li><a href="http://www.motherproof.com/news-rants/" id="newsRants"><span>News &amp; Rants</span></a></li>
					</ul>
 
				</div>
 
				<div id="navR">
					<form method="post" action="http://www.motherproof.com/"  >
<div class='hiddenFields'>
<input type="hidden" name="ACT" value="19" />
<input type="hidden" name="XID" value="852b445d09c7e04169b4243484c4485d9f907f48" />
<input type="hidden" name="RP" value="search&amp;#47;results" />
<input type="hidden" name="NRP" value="search&amp;#47;noresults" />
<input type="hidden" name="RES" value="10" />
<input type="hidden" name="status" value="" />
<input type="hidden" name="weblog" value="accessories|advice|vehicles|lifestyles|news|press" />
<input type="hidden" name="search_in" value="everywhere" />
<input type="hidden" name="where" value="all" />
<input type="hidden" name="site_id" value="1" />
</div>
 
 
 
						<div class="searchLeft"><input type="text" name="keywords" value="Type Here" class="searchBox" onclick="$(this).val('')"></input></div>
						<div class="searchRight"><input type="image" src="/mpimages/nav_search.gif" value="submit" class="search"></input></div>
					</form>
 
				</div>
 
			</div>
 
		</div><!--end of header-->
 
 
<script type="text/javascript"> 
$('#navL').find('#carReviews').attr('id', 'carReviewsActive');
if ('carReviews' == 'home') $('#hL2').attr('id', 'hL');
</script>
 
		
		<div id="cM">
 
 
				
			<div id="cML5">
					<div id="searchResults">
					<div id="searchRL">
					<h2 class="pagenameSearch">Search Results</h2>
					Sorry, your search turned up no results. Please check your search terms and try again.
					</div>
					<div id="searchRR">
					<p></p>
					</div>
 
						
						<div class="clear"></div>
						
 
							<h3 class="heading"></h3>
                            
 
 
				</div>
				<div class="clear" style="height: 20px;"></div>
<script type="text/javascript"> 
var re = /of ([0-9]+)/;
if ( re.test($('#pagination').text()) ) {
    var pageCount = Number($('#pagination').text().match(re)[1]);
    if (pageCount > 1) $('#resultCount').text('about ' + (pageCount * 10));
    $('#pagination').text('');
}
$('#pagination, h3.heading').nextAll()
    .filter('b').addClass('pageDotActive').text('').end()
    .filter('a').each(function() {
        var x = $(this).text();
        if (x == '>') $(this).addClass('next').text('Next');
        else if (x == '<') $(this).addClass('previous').text('Previous');
        else if (/\d+/.test(x)) $(this).addClass('pageDot').text('');
        else $(this).remove();
    });
</script>
			
			</div><!--end of cML5-->
		
<div id="cMR2">    <script type="text/javascript">var adSize = '160x600';</script>
 
    <script type="text/javascript">var adMMVal = '';</script>
 
<script type="text/javascript"> 
	// area and aamsz set on includes 
	//Provide URL to adserver 
	adserver = 'http://acc.cars.com'; 
	// Set targeting info because it's on another domain
	var affadvalue = "national";
        if (typeof adAreaValue == 'undefined') adAreaValue = '';
        adAreaValue = adAreaValue.replace(/(<\/?p>|[-\s])/g,'').toUpperCase();
	target = '/ZIP_CODE=/SITE=CARS.COM/AAMSZ='+adSize+'/AFF=' + affadvalue + '/AREA=MOTHERPROOF'+(adAreaValue.length > 0? '.'+adAreaValue : '') + adMMVal;
	// Cache-busting and pageid values 
	random = Math.round(Math.random() * 100000000); 
	if (!pageNum) var pageNum = Math.round(Math.random() * 100000000); 
	document.write('<SCR'); 
	document.write('IPT SRC="' + adserver + '/jserver/acc_random=' + random + target + "/pageid=" + pageNum + '/u=">');
	document.write('</SCR'); 
	document.write('IPT>'); 
</script></div>			
		
		</div><!--end of content main-->
		
		<div class="clear"></div>
 
<script type="text/javascript">$('p:has(.excerptimg)', '#searchResults').each(function() { if ($.trim($(this).text()) == '' ) $(this).remove() } );</script>
 
		<div id="f">
 
				 <div id="newsletter">
						<a href="javascript://" onClick="box('newsletter','hidden')"><img class="popClose" src="/mpimages/pop_close.gif" border="0"></a><br />
						Sign up here to receive our newsletter.<br />
						<input class="input" type="text" value="Email here" /><br />
						<input type="image" src="/mpimages/pop_submit.gif" name="submit" value="Login" />
				</div>
 
			<div id="fNav">
				<ul>
					<li><a href="http://www.motherproof.com/site/contact/" rel="nofollow">Contact <em>us</em></a></li>
					<li><a href="http://www.motherproof.com/videos/archive"><em>video</em></a></li>
<!--					<li><a href="javascript://" onclick="box('newsletter','visible')">Newsletter</a></li>  -->
					<li><a href="http://www.motherproof.com/site/about/" rel="nofollow"><em>about</em> us</a></li>
					<li><a href="http://www.motherproof.com/moms/">Meet <em>the moms</em></a></li>
					<li><a href="http://www.motherproof.com/press-room/">Press room</a></li>
					<li><a href="http://www.motherproof.com/files/mpfeed/">RSS</a></li>
<!--					<li><a href="#"><em>glossary</em></a></li>  -->
					<li><a href="http://www.cars.com/mother" target="_blank">Cars.com</a></li>
					<li><a href="http://www.motherproof.com/site/sitemap/"><em>site</em> map</a></li>   
				</ul>
			</div>
 
			<div class="clear" style="height: 3px;"></div>
 
			<div id="copyright">Member of the Cars.com family. By using this site, you agree to our <a href="http://www.cars.com/go/about/tos.jsp?aff=mother">terms of service</a> &copy;2010 <a href="http://www.cars.com/mother">Cars.com</a> | <a href="http://www.cars.com/go/about/privacy.jsp?aff=mother">Privacy Statement</a></div>
 
<img src="http://ad.yieldmanager.com/pixel?id=118976&t=2" />
<!-- SiteCatalyst code version: H.14.
Copyright 1997-2008 Omniture, Inc. More info available at
http://www.omniture.com -->
<script language="JavaScript" src="http://www.cars.com/js/omniture/s_code.js"></script>
<script language="JavaScript"><!--
/* You may give each page an identifying name, server, and channel on
the next lines. */
s_clven.pageName=window.location.href;
 
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s_clven.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script><noscript><a href="http://www.omniture.com" title="Web Analytics"><img
src="http://classifiedventures1.112.2o7.net/b/ss/cvensiycars/1/H.14--NS/0"
height="1" width="1" border="0" alt="" /></a></noscript><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.14. -->
 
<!-- Start Quantcast tag -->
<script type="text/javascript"> 
_qoptions={qacct:"p-59uJGWevY1xd2"};
</script>
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-59uJGWevY1xd2.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->
		</div><!--end of footer-->
 
 
	
	</div><!--end of content-->
	
</div><!--end of container-->
</body>
</html>
