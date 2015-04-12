<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="offers">

<section class="sidebar">  
  <ul class="menu-list">
    <li>
      <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/img_exp/car1.png"/></span>
      <a href="#car1" data-toggle="tab">Shared Shuttle</a>
      <span class="right-arrow"><i class="fa fa-angle-right"></i></span>
    </li>
    <li>
      <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/img_exp/car2.png"/></span>
      <a href="#car2" data-toggle="tab">Private Chauffeur</a>
      <span class="right-arrow"><i class="fa fa-angle-right"></i></span>
    </li>
    <li>
      <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/img_exp/car3.png"/></span>
      <a href="#car3" data-toggle="tab">Exotic Car Rental</a>
      <span class="right-arrow"><i class="fa fa-angle-right"></i></span>
    </li>
  </ul>
</section>

<section class="page-content">
<div class="tab-content" style="padding:0 20px;max-width:500px;">
    <!-- CAR 1 -->
    <div class="tab-pane fade in active" id="car1">
       <?php $this->load->view('transport/book_shared.php'); ?>
    </div>
    <!-- CAR 1 END -->

    <!-- CAR 2 -->
    <div class="tab-pane fade" id="car2">
       <?php $this->load->view('transport/book_solo.php'); ?>
    </div>
    <!-- CAR 2 END -->

    <!-- CAR 3 -->
    <div class="tab-pane fade" id="car3">
       <?php $this->load->view('transport/book_exo.php'); ?>
    </div>
    <!-- CAR 3 END -->
</div>
</section>

</div>


<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<style>
.sidebar .menu-list .icon {width: 60px;height: auto;margin-top: -22px;}
.sidebar .menu-list > li {padding: 10px 20px 10px 80px;}
</style>
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->