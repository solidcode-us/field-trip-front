<!-- Vacation Days -->
<Section class="well-box-in food-menu">
  <!-- MasterSlider Template Style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/style/ms-staff-style.css" />		
  <!-- MasterSlider Template Style -->
  <link href='<?php echo base_url(); ?>public/assets/masterslider/style/ms-caro3d.css' rel='stylesheet' type='text/css'>    
      
  <!-- template -->
  <div class="ms-staff-carousel ms-round">
      <!-- masterslider -->
      <div class="master-slider" id="food">
          <div class="ms-slide">
              <div class="ms-slide-bgcont" style="height:100%;">Day 1</div> 
              <div class="ms-info">
                  <h2>Rio de Janeiro</h2>
                  <h3><em><small>Rio de Janeiro, Brazil</small></em> <span class="dot"></span> <span title="Accommodation">Ipanema Plaza</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
              </div>     
          </div>
          <div class="ms-slide">
              <div class="ms-slide-bgcont" style="height:100%;">Day 2</div> 
              <div class="ms-info">
                  <h2>Rio de Janeiro - Foz do Iguaçu</h2>
                  <h3><em><small>Foz do Iguaçu, Brazil</small></em> <span class="dot"></span> <span title="Accommodation">Belmond Hotel Das Cataratas</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
              </div>     
          </div>
          <div class="ms-slide">
              <div class="ms-slide-bgcont" style="height:100%;">Day 3</div> 
              <div class="ms-info">
                  <h2>Foz do Iguaçu - Salvador</h2>
                  <h3><em><small>Salvador, Brazil</small></em> <span class="dot"></span> <span title="Accommodation">Pestana Convento do Carmo</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
              </div>     
          </div>
          <div class="ms-slide">
              <div class="ms-slide-bgcont" style="height:100%;">Day 4</div> 
              <div class="ms-info">
                  <h2>Salvador</h2>
                  <h3><em><small>Salvador, Brazil</small></em> <span class="dot"></span> <span title="Accommodation">Pestana Convento do Carmo</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
              </div>     
          </div>
          <div class="ms-slide">
              <div class="ms-slide-bgcont" style="height:100%;">Day 5</div> 
              <div class="ms-info">
                  <h2>Salvador</h2>
                  <h3><em><small>Salvador, Brazil</small></em> <span class="dot"></span> <span title="Accommodation">Pestana Convento do Carmo</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
              </div>     
          </div>
          <div class="ms-slide">
              <div class="ms-slide-bgcont" style="height:100%;">Day 6</div> 
              <div class="ms-info">
                  <h2>Salvador</h2>
                  <h3><em><small>Salvador, Brazil</small></em> <span class="dot"></span> <span title="Accommodation">Depart (Int`l Airport)</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
              </div>     
          </div>
      </div>
      <!-- end of masterslider -->
      <div class="ms-staff-info" id="staff-info"> </div>
  </div>
  <!-- end of template -->
</Section>
<!-- Vacation Days END -->

<style>
.ms-staff-carousel.ms-round .ms-slide-bgcont {
    background-color: #f5f5f5;
    color: #777;
    font-size: 24px;
    font-weight: 700;
    line-height: 29px;
    margin: 0;
    padding: 24px 18px;
    text-align: center;
    text-transform: uppercase;

	-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;
}
.ms-info p {padding:0;text-align:left;}
</style>

<script type="text/javascript">	

    var food = new MasterSlider();
    food.setup('food' , {
        loop:false,
        width:100,
        height:100,
        speed:20,
        view:'focus',
        preload:0,
        space:0,
        space:35,
        viewOptions:{centerSpace:1.6}
    });
    food.control('arrows' , {autohide:false});
    food.control('slideinfo',{insertTo:'#staff-info'});   
</script>