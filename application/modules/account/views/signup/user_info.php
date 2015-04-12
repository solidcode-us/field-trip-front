<?php
	$name = (isset($userData[0]->name)) ? $userData[0]->name : "";
	$email = (isset($userData[0]->email)) ? $userData[0]->email : "";
	$phone = (isset($userData[0]->phone)) ? $userData[0]->phone : "";
?>
<h4 class="menu-title" style="margin-top:20px;">Your Information</h4>  
<div style="display: none;" class="alert alert-error" id="alert_msg"></div>
<ul class="menu-list no-icons input-fields">
  <li>
    <span class="title">Name</span> 
	<span class="value">
	<input type="text" placeholder="Jane Tripper" id="name" autocomplete="off" value="<?php echo $name;?>">
	<div id="error_name" style="display: none;" class="errUser">Please enter name.</div>
	</span>
  </li>
  <li>
    <span class="title">Birthday</span> <span class="value">
		<?php
		$monthName = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		?>
		<select style="width: 85px;" name="dob_month" id="dob_month">
			<option value="">Month</option>
			<?php for($m=0; $m <12; $m++) {
				$mn = ($m < 10) ? "0".$m : $m;;
			?>
				<option value="<?php echo $mn+1;?>"><?php echo $monthName[$m];?></option>
			<?php }?>
		</select>
		
		<select style="width: auto;margin-right:5px;" name="dob_date" id="dob_date">
			<option value="">Date</option>
	   <?php for($d=1; $d <= 31; $d++) {
				$d = ($d < 10) ? "0".$d : $d; 
		?>
			<option value="<?php echo $d;?>"><?php echo $d;?></option>
		<?php }?>
		</select>
		
		<select style="width: auto;padding-left:30px;" name="dob_year" id="dob_year">
			<option value="">Year</option>
	 <?php  for($y=2015;  $y > 1940; $y--) {?>
			<option value="<?php echo $y;?>"><?php echo $y;?></option>
		<?php }?>
		</select>
	</span>
		<div id="error_dob_month" style="display: none;float: left;margin-left: 150px;text-align: right;width: 170px;" class="errUser">Please select month.</div>
		<div id="error_dob_date" style="display: none;padding-left:240px;" class="errUser">Please select date.</div>
		<div id="error_dob_year" style="display: none;padding-left:290px;" class="errUser">Please select year.</div>	
  </li>
  <li>
    <span class="title">Gender</span>
    <span class="value">
      <label class="radio inline"><input type="radio" name="gender" id="gender" value="female">Female</label>
      <label class="radio inline"><input type="radio" name="gender" id="gender" checked="checked" value="male">Male</label>
	  <div id="error_gender" style="display: none;" class="errUser">Please check your gender.</div>
    </span>
  </li>
</ul>

<h4 class="menu-title">Contact info</h4>
<ul class="menu-list no-icons input-fields" id="member_contact">
  <li>
    <span class="title">Email</span> 
	<span class="value">
		<input type="email" required=required placeholder="example@field-trip.com" id="email" autocomplete="off" value="<?php echo $email;?>">
		 <div id="error_email" style="display: none;" class="errUser">Please enter email address.</div>
	</span>
  </li>
  <li>
    <span class="title">Phone</span> <span class="value"><input type="tel" placeholder="(305) 123-1234" id="phone" value="<?php echo $phone;?>"></span>
  </li>
  <li>
    <span class="title">Address</span> <span class="value"><textarea type="text" placeholder="123 Main Street, Miami, FL 33133" id="address"></textarea>
	<div id="error_address" style="display: none;" class="errUser">Please enter address.</div>
	<input type="hidden" id="member_id" value="" />
	</span>
  </li>
</ul>

<script type="text/javascript">
	
