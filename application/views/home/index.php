<!-- HEADER -->
<?php $this->load->view('partials/home_header.php'); ?>
<!-- HEADER END-->

 
<!-- BANNER -->
<div id="myBanner" class="banner carousel slide"><div class="container">
  <div class="tnav">
    <a href="<?php echo base_url(); ?>"><img class="pull-left" src="<?php echo base_url()?>/public/assets/images/logo2.png" alt="Field-Trip! Logo"></a>
    <div class="login-box"><a href="<?php echo base_url(); ?>login" class="btn btn-black-o">Log in</a></div>
  </div>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
        <section class="dis-block">
          <h1><strong>Discover</strong> and <strong>experience</strong></h1>
          <h2>wonderful places and exciting things to do <br>hand-picked by experts.</h2>
          <br>
          <span class="box">Coming Late 2015</span>
        </section>
        <section class="call-to-action">
          <a href="<?php echo base_url(); ?>signup">Pre-register now <i class="fa fa-angle-right"></i></a>
          <a href="<?php echo base_url(); ?>signup">Watch how it works <i class="fa fa-play-circle"></i></a>
        </section>
        <img class="banner-device" src="<?php echo base_url(); ?>public/assets/images/home/device1.png"/>
    </div>
    <div class="item">
        <section class="dis-block">
          <h1><strong>Convenience</strong> + <strong>Access</strong>.</h1>
          <h2>We match you with bespoke experiences<br>that fit your interest and taste.</h2>
          <br>
          <span class="box">Coming Late 2015</span>
        </section>
        <section class="call-to-action">
          <a href="<?php echo base_url(); ?>signup">Pre-register now <i class="fa fa-angle-right"></i></a>
          <a href="<?php echo base_url(); ?>signup">Watch how it works <i class="fa fa-play-circle"></i></a>
        </section>
        <img class="banner-device" src="<?php echo base_url(); ?>public/assets/images/home/device2.png"/>
    </div>
    <div class="item">
        <section class="dis-block">
          <h1>Your <strong>best friend</strong>.</h1>
          <h2>Enjoy the intimacy of on-the-go personal<br>concierge from your devices.</h2>
          <br>
          <span class="box">Coming Late 2015</span>
        </section>
        <section class="call-to-action">
          <a href="<?php echo base_url(); ?>signup">Pre-register now <i class="fa fa-angle-right"></i></a>
          <a href="<?php echo base_url(); ?>signup">Watch how it works <i class="fa fa-play-circle"></i></a>
        </section>
        <img class="banner-device" src="<?php echo base_url(); ?>public/assets/images/home/device3.png"/>
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myBanner" data-slide="prev"><i class="fa fa-angle-left fa-lg"></i></a>
  <a class="carousel-control right" href="#myBanner" data-slide="next"><i class="fa fa-angle-right fa-lg"></i></a>

  <!-- Indicators nav -->
  <ol class="carousel-indicators">
    <li data-target="#myBanner" data-slide-to="0" class="active"></li>
    <li data-target="#myBanner" data-slide-to="1"></li>
    <li data-target="#myBanner" data-slide-to="2"></li>
  </ol>
</div></div>
<!-- BANNER END -->

<!-- Experience Miami -->
<div class="sec-block">   
  <h1>Experience <strong>Miami</strong></h1>
  <h2>Exciting things to do in Miami crafted by experts.</h2>
  <?php $this->load->view('home/home_featured_exp.php'); ?>
</div>
<!-- Experience Miami END -->

<!-- PARTNERS -->
<?php $this->load->view('home/home_list_partners.php'); ?>
<!-- PARTNERS END -->

<style>
.banner {
    background-color: #FFF;
    color: #333;
    float: left;
    font-size: 16px;
    height: auto;
    margin: 0;
    min-height: 200px;
    padding: 20px 20px 40px;
    position: relative;
    text-align: left;
    text-shadow: 0 0 1px #fff;
    width: 100%;
    z-index: 999;
}
</style>


<!-- FOOTER -->
<?php $this->load->view('partials/home_footer.php'); ?>
<!-- FOOTER END-->