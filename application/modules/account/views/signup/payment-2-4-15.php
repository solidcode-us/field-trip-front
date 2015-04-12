<!--<link href="<?php //echo base_url(); ?>public/assets/css/select2.min.css" rel="stylesheet">
 
<script src="<?php //echo base_url(); ?>public/assets/js/select2.full.js"></script>-->

<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
<script type="text/javascript">
	// this identifies your website in the createToken call below
	Stripe.setPublishableKey('pk_test_ozUtSEVp3NOzJmjOMLobGwr0');
	
	function stripeResponseHandler(status, response) {
		if (response.error) {
			// re-enable the submit button
			$('.step-3-btn').removeAttr("disabled");
			// show the errors on the form
			$(".payment-errors").html(response.error.message);
		} else {
		
			var token = response['id'];
			var member_id =  $("#member_id").val();
			var amount =  $(".membership-select option:selected").data("value");
			amount = Math.round(amount*100);
			if(token!="" && token!=null) {
			 var amount = 
					$.ajax({
					type: "post",
					url: '<?php echo base_url(); ?>account/member_strip_payment',
					data: {'token': token, 'currency': 'USD', 'amount': amount,'member_id':member_id},
					dataType: 'json',
					success: function(response) {
						if (response!=1) {
						
							$("#alert_msg").text(response);
							return false;
						}
						if (response==1) {
							//$("#member_id").val(response.member_id);
						}
					},
					complete: function() {
						$(".steps-block").hide();
						$(".step-3").fadeIn();
					}
				});
					
			}
		}
	}
$(document).ready(function() {


    // $(".membership-select").select2({
    // 		minimumResultsForSearch: Infinity
    // });


	$(".step-3-btn").live('click', function(){
		
		// createToken returns immediately - the supplied callback submits the form if there are no errors
		var err = false;
		var card_number = $('#card_number').val();
		
		var cvv_code = $('#cvv_code').val();
		var expire_month = $('#expire_month').val();
		var expire_year = $('#expire_year').val();
		
		if(card_number=="" || card_number==null) {
			$('#card_number').addClass("redborder");
			$('#error_card_number').show();
			err=true;
		} else if(!Stripe.card.validateCardNumber(card_number)) {
			$('#card_number').addClass("redborder");
			$('#error_card_number').text('Please enter valid card number.').show();
			err=true;
		} else {
			$('#card_number').removeClass("redborder");
			$('#error_card_number').text('').hide();
		}
		if(cvv_code=="" || cvv_code==null) {
			$('#cvv_code').addClass("redborder");
			$('#error_cvv_code').show();
			err=true;
		} else if(!Stripe.card.validateCVC(cvv_code)) {
			$('#cvv_code').addClass("redborder");
			$('#error_cvv_code').text('Please enter valid cvv number.').show();
			err=true;
		} else {
			$('#cvv_code').removeClass("redborder");
			$('#error_cvv_code').text('').hide();
		}
		if(expire_month=="" || expire_month==null) {
			$('#expire_month').addClass("redborder");
			$('#error_expire_month').show();
			err=true;
		} else {
			$('#expire_month').removeClass("redborder");
			$('#error_expire_month').text('').hide();
		}
		if(expire_year=="" || expire_year==null) {
			$('#expire_year').addClass("redborder");
			$('#error_expire_year').show();
			err=true;
		} else {
			$('#expire_year').removeClass("redborder");
			$('#error_expire_year').text('').hide();
		}
		if(!Stripe.card.validateExpiry(expire_month, expire_year)) {
			$('#expire_month').addClass("redborder");
			$('#error_expire_month').text('Please enter valid expire month and year.').show();
			err=true;
		} else {
			$('#expire_month').removeClass("redborder");
			$('#error_expire_month').text('').hide();
		}
		if(err==false) {
			// disable the submit button to prevent repeated clicks
			$('.step-3-btn').attr("disabled", "disabled");
		
			Stripe.createToken({
				number: card_number,
				cvc: cvv_code,
				exp_month: expire_month,
				exp_year: expire_year
			}, stripeResponseHandler);
			return false; // submit from callback
		}
	});
});
</script> 
 <?php if(isset($membership[0]->plan_amount)) {
			$amount1 = explode('.',$membership[0]->plan_amount);
			$yearly = $membership[0]->plan_amount * 12;
      } 
	  if(isset($membership[1]->plan_amount)) {
			$amount2 = explode('.',$membership[1]->plan_amount);
			$quarterly = $membership[1]->plan_amount * 3;
      } 
	  if(isset($membership[2]->plan_amount)) {
			$amount3 = explode('.',$membership[2]->plan_amount);
			$monthly = $membership[2]->plan_amount * 1;
      } 
	  if(isset($membership[3]->plan_amount)) {
			$amount4 = explode('.',$membership[3]->plan_amount);
			$hourly = $membership[3]->plan_amount * 1;
      }
?>

