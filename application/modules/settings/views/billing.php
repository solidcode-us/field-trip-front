    <!-- Membership Plan -->
   <?php	
 
    if(isset($memberPlanInfo['plan_amount'])) {
	
		$plan_amount = $memberPlanInfo['plan_amount'];
		$plan_duration = $memberPlanInfo['plan_duration'];
		$perMonth = "Month";
			$payDates = explode(' ',$last_pay_date);
		//asd($payDates,2);
			$payDateData = explode('-',$payDates[0]);
		   $amountData = explode('.', $plan_amount);
	 
		if($plan_duration=="Yearly") {
		
			$total_amount = $plan_amount * 12;
			$nextBillDate = mktime(0,0,0, $payDateData[1], $payDateData[2], $payDateData[0]+1);
			$durationText = "Year";
		} else if($plan_duration=="Quartly") {
			
			$total_amount = $plan_amount * 3;
			$nextBillDate = mktime(0,0,0, $payDateData[1]+3, $payDateData[2], $payDateData[0]);
			$durationText = "three months";
			//echo $total_amount.'=='.$nextBillDate.'=='.$durationText; exit;
			
		} else if($plan_duration=="Monthly") {
		
			$total_amount = $plan_amount;
				$nextBillDate = mktime(0,0,0, $payDateData[1]+1, $payDateData[2], $payDateData[0]);
				$durationText = "month";
		} else if($plan_duration=="Daily") {
			
			$total_amount = $plan_amount;
			$perMonth = " for 1 day";
			$nextBillDate = mktime(0,0,0, $payDateData[1], $payDateData[2]+1, $payDateData[0]);
			$durationText = "Day";
		}
				
      }
	 
	 ?>
    <div class="tab-pane fade" id="billing_plan" style="max-width:350px;">
	<div class="alert-success" style="text-align:center;">
			<div class="alert-success tag_confirm_msg" style="padding:5px;display:none;" id="act_success_msg"></div>
		</div>
      <section class="plan-list">
        <div class="dis-block plan"><?php echo (isset($memberPlanInfo['plan_name'])) ? $memberPlanInfo['plan_name'] : ""?></div> 
        <div class="price-div">
          <div class="plan-price">$<span class="dollar"><?php echo (isset($amountData[0])) ? $amountData[0]:"";?></span> .<?php echo (isset($amountData[1])) ? $amountData[1] : ""; ?><span class="interval">/<?php echo $perMonth;?></span></div>
        </div>
        <div class="dis-block plan-detail"><strong>$<?php echo number_format($total_amount,2);?> billed in full</strong>, once every <?php echo $durationText;?></div>
        <p class="dis-block muted"><strong>Next billing date: </strong><?php echo date('D. M d, Y', $nextBillDate); ?></p>
      </section>
    
      <section class="text-center" style="font-size:14px;">
        <a href="javascript:void(0);" class="text-red" id="btnAccountActivate">Deactivate my account</a>      
      </section>
    </div>
    <!-- Membership Plan END -->

    <!-- Payment Methods -->
    <div class="tab-pane fade" id="billing_payment">
	<div class="well-box-in">
	<div id="card_disp">
	   
<div class="alert-success" style="text-align:center; margin:10px;">
 <?php
