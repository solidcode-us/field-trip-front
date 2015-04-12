<div class="dis-block" style="margin-bottom:15px;">
  <select style="font-weight:600;margin:0 15px 0 0;">
    <option>Goals (7)</option>
    <option>Completed (49)</option>
  </select>
</div>

<ul class="bucketlist">
    <li>
      <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_exp/bl1.jpg);">
        <div class="info">
          <h4>Visit Times Square</h4>
          <p><i class="fa fa-map-marker"></i>&nbsp;New York, NY</p>
        </div>
      </a>
    </li>
    <li>
      <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_exp/bl2.jpg);">
        <div class="info">
          <h4>Go on a African Safari</h4>
          <p><i class="fa fa-map-marker"></i>&nbsp;Africa</p>
        </div>
      </a>
    </li>
    <li>
      <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_exp/bl3.jpg);">
        <div class="info">
          <h4>Snowboard on Whistler Mountain</h4>
          <p><i class="fa fa-map-marker"></i>&nbsp;Whistler, BC, Canada</p>
        </div>
      </a>
    </li>
    <li>
      <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_exp/bl4.jpg);">
        <div class="info">
          <h4>Skydive</h4>
          <p><i class="fa fa-map-marker"></i>&nbsp;Anywhere</p>
        </div>
      </a>
    </li>

    <li>
      <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_exp/bl5.jpg);">
        <div class="info">
          <h4>Go to Italy</h4>
          <p><i class="fa fa-map-marker"></i>&nbsp;Italy</p>
        </div>
      </a>
    </li>
</ul>

<div class="add-person">
	<a href="#" id="add-goal" style="background-image:url(<?php echo base_url(); ?>public/assets/images/icons/add-btn.png);"></a>
</div>

<div id="bucketlist-nav" class="right-nav wide">
    <section class="dis-block padded">
    	<h3 style="float:left;margin:0;">Add a Goal</h3>
        <button class="close exit"><i class="fa fa-times fa-lg"></i></button>
    </section>

    <form class="form-horizontal" style="padding:30px 15px 0;">
      <div class="control-group">
        <label for="vTitle" class="control-label">Goal</label>
        <div class="controls">
          <input type="text" id="vTitle" style="width:100%;" placeholder="Visit Times Square">
        </div>
      </div>

      <div class="control-group">
        <label for="vWhere" class="control-label">Where</label>
        <div class="controls">
          <input type="text" id="vTitle" style="width:100%;" placeholder="New York, NY">
        </div>
      </div>

      <div class="control-group new-user-data">
        <label for="vWhen" class="control-label">Dealine</label>
        <div class="controls">
          <input min="1914-01-01" max="2015-02-12" value="2015-02-12" type="date"/>
          <span class="help-block">When do you want to complete this goal?</span>
        </div>
      </div>

      <div class="control-group new-user-data">
        <label for="vDuration" class="control-label">Photo</label>
        <div class="controls">
          <input type="file" placeholder="Upload Photo">
        </div>
      </div>
    </form>
    
    <div class="text-center dis-block padded" style="margin-bottom:20px;"><hr>
      <button class="btn btn-black exit"><i class="fa fa-plus"></i> Add this Goal</button>
    </div>
</div>