<form id="frmPayment" method="post" onsubmit="return false;">
<div style="display: none;" class="alert-error" id="alert_msg"></div>
<h4 class="menu-title" style="margin-top:20px;">Your Membership</h4>  
<ul class="menu-list no-icons mem-plan">
  <li style="border-bottom:1px solid #dedede;">
   <span class="value" style="opacity:1;">
	<select style="width:100%;font-weight:700;text-align:left;" class="membership-select">
		<option data-value="<?php echo $yearly;?>"  value="<?php echo $membership[0]->id;?>"><?php echo $membership[0]->plan_name;?></option>
		<option data-value="<?php echo $quarterly;?>" value="<?php echo $membership[1]->id;?>"><?php echo $membership[1]->plan_name;?></option>
		<option data-value="<?php echo $monthly;?>" value="<?php echo $membership[2]->id;?>"><?php echo $membership[2]->plan_name;?></option>
		<option data-value="<?php echo $hourly;?>"value="<?php echo $membership[3]->id;?>"><?php echo $membership[3]->plan_name;?></option>
	</select>
    </span>
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>
 
  <div class="price-div year1">
    <div class="plan-price">$<span class="dollar"><?php echo $amount1[0];?></span> .<?php echo $amount1[1];?>
	<input type="hidden" id="amount" value="<?php echo $yearly;?>" /><span class="interval">/month</span></div>
  </div>
  <div class="price-div mo6">
    <div class="plan-price">$<span class="dollar"><?php echo $amount2[0];?></span> .<?php echo $amount2[1];?>
	<input type="hidden" id="amount" value="<?php echo $quarterly;?>" />
	<span class="interval">/month</span></div>
  </div>
  <div class="price-div mo3">
    <div class="plan-price">$<span class="dollar"><?php echo $amount3[0];?></span> .<?php echo $amount3[1];?>
	<input type="hidden" id="amount" value="<?php echo $monthly;?>" />
	<span class="interval">/month</span></div>
  </div>
  <div class="price-div hr24">
    <div class="plan-price">$<span class="dollar"><?php echo $amount3[0];?></span> .<?php echo $amount3[1];?>
	<input type="hidden" id="amount" value="<?php echo $hourly;?>" />
	<span class="interval">for 1 day</span></div>
  </div>
    
  <span class="year1 muted"><strong>$<?php echo number_format($yearly,2);?> billed in full</strong>, once every year</span>     
  <span class="mo6 muted"><strong>$<?php echo number_format($quarterly,2);?> billed in full</strong>, once every three months</span>     
  <span class="mo3 muted"><strong>$<?php echo number_format($monthly,2);?> billed in full</strong>, once every month</span>      
  <span class="hr24 muted"><strong>$<?php echo number_format($hourly,2);?> billed in full</strong>, only for today's access</span>      
</ul>


<!-- PAYMENT -->
<h4 class="menu-title">Payment method</h4>  
<ul class="menu-list no-icons input-fields">
  <li>
    <span class="title"><img src="<?php echo base_url(); ?>public/assets/images/payment_cards.png" style="margin:0; height:20px;" /></span>
    <span class="value"><input type="text" id="card_number" placeholder="Card Number" autocomplete="off">
	<div id="error_card_number" style="display: none;" class="errUser">Please enter card number.</div>
	</span>
  </li>
  <li>
    <span class="title">Expiration Date</span>
    <span class="value">
        <select style="width:auto;" id="expire_month">
		<?php for($i=1; $i<=12; $i++) { 
			$i = ($i < 10)? "0".$i : $i;
		?>
			<option value="<?php echo $i;?>"><?php echo $i;?></option>
		<?php } ?>
		</select>
		
        <span style="display: inline-block;float: left;padding: 2px;">/</span>
        <select style="width:auto;" id="expire_year">
			<?php for($year=2015; $year <=2025; $year++) { ?>
				<option value="<?php echo $year;?>"><?php echo $year;?></option>
			<?php } ?>
		</select>  
		
    </span>
    <div id="error_expire_month" style="display: none;margin-left: 175px;" class="errUser">Please enter expire month.</div>
	<div id="error_expire_year" style="display: none;" class="errUser">Please enter expire year.</div>  
  </li>
  <li>
    <span class="title">CVC</span>
    <span class="value"><input type="password" id="cvv_code" placeholder="Security Code" maxlength="3">
	<div id="error_cvv_code" style="display: none;" class="errUser">Please enter cvv code.</div>  
	</span>
  </li>
  <li class="note">Your Card will be saved for booking experiences on Field-Trip!.</li>
</ul>
<p class="text-center padded">By clicking "GET ACCESS NOW" you accept the <a href="#" target="_blank">Field-Trip! Terms of Service</a></p>
</form>


<!-- PAYMENT END-->

<style>
.select2{font-weight: 700px}
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
.menu-list.no-icons.mem-plan .title {width:100%;text-align:left;position: relative;z-index: 2}
.right-arrow{z-index: 1;}
 
</style>