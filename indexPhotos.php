<?php
{
  		
   	$xmlFileData = file_get_contents('info.xml');
//Here's our Simple XML parser!
	$xmlData = new SimpleXMLElement($xmlFileData);
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>



<META NAME="author" CONTENT="terry@limitlessideaproject.com"> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/vendor/custom.modernizr.js"></script>

<link href="css/app.css" rel="stylesheet" type="text/css" />

<script src="http://realestatesummitcounty.com/SoldinSixty/galleria/galleria-1.2.9.min.js"></script>
<script src="http://realestatesummitcounty.com/SoldinSixty/galleria/themes/classic/galleria.classic.min.js"></script>
 
<title>Timber Creek Estates Home for Sale | Real Estate Summit County</title>


<style>
*
section
{
	display: block;
	width: 95%;
	margin: 0 ;
	cursor: pointer;
}

section img
{
	width: 100%;
}

section p
{
	font-weight: bold;
	text-align: center;
	margin: 0;
}

section:-webkit-full-screen
{
	float: none;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	border: 0 none;
	background-color: #f00;
}

section:-moz-full-screen
{
	float: none;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	border: 0 none;
}

section:-ms-full-screen
{
	float: none;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	border: 0 none;
}

section:-o-full-screen
{
	float: none;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	border: 0 none;
}

section:full-screen
{
	float: none;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	border: 0 none;
}
#space {
height:450px;
margin: 0 auto;
background-color: #ffffff;
}

</style>


</head>
<body>
 <nav class="top-bar">
<ul class="title-area">
<!-- Title Area -->
<li class="name">
<h1>
<a href="#">
~
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
 
<section class="top-bar-section">
<!-- Left Nav Section -->
<ul class="left">
<li class="divider"></li>
<li class="has-dropdown">
<a class="active" href="#">Timber Creek Estates</a>
	<ul class="dropdown">
	<li><label>Information Docs</label></li>
	<li><a href="#">MLS</a></li>
	<li><a href="#">Tax</a></li>
	<li><a href="#">Disclosure</a></li>
	<li class="divider">Maps</li>
	<li><label>Maps</label></li>
	<li><a href="#">Driving Direction</a></li>
	<li><a href="#">Interactive Map</a></li>
	<li class="divider"></li>
	</ul>
</li>
<li class="divider"></li>
<li><a href="http://realestatesummitcounty.com/Summit-County/summit-county-buyers.php">Buyers</a></li>
<li class="divider"></li>
<li class="divider"></li>
<li><a href="http://realestatesummitcounty.com/Summit-County/summit-county-sellers.php">Sellers</a></li>
<li class="divider"></li>
<li class="divider"></li>
<li><a href="http://realestatesummitcounty.com/Summit-County/summit-contact.php">Contact</a></li>
<li class="divider"></li>

<!--<li class="has-dropdown">
<a href="#">Sellers</a>
<ul class="dropdown">
<li><a href="#">Choosing</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Guarantee</a></li>

</ul>
</li>-->
</ul>
 
<!-- Right Nav Section -->
<ul class="right">
<li class="divider"></li>
<li class="has-dropdown">
<a href="http://RealEstateSummitCounty.com">Real Estate Summit County</a>
	<ul class="dropdown">
	<li><label>Market Data</label></li>
	<li><a href="http://realestatesummitcounty.com/Summit-County/market-data.php">Summit County Sales</li>
	<li><a href="http://summitpropertysales.com/Summit-County/summit-listings.php">Search All Property For Sale</a></li>
	</ul>
