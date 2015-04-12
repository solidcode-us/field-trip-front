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
<div class="ms-staff-carousel ms-round">
    <!-- masterslider -->
    <div class="master-slider" id="masterslider">
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/rides/private.png" alt="lorem ipsum dolor sit"/>  
            <div class="ms-info">
                <h2>Private Chauffeur</h2>

                <section class="when">
                  <label>Drop off</label>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-map-marker"></i></span>
                    <input type="text" id="type" maxlength="100" placeholder="City, airport or address" style="width:93%;">
                  </div>
                </section>
            
                <div class="where">
                  <label>Duration</label>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-clock-o"></i></span>
                    <select><option>1</option><option>2</option><option>3</option><option>4</option></select>
                    <select><option>Hours</option><option>Days</option></select>
                  </div>
                </div>
            </div>     
        </div>
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/rides/car_sports.png" alt="lorem ipsum dolor sit"/>
            <div class="ms-info">
                <h2>Exotic Car</h2>

                <section class="when">
                  <label>Brand</label>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-car"></i></span>
                    <select><option>Any</option><option>Ferrari</option><option>Aston Martin</option><option>Audi</option>Bentley</option><option>Lamborghini</option><option>Maserati</option><option>Rolls-Royce</option><option>McLaren</option><option>Mercedes-Benz</option></select>
                  </div>
                </section>
                            
                <div class="where">
                  <label>Duration</label>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-clock-o"></i></span>
                    <select><option>1</option><option>2</option><option>3</option><option>4</option></select>
                    <select><option>Hours</option><option>Days</option></select>
                  </div>
                </div>
            </div>     
        </div>
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/rides/van.png" alt="lorem ipsum dolor sit"/>     
            <div class="ms-info">
                <h2>Shuttle</h2>

                <section class="when">
                  <label>Drop off</label>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-map-marker"></i></span>
                    <input type="text" id="type" maxlength="100" placeholder="City, airport or address" style="width:93%;">
                  </div>
                </section>
              
                <section class="where">
                  <label>Returning</label>
                  <div class="input-prepend pull-left">
                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                    <input type="text" placeholder="Jul 29, 2014" style="width:150px;">
                  </div>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-clock-o"></i></span>
                    <select><option>Anytime</option><option>Morning</option><option>Afternoon</option><option>Evening</option></select>
                  </div>
                  <label class="checkbox bottom"><input type="checkbox"> This is a One Way</label>
                </section>
            </div>     
        </div>
        <div class="ms-slide">
            <img src="../masterslider/blank.gif" data-src="<?php echo base_url(); ?>public/assets/images/rides/jet.png" alt="lorem ipsum dolor sit"/>
            <div class="ms-info">
                <h2>Private Jet</h2>

                <section class="when">
                  <label>Flying to</label>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-map-marker"></i></span>
                    <input type="text" id="type" maxlength="100" placeholder="City or airport" style="width:93%;">
                  </div>
                </section>
              
                <section class="where">
                  <label>Returning</label>
                  <div class="input-prepend pull-left">
                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                    <input type="text" placeholder="Jul 29, 2014" style="width:150px;">
                  </div>
                  <div class="input-prepend">
                    <span class="add-on"><i class="fa fa-clock-o"></i></span>
                    <select><option>Anytime</option><option>Morning</option><option>Afternoon</option><option>Evening</option></select>
                  </div>
                  <label class="checkbox bottom"><input type="checkbox"> This is a One Way</label>
                </section>
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
    color: #333;
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
    max-width: 880px;
    overflow: hidden;
    width: 100%;
}
.ms-slide-info.ms-dir-h {
    position: relative;
    width: 100%;
}
.ms-info h2 {font-size:22px;font-weight:600;margin-bottom:30px; text-align:center;}

.when-n-where {width:737px;}
.when, .where {float:left;width:50%;max-width:373px;text-align:left;}
.when {padding-right:15px;}
.when .input-prepend, .where .input-prepend {float: left;margin-right:10px;}

select, input[type="text"] {font-weight:400;}
.radio, .checkbox {display:inline-block;float:none;font-size:14px;}
input[type="text"] {width:300px;}

@media (min-width: 320px) and (max-width: 600px){
.when {width:100%;padding-right:0;}
.where {width:100%;margin-left:0;}
}
</style>

<script type="text/javascript">	

    var slider = new MasterSlider();
    slider.setup('masterslider' , {
        loop:true,
        width:240,
        height:240,
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