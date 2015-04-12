<ul class="request-box" style="padding:0;">
    <li>
      <a href="<?php echo base_url(); ?>offers/activity" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);">
        <div class="progress"><div class="bar" style="width:91%;">91% Match</div></div>
        <div class="info">
          <h4>Activity offer template</h4>
          <p><i class="fa fa-clock-o"></i>&nbsp;Available Now - 7:00 PM</p>
          <p><i class="fa fa-map-marker"></i>&nbsp;West Palm Beach, FL</p>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php echo base_url(); ?>offers/event" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);">
        <div class="progress"><div class="bar" style="width:69%;">69% Match</div></div>
        <div class="info">
          <h4>Event offer template</h4>
          <p><i class="fa fa-calendar"></i>&nbsp;Fri. Aug 15, 2014&nbsp;<i class="fa fa-clock-o"></i>&nbsp;8:00 PM</p>
          <p><i class="fa fa-map-marker"></i>&nbsp;Miami Beach, FL</p>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php echo base_url(); ?>offers/lodging" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);">
        <div class="progress"><div class="bar" style="width:69%;">69% Match</div></div>
        <div class="info">
          <h4>Lodging offer template</h4>
          <p><i class="fa fa-home"></i>&nbsp;Apt / Condo&nbsp;<span class="dot"></span>&nbsp;3 bd<span class="dot"></span>3 ba</p>
          <p><i class="fa fa-map-marker"></i>&nbsp;Miami Beach, FL</p>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php echo base_url(); ?>offers/dining" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_thumb.png);">
        <div class="progress"><div class="bar" style="width:69%;">69% Match</div></div>
        <div class="info">
          <h4>Dining offer template</h4>
          <p><i class="fa fa-cutlery"></i>&nbsp;Japanese&nbsp;<span class="dot"></span>&nbsp;<i class="fa fa-clock-o"></i>&nbsp;Open - 8:00 PM</p>
          <p><i class="fa fa-map-marker"></i>&nbsp;West Palm Beach, FL</p>
        </div>
      </a>
    </li>
</ul>

<style>
.request-box {
    float: left;
    list-style: outside none none;
    margin: 0;
    padding: 20px 0;
    position: relative;
    text-align: left;
    width: 100%;
}
.request-box li {
    display: inline-block;
    float: left;
    height: auto;
    margin: 0;
    padding: 3px;
    width: 33.3333%;
}
.request-box li > a {box-shadow:none;height:212px;}

@media (max-width: 479px){
.request-box li {width: 100%;}
}

@media (min-width: 480px) and (max-width: 1024px){
.request-box li {width: 50%;}
}
</style>