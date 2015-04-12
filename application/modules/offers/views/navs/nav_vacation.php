<ul class="menu-list">
  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
    <input type="text" id="" maxlength="100" placeholder="Enter a date" value="Fri. Jul 4, 2015">
    <span class="right-arrow"><i class="fa fa-caret-down"></i></span>
  </li>      

  <li>
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/clock.png"/></span>
    <select>
      <option>3 Days</option>
      <option>4 Days</option>
      <option>5 Days</option>
      <option>6 Days</option>
      <option>7 Days</option>
      <option>8 Days</option>
      <option>9 Days</option>
      <option>10+ Days</option>
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
    <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/vacation.png"/></span>
    <a href="#wants" data-toggle="tab" id="wants-text">Preferences</a>
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