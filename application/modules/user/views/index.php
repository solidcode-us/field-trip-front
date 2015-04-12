<!-- HEADER -->
<?php  die('ddd'); $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->
<div class="container">

<section class="well-box-in sec-left">
  <section class="user-profile-div">
    <header class="page-header"><h1>Alice Queen</h1></header>

    <div class="user-profile-info">
      <div class="user-profile-photo" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user_1.png);"></div>
      <ul class="info-bar">
        <li title="Birthday"><i class="fa fa-birthday-cake"></i> December 31</li>
        <li title="Occupation"><i class="fa fa-briefcase"></i> Marketing Manager</li>   
        <li title="Residence"><i class="fa fa-map-marker"></i> Miami Beach, FL, United States</li>   
      </ul>
    </div>
    
    <div class="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus.</div>

    <ul class="user-interest">
		<?php $this->load->view('user/profile/interests.php'); ?>
    </ul>

    <div class="edit-btnz">
      <a href="#update_profile" role="button" data-toggle="modal">Edit Profile</a>
      <a href="#">Message</a>
      <a href="#">Connect</a>
    </div>
  </section>
</section>

<section class="sec-right">
  <section class="user-profile-navs well-box-in">
      <ul class="nav nav-pills profile-navs" style="border:none;">
        <li class="active"><a href="#done" data-toggle="tab" title="Places i've been and Things i've done"><i class="fa fa-book fa-lg"></i> <p>Travelogue</p></a></li>
        <li><a href="#bucketlist" data-toggle="tab" title="Exciting things i want to do and places i'll like to visit"><i class="fa fa-list-ul fa-lg"></i> <p>Bucketlist</p></a></li>
        <li><a href="#photos" data-toggle="tab" title="Photos and Videos"><i class="fa fa-camera-retro fa-lg"></i> <p>Memories</p></a></li>
        <li><a href="#friends" data-toggle="tab" title="Family, Friends, and Colleagues"><i class="fa fa-users fa-lg"></i> <p>Connections</p></a></li>
      </ul>
  </section>

  <div class="tab-content">
      <!-- Places Traveled -->
      <div class="tab-pane fade in active" id="done"><div class="container">
        <?php $this->load->view('user/profile/done.php'); ?>
      </div></div>
      <!-- Places Traveled END -->
    
      <!-- Bucketlist -->
      <div class="tab-pane fade" id="bucketlist"><div class="container">
        <?php $this->load->view('user/profile/bucketlist.php'); ?>
      </div></div>
      <!-- Bucketlist END -->
      
      <!-- Connections -->
      <div class="tab-pane fade" id="friends"><div class="container">
        <?php $this->load->view('user/profile/connections.php'); ?>
      </div></div>
      <!-- Connections END -->
      
      <!-- Photos -->
      <div class="tab-pane fade" id="photos">
          <?php $this->load->view('user/profile/photos.php'); ?>
      </div>
      <!-- Photos END -->
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