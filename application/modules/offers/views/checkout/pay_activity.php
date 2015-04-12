<div id="wants-nav" class="right-nav wide">
    <section class="dis-block padded">
    	<h3 style="float:left;margin:0;">Book this Experience</h3>
        <button class="close exit"><i class="fa fa-times fa-lg"></i></button>
    </section>

    <div class="padded">
      <ul class="info-bar dis-block" style="padding:15px;margin:15px 0;border-top:1px solid #dedede;border-bottom:1px solid #dedede;">
        <li><i class="fa fa-calendar"></i> Fri. Jan 25, 2015</li>   
        <li><i class="fa fa-clock-o"></i> 05:00 PM</li>
        <li style="margin-right:0;"><i class="fa fa-map-marker"></i> Miami Beach, FL</li>   
      </ul>
    </div>

    <div class="col-2 padded">
      <h4 style="margin:0 0 15px;"><strong>Payment Method</strong></h4>
      
      <select style="height:35px;float:left;margin:0 0 15px;" id="my_card">
      	<option>My Credit Card - 0987</option>
      </select>
      
      <label class="checkbox dis-block" style="margin:0;"><input type="checkbox" id="add_new_card"> Add a new Card</label>
      <section id="row_new_card" style="display:none;">
        <div class="field-group">
          <div class="input-prepend" title="Card Number">
              <span class="add-on" style="width:auto;">Card Number</span>
              <input type="text" size="20" autocomplete="off"  class="card-number" name="card_number" style="margin:0;width:60%;">
              <div class="dis-block"><img src="<?php echo base_url();?>public/assets/images/payment_cards.png" style="margin:10px 0 0; height:20px;" /></div>
          </div>
        </div>
      
        <div class="field-group">
            <div class="input-prepend" style="float:left;width:auto;margin:0 15px 15px 0;">
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
    </div>

    <div class="col-2 padded" style="opacity:.7;">
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
    </div>
    
    <p class="text-center dis-block padded" style="margin:20px 0 0;">This payment transacts in <strong>$USD</strong>. Your total charge is <strong>$378</strong>.</p>
    
    <div class="text-center dis-block padded">
        <div class="section-divider"></div>
        <label class="checkbox dis-block" style="font-size:12px;padding:0;margin:0;">
        	<input type="checkbox" style="display:inline-block;float:none;margin:0;"> I agree to all Policies and <a href="<?php echo base_url(); ?>terms" target="_blank">Terms of Service</a>.
        </label>
    </div>
    
    <!-- Total -->
    <div class="text-center dis-block padded">        
        <a href="<?php echo base_url(); ?>itinerary" class="btn btn-lg btn-green" style="margin:20px 0;width:auto;">Pay Now</a>
        <p class="muted">Clicking <strong>Pay Now</strong> will confirm your reservation and charge your payment method.</p>
    </div>
    <!-- Total END -->
</div>