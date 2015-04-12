<?php
       if(count($connections)){
        $i=0;
        foreach ($connections as $key => $value) { if($i>4) break;?>
          <li>
            <a href="javascript:void(0)" data-href="<?php echo base_url().'user/get_connection_details/'.$value->id?>" class="open-user-btn"><img src="<?php echo base_url().'public/assets/user_uploads/user_profile_pics/'.$value->profile_image;?>"/></a>
            <p><?php echo $value->name?></p>
          </li>  
        <?php $i++; }
       }
       ?>