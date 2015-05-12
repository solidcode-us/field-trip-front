<!-- BOOK NOW -->
<section class="sec-exp-booking">
    <h2>Book Now</h2>
    <section class="well-box-in" style="padding:0 0 15px;">
      <ul class="booking-option">
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
          <input type="text" id="datepicker" value="04/30/2015">
        </li>      
      
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/clock.png"/></span>
          <select>
              <option>9:00 AM</option><option>9:30 AM</option><option>10:00 AM</option><option>12:00 PM</option>
              <option>1:30 PM</option><option>2:00 PM</option><option>5:30 PM</option><option>8:45 PM</option>
          </select>
        </li>      
      </ul>
      <ul class="booking-option loc-pick">
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/map-pin.png"/></span>
          <input type="text" placeholder="Pick-up Address">
        </li>      
      </ul>
      
      <ul class="booking-option going">
        <li title="Adults">
          <select><option>1</option><option>0</option><option>2</option><option>3</option><option>99</option></select><span class="age">Adults</span>
          <p class="note">Age: 21 - 63</p> <strong>$99,999</strong>
        </li> 
          
        <li title="Young Adults">
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">Young Ad</span>
          <p class="note">Age: 18 - 20</p><strong>$999,999</strong>
        </li> 
           
        <li title="Teenagers">
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">Teenagers</span>
          <p class="note">Age: 13 - 17</p><strong>$0</strong>
        </li>
            
        <li title="Children">
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">Children</span>
          <p class="note">Age: 4 - 12</p><strong>$0</strong>
        </li>
          
        <li title="Infants">
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">Infants</span>
          <p class="note">Age: 0 - 3</p><strong>$0</strong>
        </li>
           
        <li title="Seniors">
          <select><option>0</option><option>1</option><option>2</option><option>3</option><option>99</option></select><span class="age">Seniors</span>
          <p class="note">Age: 64+</p><strong>$0</strong>
        </li>     
      </ul>
      <div class="padded text-center">
        <table class="table discount-table">
          <tbody>
            <tr><td>Experience</td> <td><strong>$99,999</strong></td></tr>
            <tr><td>Transportation</td> <td><strong>$999</strong></td></tr>
            <tr><td>Taxes & Fees</td> <td><strong>$99.99</strong></td></tr>
          </tbody>
        </table>
      </div>
      <div class="total-price"><small>Total</small> $999,999.99</div>

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
          <tr><td>Experience price:</td> <td><strong>$999</strong></td></tr>
          <tr><td>Member's credit:</td> <td><strong>-$100</strong></td></tr>
          <tr><td class="discount-total">Your cost after savings:</td> <td class="discount-total"><strong>$899</strong></td></tr>
        </tbody>
      </table>
      <div class="dis-block text-center"><a href="<?php echo base_url(); ?>signup">Pre-register now <i class="fa fa-angle-right"></i></a></div>
    </section>
</section>
<!-- BOOK NOW END -->