<section class="map">
  <ul class="map-info">
    <li>84 <p>Experiences</p></li>
    <li>37 <p>Cities</p></li>
    <li>24 <p>States</p></li>
    <li>5 <p>Countries</p></li>
  </ul>

  <div id="world-map" style="width:100%; height:480px"></div>
</section>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/jmap/jvectormap.css">
<script src="<?php echo base_url(); ?>public/assets/jmap/jvectormap.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-data-us-lcc-en.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-map.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-us-merc-en.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-us-mill-en.js"></script>
<script src="<?php echo base_url(); ?>public/assets/jmap/jquery-jvectormap-world-mill-en.js"></script>

<script>
$(function(){
  new jvm.MultiMap({
    container: $('#world-map'),
    maxLevel: 3,
    main: {
      map: 'world_mill_en',
		backgroundColor: null,
		color: '#ffffff',
		regionStyle: {
		  initial: {
			fill: '#777',
			"fill-opacity": 1,
			stroke: '#dedede',
			"stroke-width": 0,
			"stroke-opacity": 1
		  }
		},
    },
    mapUrlByCode: function(code, multiMap){
      return '/jmap/us/jquery-jvectormap-data-'+
             code.toLowerCase()+'-'+
             multiMap.defaultProjection+'-en.js';
    }
  });
});
</script>

<style>
.map {float: left;height: auto;position: relative;width: 100%; padding-bottom:40px;}
.map-info {
    bottom: 0;
    float: right;
    left: 0;
    list-style: outside none none;
    margin: 0;
    padding: 0;
    position: absolute;
    text-align: center;
    width: 100%;
	z-index:9999;
}
.map-info > li {
    display: inline-block;
    font-size: 22px;
    font-weight: 300;
    line-height: 20px;
    margin: 0;
    min-width: 70px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
}
.map-info > li p {
    font-size: 11px;
    font-weight: 400;
    line-height: 11px;
    margin: 4px 0 0;
    opacity: 0.7;
}
.map select {font-weight:600;margin-bottom: 0;margin-right:15px;}

#vmap {height:350px;}

@media (max-width: 480px){
#vmap {height:212px;}
.map {text-align: center;}
.map-info {position: relative;text-align: center;width:100%;}
.map-info > li {font-size: 14px;margin: 0 10px; display:inline-block;}
}

#expTitle::-webkit-input-placeholder {color:#bebebe;}
#expTitle:-moz-placeholder {color:#bebebe;}/* Firefox 18- */
#expTitle::-moz-placeholder {color:#bebebe;}/* Firefox 19+ */
#expTitle:-ms-input-placeholder {color:#bebebe;}
</style>