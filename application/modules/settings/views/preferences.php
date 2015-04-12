  
	<!-- Activities -->
    <div class="tab-pane fade in active" id="preferences_1">
      <h4 class="tab-heading" style="padding:0 7.5px;">What activities do you like the most?</h4>
	  <div class="alert-success" style="text-align:center;">
	  	<div class="alert-success tag_confirm_msg" id="displayPreferences"></div>
	</div>
	   <div style="display: none;" class="alert-success" id="alert_msg"></div>
      <form id="frmInterest" method="post"  onsubmit="return false;">
	  <ul class="people items">
		  <?php if(sizeof($interestData) > 0) {
				foreach($interestData as $key=>$value) {
				
					$sel = (in_array($value->id, $member_interests)) ? 'on':'';
					$selInt = (in_array($value->id, $member_interests)) ? 'checked="checked"':'';
		  ?>
		  <li>
			<label class="<?php echo $sel;?>"><input type="checkbox" name="member_interests" id="member_interests[<?php echo $key;?>]" value="<?php echo $value->id;?>" <?php echo $selInt;?>>
			  <img src="<?php echo $this->config->item('cdn_images_http_path').$value->level_image.''; ?>"/>
			</label>
			<p><?php echo $value->category;?></p>
		  </li>
		  <?php }
			}
		  ?>
	  </ul>
	  <div class="dis-block" style="padding:40px 0px 0px 400px;">
	  <input type="hidden" id="interest_id" value="<?php echo $interest_id;?>" />
	  <button class="btn center" id="btnSavePreference">Save Interests</button></div>
	  </form>
    </div>
    <!-- Activities END -->
  
    <!-- Diet -->
    <div class="tab-pane fade" id="preferences_2">
      <h4 class="tab-heading" style="padding:0 7.5px;">Do you have any dietary restrictions?</h4>
      <h4 class="tab-sec-heading" style="margin:0;">Dairy</h4>
      <ul class="int-level-box">
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Eggs</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Milk</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Cheese</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Yogurt</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Ice cream</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Butter</h4></label>
          </li>
      </ul>
      
      <h4 class="tab-sec-heading">Meat</h4>
      <ul class="int-level-box">
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Fish</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Pork</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Beef</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Chicken</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Goat</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Exotic</h4></label>
          </li>
      </ul>
      
      <h4 class="tab-sec-heading">Legume</h4>
      <ul class="int-level-box">
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Peas</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Beans</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Soybeans</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Peanuts</h4></label>
          </li>
          <li>
            <label><p><i class="fa fa-cutlery"></i></p><h4>Tree Nut</h4></label>
          </li>
      </ul>
    </div>
    <!-- Diet END -->

<style>
.int-level-box {
    float: left;
    list-style: outside none none;
    margin:0;
	padding:0;
    position: relative;
    text-align: center;
    width: 100%;
}
.int-level-box li {
    display: inline-block;
    float: left;
    padding: 7.5px;
    text-align: center;
    width: 16.6667%;
}
.int-level-box li > label {
    background-color: #FFF;
	border:1px solid #FFF;
	border-bottom:2px solid #FFF;
	border-radius:12px;
    box-sizing: border-box;
    color: #333;
    float: left;
    height: auto;
    margin: 0;
    overflow: hidden;
    padding:5px;
    position: relative;
    width: 100%;
}
.int-level-box .on {
    background-color: #F5F5F5;
    border-color: #dedede;
}

.int-level-box li h4,
.int-level-box li p {opacity:.5;}

.int-level-box li h4 {
    font-size: 12px;
    font-weight: 600;
    margin: 5px 0 0;
}
.int-level-box li p {
    font-size: 28px;
    font-weight: 400;
    margin: 5px 0 0;
    width: 100%;
}
@media (max-width: 479px){
.int-level-box li {padding:7.5px;width:50%;}
.int-level-box li p {font-size:38px;}
.int-level-box li h4 {
    font-size: 15px;
    font-weight: 700;
    margin: 5px 0 0;
}
.int-level-box li > label {padding: 20px 5px 10px;}
}
@media (min-width: 480px) and (max-width: 599px) {
.int-level-box li {width:33.33333%;}
}
</style>

<script type="text/javascript">

$(function(){	 
	
	         
	$('.int-level-box label').click(function f(e) {
		
		if(!e.triggered) {  // only if not already triggered for this time
			e.triggered = true;
			$(this).toggleClass('on');
			setTimeout(function() {
				e.triggered = false;  // reset after both clicks are done
			}, 0);
		}
	});
});
</script>
<script type="text/javascript">


$("#btnSavePreference").live('click', function(){
      
	var interest_ids =[];
	var i=0;
	$('input[name="member_interests"]:checked').each(function() {
		interest_ids[i++] = $(this).val();
	});
	
	var member_id  = '<?php echo $this->user->id;?>';
	var interest_id  = $("#interest_id").val();
	var err = true;
	
	if(member_id!="" && member_id!=0) {
		
		$.ajax({
			type: "post",
			url: '<?php echo base_url(); ?>settings/ajax_member_interest',
			data: {'interest_id':interest_id,'interest_ids': interest_ids, 'member_id': member_id}, 
			dataType: 'json',
			success: function(response) {
				if(response.status=='update') {
					$("#displayPreferences").css({'padding':'5px'}).text('Interest has been updated successfully.').show('slow');
				}
				if(response.status=='add') {
					$("#displayPreferences").text('Interest has been added successfully.').css({'padding':'5px'}).show('slow');
				}
			},
			complete: function() {
				$(".tag_confirm_msg").show().delay(5000).fadeOut();
			}
		});
	}
	return false;
	
});

</script>