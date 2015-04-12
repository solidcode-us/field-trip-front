<ul class="profile-navs">
   <!--  <li>
      <a href="#bucketlist" data-toggle="tab">
        <div class="title">Bucketlist <small>321</small></div>
        <div class="thumbs th-1" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/bl1.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/bl2.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/bl3.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/bl4.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/bl5.jpg);"></div>
      </a>
    </li>
    <li class="hide-for-beta">
      <a href="#done" data-toggle="tab">
        <div class="title">Favorites <small>5</small></div>
        <div class="thumbs th-1" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/f1.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/f2.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/f3.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/f4.jpg);"></div>
        <div class="thumbs" style="background-image:url(<?php //echo base_url(); ?>public/assets/images/img_exp/f5.jpg);"></div>
      </a>
    </li>
    <li class="map hide-for-beta">
      <a href="#done" data-toggle="tab">
        <div class="title">Travelogue</div>
        <div class="thumbs">84 <p>Experiences</p></div>
        <div class="thumbs">37 <p>Cities</p></div>
        <div class="thumbs">24 <p>States</p></div>
        <div class="thumbs">5 <p>Countries</p></div>
      </a>
    </li> -->
    <li class="users">
      <a href="#friends"  id="showme"  data-toggle="tab">
        <div class="title">Connections <small><?php echo count($connections)?></small></div>
       <?php
       if(count($connections)){
        $i=0;
        foreach ($connections as $key => $value) { if($i>4) break;?>
           <div class="thumbs <?php if($i==0) echo 'th-1';?>" style="background-image:url(<?php echo base_url().'public/assets/user_uploads/user_profile_pics/'.$value->profile_image;?>);"></div>
        <?php $i++; }
       }
       ?>

         
      </a>
    </li>
</ul>

<script type="text/javascript">
// $('#showme').click(function(){

//    $('#done').removeClass('in active');  
//    $('#bucketlist').removeClass('in active');  
//   $('#friends').addClass('in active').siblings().removeClass('in active');  
// })
</script>