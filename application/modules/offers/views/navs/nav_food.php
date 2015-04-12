<ul class="menu-list">
  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
    <select id="date-select">
      <option value="today">Today</option>
      <option value="this-week">This Week</option>
      <option value="this-weekend">This Weekend</option>
      <option value="select-date">Select a date</option>
    </select>
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>      

  <li id="this-week" style="display:none;">
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
    <select>
      <option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option>
      <option>Friday</option><option>Saturday</option><option>Sunday</option>
    </select>
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>      

  <li id="select-date" style="display:none;">
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
    <input type="text" id="" maxlength="100" placeholder="Enter a date" value="Friday Jan 13, 2015">
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>      

  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/clock.png"/></span>
    <select>
      <option>Now</option>
      <option>Morning</option>
      <option>Afternoon</option>
      <option>Evening</option>
      <option>Anytime</option>
    </select>
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>      

  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/map-pin.png"/></span>
    <select>
      <option>Miami, FL</option>
      <option>Miami Beach, FL</option>
      <option>Fort Lauderdale, FL</option>
      <option>West Palm Beach, FL</option>
    </select>
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>      
  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/group.png"/></span>
    <a href="#who" data-toggle="tab" id="who-text">6 people going</a>
    <span class="right-arrow"><i class="fa fa-angle-right"></i></span>
  </li>
  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/food.png"/></span>
    <a href="#wants" data-toggle="tab" id="wants-text">What to eat</a>
    <span class="right-arrow"><i class="fa fa-angle-right"></i></span>
  </li>
</ul>
<div id="save-btn" style="display:none;margin:5px 0 15px;" class="dis-block text-center">
  <button href="#list_view" data-toggle="tab" class="btn btn-lg btn-blue" id="save-info">Submit Request</button>
</div>

<div class="btn-group text-center dis-block" data-toggle="buttons-radio">
  <button href="#list_view" data-toggle="tab" class="btn active"><i class="fa fa-th"></i> List</button>
  <button href="#map_view" data-toggle="tab"class="btn"><i class="fa fa-map-marker"></i> Map</button>
</div>