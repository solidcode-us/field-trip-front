<h4 class="menu-title" style="margin-top:20px;">Create a Password</h4>  
<ul class="menu-list no-icons input-fields">
  <li>
    <span class="value" style="width:100%;"><input type="password" id="new_password" placeholder="Type your password">
	<div id="error_new_password" style="display: none;" class="errUser">Please enter password.</div>
	</span>
  </li>
  <li>
    <span class="value" style="width:100%;"><input type="password" id="confirm_password" placeholder="Re-Type your password">
	<div id="error_confirm_password" style="display: none;" class="errUser">Please enter password.</div>
	</span>
  </li>
</ul>

<script type="text/javascript">

//$('.step-6-btn').click(function() {
		//$(".steps-block").hide();
		//$(".step-6").fadeIn();
//	});

$("#btnSignUpDone").live('click', function(){
   
	var new_password = $("#new_password").val();
	var confirm_password = $("#confirm_password").val();
	var err = false;
	
	if(new_password=="") {
		
		$('#new_password').addClass("redborder");
		$('#error_new_password').show();
		err=true;
	} else {

		$('#new_password').removeClass("redborder");
		$('#error_new_password').hide();
	} 
	if(confirm_password=="" ) {

		$('#confirm_password').addClass("redborder");
		$('#error_confirm_password').text("Please enter your confirm password.").show();
		err=true;
	} else if(new_password!=confirm_password) {

		$('#confirm_password').addClass("redborder");
		$('#error_confirm_password').text("Your confirm password don't match.").show();
		err=true;
	} else {

		$('#confirm_password').removeClass("redborder");
		$('#error_confirm_password').text("").hide();
	} 
	if(err==false) {
		if(member_id!="" && member_id!=0) {
			
			$.ajax({
				type: "post",
				url: '<?php echo base_url(); ?>account/ajax_member_set_password',
				data: {'new_password': new_password}, 
				dataType: 'json',
				success: function(response) {
			
					if(response==1) {
						
					}
					if(response==0) {
						return false;
					}
				},
				complete: function() {
					window.location.href="<?php echo base_url(); ?>user/profile";
				}
				
			});
		}
	}
	return false;
		
});

</script>