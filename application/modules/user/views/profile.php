<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->
<style>
.errUser { color:#CC0000; text-align:left;margin:5px;}
.alert-success {
     border-color: #d6e9c6;
  color: #468847;
  clear: both;
   
  text-align: center;
  padding: 5px;
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
<div class="profile">

<section class="sec-left">
  <section class="well-box-in user-profile-div">
    <div class="user-profile-info">
      <div class="user-profile-photo" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user.png);"></div>
      <header class="page-header"><h1><?php echo $this->user->name.' '.$this->user->last_name;?></h1></header>
      <ul class="info-bar">
       <?php if(isset($this->user->dob)){?>
        <li><i class="fa fa-birthday-cake"></i> <?php echo date('F n',strtotime($this->user->dob))?></li>
        <?php } ?>
        <li><i class="fa fa-map-marker"></i> <?php echo $this->user->address;?></li>   
      </ul>
    </div>
  </section>
  <?php $this->load->view('user/profile/profile_navs.php',$connections); ?>
</section>

<section class="sec-right">
  <div class="tab-content" style="padding:0 20px;">
      <!-- Places Traveled -->
      <div class="tab-pane fade in active" id="done">
        <?php $this->load->view('user/profile/done.php'); ?>
      </div>
      <!-- Places Traveled END -->
    
      <!-- Bucketlist -->
      <div class="tab-pane fade" id="bucketlist">
        <?php $this->load->view('user/profile/bucketlist.php'); ?>
      </div>
      <!-- Bucketlist END -->
      
      <!-- Connections -->
      <div class="tab-pane fade" id="friends">
        <?php $this->load->view('user/profile/connections.php',$groups); ?>
      </div>
      <!-- Connections END -->
  </div>
</section>

</div>
 
<!-- Update Profile Modal -->
<div id="update_profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Update Profile</h3>
  </div>
  
  <div class="modal-body">
    <div class="field-group">
      <label for="inputFName" title="Profile Photo">Photo</label>
      <div class="field">
        <div class="user-profile-photo" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user_1.png);position:relative;"></div>
        <input type="file" id="file" placeholder="Upload a photo" style="width:100%;">
      </div>

      <div class="field">
        <label for="inputJob" title="What do you do for a living?">Occupation</label>
        <div class="input-prepend" title="Update my occupation" style="margin-bottom:20px;">
          <span class="add-on"><i class="fa fa-briefcase"></i></span>
          <input type="text" id="inputJob" placeholder="Occupation" value="Marketing Manager">
        </div>

        <label for="inputLoc" title="Where do you live?">Location</label>
        <div class="input-prepend" title="Update my location">
          <span class="add-on"><i class="fa fa-map-marker"></i></span>
          <input type="text" id="inputLoc" placeholder="Location" value="Miami Beach, Florida">
        </div>
      </div>
    </div>
    
    <div class="field-group">
      <label for="inputAbout" title="Tell us about yourself">About me</label>
      <textarea id="inputAbout" maxlength="250" rows="4" class="dis-block" title="Tell us about yourself in 250 characters"></textarea>
    </div>

  </div>
  
  <div class="modal-footer">
    <button class="btn btn-black" title="Update My Profile">Save</button>
  </div>
  
</div>
<!-- Update Profile Modal end-->

<script  src="<?php echo base_url(); ?>public/assets/js/page_user.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_user.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->