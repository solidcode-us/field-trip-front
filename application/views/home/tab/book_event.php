<!-- BOOK NOW -->
<section class="sec-exp-booking">
    <h2>Book Now</h2>
    <section class="well-box-in" style="padding:0 0 15px;">
      <ul class="booking-option going">
        <li>
          <select><option>1</option><option>0</option><option>2</option><option>3</option><option>99</option></select><span class="age">Sat. 05/23 Admission</span>
          <strong>$300</strong>
        </li> 
        <li>
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">Sun. 05/24 Admission</span>
          <strong>$0</strong>
        </li> 
        <li>
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">2-Day Pass Admission</span>
          <strong>$0</strong>
        </li> 
      </ul>
      <div class="dis-block padded text-center">
        <table class="table discount-table">
          <tbody>
            <tr><td>Experience</td> <td><strong>$300.00</strong></td></tr>
            <tr><td>Taxes & Fees</td> <td><strong>$81.34</strong></td></tr>
          </tbody>
        </table>
      </div>
      <div class="total-price"><small>Total</small> $381.34</div>

      <div class="padded text-center">
        <button class="btn btn-lg btn-yellow" id="payexp-btn">Reserve my spot</button>
        <p class="muted">All prices are quoted in <strong>US dollars</strong>.</p>
      </div>
    </section>
    <script>
      $(function() {
        $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+9M" });
      });
    </script>
    
    <section class="well-box-in discount">
      <h5>Get <strong>$100</strong> off this experience</h5>
      <p>when you Pre-register for a 1-Year Membership on your purchases of $100 or more for experiences on Field-Trip!™.</p>
      <table class="table discount-table">
        <tbody>
          <tr><td>Experience price:</td> <td><strong>$300</strong></td></tr>
          <tr><td>Member's credit:</td> <td><strong>-$100</strong></td></tr>
          <tr><td class="discount-total">Your cost after savings:</td> <td class="discount-total"><strong>$200</strong></td></tr>
        </tbody>
      </table>
      <div class="dis-block text-center"><a href="<?php echo base_url(); ?>signup">Pre-register now <i class="fa fa-angle-right"></i></a></div>
    </section>
</section>
<!-- BOOK NOW END -->