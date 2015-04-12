<section class="list_exp">
  <div class="dis-block">
    <select class="drop-option">
      <option>All Years</option>
      <option>2014</option>
      <option>2013</option>
      <option>2012</option>
      <option>2011</option>
      <option>2010</option>
      <option>2009</option>
    </select>
    <input type="text" style="margin:0;" placeholder="Find...">
    <a href="#" class="add-exp-btn btn btn-black pull-right" title="Add Photos or Videos"><i class="fa fa-plus"></i> Add</a>
  </div>
  
  <div class="dis-block">
    <ul class="request-box">
        <li>
          <a href="#open-exp-btn" class="open-exp-btn" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);">
            <div class="info">
              <h4>Title</h4>
            </div>
          </a>
        </li>
        <li>
          <a href="#open-exp-btn" class="open-exp-btn" style="background-image:url(<?php echo base_url(); ?>public/assets/images/dexp/travel.png);">
            <div class="info">
              <h4>2014 Spring Break in Miami</h4>
            </div>
          </a>
        </li>
        <li>
          <a href="#open-exp-btn" class="open-exp-btn" style="background-image:url(<?php echo base_url(); ?>public/assets/images/dexp/transport.png);">
            <div class="info">
              <h4>2014 Spring Break in Miami</h4>
            </div>
          </a>
        </li>
        <li>
          <a href="#open-exp-btn" class="open-exp-btn" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_2.jpg);">
            <div class="info">
              <h4>Title</h4>
            </div>
          </a>
        </li>
        <li>
          <a href="#open-exp-btn" class="open-exp-btn" style="background-image:url(<?php echo base_url(); ?>public/assets/images/plan/img_basic.png);">
            <div class="info">
              <h4>Title</h4>
            </div>
          </a>
        </li>
        <li>
          <a href="#open-exp-btn" role="button" data-toggle="modal" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_3.jpg);">
            <div class="info">
              <h4>Title</h4>
              <p><i class="fa fa-calendar"></i>&nbsp;Date</p>
            </div>
          </a>
        </li>
    </ul>
  </div>
</section>

<!-- Delete Experience Modal -->
<div id="delete_exp" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Delete Experience</h3>
  </div>
  
  <div class="modal-body" style="font-size:16px;">
    <p>Are you sure you want to delete this experience?</p>
    <header class="exp-header muted">
      <h3>Ride an Elephant in Thailand</h3>
      <p><strong>Maha Sarakham, Thailand&nbsp;&#183;</strong>&nbsp;Aug 14, 2013</p>
    </header>
  </div>
  
  <div class="modal-footer">
    <button class="btn btn-black">Yes</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true" href="#open_exp" role="button" data-toggle="modal">No</button>
  </div>
  
</div>
<!-- Delete Experience Modal end-->

<!-- Open Photos -->
<div class="open_exp media-modal well-box-in" style="padding:0;">
    <div class="exp-header">2014 Spring Break in Miami <a href="#" class="close-exp-btn close-x"><i class="fa fa-times"></i></a></div>
  
    <section class="media">
      <div id="myCarousel" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item photos" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);"></div>
          <div class="item photos" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_1.jpg);"></div>
          <div class="item photos" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_2.jpg);"></div>
          <div class="item photos" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_3.jpg);"></div>
          <div class="item photos" style="background-image:url(<?php echo base_url(); ?>public/assets/images/dexp/discover.png);"></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
    </section>
    
    <section class="info">
      <div class="dis-block text-center">
        <i class="fa fa-map-marker muted"></i>&nbsp;<strong style="margin-right:20px;">Miami, Florida</strong>
        <i class="fa fa-calendar muted"></i>&nbsp;Aug 14, 2013
      </div>
      
      <hr style="margin:5px 0 0;">

      <h4>What happened</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus.</p>

      <h4>Who was there</h4>
      <ul class="exp-tags">
        <li><a href="#">Alex King</a></li>
        <li><a href="#">Allison Pearce</a></li>
        <li><a href="#">Christiano Ronaldo</a></li>
        <li><a href="#">Jennifer Aniston</a></li>
        <li><a href="#">Lionel Messi</a></li>
        <li><a href="#">Britany Avila</a></li>
      </ul>
      
      <h4>Experienced</h4>
      <ul class="exp-tags">
        <li><a href="<?php echo base_url(); ?>itinerary/activity">Six Flags White Water</a></li>
        <li><a href="<?php echo base_url(); ?>itinerary/food">Katana Japanese Restaurant</a></li>
        <li><a href="<?php echo base_url(); ?>itinerary/lodging">53rd floor Luxury Triplex Penthouse</a></li>
        <li><a href="<?php echo base_url(); ?>itinerary/travel">2014 Ferrari 485 Italia</a></li>
        <li><a href="<?php echo base_url(); ?>itinerary/vacation">Vacation to Brazil</a></li>
      </ul>

      <h4>Goals Completed</h4>
      <ul class="exp-tags">
        <li>Travel to Miami</li>
        <li>Visit Miami Zoo</li>
      </ul>
    </section>
    <section class="exp-footer">
      <a class="edit-exp-btn" href="#" title="Edit this experience."><i class="fa fa-pencil"></i><p>Update</p></a>
      <a href="#" title="Delete this experience"><i class="fa fa-trash-o"></i><p>Delete</p></a>
    </section>
