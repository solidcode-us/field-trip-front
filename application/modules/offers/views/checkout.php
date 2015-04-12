<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<!-- Top Nav -->
<header class="main-white-nav" style="display:block;">
<div class="container">

  <ul class="main-nav-menus">
    <li class="back-btn"><a href="<?php echo base_url(); ?>offers/exp_activity"><i class="fa fa-chevron-left"></i> Back</a></li>
  </ul>

  <div class="ft-logo-btn">
  	<a title="Design Your Experience" href="<?php echo base_url(); ?>offers" style="background-image:url(<?php echo base_url(); ?>public/assets/images/logo_badge2.png);"></a>
  </div>
  
  <div class="brand">Checkout</div>

</div>

<style>.main-white-nav  {display:none;}</style>
</header>
<!-- TOP Nav END -->

<div class="container">

<section class="page-content">
  <Section class="well-box-in">

    <section class="dis-block">
      <h3><strong>Miami International Auto Show</strong></h3>
      <p><strong><a href="#" class="link-color">Event</a>&nbsp;&#183;</strong>&nbsp;Miami Beach, FL United States</p>
  
      <p class="order-location"><i class="fa fa-map-marker muted"></i> Miami Beach Convention Center</p>
      <ul class="info-bar" style="border:none;margin:0;padding:5px 0 20px;">
        <li><i class="fa fa-calendar"></i> Fri. Nov 8, 2014</li>   
        <li><i class="fa fa-clock-o"></i> 05:00 PM</li>
        <li style="margin-right:0;"><i class="fa fa-users"></i> <a href="#more_info" role="button" data-toggle="modal"><strong>Who's going</strong></a></li>   
      </ul>
    </section>
  
    <section class="col-2"><section class="well-box-in">
        <select style="height:35px; margin-right:15px; float:left;" id="my_card"><option><i class="fa fa-cc-visa fa-lg" style="margin-right:5px;"></i> My Credit Card - 0987</option></select>
        <label class="checkbox" style="float:left;margin-top:10px;width:100%;"><input type="checkbox" id="add_new_card"> Add a new Card</label>
        <section id="row_new_card" style="display:none;margin-top:15px;">
          <div class="field-group">
            <div class="input-prepend" title="Card Number">
                <span class="add-on" style="width:auto;">Card Number</span>
                <input type="text" size="20" autocomplete="off"  class="card-number" name="card_number" style="margin:0;width:60%;">
                <div class="dis-block"><img src="<?php echo base_url();?>public/assets/images/payment_cards.png" style="margin:10px 0 0; height:20px;" /></div>
            </div>
          </div>
        
          <div class="field-group">
              <div class="input-prepend" style="float:left;width:auto;margin:0 15px 0 0;">
                <span class="add-on" style="width:auto;" title="When does this card expire?">Expires</span>
                <select style="border-radius:0;" title="Expiration month"><option>Month</option><option>01</option><option>12</option></select>
                <select style="margin-left:0;" title="Expiration year"><option>Year</option><option>2014</option><option>2020</option></select>
              </div>
              <div class="input-prepend" style="float:left;width:auto;margin:0;">
                <span class="add-on" style="width:auto;" title="Security Code">CVC</span>
                <input type="text" maxlength="4" autocomplete="off" name="cvc" class="card-cvc" style="width:55px;" title="Security Code">
              </div>      
        
          </div>
        </section>
    </section></section>
  
  </Section>
</section>


<section class="sidebar">  
  <section class="well-box-in">
    <div class="dis-block">    
        <table class="table table-condensed cost">
          <tbody>
            <tr class="h4">
              <td><strong>$65</strong> <span class="muted">x 2 Adults</span></td>
              <td style="text-align:right;">$130</td>
            </tr>
            <tr class="h4">
              <td><strong>$45</strong> <span class="muted">x 1 Students</span></td>
              <td style="text-align:right;">$45</td>
            </tr>
            <tr class="h4">
              <td><strong>$40</strong> <span class="muted">x 1 Seniors</span></td>
              <td style="text-align:right;">$40</td>
            </tr>
            <tr class="h4">
              <td><strong>$25</strong> <span class="muted tip" title="Children 11 and under">x 4 Children</span></td>
              <td style="text-align:right;">$100</td>
            </tr>
            <tr>
              <td>Service fee <i class="fa fa-info-circle tip" title="This is the fee charged by Field-Trip!"></i></td>
              <td style="text-align:right;">$63</td>
            </tr>
          </tbody>
        </table>
        <div class="total-price"><small>Total</small> $378</div>
        <span class="dis-block" style="margin-top:20px;">This payment transacts in <strong>$USD</strong>. Your total charge is <strong>$378</strong>.</span>
    </div>
  
    <div class="section-divider"></div>    
  
    <!-- Total -->
    <div class="dis-block">    
        <label class="checkbox" style="width:100%; clear:both; font-size:12px;"><input type="checkbox"> I agree to all Policies and <a href="<?php echo base_url(); ?>terms" target="_blank">Terms of Service</a>.</label>
        
        <a href="<?php echo base_url(); ?>itinerary" class="btn btn-lg btn-yellow" style="margin:20px 0;">Pay Now</a>
        <p class="muted">Clicking <strong>Pay Now</strong> will confirm your reservation and charge your payment method.</p>
    </div>
    <!-- Total END -->
  </section>
</section>

</div>

<!-- Who's going Modal -->
<div id="more_info" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Who's going</h3>
  </div>
  
  <div class="modal-body" style="padding:0;">
    <section class="dis-block">
      <ul class="people">
          <li>
            <span style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user_1.png);"></span>
            <p>Alice Queen</p>
          </li>
  
          <li>
            <span style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user_2.png);"></span>
            <p>Alex King</p>
          </li>
      </ul>
    </section>
  </div>
</div>
<!-- Who's going Modal end-->

<style>
.table th, .table td {border:none;}
.well-box {margin-bottom:0;}

.user-profile-div .trip-rating {float:left; margin-left:20px;}
.search-list {padding-left: 0;}

.nav-pills > li > a {width: 151px;}
</style>

<script type="text/javascript">
$(function() {
    $('#add_new_card').change(function(){
            if($('#add_new_card').is(':checked')){
                    $('#row_new_card').show();
                    $('#my_card').hide();
            }else{
                    $('#row_new_card').hide();
                    $('#my_card').show();
            }
    });
});
</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->