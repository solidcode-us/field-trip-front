 <?php if(isset($membership[0]->plan_amount)) {
			$amount1 = explode('.',$membership[0]->plan_amount);
			$yearly = number_format($membership[0]->plan_amount * 12,2);
      } 
	  if(isset($membership[1]->plan_amount)) {
			$amount2 = explode('.',$membership[1]->plan_amount);
			$quarterly = number_format($membership[1]->plan_amount * 3,1);
      } 
	  if(isset($membership[2]->plan_amount)) {
			$amount3 = explode('.',$membership[2]->plan_amount);
			$monthly = number_format($membership[2]->plan_amount * 1,2);
      } 
	  if(isset($membership[3]->plan_amount)) {
			$amount4 = explode('.',$membership[3]->plan_amount);
			$hourly = number_format($membership[3]->plan_amount * 1,2);
      }
?>
<h4 class="menu-title" style="margin-top:20px;">Your Membership</h4>  
<ul class="menu-list no-icons mem-plan">
  <li style="border-bottom:1px solid #dedede;">
   <span class="value" style="opacity:1;">
	<select style="width:100%;font-weight:700;text-align:left;" class="membership-select">
		<option value="<?php echo $membership[0]->id;?>"><?php echo $membership[0]->plan_name;?></option>
		<option value="<?php echo $membership[1]->id;?>"><?php echo $membership[1]->plan_name;?></option>
		<option value="<?php echo $membership[2]->id;?>"><?php echo $membership[2]->plan_name;?></option>
		<option value="<?php echo $membership[3]->id;?>"><?php echo $membership[3]->plan_name;?></option>
	</select>
    </span>
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>
 
  <div class="price-div year1">
    <div class="plan-price">$<span class="dollar"><?php echo $amount1[0];?></span> .<?php echo $amount1[1];?><span class="interval">/month</span></div>
  </div>
  <div class="price-div mo6">
    <div class="plan-price">$<span class="dollar"><?php echo $amount2[0];?></span> .<?php echo $amount2[1];?><span class="interval">/month</span></div>
  </div>
  <div class="price-div mo3">
    <div class="plan-price">$<span class="dollar"><?php echo $amount3[0];?></span> .<?php echo $amount3[1];?><span class="interval">/month</span></div>
  </div>
  <div class="price-div hr24">
    <div class="plan-price">$<span class="dollar"><?php echo $amount3[0];?></span> .<?php echo $amount3[1];?><span class="interval">for 1 day</span></div>
  </div>
    
  <span class="year1 muted"><strong>$<?php echo $yearly;?> billed in full</strong>, once every year</span>     
  <span class="mo6 muted"><strong>$<?php echo $quarterly;?> billed in full</strong>, once every three months</span>     
  <span class="mo3 muted"><strong>$<?php echo $monthly;?> billed in full</strong>, once every month</span>      
  <span class="hr24 muted"><strong>$<?php echo $hourly;?> billed in full</strong>, only for today's access</span>      
</ul>


<!-- PAYMENT -->
<h4 class="menu-title">Payment method</h4>  
<ul class="menu-list no-icons input-fields">
  <li>
    <span class="title"><img src="<?php echo base_url(); ?>public/assets/images/payment_cards.png" style="margin:0; height:20px;" /></span>
    <span class="value"><input type="number" placeholder="Card Number"></span>
  </li>
  <li>
    <span class="title">Expires</span>
    <span class="value">
        <select style="width:auto;"><option>01</option><option>12</option></select>
        <span style="display: inline-block;float: left;padding: 2px;">/</span>
        <select style="width:auto;"><option>2016</option><option>2020</option></select>    
    </span>
  </li>
  <li>
    <span class="title">CVC</span>
    <span class="value"><input type="number" placeholder="Security Code" maxlength="3"></span>
  </li>
  <li class="note">Your Card will be saved for booking experiences on Field-Trip!.</li>
</ul>
<p class="text-center padded">By clicking "GET ACCESS NOW" you accept the <a href="#" target="_blank">Field-Trip! Terms of Service</a></p>
<!-- PAYMENT END-->

<style>
.menu-list.no-icons .year1, 
.menu-list.no-icons .mo6, 
.menu-list.no-icons .mo3, 
.menu-list.no-icons .hr24 {color:#777;display:none;float:left;}

.year1.muted, 
.mo6.muted, 
.mo3.muted, 
.hr24.muted {font-size:12px;padding:10px;color:#999;opacity:1;text-align:center;width:100%;font-weight:400;}

.year1.muted strong, 
.mo6.muted strong, 
.mo3.muted strong, 
.hr24.muted strong {font-weight:700;}

.menu-list.no-icons .year1 {display:block;}

.price-div {margin: 10px 0 0;}
	
.menu-list.no-icons.mem-plan .value,
.menu-list.no-icons.mem-plan .title {width:100%;text-align:left;}
</style>