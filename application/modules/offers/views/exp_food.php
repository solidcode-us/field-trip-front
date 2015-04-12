<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css">

<div class="offers exp">
  <section class="sidebar">
    <section class="well-box-in sb-cal" style="padding:0 0 15px;">
      <div id="datepicker"></div>
      <script>
        $(function() {
          $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+3M" });
        });
      </script>
    
      <ul class="booking-option">
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/group.png"/></span>
          <select>
              <option>1 person</option><option>2 people</option><option>3 people</option>
              <option>4 people</option><option>5 people</option><option>6 people</option>
          </select>
        </li>      
      
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/clock.png"/></span>
          <select>
              <option>9:00 AM</option><option>9:30 AM</option><option>10:00 AM</option><option>12:00 PM</option>
              <option>1:30 PM</option><option>2:00 PM</option><option>5:30 PM</option><option>8:45 PM</option>
          </select>
        </li>      
      </ul>

      <div class="padded">
        <a href="<?php echo base_url(); ?>itinerary" class="btn btn-lg btn-yellow" id="add-wants">Book Now</a>
      </div>
    </section>
    <a href="<?php echo base_url(); ?>offers/food" title="Go back to offers" class="btn btn-info bck"><i class="fa fa-chevron-left"></i> Back to Offers</a>
  </section>
  
  <section class="page-content"><section style="padding:0 20px;">
  
  <!-- About -->
  <Section class="well-box-in about">
    <?php $this->load->view('offers/banner_food.php'); ?>
    
    <div class="exp-hours"><i class="fa fa-clock-o muted"></i> Open Now <small>until</small> 11:00 PM</div>
    <div class="exp-loc"><i class="fa fa-map-marker muted"></i> <a href="#">900 N Birch Rd, Fort Lauderdale, FL</a></div>

    <Section class="exp-about">
      <h3>About this experience</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
    </Section>
  </Section>
  <!-- About END -->
  
  <!-- Food Menu -->
  <?php $this->load->view('partials/lists/list_food_menu.php'); ?>
  <!-- Food Menu END -->
  
  <!-- Tips -->
  <?php $this->load->view('partials/lists/list_tips_food.php'); ?>
  <!-- Tips END -->
  
  <!-- Help -->
  <?php $this->load->view('partials/lists/list_exp_helper.php'); ?>
  <!-- Help END -->
  </section></section>
</div>

<style>
.tips li + li {
    margin:0;
	padding:0 0 20px;
}
.tips li {
    display: block;
    float: left;
    font-size: 13px;
    padding: 0;
    position: relative;
    text-align: left;
    width: 50%;
}
</style> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->