if($this->session->flashdata('confirmation_message')) {
    echo '<div class="alert-success tag_confirm_msg" style="padding:5px;">'.$this->session->flashdata('confirmation_message').'</div>'; 
}
if($this->session->flashdata('delete_message')) {
    echo '<div class="alert-success tag_confirm_msg" style="padding:5px;">'.$this->session->flashdata('delete_message').'</div>'; 
}
if($this->session->flashdata('update_message')){
    echo '<div class="alert-success tag_confirm_msg" style="padding:5px;">'.$this->session->flashdata('update_message').'</div>'; 
} 
?>
</div>
      <h4 class="tab-heading">Change your stored credit cards information.</h4>
      <table class="table table-striped table-hover">
        <thead>
          <th>Payment Method</th>
          <th>Status</th>
          <th>Last Charged</th>
          <th>Actions</th>
        </thead>
        <tbody>
		<?php if(sizeof($cardInfo)>0) { 
			foreach($cardInfo as $key=>$value) {
				
				if($value->card_type=="Visa") {
					$payIcons = "fa fa-cc-visa fa-lg";
				} else if($value->card_type=="Mastercard") {
					$payIcons = "fa fa-cc-mastercard fa-lg";
				} else if($value->card_type=="Discover") {
					$payIcons = "fa fa-cc-discover fa-lg";
				} else if($value->card_type=="American Express") {
					$payIcons = "fa fa-cc-amex fa-lg";
				} else {
					$payIcons = "fa fa-credit-card fa-lg";
				}
				if(!empty($value->expire_month) && !empty($value->expire_year)) {
					$curentDate = date('m-Y');
					$cardExp = $value->expire_month.'-'.$value->expire_year;
					$cardStatus = ($curentDate < $cardExp) ? "Active" : "Expire";
				}
				if($value->charged==1) {
					$last_charged = date("d/m/Y",strtotime($value->created_at));
				} else {
					$last_charged = "-Not Used-";
				}

				$ccValue='XXXX-XXXX-XXXX-'.substr(base64_decode($value->card_number),-4);
		?>
          <tr>
            <td><i class="<?php echo $payIcons;?>" style="margin-right:5px;"></i> My Credit Card - <?php echo $ccValue;?></td>
            <td><?php echo $cardStatus;?></td>
            <td><?php echo $last_charged;?></td>
            <td style="width:200px;">
              <button class="btn" title="Update Payment Method" id="brnUpdate" onclick="updateCardInfo('<?php echo $value->id;?>');"><i class="fa fa-pencil-square-o"></i> Update</button>
              <button class="btn" title="Delete Payment Method" onclick="deleteCardInfo('<?php echo $value->id;?>');"><i class="fa fa-trash-o"></i> Delete</button>
            </td>
          </tr>
		 <?php } 
		 }
		 ?>
        </tbody>
      </table>
	
	  <div>&nbsp;</div>
	 <table class="table table-striped table-hover" id="newPaymentAdd" style="display:none;">
	  	<tr><th colspan="2">Add Card Number</th></tr>
		<tr>
			<td>Card Number</td>
			<td><input type="text" id="card_number" autocomplete="off"  placeholder="" maxlength="16" />
			<div id="error_card_number" style="display: none;" class="errUser">Please enter card number.</div>
		</tr>
		<tr>
			<td>Card Type</td>
			<td><select id="card_type"> 
			    	<option value="Visa">Visa</option>
					<option value="American Express">American Express</option>
					<option value="MasterCard">Master Card</option>
					<option value="Discover">Discover</option>
					<option value="JCB">JCB</option>
					<option value="Diners Club">Diners Club</option>
				</select>
		</tr>
		<tr>
			<td>Expiration Date</td>
			<td>
			 <select style="width:50px;text-align:center;" id="expire_month">
		<?php for($i=1; $i<=12; $i++) { 
			$i = ($i < 10)? "0".$i : $i;
		?>
			<option value="<?php echo $i;?>"><?php echo $i;?></option>
		<?php } ?>
		</select>
		<select  style="width:100px;text-align:center;"  id="expire_year">
			<?php for($year=2015; $year <=2025; $year++) { ?>
				<option value="<?php echo $year;?>"><?php echo $year;?></option>
			<?php } ?>
		</select>  
			 <div id="error_expire_month" style="display: none;margin-left: 0px;" class="errUser"></div>
			<div id="error_expire_year" style="display: none;margin-left: 0px;" class="errUser">Please enter expire year.</div>  
		</tr>
		<tr>
			<td>CVV Number</td>
			<td><input type="password" id="cvv_code" value="" style="width:50px;text-align:center;" maxlength="4" />
			<div id="error_cvv_code" style="display: none;" class="errUser">Please enter cvv code.</div>  
		</tr>
		<tr>
			<td></td>
			<td><div class="dis-block">
			<input type="hidden" id="card_id" value="" placeholder="" />
			<button class="btn" title="Add Payment Method" id="btnSavePayment">Save Payment</button></div>
		</tr>
	  </table>
	    </div>
      </div>
          <div class="dis-block"><button class="btn" title="Add Payment Method" id="btnAddPayment">Add Payment</button></div>
      </div>
    <!-- Payment Methods END -->
  
    <!-- Payment History -->
    <div class="tab-pane fade" id="billing_history"><div class="well-box-in">
      <h4 class="tab-heading">View your payment history.</h4>
      <table class="table table-striped table-hover">
        <thead>
          <th>Receipt #</th>
          <th>Details</th>
          <th>Date</th>
          <th>Amount</th>
        </thead>
        <tbody>
		<?php 

		if(sizeof($paymentInfo)>0) { 
				
				foreach($paymentInfo as $key=>$value) { 
					
					if(isset($value->amount)){
						 $amount = $value->amount/100 ;
					}
					if($value->payment_type=="membership"){
						$paymentDesc = "Membership charge $durationText";
					}
					if(isset($value->created_at)){
						 $created_at = date('d/m/Y',strtotime($value->created_at));
					}
		?> 	
          <tr>
            <td><a href="#"><?php echo (isset($value->receipt_number)) ? $value->receipt_number : "";?></a></td>
            <td><?php echo $paymentDesc;?></td>
            <td><?php echo $created_at;?></td>
            <td style="width:200px;">$<?php echo number_format($amount,2);?></td>
          </tr>
		<?php }
		}
		?>
		
         
        </tbody>
      </table>
    </div></div>
    <!-- Payment History END -->


<style type="text/css">
.plan-details {float:left;padding:0;width:100%;}
.plan-details .table .muted {text-align:right;font-weight:400;width:150px;}
.plan-details .table td {border:none;}
.plan-details .table {margin: 0 0 18px;}
@media (min-width: 320px) and (max-width: 480px){
.plan-box, .plan-details {width:100%;}
}
</style>
<script type="text/javascript" src="https://js.stripe.com/v1/"></script>

