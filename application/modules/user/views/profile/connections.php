<section class="list_user">
  <div class="dis-block">
    <select class="drop-option">
      <option value="0">Everybody</option>
      <option value="2">My Family</option>
      <option value="3">My Friends</option>
      <option value="4">My Colleagues</option>
    </select>
  </div>
  <ul class="people users">

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
 
  </ul>
</section>

<?php $this->load->view('partials/add_user.php',$groups); ?>


<!-- Open Connection -->
<div class="open_user media-modal well-box-in" style="padding:0;">
     
</div>
<!-- Open Connection END -->
 


<script type="text/javascript">
$(function() {	

$('.remove-connection').live('click',function(){
     $.ajax({
        type: "get",
        url: $(this).data('href'),  
        dataType: 'json',
        success: function(response) {        
          $('.users').html(response.html) 
         }
      });
});

  $('.drop-option').change(function(){

      $.ajax({
        type: "get",
        url: "<?php echo base_url().'user/filter_connection/';?>"+$(this).val(),      
        dataType: 'json',
        success: function(response) {        
          $('.users').html(response.html) 
         }
      });
  });

  $('.open-user-btn').click(function(e) {
	   

     $.ajax({
      type: "get",
      url: $(this).data('href'),      
      dataType: 'json',
      success: function(response) {        
        $('.open_user').html(response.html)

        $('.left-nav').fadeOut();
        $('.right-nav').fadeOut();

        $(".list_user").hide();
        $(".sec-right .user-profile-navs").hide();
        $(".open_user").show("slide", { direction: "right" }, 500);
      },
       
    }); 
  });


   $('.open-user-btn').live('click', function(e) {    

     $.ajax({
      type: "get",
      url: $(this).data('href'),      
      dataType: 'json',
      success: function(response) {        
        $('.open_user').html(response.html)

        $('.left-nav').fadeOut();
        $('.right-nav').fadeOut();

        $(".list_user").hide();
        $(".sec-right .user-profile-navs").hide();
        $(".open_user").show("slide", { direction: "right" }, 500);
      },
       
    }); 
  });

  $(".people li").mouseover(function(){
    $(".ppl-info").hide();
    $(this).find('.ppl-info').show();
  });

  $("#friends").mouseleave(function(){
    $(".ppl-info").hide();
  });

});      
</script>