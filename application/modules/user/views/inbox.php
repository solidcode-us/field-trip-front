<!-- HEADER -->

<?php $this->load->view('partials/header.php'); ?>

<!-- HEADER END-->

<?php $numOfMsg = sizeof($notificInfo);?>

<div class="profile">



<section class="sec-left">



  <div class="dis-block">

    <select class="drop-option" style="max-width:40%;">

      <option>Inbox (<?php echo $numOfMsg;?>)</option>

     <!-- <option>Unread (2)</option>

      <option>Trash (12)</option>-->

    </select>

   <!-- <input type="text" style="float: right; margin: 0px 0px 15px; width: 60%;" placeholder="Search">-->

  </div>

  <?php if($numOfMsg>0) { ?>

  <section class="well-box-in" style="padding:5px 0;">

    <ul class="message-list">

	<?php	if(isset($notificInfo[0]->notification_type) && $notificInfo[0]->notification_type=="connection") {
				$message1Dsiplay = "in active";
			} else {
				$message1Dsiplay = "fade";
			}
			if(isset($notificInfo[0]->notification_type) && $notificInfo[0]->notification_type=="admin") {
				$message2Dsiplay = "in active";
			} else {
				$message2Dsiplay = "fade";
			}
			$name = "";
			
			foreach($notificInfo as $key=>$val) {
				
				if($val->notification_type=="connection") {

					$subject = "Connection";
					$message ="message1";
					$name = $val->mname;
					
				} else {

					$subject = "Cool Message Subject";
					$message ="message2";
					if(isset($val->first_name) || isset($val->last_name)) { 

						$name =  $val->first_name.' '.$val->last_name;

					}

				}

				if($val->notification_msg) {

					$notification_msg = wordLimit( $val->notification_msg, '50');

				}

	  ?>

      <li class="unread">

          <a href="#<?php echo $message;?>" data-toggle="tab" onclick="display_message('<?php echo $val->id;?>','<?php echo $val->notification_by;?>','<?php echo $val->notification_type;?>');" class="mlist-text">

            <h4><?php echo trim($name);?></h4>

            <p class="subject"><?php echo $subject;?></p>

            <p><?php echo $notification_msg;?></p>

          </a>

          <span class="time"><?php echo showTimeAgo($val->created_at);?></span>

          <span class="right-arrow"><i class="fa fa-angle-right fa-2x"></i></span>

          <span class="unread-badge"></span>

      </li>

<?php } ?>

    </ul>

  </section>

<?php }

	  ?>

</section>



