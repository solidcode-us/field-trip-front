<style> .errUser { color:#CC0000 !important; text-align:left;margin-top:5px;margin-left: 67px; text-align:left;} 
.redborder {border: 1px solid #DC3400 !important;}
</style>
<div class="container"><div class="full-page-wrap"><div class="signup-div"><!-- MIDDLE AREA -->

            <h3 class="text-center"  style="margin-top:20px">Forgot Passsword</h3>

            <div class="alert alert-success" id="confirm_message" style="display: none"></div>
            <div class="alert alert-error" id="errors" style="display: none"></div>

            <div class="form-horizontal text-left" style="margin:25px 0 0 315px;width:450px">
                <form id="forgot_password_form" action=""  name="forgot_password_form" method="post" class="form-horizontal" onsubmit="return false;"> 
				<?php //echo form_open("",array('id'=>'forgot_password_form')); ?>
                 <?php if ($this->session->flashdata('message') != '') {
                echo '<div id="flash_alert" class="alert">' . $this->session->flashdata('message') . '</div>';
            } ?>
                <div id="alert_msg" class="alert-error" style="alignment-adjust: middle;text-align: justify;"></div> 
                <fieldset>
                    <legend>Enter your email address to recieve a new password by email</legend>
                <div class="form-group" style="margin-top:15px">
                    <label class="col-md-3 control-label" style="width:70px" for="group_name">Email: <span title="This field is required." class="text-error">*</span>&nbsp;&nbsp;</label>      
                    <div class="col-md-8"><input type="text" value="" name="email" id= "email" class="form-control" style="width:280px"></div>                
                   <div id="error_email" style="display: none;" class="errUser"></div>
                </div>


                 <div class="form-group" style="margin-top:15px">
                <label class="col-md-3  control-label" style="width:70px"></label>
                <div class="col-md-8" style="float:left">                    
                    <a href="javascript:void(0);" class="btn btn-black" id="forgot_password_btn">Submit</a>
                    <a href="/login" class="btn" id="forgot_password_btn">Cancel</a>
                </div>
            </div> 
                 </fieldset>	
                
                        <?php echo form_close(); ?>
            </div>  

            <style>
                .full-page-wrap {border:none;}
                @media (min-width: 320px) and (max-width: 599px){
                    body, .full-page-wrap {background-color:#323943;}
                }
            </style>

        </div></div></div><!-- MIDDLE AREA END-->
<script type="text/javascript">
 $("#forgot_password_btn").click(function(){
     
	   var email = $('#email').val();  
  	   var err =false;
	   if(email== "" ) {
			$('#email').addClass("redborder");
			$('#error_email').show().text('Please enter email id.');;
			err=true;
	   } else if(!checkemail(email)) {
	   		$('#email').addClass("redborder");
			$('#error_email').show().text('Please enter valid email id.');
			err=true;
	   }else {
			$('#email').removeClass("redborder");
			$('#error_email').hide().text('');
			err=false;
	   } 
	   if(err==true) {
			return false;
	   }
	  var data = $("#forgot_password_form").serializeArray();
      var url = $("#forgot_password_form").attr('action');
      $.ajax({
            type: "POST",
            data : data,
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
                    $("#alert_msg").html(response.valid_errors);
                    return false;
                }
                if (response.status == '1')
                {
                    $("#alert_msg").hide();
                    $("#alert_msg").html(''); 
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
function checkemail(email){
    
    var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    if (filter.test(email))
    	return true
    else {
    	return false;
    }
}
</script>