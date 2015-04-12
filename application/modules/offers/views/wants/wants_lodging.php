<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/slider.css">


<div style="padding:0 20px;"><div class="well-box-in">
  <div class="dis-block" style="margin-bottom:20px;">
    <h4><strong>What are you looking for?</strong></h4>
  </div>
  
  <form class="form-horizontal padded">
    <div class="control-group">
      <label for="type" class="control-label">Property Type</label>
      <div class="controls">
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> House</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Apt/Condo</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Houseboat</label>
      </div>
    </div>

    <div class="control-group">
      <label for="price" class="control-label">Price Range</label>
      <div class="controls">
        <div class="dis-block"><input id="price-range" type="text" style="width:800%;" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[10,1000]"/></div>
        <div class="dis-block price-range-text">
          <span class="pull-left">$10</span>
          <span class="pull-right">$1000+</span>
        </div>
      </div>
    </div>

    <div class="control-group">
      <label for="size" class="control-label">Size</label>
      <div class="controls">
        <select id="size">
          <option value="-1">Bedrooms</option>
          <option value="1">1 Bedroom</option>
          <option value="2">2 Bedrooms</option>
          <option value="3">3 Bedrooms</option>
          <option value="4">4 Bedrooms</option>
          <option value="5">5 Bedrooms</option>
          <option value="6">6 Bedrooms</option>
          <option value="7">7 Bedrooms</option>
          <option value="8">8 Bedrooms</option>
          <option value="9">9 Bedrooms</option>
          <option value="10">10 Bedrooms</option>        
        </select>
        <select name="min_bathrooms">
          <option value="-1">Bathrooms</option>
          <option value="0.0">0 Bathrooms</option>
          <option value="0.5">0.5 Bathrooms</option>
          <option value="1.0">1 Bathroom</option>
          <option value="1.5">1.5 Bathrooms</option>
          <option value="2.0">2 Bathrooms</option>
          <option value="2.5">2.5 Bathrooms</option>
          <option value="3.0">3 Bathrooms</option>
          <option value="3.5">3.5 Bathrooms</option>
          <option value="4.0">4 Bathrooms</option>
          <option value="4.5">4.5 Bathrooms</option>
          <option value="5.0">5 Bathrooms</option>
          <option value="5.5">5.5 Bathrooms</option>
          <option value="6.0">6 Bathrooms</option>
          <option value="6.5">6.5 Bathrooms</option>
          <option value="7.0">7 Bathrooms</option>
          <option value="7.5">7.5 Bathrooms</option>
          <option value="8">8+ Bathrooms</option>
        </select>
        <select name="min_beds">
          <option value="-1">Beds</option>
          <option value="1">1 Bed</option>
          <option value="2">2 Beds</option>
          <option value="3">3 Beds</option>
          <option value="4">4 Beds</option>
          <option value="5">5 Beds</option>
          <option value="6">6 Beds</option>
          <option value="7">7 Beds</option>
          <option value="8">8 Beds</option>
          <option value="9">9 Beds</option>
          <option value="10">10 Beds</option>
          <option value="11">11 Beds</option>
          <option value="12">12 Beds</option>
          <option value="13">13 Beds</option>
          <option value="14">14 Beds</option>
          <option value="15">15 Beds</option>
          <option value="16">16+ Beds</option>
        </select>

      </div>
    </div>

    <div class="control-group" style="margin:0;">
      <label for="type">Amenities</label>
      <div class="dis-block">
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> Wireless Internet</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> TV</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Pool</label>
        
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Kitchen</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Air Conditioning</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Breakfast</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Buzzer/Wireless Intercom</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Cable TV</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Carbon Monoxide Detector</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Doorman</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Dryer</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Elevator in Building</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Essentials</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Family/Kid Friendly</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Fire Extinguisher</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> First Aid Kit</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Free Parking on Premises</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Gym</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Heating</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Hot Tub</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Indoor Fireplace</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Internet</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Pets Allowed</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Safety Card</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Shampoo</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Smoke Detector</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Smoking Allowed</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Suitable for Events</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Washer</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Wheelchair Accessible</label>
      </div>
    </div>
  </form>
</div></div>

<script>
// With JQuery
$("#price-range").slider({});
</script>
<style>
.slider-selection, .slider-handle {
	-webkit-transition: all 0.2s ease-in-out;
	   -moz-transition: all 0.2s ease-in-out;
		 -o-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
}
</style>