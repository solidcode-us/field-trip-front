 
<?php //asd($usersData);?>
<!-- Open Connection -->
  
    <div class="exp-header"><?php echo $usersData->name .' '.$usersData->last_name?> <a href="#" class="close-exp-btn close-x exit"><i class="fa fa-times"></i></a></div>

    <section style="padding:15px;"><section class="user-profile-div">
      <div class="user-profile-info">
        <div class="user-profile-photo" style="background-image:url(<?php echo base_url().'public/assets/user_uploads/user_profile_pics/'.$usersData->profile_image;?>);"></div>
        <ul class="info-bar">
           <?php if(isset($usersData->dob)){?>
          <li><i class="fa fa-birthday-cake"></i> <?php echo date('F,d',strtotime($usersData->dob))?></li>
          <?php } ?>
          <!-- <li title="Occupation"><i class="fa fa-briefcase"></i> Lifestyle Executive</li>    -->
          <li><i class="fa fa-map-marker"></i> <?php echo $usersData->address;?></li>  
          
          
           
        </ul>
      </div>
      
      <div class="about"><?php echo $usersData->about;?></div>
  
      <hr>

      <div class="field-group" style="margin-bottom:20px;">
        <div class="field">
          <label style="margin-top:0;">Connection</label>
          <div class="dis-block">
            <select style="float:left;width:auto;margin-right:10px;" class="connection">
            	 <?php 
              foreach ($groups as $key => $value) { ?>
                 <option value="<?php echo $value->id?>" <?php if($usersData->connection_group_id == $value->id) echo "selected = 'selected'" ?> > <?php echo $value->name?> </option>
              <?php  }  
              ?>    
            </select>
            <select style="float:left;width:auto;" class="fam">
              <option value="2">Mother</option>
              <option value="1">Father</option>
              <option value="4">Sister</option>
              <option value="3">Brother</option>
              <option value="5">Son</option>
              <option value="6">Daughter</option>
              <option value="7">Grandmother</option>
              <option value="18">Grandfather</option>
              <option value="24">Aunt</option>
              <option value="8">Uncle</option>
              <option value="0">Cousin</option>
              <option value="10">Nephew</option>
              <option value="11">Niece</option>
              <option value="12">Mother-in-law</option>
              <option value="13">Father-in-law</option>
              <option value="14">Brother-in-law</option>
              <option value="15">Sister-in-law</option>
              <option value="16">Son-in-law</option>
              <option value="17">Daughter-in-law</option>
            </select>
             <select style="display:none;width:57%;"  class="partner subconnection_type">
              <option value="20">Boyfriend</option>
              <option value="19">Girlfriend</option>
              <option value="23">Fiancée</option>
              <option value="21">Wife</option>
              <option value="22">Husband</option>
          </select>
           <select class="fam-young" style="display:none;">
            <option value="4">Sister</option>
            <option value="3">Brother</option>
            <option value="5">Son</option>
            <option value="6">Daughter</option>             
            <option value="24">Aunt</option>
            <option value="8">Uncle</option>
            <option value="0">Cousin</option>
            <option value="10">Nephew</option>
            <option value="11">Niece</option>
          
            <option value="14">Brother-in-law</option>
            <option value="15">Sister-in-law</option>
            <option value="16">Son-in-law</option>
            <option value="17">Daughter-in-law</option> 
          </select>
          </div>
        </div>
        <!-- <div class="field">
        	<label style="margin-top:0;" for="nickname">Nickname</label>
            <input type="text" id="nickname" placeholder="What do you call Alex?">
        </div>

        <div class="dis-block anniv" style="display:none;">
        	<label style="margin-top:0;" for="anniversary">Anniversary</label>
            <input type="text" id="anniversary" placeholder="Enter a date" style="width:141px;">
        </div> -->
      </div>
      
      <!-- <label>Send Alex a message</label>
      <textarea style="width:100%;" rows="3"></textarea> -->
    </section></section>
    
    <section class="exp-footer">
      <!-- <a href="#" class="edit-exp-btn" title="Send the Message"><i class="fa fa-paper-plane"></i><p>Send Message</p></a> -->
      <a href="#" title="View <?php echo $usersData->name?>'s profile"><i class="fa fa-user"></i><p>View Profile</p></a>
      <a href="javascript:void()" class="remove-connection" data-href="<?php echo base_url().'user/remove_connection/'.$value->id?>" title="Remove <?php echo $usersData->name?> as your connection"><i class="fa fa-user-times"></i><p>Disconnect</p></a>
    </section>
 
<!-- Open Connection END -->
 

 