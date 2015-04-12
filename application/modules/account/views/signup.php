<!-- HEADER -->
<?php $this->load->view('partials/header_ax.php'); ?>
<!-- HEADER END-->
<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<script  src="<?php echo base_url(); ?>public/assets/js/page_signup.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_signup.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_user.css"> 

<header class="main-white-nav">
  	<div class="container">
  		<span class="ft-logo-btn wide" style="background-image:url(<?php echo base_url(); ?>public/assets/images/logo2.png);"></span>
	</div>
</header>

<!-- Wrap -->
<div class="container">  
  <section class="steps-block step-1" style="display:block;">
    <?php $this->load->view('signup/user_info.php'); ?>
  </section>

  <section class="steps-block step-2">
    <?php $this->load->view('signup/payment.php'); ?>
  </section>

  <section class="steps-block step-4">
    <?php $this->load->view('signup/interests.php'); ?>
  </section>

  <section class="steps-block step-5">
    <?php $this->load->view('signup/food.php'); ?>
  </section>

  <section class="steps-block step-6">
    <?php $this->load->view('signup/done.php'); ?>
  </section>
  
<section class="bot-nav">
    <section class="steps-block step-1" style="display:block;">
          <button class="btn btn-blue next step-2-btn">Next</button>
    </section>
    
    <section class="steps-block step-2">
          <button class="btn prev step-1-btn">Back</button>
          <button class="btn btn-blue next step-3-btn">get access now</button>
    </section>
    
    <section class="steps-block step-4">
          <button class="btn prev step-3-btn">Back</button>
          <button class="btn btn-blue next step-5-btn">Next</button>
    </section>
    
    <!-- Food -->
    <section class="steps-block step-5">
          <button class="btn prev step-4-btn">Back</button>
          <button class="btn btn-blue next step-6-btn">Next</button>
    </section>
    
    <section class="steps-block step-6">
          <button class="btn prev step-5-btn">Back</button>
          <a class="btn btn-blue next" href="<?php echo base_url(); ?>offers" id="btnSignUpDone">Done!</a>
    </section>
</section>

</div><!-- Wrap End--> 
  
<section class="steps-block step-3">
  <?php $this->load->view('signup/welcome.php'); ?>
</section>




<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->