</li>
</ul>
<!-- Right Nav Section: left in tack for help with expansion
<ul class="right">
<li class="divider"></li>
<li class="has-dropdown">
<a href="#">Main Item 4</a>
<ul class="dropdown">
<li><label>Section Name</label></li>
<li class="has-dropdown">
<a href="#" class="">Has Dropdown, Level 1</a>
<ul class="dropdown">
<li><a href="#">Dropdown Options</a></li>
<li><a href="#">Dropdown Options</a></li>
<li class="has-dropdown">
<a href="#">Has Dropdown, Level 2</a>
<ul class="dropdown test">
<li><a href="#">Subdropdown Option</a></li>
<li><a href="#">Subdropdown Option</a></li>
<li><a href="#">Subdropdown Option</a></li>
</ul>
</li>
<li><a href="#">Subdropdown Option</a></li>
<li><a href="#">Subdropdown Option</a></li>
<li><a href="#">Subdropdown Option</a></li>
</ul>
</li>
<li><a href="#">Dropdown Option</a></li>
<li><a href="#">Dropdown Option</a></li>
<li class="divider"></li>
<li><label>Section Name</label></li>
<li><a href="#">Dropdown Option</a></li>
<li><a href="#">Dropdown Option</a></li>
<li><a href="#">Dropdown Option</a></li>
<li class="divider"></li>
<li><a href="#">See all &rarr;</a></li>
</ul>
</li>
<li class="divider"></li>
<li><a href="#">Main Item 5</a></li>
<li class="divider"></li>
<li class="has-dropdown">
<a href="#">Main Item 6</a>
<ul class="dropdown">
<li><a href="#">Dropdown Option</a></li>
<li><a href="#">Dropdown Option</a></li>
<li><a href="#">Dropdown Option</a></li>
<li class="divider"></li>
<li><a href="#">See all &rarr;</a></li>
</ul>
</li>
</ul>
-->

</section>
</nav>
 
 
<!-- End Header and Nav -->	
		<div class="row bare">
				<div class="8 columns">

    <div class="banner"><span class="font50">www.</span><?php 

 $xmlWebsite = $xmlData->listing[0]->website;

print($xmlWebsite); ?><span class="font50">.com</span><!--end of banner--></div><!--end of 8 columns--></div>
								<div class="4 columns push-8"><!--<img src="http://realestatesummitcounty.com/css/Breck-Assoc-sm.png" max-height="60px" alt="Breckenridge Associates Real Estate"/>--></div>
	<!--end of 1st row--></div>
		<div class="row">
<div class="large-12 columns">
      <div class="banner-text">
<p>Mike Krueger, <span class="font70">broker/partner Breckenridge Associates Real Estate </span>| (970) 485-1518 <span class="cell">(cell)</span>&nbsp;|&nbsp;<a href="mailto:mikek@realtor.com">mikek@realtor.com</a></p>
      </div><!--end of banner text--></div></div>
		
<section id="space">
				<img src="photos/Timber-Creek22.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek20.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek18.jpg" alt="Timber Creek Estates duplex for sale" /> 
		<img src="photos/Timber-Creek17.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek07.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek08.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek09.jpg" alt="Timber Creek Estates duplex for sale" /> 
		<img src="photos/Timber-Creek10.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek01.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek02.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek03.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek04.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek05.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek06.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek11.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek12.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek13.jpg" alt="Timber Creek Estates duplex for sale" /> 
		<img src="photos/Timber-Creek14.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek15.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek16.jpg" alt="Timber Creek Estates duplex for sale" />
		<img src="photos/Timber-Creek19.jpg" alt="Timber Creek Estates duplex for sale" /> 
		<img src="photos/Timber-Creek21.jpg" alt="Timber Creek Estates duplex for sale" />