<script src="<?php echo base_url(); ?>public/assets/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
	
	$("#card_number").mask("9999999999999999", {placeholder:""});
	$("#cvv_code").mask("9999");
	
$(".tag_confirm_msg").show().delay(5000).fadeOut();
$("#btnAccountActivate").live('click', function(){
      
		$.ajax({
			type: "GET",
			url: '<?php echo base_url(); ?>settings/ajax_member_status_update',
			success: function(response) {
				if(response==1) {
					$("#act_success_msg").text('Your membership has been Deactivated.').show('slow');
				}
				if(response==0) {
					$("#act_success_msg").text('Your membership has not Deactivated. Try next time.').show('slow');
				}
			},
			complete: function() {
				window.location.href="<?php echo base_url(); ?>account/login";
			}
		});
	
});
$("#btnAddPayment").live('click', function(){
	
	$('#card_id').val('');
	$("#newPaymentAdd").show('slow');
	$("#btnAddPayment").hide();
});


$("#btnSavePayment").live('click', function(){
	
		$("#card_number").unmask();
	    $("#cvv_code").unmask();
		var err = false;
		var card_number = $('#card_number').val();
		var card_type = $('#card_type').val();
		var cvv_code = $('#cvv_code').val();
		var expire_month = $('#expire_month').val();
		var expire_year = $('#expire_year').val();
		var card_id = $('#card_id').val();
		
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
		/*if(cvv_code=="" || cvv_code==null) {
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
		*/
		if(expire_month=="" || expire_month==null) {
			$('#expire_month').addClass("redborder");
			$('#error_expire_month').text('Please enter expire month.').show();
			err=true;
		} else {
			$('#expire_month').removeClass("redborder");
			$('#error_expire_month').text('').hide();
		}
		if(expire_year=="" || expire_year==null) {
			$('#expire_year').addClass("redborder");
			$('#error_expire_year').text('Please enter expire year.').show();
			err=true;
		} else {
			$('#expire_year').removeClass("redborder");
			$('#error_expire_year').text('').hide();
		}
		if(expire_month!="" && expire_year!="") {
		if(!Stripe.card.validateExpiry(expire_month, expire_year)) {
			$('#expire_month').addClass("redborder");
			$('#error_expire_month').text('Please enter valid expire month and year.').show();
			err=true;
		} else {
			$('#expire_month').removeClass("redborder");
			$('#error_expire_month').text('').hide();
		}
		}
		if(err==false) {
			
			$.ajax({
			url: "<?php echo base_url() ?>settings/ajax_card_information",
			data: {'card_number': card_number, 'expire_month': expire_month, 'expire_year': expire_year, 'cvv_code': cvv_code,'card_type':card_type, 'card_id': card_id},
			type: 'POST',
			success: function(response) {
				if(response.status=="add") {
					//$("#card_success_msg").text('Card information has been added successfully.').show('slow');
				}
				if(response.status==true) {
					//$("#card_success_msg").text('Card information has been updated successfully.').show('slow');
				}
			},
			complete: function() {
				var cardInfoUrl = "<?php echo base_url(); ?>settings" + " #card_disp";
                $('#card_disp').load(cardInfoUrl); 
				$("#btnAddPayment").show();	 
				
			}
		});
		}
});
function updateCardInfo(card_id) {
	
	if(card_id!="" && card_id!=null) { 
	
	$.ajax({
			url: "<?php echo base_url() ?>settings/get_card_information",
			data: {'card_id': card_id},
			type: 'POST',
			success: function(res) {
				
				var data = JSON.parse(res);
				$('#card_number').val(data.card_number);
				$('#cvv_code').val(data.cvv_code);
				$('#expire_month').val(data.expire_month);
				$('#expire_year').val(data.expire_year);
				$('#card_type').val(data.card_type);
				$('#card_id').val(data.id)
				
			},
			complete: function() {
				$("#newPaymentAdd").show('slow');
				$("#btnAddPayment").hide();
				$("#card_number").mask("9999999999999999");
				$("#cvv_code").mask("9999");
				
			}
		});
	}
}
function deleteCardInfo(card_id) {

	var conf = confirm('Do you really want to delete this card information.');
	if(conf==false) {
		return false;
	} else {
		
		$.ajax({
			url: "<?php echo base_url() ?>settings/delete_card_information",
			data: {'card_id': card_id},
			type: 'POST',
			success: function(res) {
				if(res) { 
					var cardInfoUrl = "<?php echo base_url(); ?>settings" + " #card_disp";
                	$('#card_disp').load(cardInfoUrl);  
				}
				
			},
			complete: function() {
			
			}
		});
	}
	
}
</script>
<style>
.errUser { color:#CC0000; text-align:left;margin:5px;}

.redborder { 
	border: 1px solid #DC3400 !important;
}
.error_msg{
    color: #DC3400;
}
.alert {
	position: relative;
}
</style>