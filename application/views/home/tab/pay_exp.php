<div id="payexp" class="exp-detail-modal"><div class="container"><div class="edm-inner">
    <section class="edm-header">
    	<h3>Booking: Key Biscayne Island Day Tour</h3>
        <button class="close exit"><i class="fa fa-times fa-lg"></i></button>
    </section>

    <section class="sec-exp-booking edm-info">
      <h4 class="menu-title">Your Information</h4>  
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label">Name</label>
          <div class="controls"><input type="text" placeholder="Jane Tripper"></div>
        </div>
        <div class="control-group">
          <label class="control-label">Email</label>
          <div class="controls"><input type="email" placeholder="example@field-trip.com"></div>
        </div>
        <div class="control-group">
          <label class="control-label">Phone</label>
          <div class="controls"><input type="tel" placeholder="(305) 123-1234"></div>
        </div>
        <div class="control-group">
          <label class="control-label">Create Password</label>
          <div class="controls"><input type="password"></div>
        </div>
      </form>

      <!-- PAYMENT -->
      <h4 class="menu-title">Payment method</h4>  
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label">Card Number</label>
          <div class="controls"><input type="number"></div>
        </div>
        <div class="control-group">
          <label class="control-label">Expiration Date</label>
          <div class="controls">
              <select style="width:auto;"><option>01</option><option>12</option></select>
              <select style="width:auto;"><option>2016</option><option>2020</option></select>    
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">CVC</label>
          <div class="controls"><input type="number" placeholder="Security Code" maxlength="3"></div>
        </div>

        <div class="control-group">
          <label class="control-label">Your total charge</label><div class="controls"><h4>$999,999.99</h4></div>
        </div>
      </form>
      <p class="muted padded dis-block" style="margin:0;">Clicking <strong>Pay Now</strong> will confirm your reservation and charge your payment method.</p>
      <!-- PAYMENT END-->
    </section>


    <section class="edm-header">
        <a href="<?php echo base_url(); ?>home/tour_booked" class="btn btn-green exit">Pay Now</a>
    </section>
</div></div></div>