<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/style/masterslider.css" />		
<!-- MasterSlider Template Style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/style/ms-videogallery.css" />		
<!-- MasterSlider Template Style -->
<link href='<?php echo base_url(); ?>public/assets/masterslider/style/ms-caro3d.css' rel='stylesheet' type='text/css'>
<!-- MasterSlider default skin -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/skins/default/style.css" /> 

<!-- MasterSlider main JS file -->
<script src="<?php echo base_url(); ?>public/assets/masterslider/masterslider.min.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>public/assets/masterslider/jquery.easing.min.js"></script>
    
    
<!-- template -->
<div class="ms-lightbox-template exp-cover">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider-mobile">
        <div class="ms-slide">
            <img src="<?php echo base_url(); ?>public/assets/masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/l1.jpg"/>  
            <!-- youtube video -->
            <a href="#" data-type="video">Youtube video</a>
        </div>
        <div class="ms-slide">
            <img src="<?php echo base_url(); ?>public/assets/masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/l2.jpg"/>  
        </div>
        <div class="ms-slide">
            <img src="<?php echo base_url(); ?>public/assets/masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/l3.jpg"/>  
        </div>
        <div class="ms-slide">
            <img src="<?php echo base_url(); ?>public/assets/masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/l4.jpg"/>  
        </div>
    </div>
    <!-- end of masterslider -->
    
    <div class="exp-title">Vacation Offer Template Title</div>
</div>
<!-- end of template -->

<style>
.ms-skin-default .ms-thumb-list.ms-dir-h {
	bottom:-30px;
	width: 100%;
	height:30px;
}
</style>

<script type="text/javascript">		
	var slider = new MasterSlider();
	slider.setup('masterslider-mobile' , {
		width:700,
		height:350,
		space:5,
		loop:true,
		view:'fade'
	});
	slider.control('arrows');	
	slider.control('lightbox');	
	slider.control('thumblist' , {autohide:false ,dir:'h'});
</script>