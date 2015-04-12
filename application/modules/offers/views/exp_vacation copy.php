<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="container">

<div class="visible-phone">
  <?php $this->load->view('partials/lists/banner_mobile.php'); ?>
  <!-- About -->
  <Section class="well-box-about">
    <h3>About this experience</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
  </Section>
  <!-- About END -->
  
  <section class="page-content"><Section class="well-box-in" style="margin:0;">  
    <h3><i class="fa fa-clock-o muted"></i> Available Now <small>until</small> 4:00 PM</h3>
    <p class="exp-header" style="padding-top:0;"><i class="fa fa-map-marker muted"></i> <a href="#">South America</a></p>
  </Section></section>
</div>


<section class="page-content">

<!-- About -->
<Section class="well-box-in hidden-phone">
  <!-- Date & Time -->
  <h3>
    <span class="pull-left"><i class="fa fa-clock-o muted"></i> 13 Days / 12 Nights</span>  
  </h3>
  <!-- Date & Time END -->
  <header class="exp-header" style="margin-top:5px;">
    <p><strong>Vacation&nbsp;&#183;</strong>&nbsp;<a href="#">South America</a>
  </header>

	<?php $this->load->view('partials/lists/banner.php'); ?>

  <h3>About this experience</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
</Section>
<!-- About END -->

<!-- Tags -->
<Section class="exp-tag-box">
  <ul class="exp-tags">
     <li>Active Adventures</li>
     <li>African Safari</li>
     <li>Exclusive Access</li>
     <li>Expedition Cruises</li>
     <li>Family</li>
     <li>Food &amp; Wine</li>
     <li>Global Festivals</li>
     <li>Land &amp; Cruise Series</li>
     <li>Ocean Cruises</li>
     <li>Rail Journeys</li>
     <li>River Cruises</li>
     <li>Shore Excursions</li>
     <li>Small Group Tours</li>
     <li>Villas</li>
     <li>Yacht Charters</li>
  </ul>
</Section>
<!-- Tags END -->

<!-- Vacation Days -->
<?php $this->load->view('partials/lists/list_vacation_days.php'); ?>
<!-- Vacation Days END -->

<!-- Included -->
<Section class="well-box-in">
  <h3>Included</h3>
  <ul class="exp-features" style="padding:0;">
    <li><i class="fa fa-check-square-o"></i> Activities</li>
    <li><i class="fa fa-check-square-o"></i> Accommodation</li>
    <li><i class="fa fa-check-square-o"></i> Flights</li>
    <li><i class="fa fa-check-square-o"></i> Tour Guides</li>
    <li><i class="fa fa-check-square-o"></i> Transportation</li>
    <li><i class="fa fa-check-square-o"></i> Meals</li>
  </ul>
</Section>
<!-- Included END -->

<!-- Tips -->
<?php $this->load->view('partials/lists/list_tips.php'); ?>
<!-- Tips END -->

<!-- Help -->
<?php $this->load->view('partials/lists/list_exp_helper.php'); ?>
<!-- Help END -->
</section>


<section class="sidebar">  
  <section class="well-box-in sb-cal" style="padding:0;">
    <section class="dis-block" style="padding:15px;"><h4><strong>When do you want to go?</strong></h4></section>
    <div id="datepicker"></div>
	<script>
      $(function() {
        $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+12M" });
      });
    </script>
    
    <section class="dis-block" style="padding:0 15px 15px;">
      <hr>
      <table class="table table-condensed cost">
        <tbody>
          <tr class="h4">
            <td><strong>$650</strong> <span class="muted">x 2 Adults</span></td>
            <td style="text-align:right;">$1,300</td>
          </tr>
          <tr class="h4">
            <td><strong>$450</strong> <span class="muted">x 1 Students</span></td>
            <td style="text-align:right;">$450</td>
          </tr>
          <tr class="h4">
            <td><strong>$400</strong> <span class="muted">x 1 Seniors</span></td>
            <td style="text-align:right;">$400</td>
          </tr>
          <tr class="h4">
            <td><strong>$250</strong> <span class="muted tip" title="Children 11 and under">x 4 Children</span></td>
            <td style="text-align:right;">$1,000</td>
          </tr>
          <tr>
            <td>Service fee <i class="fa fa-info-circle tip" title="This is the fee charged by Field-Trip!"></i></td>
            <td style="text-align:right;">$630</td>
          </tr>
        </tbody>
      </table>
      <div class="total-price"><small>Total</small> $3,780</div>
    </section>
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