<!-- HEADER -->
<?php $this->load->view('partials/home_header.php'); ?>
<!-- HEADER END-->

  
<!-- BANNER -->
<div class="banner banner-nav"><div class="container">
  <div class="tnav">
    <a href="<?php echo base_url(); ?>"><img class="pull-left" src="<?php echo base_url()?>/public/assets/images/logo2.png" alt="Field-Trip! Logo"></a>
    <ul class="menu-box">
     <li><a href="<?php echo base_url(); ?>home/itinerary">My Itinerary</a></li>
     <li><a href="<?php echo base_url(); ?>login">My Account</a></li>
    </ul>
  </div>
</div></div>
<!-- BANNER END -->

<!-- Experience Miami -->
<div class="sec-block">   
  <div class="container">
    <ul class="exp-filters">
      <li>Experience<select class="exp-loc-select"><option>Miami, FL</option><option>Miami Beach, FL</option><option>Fort Lauderdale, FL</option><option>West Palm Beach, FL</option></select></li>
      <li><select class="exp-time-select"><option>This Week</option><option>Next Week</option><option>This Month</option><option>Next Month</option></select></li>
    </ul>
  </div>
  <?php $this->load->view('home/home_list_exp.php'); ?>
</div>
<!-- Experience Miami END -->

   
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_home_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/home_footer.php'); ?>
<!-- FOOTER END-->