$(".step-2-btn").live('click', function(){
      
	var name = $('#name').val();
	
	var dob_date = $('#dob_date').val();
	var dob_month = $('#dob_month').val();
	var dob_year = $('#dob_year').val();
	$('input[name="gender"]:checked').each(function() {
		gender = $(this).val();
	});
	
	var email = $('#email').val();
	var phone= $('#phone').val();
	var address = $('#address').val();
	
	var err =false;
	if(name=="" || name==null ) {
		$('#name').addClass("redborder");
		$('#error_name').show();
		err=true;
	}  else {
		$('#name').removeClass("redborder");
		$('#error_name').hide();
	}
	if(dob_date!="" && dob_month!="" && dob_year!="") {
		// if(dob_date=="") {
		// 	$('#dob_date').addClass("redborder");
		// 	$('#error_dob_date').show();
		// 	err=true;
		// } else {
		// 	$('#dob_date').removeClass("redborder");
		// 	$('#error_dob_date').hide();
		// }
		// if(dob_month == "" ) {
		// 	$('#dob_month').addClass("redborder");
		// 	$('#error_dob_month').show();
		// 	err=true;
		// } else {
		// 	$('#dob_month').removeClass("redborder");
		// 	$('#error_dob_month').hide();
		// }
		// if(dob_year == "" ) {
		// 	$('#dob_year').addClass("redborder");
		// 	$('#error_dob_year').show();
		// 	err=true;
		// } else {
		// 	$('#dob_year').removeClass("redborder");
		// 	$('#error_dob_year').hide();
		// }
		var dob =  dob_year+'-'+dob_month+'-'+dob_date;   
	}else{
		var dob = "";
	}
	if(email=="" || email==null ) {
	
		$('#email').addClass("redborder");
		$('#error_email').show();
		err=true;
	} else if(!checkemail(email)) {
	
		$('#email').addClass("redborder");
		$('#error_email').text('Please enter valid email.').show();
		err=true;
	} else {
		$('#email').removeClass("redborder");
		$('#error_email').hide();
	}
	if(address=="" || address==null ) {
		$('#address').addClass("redborder");
		$('#error_address').show();
		err=true;
	}  else {
		$('#address').removeClass("redborder");
		$('#error_address').hide();
	}
	if(err==false) {
		
		$.ajax({
			type: "post",
			url: '<?php echo base_url(); ?>account/member_registration',
			data: {'name': name, 'dob': dob, 'gender': gender, 'email': email,'phone': phone, 'address': address},
			dataType: 'json',
			success: function(response) {
				
				$("#welcomeUser").text('Welcome, '+name+'!');
			},
			complete: function() {
				$(".steps-block").hide();
				$(".step-2").fadeIn();
			}
		});
	}
	return false;
		
});

	$("#email").blur(function() {
            //remove all the class add the messagebox classes and start fading
            $("#error_email").removeClass('errUser').addClass('messagebox').text('Checking...').fadeIn("slow");
            //check the username exists or not from ajax
            var email = $(this).val();
			if(email=="" || email==null) {

				$("#error_email").fadeTo(200, 0.1, function() { 
					$(this).removeClass('alert-success').addClass('errUser').html('Please enter your email id.').addClass('messageboxerror').fadeTo(900, 1);
				});
				return false;
			}
			if(!checkemail(email)) {

				$("#error_email").fadeTo(200, 0.1, function() {  //start fading the messagebox
					$(this).removeClass('alert-success').addClass('errUser').html('Sorry! Invalid Email !').addClass('messageboxerror').fadeTo(900, 1);
				});
				return false;
			}
            $.ajax({
                url: "<?php echo base_url() ?>account/check_email_availability",
                data: {'email': email},
                type: 'POST',
                success: function(response) {

                    if (response == '0') {
                        $("#error_email").fadeTo(200, 0.1, function() {  //start fading the messagebox
                            
							//add message and change the class of the box and start fading
                            $(this).removeClass('alert-success').addClass('errUser').html('Email Already exists.').addClass('messageboxerror').fadeTo(900, 1);
							return false;
                        });

                    } else if (response == '1') {

                        $("#error_email").fadeTo(200, 0.1, function() {  //start fading the messagebox
                            //add message and change the class of the box and start fading
                            $(this).removeClass('errUser').addClass('alert-success').html('Email is available.').addClass('messageboxok').fadeTo(900, 1);
                        });
                    } else {
                        alert("Some error occured! Check Console");
                    }
                }
            });
        });

</script>
<style>
.errUser { color:#CC0000; text-align:left;margin:5px;}
.alert-success {
    background-color: #fff ! important;
    border-color: #d6e9c6;
    color: #468847;
}
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