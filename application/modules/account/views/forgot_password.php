<!-- HEADER -->
<?php $this->load->view('partials/header_ax.php'); ?>
<!-- HEADER END-->
<style>
.errUser { color:#CC0000; text-align:left;margin:5px;}
.alert-success {
    
    border-color: #d6e9c6;
    color: #468847;
}
.redborder { 
	border: 1px solid #DC3400 !important;
  padding: 5px !important;
}
.error_msg{ 
    color: #DC3400;
}
.alert {
	position: relative;
} 

legend{width: 150%;color: #ccc;margin-left: -70px;}
.menu-list {background-color: transparent;border:none;border-radius:0;}
.menu-list > li + li {border-top: 1px solid #666;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {color: #FFF;}
</style>
<!-- Wrap -->
<div class="container login">
  <div class="ft-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>public/assets/images/logo.png"/></a></div>
  <legend>Enter your email address to recieve a new password by email</legend>
  <form id="forgot_password_form" action=""  name="forgot_password_form" method="post" class="form-horizontal" onsubmit="return false;"> 
   <div style="display: none;" class="alert alert-error" id="alert_msg"></div>

  <ul class="menu-list no-icons input-fields">
    <li>
      <span class="value" style="width:100%;"><input type="email" id="email"  placeholder="Email" value="">
	   <div id="error_email" style="display: none;" class="errUser">Please enter your email.</div>
	  </span>
    </li>
    
  </ul>
  <section class="login-box">
    <a href="javascript:void();" id="forgot_password_btn" class="btn btn-lg btn-blue">Submit</a><a href="<?php echo base_url(); ?>account/login" class="btn btn-lg" id="forgot_password_btn">Cancel</a>

  </section>
  
  </form>
</div><!-- Wrap End--> 




<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->

<script type="text/javascript">
 $("#forgot_password_btn").click(function(){
     
	   var email = $('#email').val();  
  	   var err =false;
	   if(email== "" ) {
			$('#email').addClass("redborder");
      $('#email').focus()
			$('#error_email').show().text('Please enter your email address.');;
			err=true;
	   } else if(!checkemail(email)) {
	   		$('#email').addClass("redborder");
        $('#email').focus()
			$('#error_email').show().text('Please enter valid email address.');
			err=true;
	   }else {
			$('#email').removeClass("redborder");
			$('#error_email').hide().text('');
			err=false;
	   } 
	   if(err==true) {
			return false;
	   }
	  //var data = $("#forgot_password_form").serializeArray();
	 // alert(data);
      var url = $("#forgot_password_form").attr('action'); 
      $.ajax({
            type: "POST",
            data : {'email':email},
            url: url,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                    $("#flash_alert").hide();
                    $("#alert_msg").hide();
                    $("#alert_msg").html('');
                },
            success: function(response) {
                
                if (response.status == '0')
                { 
                    $("#alert_msg").fadeIn('slow');
                    $("#alert_msg").text("Email doesn't exits.");
                    return false;
                }
                if (response.status == '1')
                {
                    
                    $("#alert_msg").removeClass('alert-error')
                    $("#alert_msg").addClass('alert-success');
                    $("#alert_msg").html('We have sent a password reset link to the email on record, please check.').show();

                    $('.signup-div').html('<div id="msg_bx" style="margin: 10px 10px 10px 140px; padding: 10px; clear: both; color: rgb(136, 136, 136); font-size: 14px; text-align: center !important;"><div class="alert-success " style="box-shadow: 0px 1px 1px #999;padding: 20px; border: 1px solid rgb(255, 255, 255) ! important; font-weight: 500; color: rgb(136, 136, 136) ! important; width: 565px;">We have sent a password reset link to the email on record, please check.</div></div>');
                   // window.location.href = response.redirect_url;
                    return false;
                }
            },
            complete: function() {
               
            }
        }); 
        return false;
    });
</script>