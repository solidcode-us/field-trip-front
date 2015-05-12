<!-- HEADER -->
<?php $this->load->view('partials/home_header.php'); ?>
<!-- HEADER END-->

  
<!-- BANNER -->
<div class="banner banner-nav"><div class="container">
  <div class="tnav">
    <a href="<?php echo base_url(); ?>"><img class="pull-left" src="<?php echo base_url()?>/public/assets/images/logo2.png" alt="Field-Trip! Logo"></a>
    <div class="login-box"><a href="<?php echo base_url(); ?>home/itinerary" class="btn btn-black-o">My Itinerary</a></div>
  </div>
</div></div>
<!-- BANNER END -->

<!-- INFOMATION & BOOKING -->
<div class="sec-block exp" style="padding:0;"><div class="container request">
  <section class="offers itin inbox">
    <div class="dis-block">
      <h3 class="user-page-header" style="width:auto;">My Itinerary</h3>
      <select class="drop-option-o">
        <option>Upcoming</option>
        <option>Past</option>
      </select>
    </div>
  
    <div class="well-box-in itinerary">
      <ul class="itinerary-list">
        <div class="exp-date">Wednesday, May 6</div>
        <li>
            <label class="open-inbox-f itinerary-text">
              <h4>Key Biscayne Island Day Tour</h4>
              <div class="exp-time">8 hours</div>
              <p>Key Biscayne, FL</p>
            </label>
            <span class="right-arrow"><img src="<?php echo base_url(); ?>public/assets/images/icons/tour.png"/></span>
        </li>
        <li>
            <label class="open-inbox-f itinerary-text">
              <h4>Scenic Dining Experience</h4>
              <div class="exp-time">3 hours</div>
              <p>Key Biscayne, FL</p>
            </label>
            <span class="right-arrow"><img src="<?php echo base_url(); ?>public/assets/images/icons/tour.png"/></span>
        </li>
      </ul>
    </div>

    <div class="well-box-in itinerary">
      <ul class="itinerary-list">
        <div class="exp-date">Saturday, May 23</div>
        <li>
            <label class="open-inbox-m itinerary-text">
              <h4>Miami Memorial Day Weekend</h4>
              <div class="exp-time">11:45 am - 6:00 pm</div>
              <p>401 Biscayne Blvd, Miami, FL 33132</p>
            </label>
            <span class="right-arrow"><img src="<?php echo base_url(); ?>public/assets/images/icons/event.png"/></span>
        </li>
      </ul>
    </div>
  </section>
  
    <section class="offers itin"><?php $this->load->view('home/itinerary_view.php'); ?></section>
</div></div>
<!-- INFOMATION & BOOKING END -->

   
<script  src="<?php echo base_url(); ?>public/assets/js/page_home_exp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_home_exp.css"> 


<style>
body {background-color:#333;}
.sec-block.exp h2 {text-align:left;}
</style>


<!-- FOOTER -->
<?php $this->load->view('partials/home_footer.php'); ?>
<!-- FOOTER END-->