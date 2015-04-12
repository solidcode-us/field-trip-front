<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="offers exp">
  <section class="sidebar">
    <section class="well-box-in" style="padding:10px 0 15px;">
      <h3 class="padded">Check-in  -  Check-out</h3>
      <ul class="booking-option" style="margin:0;">
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
          <input type="text" value="Jul. 4, 2015">
        </li>
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
          <input type="text" value="Jul. 19, 2015">
        </li>
      </ul>
      <ul class="booking-option" style="margin:0;">
        <li style="width:100%;border-top:none;">
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/group.png"/></span>
          <select>
              <option>1 guest</option><option>2 guests</option><option>3 guests</option>
              <option>4 guests</option><option>5 guests</option><option>6 guests</option>
          </select>
        </li>      
      </ul>
      <section class="padded" style="margin-top:10px;">
      <table class="table table-condensed cost">
        <tbody>
          <tr class="h4">
            <td><strong>$798</strong> <span class="muted">x 15 nights</span></td>
            <td style="text-align:right;">$11970</td>
          </tr>
          <tr>
            <td>Security Deposit</td>
            <td style="text-align:right;">$0</td>
          </tr>
          <tr>
            <td>Cleaning fee</td>
            <td style="text-align:right;">$99</td>
          </tr>
          <tr>
            <td>Service fee <i class="fa fa-info-circle tip" title="This is the fee charged by Field-Trip!"></i></td>
            <td style="text-align:right;">$724</td>
          </tr>
        </tbody>
      </table>
      </section>
      <div class="total-price"><small>Total</small> $12,793</div>
  
      <div class="padded">
        <button class="btn btn-lg btn-yellow" id="add-wants">Book Now</button>
      </div>
    </section>
    <a href="<?php echo base_url(); ?>offers/lodging" title="Go back to offers" class="btn btn-info bck"><i class="fa fa-chevron-left"></i> Back to Offers</a>
  </section>
  
  <section class="page-content"><section style="padding:0 20px;">
    <!-- About -->
    <Section class="well-box-in about">
      <?php $this->load->view('offers/banner_lodging.php'); ?>
      
      <div class="exp-hours"><i class="fa fa-home muted"></i> 3 <small>bedroom</small> 3.5 <small>bathroom</small></div>
      <div class="exp-loc"><i class="fa fa-map-marker muted"></i> <a href="#">1901 Convention Center Dr, Miami Beach, FL 33139</a></div>
  
      <Section class="exp-about">
        <h3>About this experience</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
      </Section>
    </Section>
    <!-- About END -->
    
    <!-- The Space -->
    <Section class="well-box-in the-space">
        <div class="col-2"><ul class="unstyled">
            <li>Property type: <strong>Apartment</strong></li>
            <li>Location: <strong><a href="#">Miami Beach, FL</a></strong></li>
            <li>Check In: <strong>2:00 PM</strong></li>
            <li>Check Out: <strong>12:00 PM (noon)</strong></li>
        </ul></div>
        <div class="col-2"><ul class="unstyled">
            <li>Accommodates: <strong>5</strong></li>
            <li>Bedrooms: <strong>3</strong></li>
            <li>Bathrooms: <strong>3.5</strong></li>
            <li>Beds: <strong>4</strong></li>
        </ul></div>
    </Section>
    <!-- The Space END -->
    
    <!-- Amenities -->
    <Section class="well-box-in">
      <h3>Amenities</h3>
      <ul class="exp-features" style="padding:0;">
        <li><i class="fa fa-check-square-o"></i> Wireless Internet</li>
        <li><i class="fa fa-check-square-o"></i> TV</li>
        <li><i class="fa fa-check-square-o"></i> Pool</li>
        <li><i class="fa fa-check-square-o"></i> Kitchen</li>
        <li><i class="fa fa-check-square-o"></i> Air Conditioning</li>
        <li><i class="fa fa-check-square-o"></i> Breakfast</li>
        <li><i class="fa fa-check-square-o"></i> Buzzer/Wireless Intercom</li>
        <li><i class="fa fa-check-square-o"></i> Cable TV</li>
        <li><i class="fa fa-check-square-o"></i> Carbon Monoxide Detector</li>
        <li><i class="fa fa-check-square-o"></i> Doorman</li>
        <li><i class="fa fa-check-square-o"></i> Dryer</li>
        <li><i class="fa fa-check-square-o"></i> Elevator in Building</li>
        <li><i class="fa fa-check-square-o"></i> Essentials</li>
        <li><i class="fa fa-check-square-o"></i> Family/Kid Friendly</li>
        <li><i class="fa fa-check-square-o"></i> Fire Extinguisher</li>
        <li><i class="fa fa-check-square-o"></i> First Aid Kit</li>
        <li><i class="fa fa-check-square-o"></i> Free Parking on Premises</li>
        <li><i class="fa fa-check-square-o"></i> Gym</li>
        <li><i class="fa fa-check-square-o"></i> Heating</li>
        <li><i class="fa fa-check-square-o"></i> Hot Tub</li>
        <li><i class="fa fa-check-square-o"></i> Indoor Fireplace</li>
        <li><i class="fa fa-check-square-o"></i> Internet</li>
        <li><i class="fa fa-check-square-o"></i> Pets Allowed</li>
        <li><i class="fa fa-check-square-o"></i> Safety Card</li>
        <li><i class="fa fa-check-square-o"></i> Shampoo</li>
        <li><i class="fa fa-check-square-o"></i> Smoke Detector</li>
        <li><i class="fa fa-check-square-o"></i> Smoking Allowed</li>
        <li><i class="fa fa-check-square-o"></i> Suitable for Events</li>
        <li><i class="fa fa-check-square-o"></i> Washer</li>
        <li><i class="fa fa-check-square-o"></i> Wheelchair Accessible</li>
      </ul>
    </Section>
    <!-- Amenities END -->
        
    <!-- Tips -->
    <?php $this->load->view('partials/lists/list_tips.php'); ?>
    <!-- Tips END -->
    
    <!-- Help -->
    <?php $this->load->view('partials/lists/list_exp_helper.php'); ?>
    <!-- Help END -->
    
  </section></section>
</div>

<?php $this->load->view('offers/checkout/pay_lodging.php'); ?>

<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->