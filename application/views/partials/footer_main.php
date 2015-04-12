<footer class="footer">
  <ul style="padding:0" class="unstyled">
    <li>©2014 FIELD-TRIP LLC. All rights reserved</li>
  </ul>
</footer>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery.MetaData.js"></script>

<script type="text/javascript">
var show_die="<?php echo @$showdie; ?>";
$(function(){	            
	$('.tip').tooltip({
	  trigger:"hover",
	  placement:"bottom"
	})
	
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$('.dropdown-toggle').dropdown()
	
	$("select.chzn-select").chosen({"disable_search_threshold": 10});
	
	bindDatesToggle();
	
	$( "#datepicker" ).datepicker({ dateFormat: "DD, MM d, yy"});
});
</script>

</div>
</body>

</html> 