<section class="map"><!-- Map AREA -->
  <div id="map-canvas"/>
</section><!-- Map AREA END -->

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7DB9zIOouXWNBBgO40i5PNoxcME6wuEg&sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
	var mapOptions = {
	  center: new google.maps.LatLng(40.6743890, -73.9455),
	  zoom: 14,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),
		mapOptions);

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'address': "Ocean Dr, Miami Beach, FL 33139" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                    });
                } else 
                  alert("Problem with geolocation");

      });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style>
.map {width:100%; height:500px;}

#map-canvas {
  height: 100%;
  margin: 0px;
  padding: 0px
}

.map-exp-info {
	padding:20px 5px 30px 20px;
    list-style: none outside none;
    margin:0;
	float:left;
	font-family: "Open Sans",sans-serif;
	width:100%;
	text-align:left;
	position:relative;
}

.map-exp-info li {
    display: inline-block;
    float: left;
    height: auto;
    text-align: left;
}
.map-exp-info a {color:inherit;cursor:pointer;}

.image_thumb {
    background-attachment: scroll;
    background-color: #fff;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: auto 130%;
    box-sizing: border-box;
    float: left;
    height: 141px;
    margin: 0 0 10px;
    transition: all 0.5s ease-in-out 0s;
    width: 100%;
    z-index: 2;
}

.map-exp-info li h4 {
    color: #555;
    display: block;
    font-size: 16px;
    font-weight: 600;
    height: 43px;
    margin: 5px 0;
    overflow: hidden;
    text-overflow: ellipsis;
    text-transform: none;
    white-space: normal;
    width: 100%;
}
.map-exp-info li p {
    color: #999;
    display: block;
    margin: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    text-transform: none;
    white-space: nowrap;
    width: 100%;
}
.map-exp-info li p + p {margin-top:5px;}
.map-exp-info li p .fa + .fa {margin-left:10px;}
</style>