<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/slider.css">


<div style="padding:0 20px;"><div class="well-box-in">
  <div class="dis-block text-center" style="margin-bottom:20px;">
    <h4><strong>What are you looking for?</strong></h4>
  </div>
  
  <form class="form-horizontal padded">
    <div class="control-group">
      <label for="type">Occasion</label>
      <div class="dis-block">
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> Vacation</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Honeymoon</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Birthday</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox4" value="option4"> Anniversary</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox5" value="option5"> Family Reunion</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox6" value="option6"> Business</label>
      </div>
    </div>

    <div class="control-group" style="margin:0;">
      <label for="type">Include</label>
      <div class="dis-block">
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> Activities</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Accommodation</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> Flights</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox4" value="option4"> Tour Guides</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox5" value="option5"> Transportation</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox6" value="option6"> Meals</label>
      </div>
    </div>

    <div class="control-group" style="margin-top:15px;">
      <label for="price">Budget per Person</label>
      <div class="dis-block">
        <div class="dis-block"><input id="price-range" type="text" style="width:800%;" data-slider-min="500" data-slider-max="20000" data-slider-step="500" data-slider-value="[500,20000]"/></div>
        <div class="dis-block price-range-text">
          <span class="pull-left">$500</span>
          <span class="pull-right">$20000+</span>
        </div>
      </div>
    </div>

    <div class="control-group">
      <label for="type">Vacation Style</label>
      <div class="dis-block">
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> Active Adventures</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> African Safari</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Exclusive Access</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Expedition Cruises</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Family</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Food &amp; Wine</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Global Festivals</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Land &amp; Cruise Series</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Ocean Cruises</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Rail Journeys</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> River Cruises</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Shore Excursions</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Small Group Tours</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Villas</label>
        <label class="checkbox inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> Yacht Charters</label>
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