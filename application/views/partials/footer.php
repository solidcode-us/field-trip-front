<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript">
var show_die="<?php echo @$showdie; ?>";
$(function(){	            
	$('.tip').tooltip({
	  trigger:"hover",
	  placement:"bottom"
	})
	$('.tip2').popover({
	  trigger:"hover",
	  placement:"top"
	})
	
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$('.dropdown-toggle').dropdown()
	
//	$( "#datepicker" ).datepicker({ dateFormat: "DD, MM d, yy"});

	$('.request-box label').click(function f(e) {
		if(!f.triggered) {  // only if not already triggered for this time
			f.triggered = true;
			$(this).toggleClass('on');
			setTimeout(function() {
				f.triggered = false;  // reset after both clicks are done
			}, 0);
		}
	});
	
	$('.people label').click(function f(e) {
		if(!f.triggered) {  // only if not already triggered for this time
			f.triggered = true;
			$(this).toggleClass('on');
			setTimeout(function() {
				f.triggered = false;  // reset after both clicks are done
			}, 0);
		}
	});

/* For Right Div Slider */
	$('#add-user').click(function() {
		$('#people-going-nav').toggle("slide", { direction: "right" }, 300);
		$('.left-nav').fadeOut();
	});

	$('#add-wants').click(function() {
		$('#wants-nav').toggle("slide", { direction: "right" }, 300);
		$('.left-nav').fadeOut();
	});

	$('#add-goal').click(function() {
		$('#bucketlist-nav').toggle("slide", { direction: "right" }, 300);
		$('.left-nav').fadeOut();
	});

	$('.exit').click(function() {
		$('.left-nav').fadeOut();
		$('.right-nav').fadeOut();
	});
/* For Right Div Slider END */

/* For CONNECTIONS */
    $('.connection').on('change', function() {
      if ( this.value == 'Friend'){
        $(".partner").hide();
        $(".fam").hide();
        $(".anniv").hide();
      }
      if ( this.value == 'Colleague'){
        $(".partner").hide();
        $(".fam").hide();
        $(".anniv").hide();
      }

      if ( this.value == 'Partner'){
        $(".fam").hide();
        $(".partner").show();
        $(".anniv").show();
      }
      if ( this.value == 'Family'){
        $(".partner").hide();
        $(".fam").show();
        $(".anniv").hide();
      }
    });
/* For CONNECTIONS END */

/* For AGE */
    $('.age').on('change', function() {
      if ( this.value == 'under'){
        $(".new-user-data").hide();
		$(".connection").hide();
		$(".fam").hide();
		$(".fam-young").show();
		$(".partner").hide();
      }
      if ( this.value == 'over'){
        $(".new-user-data").show();
		$(".connection").show();
		$(".fam").show();
		$(".fam-young").hide();
      }
    });
/* For AGE END */

});
function checkemail(email){
    
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    if (filter.test(email)) {
    	return true
    } else {
    	return false;
    }
}
</script>

</div></section><!-- Wrap End-->  

</section></body>


</html> 