</section>

	<div class="row">
			<div class="large-12 columns">
					<p>Please click on the image for a full screen experience of this Timber Creek home for sale.</p>
			</div>
	</div><!--end of instructions row-->
	
		<div class="row" style="background-color: rgba(0,0,0,0.4); color:#fff;">
		<div class="large-8 columns">
			<div class="panel">
				<h1>Timber Creek Estates Home for Sale</h1>
				<p>Timber Creek Estates is a Breckenridge neighborhood that offers the tranquility of mountain living, but with style and comfort.  The roads are paved, the utilities are community based and the homes are 21st Century efficient, custom built and located in a beautiful setting.</p>
				<p>Buyers who will love this home are those looking for a bright, open, mountain home - that's slightly less money because it is a duplex. These home seekers might be frequent travelers who like the idea of close neighbors to help look after their retreat locate in a remote, beautiful setting. They the friendly types who are likewise happy to help out their neighbors, but not nosy - that's why they'll select the solitude and privacy of Timber Creek Estates.</p>
			</div>
		</div>
		
		
		<div class="large-4 columns">
			<div class="panel">
				<h2>Quick Facts</h2>
				<ul>
					<li>Square Footage: 2813 sq. ft.</li>
					<li>Price per Sq. Ft.: $267.00</li>
					<li>Bedrooms: 4</li>
					<li>Baths: 2 full, 1 three-quarter</li>
					<li>Year Built: 2005</li>
				</ul>
			</div>
		</div>
	</div>
	
	
<div>&nbsp;</div>

	<div class="row">
		<div class="large-4 columns">
						<div class="panel">
		<h3><?php $xmlWebsite = $xmlData->listing[0]->headline;
	
	print($xmlWebsite); ?></h3>
	<p><?php $xmlWebsite = $xmlData->listing[0]->description;
	
	print($xmlWebsite); ?></p>
	
	<p style="color:#990000; font-size:14px; vertical-align:baseline;">MLS Number:<br /><span style="color:#333333"><?php $xmlWebsite = $xmlData->listing[0]->mls;
	
	print($xmlWebsite); ?></span></p>
						</div>
						
					</div>
		<div class="large-4 columns">
			<div class="panel">
	<?php
$content = file_get_contents('listing-menu.php');
if ($content !== false) {
   // display the content
   echo $content;
} else {
   // an error happened
   echo 'Looking for more information.';
}
?> 

<p style="font-size:11pt; color:#666666; text-align:left">To see other listings, subdivision and area information and comprehensive customizable charts, stats and more market data for all of Summit County please visit  <a href="http://realestatesummitcounty.com" alt="Real Estate Summit County ">RealEstateSummitCounty.com</a> and feel free to call or email <a href="mailto:mikek@realtor.com">Mike</a>. </p>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="panel">
	Google Map to <?php

 $xmlWebsite = $xmlData->listing[0]->address;

print($xmlWebsite); ?><br />
     <p><a href="property-info.php"><img src="NB/Map.jpg" alt="map" longdesc="http://property-info.php" /></a></p>
<p style="font-size:10pt">For an interactive map, see <a href="property-info.php" alt="Info about property like Map and Driving Directions" >Map and Driving Directions.</a> </p>  
			</div>
		</div>
	</div><!--end of secondaryinfo row-->


<!--end of the content-->

<script>
	   $('#space').galleria({
    autoplay: 4000,	//changes every  4seconds
    transition:'fade',
	transitionSpeed: 800,
     imageCrop: 'width',
     responsive:true,

    });
</script>

<script>
var e = document.getElementById("space");

e.onclick = function() {

	if (RunPrefixMethod(document, "FullScreen") || RunPrefixMethod(document, "IsFullScreen")) {
		RunPrefixMethod(document, "");
	}
	else {
		RunPrefixMethod(e, "RequestFullScreen");
	}

}

var pfx = ["webkit", "moz", "ms", "o", ""];
function RunPrefixMethod(obj, method) {
	
	var p = 0, m, t;
	while (p < pfx.length && !obj[m]) {
		m = method;
		if (pfx[p] == "") {
			m = m.substr(0,1).toLowerCase() + m.substr(1);
		}
		m = pfx[p] + m;
		t = typeof obj[m];
		if (t != "undefined") {
			pfx = [pfx[p]];
			return (t == "function" ? obj[m]() : obj[m]);
		}
		p++;
	}

}

</script>

</body>
</html>
