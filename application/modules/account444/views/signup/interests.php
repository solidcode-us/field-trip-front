<h4 class="menu-title" style="margin-top:20px;">Your Interests
<small>Select what interest you the most so we can match you with the best experiences.</small>
</h4>
<section class="menu-list" style="padding-top:10px;">
<form id="frmInterest" method="post"  onsubmit="return false;">
  <ul class="people items">
      <?php if(sizeof($interestData) > 0) {
	  		foreach($interestData as $key=>$value) {
	  ?>
	  <li>
        <label><input type="checkbox" name="member_interests" id="member_interests[<?php echo $key;?>]" value="<?php echo $value->id;?>">
          <img src="<?php echo $this->config->item('cdn_images_http_path').$value->level_image.''; ?>"/>
        </label>
        <p><?php echo $value->category;?></p>
      </li>
      <?php }
	  	}
	  ?>
  </ul>
  </form>
</section>
<script type="text/javascript">

//$('.step-5-btn').click(function() {
		//$(".steps-block").hide();
		//$(".step-5").fadeIn();
//	});
$(".step-5-btn").live('click', function(){
      
	var interest_ids =[];
	var i=0;
	$('input[name="member_interests"]:checked').each(function() {
		interest_ids[i++] = $(this).val();
	});
	
	var member_id  = $("#member_id").val();;
	var err = true;
	
	if(member_id!="" && member_id!=0) {
		
		$.ajax({
			type: "post",
			url: '<?php echo base_url(); ?>account/ajax_member_interest',
			data: {'interest_ids': interest_ids, 'member_id': member_id}, 
			dataType: 'json',
			success: function(response) {
				
			},
			complete: function() {
				$(".steps-block").hide();
				$(".step-6").fadeIn();
			}
		});
	}
	return false;
		
});

</script>