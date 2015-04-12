<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<!-- Top Nav -->
<header class="main-white-nav" style="display:block;">
<div class="container">
  <ul class="main-nav-menus">
    <li class="back-btn"><a href="<?php echo base_url(); ?>offers"><i class="fa fa-chevron-left"></i> Back</a></li>
  </ul>

  <div class="ft-logo-btn">
  	<a title="Design Your Experience" href="<?php echo base_url(); ?>offers" style="background-image:url(<?php echo base_url(); ?>public/assets/images/logo_badge2.png);"></a>
  </div>
  
  <div class="brand">Event Offer Template</div>

<style>.main-white-nav  {display:none;}</style>
</div>
</header>
<!-- TOP Nav END -->

<div class="container">

<section class="page-content">

<!-- About -->
<Section class="well-box-in">
  <!-- Date & Time -->
  <h3>
    <span class="pull-left"><i class="fa fa-calendar muted"></i> Fri. Nov 8, 2014</span>  
    <span class="pull-left tip" style="margin-left:40px;" title="Until 11:00 PM"><i class="fa fa-clock-o muted"></i> 08:00 PM</span>
  </h3>
  <!-- Date & Time END -->
  <header class="exp-header" style="margin-top:5px;">
    <p><strong>Event&nbsp;&#183;</strong>&nbsp;<a href="#">1901 Convention Center Dr, Miami Beach, FL 33139</a></p>
  </header>

	<?php $this->load->view('partials/lists/banner.php'); ?>

  <h3>About this experience</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
</Section>
<!-- About END -->

<!-- Tags -->
<Section class="exp-tag-box">
  <ul class="exp-tags">
      <li>Tag1</li>
     <li>Tag2</li>
     <li>Tag3</li>
     <li>Tag4</li>
     <li>Tag5</li>
     <li>Tag6</li>
     <li>Tag7</li>
     <li>Tag8</li>
  </ul>
</Section>
<!-- Tags END -->

<!-- Tips -->
<?php $this->load->view('partials/lists/list_tips.php'); ?>
<!-- Tips END -->

<!-- Help -->
<?php $this->load->view('partials/lists/list_exp_helper.php'); ?>
<!-- Help END -->
</section>


<section class="sidebar">  
  <section class="well-box-in">
    <label><strong>When do you want to go?</strong></label>
    <section class="dis-block">
      <div class="input-prepend">
          <span class="add-on"><i class="fa fa-calendar"></i></span>
          <select>
            <option>Today</option>
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
            <option>Saturday</option>
          </select>
      </div>
    
      <div class="input-prepend">
          <span class="add-on"><i class="fa fa-clock-o"></i></span>
          <select>
            <option>9:00 AM</option>
            <option>9:30 AM</option>
            <option>10:00 AM</option>
            <option>12:00 PM</option>
            <option>1:30 PM</option>
            <option>2:00 PM</option>
            <option>5:30 PM</option>
          </select>
      </div>
    </section>
    <hr>
    <label class="radio inline"><input type="radio" name="tixRadios" id="tixRadios1" checked> General Admission</label>
    <label class="radio inline"><input type="radio" name="tixRadios" id="tixRadios2"> VIP</label>            
    <hr>
    <table class="table table-condensed cost">
      <tbody>
        <tr class="h4">
          <td><strong>$65</strong> <span class="muted">x 2 Adults</span></td>
          <td style="text-align:right;">$130</td>
        </tr>
        <tr class="h4">
          <td><strong>$25</strong> <span class="muted tip" title="Children 11 and under">x 4 Children</span></td>
          <td style="text-align:right;">$100</td>
        </tr>
        <tr>
          <td>Service fee <i class="fa fa-info-circle tip" title="This is the fee charged by Field-Trip!"></i></td>
          <td style="text-align:right;">$46</td>
        </tr>
      </tbody>
    </table>
    <div class="total-price"><small>Total</small> $276</div>
  </section>
  
  <section class="well-box-in text-center">
    <a class="btn btn-lg btn-yellow" href="<?php echo base_url(); ?>offers/checkout">Book Now</a>
    <a class="btn btn-lg" href="#" title="Turn down and Delete this offer">Decline</a>
  </section>

</section>

</div>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->