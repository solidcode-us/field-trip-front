<!-- HEADER -->
<?php $this->load->view('partials/home_header.php'); ?>
<!-- HEADER END-->

  
<!-- BANNER -->
<div class="banner" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home/bl1.jpg);"><div class="container">    
  <div class="tnav">
    <a href="<?php echo base_url(); ?>"><img class="pull-left" src="<?php echo base_url()?>/public/assets/images/logo.png" alt="Field-Trip! Logo"></a>
    <ul class="menu-box">
     <li><a href="<?php echo base_url(); ?>home/itinerary">My Itinerary</a></li>
     <li><a href="<?php echo base_url(); ?>login">My Account</a></li>
    </ul>
  </div>
  
  <div class="banner-footer"><div class="container"> 
    <div class="play-btn"><i class="fa fa-play-circle" title="Play video"></i></div>
    <h1>Key Biscayne Island Day Tour</h1>
    <ul class="unstyled">
      <li><i class="fa fa-clock-o"></i> 8 hours</li>
      <li><i class="fa fa-map-marker"></i> Key Biscayne, FL</li>
      <li>from <strong><small>$</small>999</strong></li>
    </ul>
  </div></div>
</div></div>
<!-- BANNER END -->

<!-- INFOMATION & BOOKING -->
<div class="sec-block exp" style="padding-top:5px;"><div class="container">    
    <section class="tab-content">
      <!-- INFO -->
      <div class="tab-pane fade in active" id="info">
        <!-- OVERVIEW -->
        <?php $this->load->view('home/tab_info_exp.php'); ?>
        <!-- OVERVIEW END -->
      
        <!-- BOOK NOW -->
        <?php $this->load->view('home/tab_book_exp.php'); ?>
        <!-- BOOK NOW END -->
      </div>
      <!-- INFO END -->
  
      <!-- CUSTOMIZE -->
      <div class="tab-pane fade" id="customize">
		  <?php $this->load->view('home/tab_customize_exp.php'); ?>
      </div>
      <!-- CUSTOMIZE END -->
    </section>
</div></div>
<!-- INFOMATION & BOOKING END -->

<!-- EXP DETAILS -->
<?php $this->load->view('home/tab_customize_exp_details.php'); ?>
<!-- EXP DETAILS END -->

<!-- EXP PAYMENT -->
<?php $this->load->view('home/tab_pay_exp.php'); ?>
<!-- EXP PAYMENT END -->


<!-- Experience Miami --> 
<div class="sec-block">   
  <h2>You might also like this:</h2>
  <?php $this->load->view('home/home_featured_exp.php'); ?>
</div>
<!-- Experience Miami END -->

   
<script  src="<?php echo base_url(); ?>public/assets/js/page_home_exp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_home_exp.css"> 


<style>
.banner {color:#fff;min-height:550px;}
body {background-color:#FFF;}
</style>


<!-- FOOTER -->
<?php $this->load->view('partials/home_footer.php'); ?>
<!-- FOOTER END-->