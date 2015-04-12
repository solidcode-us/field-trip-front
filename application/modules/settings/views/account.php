 <?php if(!empty($userInfo) && isset($userInfo['name'])) {
 	  	$names =  explode(' ', $userInfo['name']);
	   }
	  	 $name1 =  (isset($names[0])) ? $names[0] : "";
		 $name2 =  (isset($names[1])) ? $names[1] : "";
		 $name3 =  (isset($names[0]) && isset($names[1])) ? $names[0].' '.$names[1] : "";
	 
 ?> 
      <!-- Account -->
      <div class="tab-pane fade" id="account_1">
	   <form class="form-horizontal" id="frmActUpdate" method="post" onclick="return false;">
	  <div class="well-box-in">
	  <div class="alert-success" style="text-align:center;">
			<div class="alert-success tag_confirm_msg" style="padding:5px;display:none;" id="act_success_msg"></div>
		</div>
        <h4 class="tab-heading">Change your basic account and language settings.</h4>
       
          <div class="control-group">
            <label for="fname" class="control-label">Name</label>
            <div class="controls">
              <input type="text" value="<?php echo $name1;?>" id="first_name" style="border-bottom-right-radius:0;border-top-right-radius:0;float:left;width:150px;">
              <input type="text" value="<?php echo $name2;?>" style="border-bottom-left-radius:0;border-left:medium none;border-top-left-radius:0;width:150px;" id="last_name">
              <span class="help-block">Enter your real name. <a href="#name_learn_more" role="button" data-toggle="modal">Learn More</a></span>
            </div>
          </div>
  
          <div class="control-group">
            <label for="email" class="control-label">Email</label>
            <div class="controls">
              <input type="email" value="<?php if(isset($userInfo['email'])) { echo $userInfo['email']; }?>" id="email">
              <span class="help-block">Email will not be publicly displayed.</span>
            </div>
          </div>
  
          <div class="control-group">
            <label for="phone" class="control-label">Phone number</label>
            <div class="controls">
              <input type="text" value="<?php if(isset($userInfo['phone'])) { echo $userInfo['phone']; }?>" id="phone">
              <span class="help-block">Phone number will not be publicly displayed.</span>
            </div>
          </div>
  
          <div class="control-group">
            <label for="language" class="control-label">Language</label>
            <div class="controls">
              <select id="language">
			  	<option value="english" <?php if(isset($userInfo['language']) && $userInfo['language']=="english") { echo 'selected="selected"'; }?>>English</option>
				<option value="spanish" <?php if(isset($userInfo['language']) && $userInfo['language']=="spanish") { echo 'selected="selected"'; }?>>Spanish</option>
				<option value="french" <?php if(isset($userInfo['language']) && $userInfo['language']=="french") { echo 'selected="selected"'; }?>>French</option>
			</select>
            </div>
          </div>
      </div>
          <div class="dis-block"><button class="btn" id="btnSaveAccount">Save Changes</button></div>
	    </form>
      </div>
      <!-- Account END -->
  
      <!-- Password -->
      <div class="tab-pane fade" id="account_2">
	  <form class="form-horizontal" id="fromAccountPassword" method="post" onsubmit="return false;">
	  <div class="well-box-in">
	  <div class="alert-success" style="text-align:center;">
			<div class="alert-success tag_confirm_msg" style="padding:5px;display:none;" id="pass_success_msg">	
	  </div>
	  
		</div>
        <h4 class="tab-heading">Change your password or recover your current one.</h4>
        
          <div class="control-group">
            <label for="currentPassword" class="control-label">Current Password</label>
            <div class="controls">
              <input type="password" id="currentPassword" autocomplete="off">
              <div id="error_currentPassword" style="display: none;" class="errUser">Please enter current password.</div>
			  <span class="help-block"><a href="#">Forgot your password?</a></span>
            </div>
          </div>
        
          <div class="control-group">
            <label for="newPassword" class="control-label">New Password</label>
            <div class="controls">
              <input type="password" id="newPassword" value="">
			  <div id="error_newPassword" style="display: none;" class="errUser">Please enter new password.</div>
            </div>
          </div>
        
          <div class="control-group">
            <label for="verifyPassword" class="control-label">Verify Password</label>
            <div class="controls">
              <input type="password" id="verifyPassword" value="">
			  <div id="error_verifyPassword" style="display: none;" class="errUser">Please enter verify password.</div>
            </div>
          </div>
        </form>
      </div>
      <div class="dis-block"><button class="btn" id="btnChangePassword">Save Changes</button></div>
	 </form>
      </div>
      <!-- Password END -->
  
      <!-- Notifications -->
      <div class="tab-pane fade" id="account_3"></div>
      <!-- Notifications END -->
  
      <!-- Privacy -->
      <div class="tab-pane fade" id="account_4">
	  <form class="form-horizontal" id="frmPrivacy" method="post" onsubmit="return false;">
	  <div class="well-box-in">
	   	<div class="alert-success" style="text-align:center;">
			<div class="alert-success tag_confirm_msg" style="padding:5px;display:none;" id="privacy_msg"></div>
		</div>
        <h4 class="tab-heading">Change your security and privacy settings.</h4>
        
        <h4><strong>Profile</strong></h4>
  
          <div class="control-group">
            <label class="control-label">Name display</label>
            <div class="controls">
			
              <select id="display_name">
			  <?php if(!empty($name1)) { ?>
                <option value="<?php echo $name1;?>"><?php echo $name1;?></option>
			  <?php }  if(!empty($name2)) { ?>
                <option value="<?php echo $name2;?>"><?php echo $name2;?></option>
				<?php }  if(!empty($name3)) { ?>
                <option value="<?php echo $name3;?>"><?php echo $name3;?></option>
				<?php } ?>
              </select>
            </div>
          </div>
  
          <div class="control-group" style="margin:0 0 5px;">
            <div class="controls muted">Select who are allowed to see things on your profile</div>
          </div>
  
          <div class="control-group">
            <label class="control-label">Travelogue</label>
            <div class="controls">
              <label class="checkbox inline"><input type="checkbox" name="travelogue" id="travelogue1" value="family"> Family</label>
              <label class="checkbox inline"><input type="checkbox" name="travelogue"  id="travelogue2" value="friends"> Friends</label>
              <label class="checkbox inline"><input type="checkbox" name="travelogue"  id="travelogue3" value="colleagues"> Colleagues</label>
            </div>
          </div>
  
          <div class="control-group">
            <label class="control-label">Interests</label>
            <div class="controls">
              <label class="checkbox inline"><input type="checkbox" name="interests" id="interests1"  value="family"> Family</label>
              <label class="checkbox inline"><input type="checkbox" name="interests" id="interests2"  value="friends"> Friends</label>
              <label class="checkbox inline"><input type="checkbox" name="interests" id="interests3"  value="colleagues"> Colleagues</label>
            </div>
          </div>
  
          <div class="control-group">
            <label class="control-label">Connections</label>
            <div class="controls">
              <label class="checkbox inline"><input type="checkbox"  name="connections" id="connections1"  value="family"> Family</label>
              <label class="checkbox inline"><input type="checkbox" name="connections" id="connections2"  value="friends"> Friends</label>
              <label class="checkbox inline"><input type="checkbox" name="connections" id="connections3"  value="colleagues"> Colleagues</label>
            </div>
          </div>
  
          <div class="control-group">
            <label class="control-label">Photos & Videos</label>
            <div class="controls">
              <label class="checkbox inline"><input type="checkbox"  name="photo_videos" id="photo_videos1"  value="family"> Family</label>
              <label class="checkbox inline"><input type="checkbox" name="photo_videos" id="photo_videos2"  value="friends"> Friends</label>
              <label class="checkbox inline"><input type="checkbox" name="photo_videos" id="photo_videos3"  value="colleagues"> Colleagues</label>
            </div>
          </div>
      
        
        <hr>
        <table class="table table-noborder" style="margin:0;">
          <tr>
            <td style="width:550px;">
              <h4><strong>Facebook Timeline</strong></h4>
              <p class="muted">Check this box to automatically publish your experiences on Facebook.<br>They’ll show up in your Facebook Timeline and your friends’ News Feed and Ticker.</p>          
            </td>
            <td>
            <span class="data-btn">
              <div class="onoffswitch"><input type="hidden" id="profile_id" value="" />
                <input type="checkbox" id="fb_timeline" class="onoffswitch-checkbox"  name="fb_timeline" value="1">
                <label for="myonoffswitch1" class="onoffswitch-label">
                  <div class="onoffswitch-inner"></div>
                  <div class="onoffswitch-switch"></div>
                </label>
              </div> 
            </span>  
            </td>
          </tr>
        </table>
      </div>
	  <div class="dis-block"><button class="btn" id="btnSavePrivacy">Save Changes</button></div>
	    </form></div>
      <!-- Privacy END -->
  
      <!-- Apps -->
      <div class="tab-pane fade" id="account_5"><div class="well-box-in">
        <h4 class="tab-heading">These are the apps that can access your Field-Trip account.</h4>
        <ul class="users-list">
          <li>
              <div class="user-img" style="background-image:url(<?php echo base_url(); ?>public/assets/images/icons/facebook.png);"></div>
              <div class="user-info">
                <h4><a href="https://www.facebook.com/" target="_blank">Facebook</a></h4>
                <span class="list-data">
                  <p class="muted"><span class="date">Approved: Saturday, December 8, 2013 7:32:40 PM</span></p>
                  <p>Facebook integration allows you to invite your Facebook friends and share your Field-Trip! experiences on Facebook.</p>
                  <button class="btn">Disconnect</button>
                </span>
              </div>
          </li>
        
          <li>
              <div class="user-img" style="background-image:url(<?php echo base_url(); ?>public/assets/images/icons/instagram.png);"></div>
              <div class="user-info">
                <h4><a href="https://www.instagram.com/" target="_blank">Instagram</a></h4>
                <span class="list-data">
                  <p>Instagram integration allows you to share your moments and save them in your Memories.</p>
                  <button class="btn btn-black">Connect</button>
                </span>
              </div>
          </li>
        
          <li>
              <div class="user-img" style="background-image:url(<?php echo base_url(); ?>public/assets/images/icons/linkedin.png);"></div>
              <div class="user-info">
                <h4><a href="https://www.linkedin.com/" target="_blank">Linkedin</a></h4>
                <span class="list-data">
                  <p>Linkedin integration allows you to invite your connections to Field-Trip.</p>
                  <button class="btn btn-black">Connect</button>
                </span>
              </div>
          </li>
        </ul>
      </div></div>
      <!-- Apps END -->


