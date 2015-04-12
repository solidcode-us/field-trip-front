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


.menu-list {background-color: transparent;border:none;border-radius:0;}
.menu-list > li + li {border-top: 1px solid #666;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {color: #FFF;}
</style>
<!-- Wrap -->
<div class="container login">
  <div class="ft-logo"><img src="<?php echo base_url(); ?>public/assets/images/logo.png"/></div>
  <form id="reset_password_form" action=""  name="reset_password_form" method="post" class="form-horizontal" onsubmit="return false;"> 
   <div style="display: none;" class="alert alert-error" id="alert_msg"></div>
  <ul class="menu-list no-icons input-fields">
    <li>
      <span class="value" style="width:100%;"><input type="password" name="new" id= "new"  placeholder="New Password">
	  <div id="error_new" style="display: none;" class="errUser">Please enter new password.</div>
	  </span>
    </li>
     <li>
      <span class="value" style="width:100%;"><input type="password" name="new_confirm" id= "new_confirm"  placeholder="Comfirm Password">
	  <div id="error_new_confirm" style="display: none;" class="errUser">Please enter confirm password.</div>
	  </span>
    </li>
  </ul>
  
  <section class="login-box">
    <a href="javascript:void();" id="reset_password_btn" class="btn btn-lg btn-blue">Reset Password</a>
 </section>
  
  </form>
</div><!-- Wrap End--> 




<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->


<script type="text/javascript">
$(document).ready(function() {
 $("#reset_password_btn").click(function(){
 	 
  var new_password = $('#new').val(); 
  var confirm_password = $('#new_confirm').val();  
  var err =false;
 
   if(new_password== "" ) {
        $('#new').addClass("redborder");
        $('#error_new').show();
      	err=true;
   } else {
   	 	$('#new').removeClass("redborder");
        $('#error_new').hide();
		err=false;
   } 
   if(confirm_password== "" ) {
        $('#new_confirm').addClass("redborder");
        $('#error_new_confirm').show();
      	err=true;
   } else if(new_password!=confirm_password) {
		$('#new_confirm').addClass("redborder");
		$('#error_new_confirm').text("Your confirm password don't match.").show();
		err=true;
	} else {
		$('#new_confirm').removeClass("redborder");
		$('#error_new_confirm').text("").hide();
	}  
  if(err==true){
  		return false;
  }
      var data = $("#reset_password_form").serializeArray();
      var url = $("#reset_password_form").attr('action');
      $.ajax({
            type: "POST",
            data : data,
            url: url,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                    $("#alert_msg").html('');
                },
            success: function(response) {
             
                if (response.status == '0')
                {
                   window.location="<?php echo base_url(); ?>account/login";
                  
                }
                if (response.status == '1')
                {
                    //$("#alert_msg").hide();
                    $("#alert_msg").fadeIn('slow');
                    $("#alert_msg").html(response.message);
                    window.location.href = response.redirect_url;
                    return false;
                }
                if (response.status == '2')
                {
                     window.location.href = response.redirect_url;   
                    return false;
                }

            },
            complete: function() {
                window.location="<?php echo base_url(); ?>account/offers";
            }
        }); 
        return false;
    });
 });
</script>