</div>
<!-- Open Photos END -->

<!-- Edit Photos -->
<div class="edit_exp media-modal well-box-in" style="padding:0;">
    <div class="exp-header"><input type="text" value="2014 Spring Break in Miami"> <a href="#" class="close-edit-exp-btn close-x"><i class="fa fa-times"></i></a></div>
  
    <section class="media">
      <ul class="people">
          <li>
            <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);" title="Delete this Photo"><i class="fa fa-times fa-3x"></i></a>
          </li>
          <li>
            <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_1.jpg);" title="Delete this Photo"><i class="fa fa-times fa-3x"></i></a>
          </li>
          <li>
            <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_2.jpg);" title="Delete this Photo"><i class="fa fa-times fa-3x"></i></a>
          </li>
          <li>
            <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/home_bg/img_3.jpg);" title="Delete this Photo"><i class="fa fa-times fa-3x"></i></a>
          </li>
          <li>
            <a href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/dexp/discover.png);" title="Delete this Photo"><i class="fa fa-times fa-3x"></i></a>
          </li>
          
          <li>
            <a href="#add_people" role="button" data-toggle="modal" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_1.png);" title="Add photos"><i class="fa fa-plus fa-3x"></i></a>
          </li>
      </ul>
    </section>
    
    <section class="info">
      <div class="dis-block text-center">
        <div class="input-prepend">
          <span class="add-on"><i class="fa fa-map-marker"></i></span>
          <input type="text" id="type" maxlength="100" value="Miami, Florida">
        </div>
        <div class="input-prepend">
          <span class="add-on"><i class="fa fa-calendar"></i></span>
          <input type="text" id="type" maxlength="100" value="Aug 14, 2013">
        </div>
      </div>
      
      <hr style="margin:5px 0 0;">

      <h4>What happened</h4>
      <textarea style="width:100%;"></textarea>

      <h4>Who was there</h4>
      <textarea style="width:100%;"></textarea>

      <h4>Goals Completed</h4>
      <textarea style="width:100%;"></textarea>
    </section>
    <section class="exp-footer">
      <a class="close-edit-exp-btn" href="#"><i class="fa fa-download"></i><p>Save</p></a>
    </section>
</div>
<!-- Edit Photos END -->

<!-- Add Photos -->
<div class="add_exp media-modal well-box-in" style="padding:0;">
    <div class="exp-header"><input type="text" placeholder="Album title"> <a href="#" class="close-add-exp-btn close-x"><i class="fa fa-times"></i></a></div>
  
    <section class="media">
      <ul class="people">
          <li>
            <a href="#add_people" role="button" data-toggle="modal" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_1.png);" title="Add photos"><i class="fa fa-plus fa-3x"></i></a>
          </li>
      </ul>
    </section>
    
    <section class="info">
      <div class="dis-block text-center">
        <div class="input-prepend">
          <span class="add-on"><i class="fa fa-map-marker"></i></span>
          <input type="text" id="type" maxlength="100" placeholder="Where...">
        </div>
        <div class="input-prepend">
          <span class="add-on"><i class="fa fa-calendar"></i></span>
          <input type="text" id="type" maxlength="100" placeholder="When...">
        </div>
      </div>
      
      <hr style="margin:5px 0 0;">

      <h4>What happened</h4>
      <textarea style="width:100%;"></textarea>

      <h4>Who was there</h4>
      <textarea style="width:100%;"></textarea>

      <h4>Goals Completed</h4>
      <textarea style="width:100%;"></textarea>
    </section>
    <section class="exp-footer">
      <a class="close-add-exp-btn" href="#"><i class="fa fa-download"></i><p>Save</p></a>
    </section>
</div>
<!-- Add Photos END -->