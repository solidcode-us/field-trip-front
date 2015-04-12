<!-- Food Menu -->
<Section class="well-box-in food-menu">
  <div class="dis-block" style="margin:0 0 15px;">
    <select style="font-size:16px; font-weight:600;">
    	<option>All Dishes</option>
        <option>Signature Dishes</option>
        <option>Vegetarian</option>
        <option>Vegan</option>
        <option>Deserts</option>
        <option>Gluten Free</option>
    </select>
  </div>
    
  <!-- MasterSlider Template Style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/masterslider/style/ms-staff-style.css" />		
  <!-- MasterSlider Template Style -->
  <link href='<?php echo base_url(); ?>public/assets/masterslider/style/ms-caro3d.css' rel='stylesheet' type='text/css'>    
      
  <!-- template -->
  <div class="ms-staff-carousel ms-round">
      <!-- masterslider -->
      <div class="master-slider" id="food">
          <div class="ms-slide">
              <img src="../masterslider/blank.gif" data-src="http://secretlifeofachefswife.com/wp-content/uploads/2011/06/raspberry_poppyseed_salad-2.jpg"/>  
              <div class="ms-info">
                  <h2>Raspberry Mixed Greens Salad</h2>
                  <h3><strong>$10.00</strong> <span class="dot"></span> <em>200 <small>calories</small></em></h3>
                  <p>Mixed Greens, Fresh Raspberries, Goat Cheese, Candied Pecans, Raspberry Balsamic Vinaigrette</p>
                  <button class="btn btn-info"><i class="fa fa-heart text-error"></i> Add to Favorites</button>
              </div>     
          </div>
          <div class="ms-slide">
              <img src="../masterslider/blank.gif" data-src="http://d5u4si4z0f8i6.cloudfront.net/reviews/4897218/thumb_275.jpg"/>  
              <div class="ms-info">
                  <h2>Grilled Ahi Tuna</h2>
                  <h3><strong>$33.00</strong> <span class="dot"></span> <em>365 <small>calories</small></em></h3>
                  <p>Sweet Potato Mash, Sautéed Broccolini, Sweet Soy & Citrus Beurre Blanc</p>
                  <button class="btn btn-info"><i class="fa fa-heart text-error"></i> Add to Favorites</button>
              </div>     
          </div>
          <div class="ms-slide">
              <img src="../masterslider/blank.gif" data-src="http://d5u4si4z0f8i6.cloudfront.net/reviews/4762254/thumb_275.jpg"/>  
              <div class="ms-info">
                  <h2>Shrimp 'n Grits</h2>
                  <h3><strong>$14.00</strong> <span class="dot"></span> <em>285 <small>calories</small></em></h3>
                  <p>Applewood Smoked Bacon, Trugole Cheese, Maple Gastrique</p>
                  <button class="btn btn-info"><i class="fa fa-heart text-error"></i> Add to Favorites</button>
              </div>     
          </div>
          <div class="ms-slide">
              <img src="../masterslider/blank.gif" data-src="https://www.thefishmarket.com/include/images/Maine-Lobster.jpg"/>  
              <div class="ms-info">
                  <h2>Maine Lobsters</h2>
                  <h3><strong>Market Price</strong> <span class="dot"></span> <em>350 <small>calories</small></em></h3>
                  <p>Drawn Butter, Poached Garlic Mashed Potatoes. Pounds: 2Lbs, 3Lbs</p>
                  <button class="btn btn-info"><i class="fa fa-heart text-error"></i> Add to Favorites</button>
              </div>     
          </div>
  
          <div class="ms-slide">
              <img src="../masterslider/blank.gif" data-src="http://d5u4si4z0f8i6.cloudfront.net/reviews/4897220/thumb_275.jpg"/>  
              <div class="ms-info">
                  <h2>Florida Cioppino</h2>
                  <h3><strong>$37.00</strong> <span class="dot"></span> <em>350 <small>calories</small></em></h3>
                  <p>Mussels, Calamari, Shrimp, Bay Scallops, Fish Pieces, Basil & Fresh Tomato Sautéed with Garlic & Shallots, Served Over Orechiette Pasta</p>
                  <button class="btn btn-info"><i class="fa fa-heart text-error"></i> Add to Favorites</button>
              </div>     
          </div>
  
          <div class="ms-slide">
              <img src="../masterslider/blank.gif" data-src="http://steamykitchen.com/wp-content/uploads/2010/12/perfect-prime-rib-recipe-3942.jpg"/>  
              <div class="ms-info">
                  <h2>Slow Roasted Prime Rib of Beef</h2>
                  <h3><strong>$36.00</strong> <span class="dot"></span> <em>500 <small>calories</small></em></h3>
                  <p>Poached Garlic Mashed Potatoes, Natural Jus, Sautéed Green Beans</p>
                  <button class="btn btn-info"><i class="fa fa-heart text-error"></i> Add to Favorites</button>
              </div>     
          </div>
      </div>
      <!-- end of masterslider -->
      <div class="ms-staff-info" id="staff-info"> </div>
  </div>
  <!-- end of template -->
</Section>
<!-- Food Menu END -->

<style>
.ms-staff-carousel.ms-round .ms-slide-bgcont {
    border: 1px solid #dedede;
    border-bottom: 2px solid #dedede;
    border-radius: 10%;
	margin:0;
}
.ms-info p {padding:0 15%;}
@media (max-width: 479px){
.ms-info p {padding:0;}
}
</style>

<script type="text/javascript">	

    var food = new MasterSlider();
    food.setup('food' , {
        loop:true,
        width:200,
        height:150,
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