<section class="sec-right">

  <div class="tab-content settings-content" style="padding:0 20px;">

      <!-- Preferences -->
	  <div class="alert-success" style="text-align:center;width:730px;">
			<div class="alert-success tag_confirm_msg" style="padding:5px;display:none;" id="conect_success_msg"></div>
		</div>
      <div class="tab-pane <?php echo $message1Dsiplay;?>" id="message1"> 
	  	<Section class="well-box-in">
		<ul class="arrow-list">
			<li>
				<div class="alist-img"><a href="#"><img src="<?php echo base_url();?>public/assets/user_uploads/user_profile_pics/<?php echo (isset($connecUserData['profile_image'])) ? $connecUserData['profile_image'] : "";?>"/></a></div>
				<div class="alist-info">
				<h4><?php echo (isset($connecUserData['name'])) ? $connecUserData['name']: "" ;?></h4>
				<span class="alist-data"><?php echo (isset($connecUserData['name'])) ? $connecUserData['name']: "" ;?>
					<p class="muted" style="margin:0 0 3px;">
					<?php if(isset($connecUserData['created_at'])) { echo date('M d, Y h:i A', strtotime($connecUserData['created_at'])); } ?></p>
					<p><?php echo (isset($connecUserData['name'])) ? $connecUserData['name']: "" ;?> added you as a friend.</p>
				</span>
				</div>
			</li>
		  </ul>
		  <hr>
		 <?php  if(is_array($userFriend) && sizeof($userFriend)>0) {?>
		 <h4 class="mid-title">Your connection with <?php echo (isset($connecUserData['name'])) ? $connecUserData['name']: "" ;?></h4>
		  <ul class="people users">';
		
			 <?php foreach($userFriend as $key=>$value) { ?>
				<li>
					<a href="#" class="open-user-btn"><img src="<?php echo base_url();?>public/assets/user_uploads/user_profile_pics/<?php echo (isset($value->profile_image)) ? $value->profile_image : "";?>"/></a>
					<p><?php echo (isset($value->name)) ? $value->name : "";?></p>
				</li>
			 <?php }?>
			</ul>
		 <?php }?>	
		</Section>	
		<?php if(isset($connecUserData['status']) && $connecUserData['status']==0) { ?>	
				<section class="dis-block text-center">
				<input type="hidden" id="invited_by" value="<?php echo $notification_by;?>">  
			  
			  <button class="btn btn-lg btn-blue" id="btnConneAccept" 
			  onclick="changeConnectionStatus('<?php echo $connection_id?>','accept')">Accept</button>
			  <button class="btn btn-lg"  id="btnConneDecline" onclick="changeConnectionStatus('<?php echo $connection_id?>','reject')">Decline</button>
			</section>
		<?php }?>
	  </div>

      <!-- Preferences END -->

  

      <!-- Account -->

	  <?php  if(!empty($notifyInfo) && is_array($notifyInfo)) { ?>

      <div class="tab-pane fade <?php echo $message2Dsiplay;?>" id="message2">

        <Section class="well-box-in">

          <ul class="arrow-list">

            <li>

                <div class="alist-img" style="background-image:url(<?php echo base_url(); ?>public/assets/images/<?php echo $this->user->profile_image;?>);"></div>

                <div class="alist-info">

                  <textarea style="width:100%;" id="reply_message" name="reply_message" rows="3"></textarea>
				  <div id="error_reply_message" style="display: none;padding-top:0px;" class="errUser"></div>  
                  <div class="text-center"><input type="hidden" id="notification_id" value="" />

				  <input type="hidden" id="notification_by" value="" />

				  <button class="btn btn-black" id="btnMsgReply">Reply</button></div>

				  

                </div>

            </li>

          </ul>

        </Section>

        <Section class="well-box-in">

          <ul class="arrow-list" id="userMsg">

            	<?php if(!empty($notifyReplyInfo) && is_array($notifyReplyInfo)) { 

					foreach($notifyReplyInfo as $key=>$value) {

					?>

			 	<li>

					<div class="alist-img" style="background-image:url('.base_url().'public/assets/user_uploads/img_user.png);"></div>

					<div class="alist-info">

					  <h4><a href="#"><?php echo $value->first_name.' '. $value->last_name;?></a></h4>

					  <span class="alist-data">

						<p class="muted" style="margin:0 0 3px;"><?php echo date('M d, Y h:i A', strtotime($value->created_at));?></p>

						<p><?php echo $value->reply_message;?></p>

					  </span>

					</div>

				</li>

            </li>

			

		  <?php } 

		  }

		  if(!empty($notifyInfo) && is_array($notifyInfo)) { 

		  			foreach($notifyInfo as $key=>$value) {

		  ?>
			<li>

				<div class="alist-img" style="background-image:url('.base_url().'public/assets/user_uploads/img_user.png);"></div>
					<div class="alist-info">

					  <h4><a href="#"><?php echo $value->first_name.' '. $value->last_name;?></a></h4>

					  <span class="alist-data">

						<p class="muted" style="margin:0 0 3px;"><?php echo date('M d, Y h:i A', strtotime($value->created_at));?></p>

						<p><?php echo $value->notification_msg;?></p>

					  </span>

					</div>

				</li>

				

			  <?php } 

			  }

			  ?>

           

          </ul>

        </Section>

      </div>

	  <?php } ?>

      <!-- Account END -->

  </div>

</section>
</div>



<script type="text/javascript">

$(function() {	

  $(".tag_confirm_msg").show().delay(5000).fadeOut();
  $('.message-list li').click(function() {

		$(this).removeClass('unread');
  });

  

  $("#btnMsgReply").live('click', function(){

		var reply_message = $("#reply_message").val();
		var err =false;
		if(reply_message=="" || reply_message==null) {
			$('#reply_message').addClass("redborder");
			$('#error_reply_message').text('Please enter replay message.').show();
			err=true;
		} else {
			$('#reply_message').removeClass("redborder");
			$('#error_reply_message').text('').hide();
		}
		var notification_id = $("#notification_id").val();
		if(notification_id!="" && err==false) {

		$.ajax({

			type: "post",

			url: '<?php echo base_url(); ?>user/ajax_save_notification_replay',

			data: {'notification_id':notification_id,'reply_message': reply_message}, 

			dataType: 'json',

			success: function(response) {

				

				$(response.notificationData).insertBefore("#userMsg li:eq(0)");

				$("#reply_message").val('');

			},

			complete: function() {

				

			}

		});

	}

  }); 

});   



