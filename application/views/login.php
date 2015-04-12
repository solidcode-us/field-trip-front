<!-- HEADER -->
<?php $this->load->view('partials/header_ax.php'); ?>
<!-- HEADER END-->

<!-- Wrap -->
<div class="container login">
  <div class="ft-logo"><img src="<?php echo base_url(); ?>public/assets/images/logo.png"/></div>

  <ul class="menu-list no-icons input-fields">
    <li>
      <span class="value" style="width:100%;"><input type="email" placeholder="Email"></span>
    </li>
    <li>
      <span class="value" style="width:100%;"><input type="password" placeholder="Password"></span>
    </li>
  </ul>
  <section class="forgot"><a href="#">Forgot password?</a></section>
  <section class="login-box">
    <a href="<?php echo base_url(); ?>offers" class="btn btn-lg btn-blue">Log in</a>

    <section class="singup-box">Not a member yet? <a href="<?php echo base_url(); ?>signup" class="btn btn-lg btn-o">Register</a></section>
  </section>
</div><!-- Wrap End--> 

<style>
.menu-list {background-color: transparent;border:none;border-radius:0;}
.menu-list > li + li {border-top: 1px solid #666;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {color: #FFF;}
</style>

<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->