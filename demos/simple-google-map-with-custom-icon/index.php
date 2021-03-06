<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kennedy's Garage | Demo | Simple Google map with custom icon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../demo.css">
</head>
<body>
<div id="header"><a href="../../article/simple-google-map-with-custom-icon.html" class="button">&laquo; Back to Article</a><a href="../../index.html"><img src="../img/demo.png" id="logo"/></a><a href="../../demos.html" class="button">More Demos &raquo;</a></div>

<!--\\\\\\\\\\\   Start DEMO   ///////////-->

	<style>
	#content { 
		width: 600px;
		margin: 0 auto;
		padding-top: 100px;
	}
	#map_canvas{
		width:600px;
		height:300px
	}
	</style>


	<div id="content">
	
		<div id="map_canvas"></div>
	
	</div><!--/content-->
	


	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
	function initialize() {
	    var latlng = new google.maps.LatLng(40.779166,-73.962928);
	    var settings = {
	            zoom: 15,
	            center: latlng,
	            mapTypeControl: false,
	            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	            navigationControl: true,
	            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	            mapTypeId: google.maps.MapTypeId.ROADMAP};
	    var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
	    var contentString = '';
	    var infowindow = new google.maps.InfoWindow({
	            content: contentString
	    });
	    
	    var companyImage = new google.maps.MarkerImage('house.png',
	            new google.maps.Size(100,50),
	            new google.maps.Point(0,0),
	            new google.maps.Point(50,50)
	    );
	
	    var companyShadow = new google.maps.MarkerImage('house_shadow.png',
	            new google.maps.Size(130,50),
	            new google.maps.Point(0,0),
	            new google.maps.Point(65, 50));
	
	    var companyPos = new google.maps.LatLng(40.779166,-73.962928);
	
	    var companyMarker = new google.maps.Marker({
	            position: companyPos,
	            map: map,
	            icon: companyImage,
	            shadow: companyShadow,
	            title:"Kennedy's Garage",
	            zIndex: 3});
	    
	    
	    google.maps.event.addListener(companyMarker, 'click', function() {
	            infowindow.open(map,companyMarker);
	    });
	}
	// Adds event to window.onload
	function addLoadEvent(func)
	{    
	    var oldonload = window.onload;
	    if (typeof window.onload != 'function')
	    {
	        window.onload = func;
	    } 
	    else 
	    {
	        window.onload = function()
	        {
	            oldonload();
	            func();
	        }
	    }
	}
	addLoadEvent(initialize);
	</script>

<!--///////////   End DEMO   \\\\\\\\\\\-->

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-17557746-1']);
_gaq.push(['_setDomainName', '.kennedysgarage.com']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>
</html>