function display_message(notification_id, notification_by, notification_type) {



	if(notification_id!="" && notification_by!="") {

		

		$.ajax({

			type: "post",

			url: '<?php echo base_url(); ?>user/get_message_details',

			data: {'notification_id':notification_id,'notification_by': notification_by,'notification_type':notification_type}, 

			dataType: 'json',

			success: function(response) {

				if(response.type=="admin") {

					$("#notification_id").val(notification_id);
					$("#notification_by").val(notification_by);
					$("#userMsg").html(response.notificationData);
					$("#message1").removeClass('in active').addClass('hide');
					$("#message2").removeClass('hide').addClass('in active');
				} else {
					$("#message2").removeClass('in active').addClass('hide');
					$("#message1").html(response.connecData).removeClass('hide').addClass('in active');
				}
				 $(".badge").text(response.notificCount);
				
			},

		});

	}

	return false;

}   
function changeConnectionStatus(connection_id, status) {

	var status = (status=="accept") ? "1" : "2";
	
	if(connection_id!="") {
	
		$.ajax({
			type: "post",
			url: '<?php echo base_url(); ?>user/change_connection_status',
			data: {'connection_id':connection_id,'status': status}, 
			dataType: 'json',
			success: function(response) {
				
				$("#conect_success_msg").text('Your request has been completed successfully.').show();
				$("#btnConneAccept").hide();
				$("#btnConneDecline").hide();
			}
		});
	}
}
</script>
<style>
.errUser { color:#CC0000; text-align:left;margin:0px;}

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
<style>

.message-list {

    display: block;

    float: left;

    list-style: outside none none;

    margin: 0;

    max-height: 450px;

    overflow: auto;

    width: 100%;

}

.message-list li {padding:0 15px;display:block;float:left;width:100%;text-align:left;position:relative;}

.message-list li + li {border-top: 1px solid #ececec;}



.message-list a {

	-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;

    color: inherit;

    float: left;

	width:100%;

}

.message-list a:hover {text-decoration:none;}



.message-list .mlist-text {

    box-sizing: border-box;

    float: left;

    font-size: 13px;

    font-weight: 400;

    min-height: 45px;

    overflow: hidden;

    padding: 5px 0;

    position: relative;

    vertical-align: middle;

    width: 100%;

    z-index: 1;

}

.message-list h4,

.message-list li p {

	display: block;

	margin:0;

    overflow: hidden;

    text-overflow: ellipsis;

    text-transform: none;

    white-space: nowrap;

    width: 100%;

}

.message-list h4 {font-size:13px;font-weight:600;color:#333;}

.message-list li .subject {color:#333;opacity:.8;}

.message-list li .time {

    color: #999;

    display: block;

    font-size: 10px;

    font-weight: 400;

    position: absolute;

    right: 15px;

    top: 5px;

    z-index: 99;

}

.message-list li p {opacity:.4;}



.message-list .unread .unread-badge {

    background-color:#0099ff;

    border-radius: 50%;

    display: block;

    height: 8px;

    left: 4px;

    position: absolute;

    top: 12px;

    width: 8px;

    z-index: 99;

}

.message-list .unread-badge {display:none;}



.message-list .right-arrow {display:none;}



.message-list li.active > a {opacity:.5;}

.message-list li.active {background-color:#f5f5f5;}

.message-list li.active .right-arrow {display:block;}





.well-box-in hr {margin:15px 0;}



.mid-title {

    display: block;

    float: left;

    font-size: 15px;

    font-weight: 400;

    text-align: center;

    width: 100%;

}



.list-inner .arrow-list .alist-info p {

    overflow: hidden;

    text-overflow: ellipsis;

    white-space: nowrap;

    width: 100%;

}

.arrow-list .alist-info p {

    font-size: 13px;

    font-weight: 300;

}

</style>



<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_user.css"> 

<!-- FOOTER -->

<?php $this->load->view('partials/footer.php'); ?>

<!-- FOOTER END-->