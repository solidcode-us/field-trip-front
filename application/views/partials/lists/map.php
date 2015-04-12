 
<section class="map"><!-- Map AREA -->
<div id="map_wrapper" >
    <div id="map_canvas" class="mapping"></div>
</div>
</section><!-- Map AREA END -->

 
<script type="text/javascript">
    
 //jQuery(function($) {
  function callback_google()
  {
   // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
   }  
//});

function initialize() {

     
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);

     var markers = [];
     var infoWindowContent = [];

        
     if(mapData!="")
    {
       
    $.each(mapData, function(i, item) {
    
        markers.push([mapData[i].activity_title,mapData[i].activity_lat,mapData[i].activity_lon]);

        var mapTitleDesc='<h3>'+mapData[i].activity_title+'</h3>' + '<p>'+mapData[i].activity_address+'</p>' ;
      
        infoWindowContent.push([mapTitleDesc]);
    

     })
    }else
    {
        var lan="<?php echo $this->session->flashdata('geoplugin_latitude') ?>";
        var log="<?php echo $this->session->flashdata('geoplugin_longitude') ?>";
        markers = [['', lan,log]];
        var mapTitleDesc='<h3>No activity avilable</h3>' ;

        infoWindowContent.push([mapTitleDesc]);
    }

    
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(10);
        google.maps.event.removeListener(boundsListener);
    });
    
}

//after dom load call ajax

$(document).ready(function () {
  ajax_marker();
  
});

//ajax dynamic marker 
function ajax_marker() {

     $.ajax({
      url : "offers/map_markers",
      async: false,
      type: "POST",
      dataType: "json",
      success: function(data) {
        callback_google();
        window.mapData = data;
      }
    })
   
}
    
</script>