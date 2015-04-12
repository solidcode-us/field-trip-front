<div class="dis-block text-center">
  <h4><strong>My Vacations</strong></h4>
</div>

<ul class="people my-vacations">
    <li>
      <a href="#" id="add-wants" style="background-image:url(<?php echo base_url(); ?>public/assets/images/icons/plan_vacation.png);border:none;box-shadow:none; background-color:transparent;"></a>
      <p class="muted">Plan a Vacation</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(http://media.cmgdigital.com/shared/lt/lt_cache/aresize/600x600/img/photos/2014/02/17/c4/32/Ultra-Music-Fest-Miami.jpg);"></a>
      <p>Spring Break 2015</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(http://www.myfreephotoshop.com/wp-content/uploads/2013/08/397.jpg);"></a>
      <p>Summer 2015</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(https://punkmeetspink.files.wordpress.com/2011/07/i_luv_ny.jpg);"></a>
      <p>Trip to New York</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(http://www.martinstavars.com/upload/photo/martin_stavars-_megalopolis_paris06.jpg);"></a>
      <p>Trip to Paris</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_vacation.png);"></a>
      <p>Family Reunion</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(http://www.lizardisland.net/index/pool-1503.jpg);"></a>
      <p>Fall getaway 2015</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(http://www.digsdigs.com/photos/thanksgiving-decoration-in-autumn-colors-19.jpg);"></a>
      <p>Thanksgiving 2015</p>
    </li>

    <li>
      <a href="#view_content" data-toggle="tab" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_vacation.png);"></a>
      <p>New Years Eve 2015</p>
    </li>
</ul>


<div id="wants-nav" class="right-nav wide">
    <section class="dis-block padded">
    	<h3 style="float:left;margin:0;">Plan a Vacation</h3>
        <button class="close exit"><i class="fa fa-times fa-lg"></i></button>
    </section>

    <form class="form-horizontal" style="padding:30px 15px 0;">
      <div class="control-group">
        <label for="vTitle" class="control-label">Title</label>
        <div class="controls">
          <input type="text" id="vTitle" style="width:100%;">
          <span class="help-block">Name your vacation.</span>
        </div>
      </div>

      <div class="control-group">
        <label for="vWhere" class="control-label">Destination</label>
        <div class="controls">
          <select id="vWhere" style="min-width:206px;">
            <option>Miami, FL</option>
            <option>Miami Beach, FL</option>
            <option>Fort Lauderdale, FL</option>
            <option>West Palm Beach, FL</option>
          </select>
          <span class="help-block">Where do you want to go?</span>
        </div>
      </div>

      <div class="control-group">
        <label for="vWhen" class="control-label">When</label>
        <div class="controls">
          <input type="text" id="vWhen">
          <span class="help-block">When do you want to go?</span>
        </div>
      </div>

      <div class="control-group">
        <label for="vDuration" class="control-label">Duration</label>
        <div class="controls">
          <select id="vDuration"><option>3 Days</option><option>6 Days</option><option>7+ Days</option></select>
          <span class="help-block">How long do you want to stay?</span>
        </div>
      </div>

      <div class="control-group">
        <label for="vImage" class="control-label">Photo</label>
        <div class="controls">
          <input type="file" id="vImage" placeholder="Upload a photo" style="width:100%;">
          <span class="help-block">Upload a photo for your vacation.</span>
        </div>
      </div>
    </form>
    
    <div class="text-center dis-block padded" style="margin-bottom:20px;"><hr>
      <a href="#view_content" data-toggle="tab" class="btn btn-blue exit">Start Planning</a>
    </div>
</div>