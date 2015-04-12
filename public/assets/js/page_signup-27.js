$(document).ready(function(){

/*Step Buttons */
	$('.step-1-btn').click(function() {
		$(".steps-block").hide();
		$(".step-1").fadeIn();
	});
	$('.step-2-btn').click(function() {
		$(".steps-block").hide();
		$(".step-2").fadeIn();
	});
	$('.step-3-btn').click(function() {
		$(".steps-block").hide();
		$(".step-3").fadeIn();
	});
	$('.step-4-btn').click(function() {
		$(".steps-block").hide();
		$(".step-4").fadeIn();
	});
	$('.step-5-btn').click(function() {
		$(".steps-block").hide();
		$(".step-5").fadeIn();
	});
	$('.step-6-btn').click(function() {
		$(".steps-block").hide();
		$(".step-6").fadeIn();
	});

/* MEMBERSHIP SELECTION  */
    $('.membership-select').on('change', function() {
      if ( this.value == 'year1'){
        $(".year1").show();
        $(".mo6").hide();
        $(".mo3").hide();
        $(".hr24").hide();
      }
      if ( this.value == 'mo6'){
        $(".year1").hide();
        $(".mo6").show();
        $(".mo3").hide();
        $(".hr24").hide();
      }
      if ( this.value == 'mo3'){
        $(".year1").hide();
        $(".mo6").hide();
        $(".mo3").show();
        $(".hr24").hide();
      }
      if ( this.value == 'hr24'){
        $(".year1").hide();
        $(".mo6").hide();
        $(".mo3").hide();
        $(".hr24").show();
      }
    });
/* MEMBERSHIP SELECTION END */
	
});