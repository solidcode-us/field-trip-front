<style> .errUser { color:#CC0000 !important; text-align:left;margin:5px; text-align:left;} 
.redborder {border: 1px solid #DC3400 !important;}
</style>
<div class="container"><div class="full-page-wrap"><div class="signup-div"><!-- MIDDLE AREA -->
            <h3 class="text-center"  style="margin-top:20px">Reset Passsword</h3>
             <?php if ($this->session->flashdata('message') != '') {
                echo '<div id="flash_alert" class="alert">' . $this->session->flashdata('message') . '</div>';
            } ?>
            <div class="form-horizontal" style="margin:25px 0 0 220px;">
                <div id="alert_msg" class="alert alert-error" style="alignment-adjust: middle; display: none; text-align: justify;"></div>
                <?php if(!empty($message)) { ?>
                <div id="infoMessage" class="alert alert-error"><?php echo $message;?></div>
                <?php } ?>
				 <form id="reset_password_form" action=""  name="reset_password_form" method="post" class="form-horizontal" onsubmit="return false;"> 
                
                <?php echo form_input($user_id);?>
                <?php echo form_hidden($csrf); ?>
                <div class="control-group">
                    <label class="control-label" for="new_password">New Password: <span title="This field is required." class="text-error">*</span></label>
                    <div class="controls">
                        <input type="password" value="" name="new" id= "new" class="form-control" style="width:280px">
						<div id="error_new" style="display: none;" class="errUser">Please enter new password.</div>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="new_password">Confirm Password: <span title="This field is required." class="text-error">*</span></label>
                    <div class="controls">
                        <input type="password" value="" name="new_confirm" id= "new_confirm" class="form-control" style="width:280px">
						<div id="error_new_confirm" style="display: none;" class="errUser">Please enter confirm password.</div>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <?php ///echo form_submit('submit', 'Reset', 'class="btn btn-lg btn-blue"'); ?> 
                        <a href="javascript:void(0);" class="btn btn-black" id="reset_password_btn">Reset Password</a>
                    </div>
                </div>

<?php echo form_close();?>
                
            </div>  

            <style>
			
                .full-page-wrap {border:none;}
                @media (min-width: 320px) and (max-width: 599px){
                    body, .full-page-wrap {background-color:#323943;}
                }
            </style>

        </div></div></div><!-- MIDDLE AREA END-->
<script type="text/javascript">
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
                window.location="<?php echo base_url(); ?>admin";
            }
        }); 
        return false;
    });
</script>