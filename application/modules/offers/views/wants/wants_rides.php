<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/style/masterslider.css" />		
<!-- MasterSlider Template Style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/style/ms-staff-style.css" />		
<!-- MasterSlider Template Style -->
<link href='<?php echo base_url(); ?>public/assets/masterslider/style/ms-caro3d.css' rel='stylesheet' type='text/css'>
<!-- MasterSlider default skin -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/skins/default/style.css" /> 

<!-- MasterSlider main JS file -->
<script src="<?php echo base_url(); ?>public/assets/masterslider/masterslider.min.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>public/assets/masterslider/jquery.easing.min.js"></script>

    
<!-- template -->
<div class="ms-staff-carousel ms-round exp-cover" style="margin:20px 0;background-color: transparent;">
    <!-- masterslider -->
    <div class="master-slider" id="masterslider">
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/car1.png"/>
            <div class="ms-info">
                <h2>Shared Shuttle</h2>
                <?php $this->load->view('transport/book_shared.php'); ?>
            </div>     
        </div>
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/car2.png"/>  
            <div class="ms-info">
                <h2>Private Chauffeur</h2>
                <?php $this->load->view('transport/book_solo.php'); ?>
            </div>     
        </div>
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/img_exp/car3.png"/>  
            <div class="ms-info">
                <h2>Exotic Car Rental</h2>
                <?php $this->load->view('transport/book_exo.php'); ?>
            </div>     
        </div>
    </div>
    <!-- end of masterslider -->
    <div class="ms-staff-info" id="staff-info"> </div>
</div>
<!-- end of template -->

<style>
.ms-slide .ms-slide-bgcont, .ms-slide .ms-slide-bgvideocont {overflow: visible;}
.ms-staff-carousel.ms-round .ms-slide-bgcont {border:none;}
.ms-staff-carousel .ms-staff-info {
    color: #555;
    height: auto;
    margin-top: 0;
    max-width: 100%;
    min-height: 20px;
    text-align:left;
}
.ms-staff-carousel {
    float: left;
    height: auto;
    margin: 0 auto;
    max-width: 100%;
    overflow: hidden;
    width: 100%;
}
.ms-slide-info.ms-dir-h {
    position: relative;
    width: 100%;
}
.ms-info h2 {
    color: #555;
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 5px;
    text-align: center;
}
.ms-staff-carousel .ms-staff-info.email, .ms-staff-info p {font-size: 12px;margin: 0;}
</style>

<script type="text/javascript">	

    var slider = new MasterSlider();
    slider.setup('masterslider' , {
        loop:true,
        width:150,
        height:100,
        speed:20,
        view:'focus',
        preload:0,
        space:0,
        space:35,
        viewOptions:{centerSpace:1.6}
    });
    slider.control('arrows' , {autohide:false});
    slider.control('slideinfo',{insertTo:'#staff-info'});   
</script>
