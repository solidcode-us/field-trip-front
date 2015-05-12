<!-- HEADER -->
<?php $this->load->view('partials/home_header.php'); ?>
<!-- HEADER END-->

  
<!-- BANNER -->
<div class="banner" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home/ev1.jpg);"><div class="container">    
  <div class="tnav">
    <a href="<?php echo base_url(); ?>"><img class="pull-left" src="<?php echo base_url()?>/public/assets/images/logo.png" alt="Field-Trip! Logo"></a>
    <div class="login-box"><a href="<?php echo base_url(); ?>home/itinerary" class="btn btn-o">My Itinerary</a></div>
  </div>
  
  <div class="banner-footer"><div class="container"> 
    <h1>Miami Memorial Day Weekend</h1>
    <ul class="unstyled">
      <li><i class="fa fa-calendar"></i> May 23-24, 2015</li>
      <li><i class="fa fa-map-marker"></i> Miami, FL</li>
      <li><i class="fa fa-clock-o"></i> 11:45 AM</li>
    </ul>
  </div></div>
</div></div>
<!-- BANNER END -->

<!-- INFOMATION & BOOKING -->
<div class="sec-block exp" style="padding-top:5px;"><div class="container">    
        <!-- OVERVIEW -->
        <?php $this->load->view('home/tab/info_event.php'); ?>
        <!-- OVERVIEW END -->
      
        <!-- BOOK NOW -->
        <?php $this->load->view('home/tab/book_event.php'); ?>
        <!-- BOOK NOW END -->
</div></div>
<!-- INFOMATION & BOOKING END -->

<!-- EXP PAYMENT -->
<?php $this->load->view('home/tab/pay_exp.php'); ?>
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