<!-- Real Name Learn More Modal -->
<div id="name_learn_more" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Real name policy</h3>
  </div>
  
  <div class="modal-body">
  	<p>Field-Trip! requires that all members enter their real name because some service providers such as airlines require real identification due to <a href="http://www.tsa.gov/content/frequently-asked-questions-secure-flight" target="_blank">TSA rules</a>.</p>
    
    <p>You can choose to select can see your real name in the Privacy settings tab.</p>
  </div>
</div>
<!-- Real Name Learn More Modal end-->

<style>
.table td h4 {margin-bottom:5px;}
</style>
<script type="text/javascript">


$("#btnSaveAccount").live('click', function(){
      
	var first_name = $("#first_name").val();
	var last_name = $("#last_name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var language  = $("#language").val();
	var member_id  = '<?php echo $this->user->id;?>';
	var err = true;
	
	if(member_id!="" && member_id!=0) {
		
		$.ajax({
			type: "post",
			url: '<?php echo base_url(); ?>settings/ajax_member_update',
			data: {'first_name':first_name,'last_name': last_name, 'email':email,'phone': phone,'language':language,'member_id': member_id}, 
			dataType: 'json',
			success: function(response) {
				if(response) {
					$("#act_success_msg").text('Account information has been updated successfully..').show('slow');
				}
			},
			complete: function() {
				$("#act_success_msg").show().delay(5000).fadeOut();
			}
		});
	}
	return false;
	
});

$("#btnChangePassword").live('click', function(){
   
	var currentPassword = $("#currentPassword").val();
	var newPassword = $("#newPassword").val();
	var verifyPassword = $("#verifyPassword").val();
	var member_id = '<?php echo $this->user->id;?>';
	var err = false;
	
	if(currentPassword=="") {
		
		$('#currentPassword').addClass("redborder");
		$('#error_currentPassword').show();
		err=true;
	} else {

		$('#currentPassword').removeClass("redborder");
		$('#error_currentPassword').hide();
	} 
	if(newPassword=="") {
		
		$('#newPassword').addClass("redborder");
		$('#error_newPassword').show();
		err=true;
	} else {

		$('#newPassword').removeClass("redborder");
		$('#error_newPassword').hide();
	} 
	if(verifyPassword=="" ) {

		$('#verifyPassword').addClass("redborder");
		$('#error_verifyPassword').text("Please enter your verify password.").show();
		err=true;
	} else if(newPassword!=verifyPassword) {

		$('#verifyPassword').addClass("redborder");
		$('#error_verifyPassword').text("Your verify password don't match.").show();
		err=true;
	} else {

		$('#verifyPassword').removeClass("redborder");
		$('#error_verifyPassword').text("").hide();
	} 
	if(err==false) {
		if(member_id!="" && member_id!=0) {
			
			$.ajax({
				type: "post",
				url: '<?php echo base_url(); ?>settings/ajax_member_change_password',
				data: {'currentPassword':currentPassword,'newPassword': newPassword, 'member_id': member_id}, 
				dataType: 'json',
				success: function(response) {
				
					if(response.message==0) {
						$("#pass_success_msg").text('Passowrd has not updated! Try again.').addClass('error_msg').show('slow');
					}
					if(response.message==1) {
						$("#pass_success_msg").text('Passowrd has been updated successfully!').addClass('alert-success').show('slow');
					}
				},
				complete: function() {
					$("#pass_success_msg").show().delay(5000).fadeOut();
				}
				
			});
		}
	}
	return false;
		
});


$("#btnSavePrivacy").live('click', function(){
   
	var display_name = $("#display_name").val();
	
	var travelogue =[];
	var i=0;
	$('input[name="travelogue"]:checked').each(function() {
		travelogue[i++] = $(this).val();
	});
	
	var interests =[];
	var i=0;
	$('input[name="interests"]:checked').each(function() {
		interests[i++] = $(this).val();
	});
	
	var connections =[];
	var i=0;
	$('input[name="connections"]:checked').each(function() {
		connections[i++] = $(this).val();
	});
	
	var photo_videos =[];
	var i=0;
	$('input[name="photo_videos"]:checked').each(function() {
		photo_videos[i++] = $(this).val();
	});
	var fb_timeline = $("#fb_timeline").val();
	var member_id = '<?php echo $this->user->id;?>';
	var profile_id = $("#profile_id").val();
	
		if(member_id!="" && member_id!=0) {
			
			$.ajax({
				type: "post",
				url: '<?php echo base_url(); ?>settings/ajax_member_update_profile',
				data: {'display_name':display_name,'travelogue': travelogue, 'interests':interests,'connections': connections, 'photo_videos':photo_videos,'fb_timeline': fb_timeline,'member_id': member_id, 'profile_id':profile_id}, 
				dataType: 'json',
				success: function(response) {
				
					if(response.status=='add' && response.profile_id!='') {
						
						$("#profile_id").val(response.profile_id);
						$("#privacy_msg").text('Profile Information has been added successfully.').addClass('alert-success').show('slow');
					} 
					if(response.status==false) {
						$("#privacy_msg").text('Profile Information has not updated! Try again.').addClass('error_msg').show('slow');
					}
					if(response.status==true) {
						$("#privacy_msg").text('Profile Information has been updated successfully!').addClass('alert-success').show('slow');
					}
				},
				complete: function() {
					$("#privacy_msg").show().delay(5000).fadeOut();
				}
				
			});
		} else {
			return false;
	}
		
});
</script>
 