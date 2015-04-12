<!-- HEADER -->
<?php $this->load->view('partials/header_ax.php'); ?>
<!-- HEADER END-->
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


.menu-list {background-color: transparent;border:none;border-radius:0;}
.menu-list > li + li {border-top: 1px solid #666;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {color: #FFF;}
</style>
<!-- Wrap -->
<div class="container login">
  <div class="ft-logo"><img src="<?php echo base_url(); ?>public/assets/images/logo.png"/></div>
  <form id="frmLogin" method="post" onsubmit="return false;">
  <div style="display: none;" class="alert alert-error" id="alert_msg"></div>
  <ul class="menu-list no-icons input-fields">
    <li>
      <span class="value" style="width:100%;"><input type="email" id="email"  placeholder="Email">
	   <div id="error_email" style="display: none;" class="errUser">Please enter your email.</div>
	  </span>
    </li>
    <li>
      <span class="value" style="width:100%;"><input type="password" id="password" placeholder="Password">
	   <div id="error_password" style="display: none;" class="errUser">Please enter your password.</div>
	   </span>
    </li>
  </ul>
  <section class="forgot"><a href="<?php echo base_url(); ?>account/forgot_password">Forgot password?</a></section>
  <section class="login-box">
    <a href="javascript:void();" id="brnLogin" class="btn btn-lg btn-blue">Log in</a>

    <section class="singup-box">Not a member yet? <a href="<?php echo base_url(); ?>account/signup" class="btn btn-lg btn-o">Register</a></section>
  </section>
  </form>
</div><!-- Wrap End--> 



<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->

<script type="text/javascript">

$("#brnLogin").click(function(){
      
	var email = $('#email').val();
	var password = $('#password').val();
	var err =false;
	
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
	if(password=="" || password==null ) {
	
		$('#password').addClass("redborder");
		$('#error_password').show();
		err=true;
	}  else {
		$('#password').removeClass("redborder");
		$('#error_password').hide();
	}
	if(err==false) {
		
		$.ajax({
			type: "post",
			url: '<?php echo base_url(); ?>account/login',
			data: {'email': email, 'password': password},
			dataType: 'json',
			success: function(response) {
				if (response.status == '0')
				{
					$("#alert_msg").fadeIn('slow');
					$("#alert_msg").html(response.valid_errors);
					return false;
				}
				if (response.status == '1')
				{
					$("#alert_msg").html(response.message);
					window.location = '<?php echo base_url(); ?>settings'; 
					return false;
				}
			}
		});
	}
	return false;
		
});

</script>