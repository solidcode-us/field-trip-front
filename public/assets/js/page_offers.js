  $(function() {	
	$('#save-info').click(function() {
		$('#save-btn').fadeOut();
	});

	$('.menu-list li').click(function() {
		$('#save-btn').show();
	});

    $('#date-select').on('change', function() {
      if ( this.value == 'today'){
        $("#this-week").hide();
        $("#select-date").hide();
      }
      if ( this.value == 'this-week'){
        $("#this-week").show();
        $("#select-date").hide();
      }
      if ( this.value == 'this-weekend'){
        $("#this-week").hide();
        $("#select-date").hide();
      }
      if ( this.value == 'select-date'){
        $("#this-week").hide();
        $("#select-date").show();
      }
    });

    $('#wants-select').on('change', function() {
      if ( this.value == 'idk'){
        $("#wants-menu").hide();
        $("#wants-items").hide();
      }
      if ( this.value == 'wants'){
        $("#wants-menu").show();
        $("#wants-items").show();
      }
    });


/* For Vacation Title */
	$('#vacation-title-input').click(function() {
		$('#vacation-title-save').fadeIn();
	});
	$('#vacation-title-save').click(function() {
		$('#vacation-title-save').fadeOut();		
	});
/* For Vacation Title END */

/* ADD NEW CREDIT CARD */
    $('#add_new_card').change(function(){
            if($('#add_new_card').is(':checked')){
                    $('#row_new_card').show();
                    $('#my_card').hide();
            }else{
                    $('#row_new_card').hide();
                    $('#my_card').show();
            }
    });
/* ADD NEW CREDIT CARD END */

});      
