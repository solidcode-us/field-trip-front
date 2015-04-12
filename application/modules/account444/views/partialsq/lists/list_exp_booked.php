<ul class="unstyled search-list">
    
    <?php foreach ($booked_experiences as $row) { ?>
    <?php $timestamp = strtotime($row['date_sold']);
    $day = date('l', $timestamp);
    $time = date('g.i A', $timestamp);  ?>
    
    <li>
      <section class="list-item" style="background-image:url(<?php echo $this->config->item('cdn_images_http_path').$row['photo']; ?>);">
        <p class="price-tag"><?php echo $day; ?></p>
        <div class="li-info">          
          <div class="li-title"><a href="#"><?php echo $row['experience'];?></a></div>
          <div class="left-part">
             <span class="li-date"><i class="fa fa-user"></i> <a href="#"><?php echo $row['first_name'];?></a></span>
             <span class="li-date"><button class="btn  btn-blue">Reservation</button></span>
          </div>
          
          <div class="right-part">
             <span class="li-days"><i class="fa fa-clock-o"></i> <strong><?php echo $time; ?></strong></span>
             <span class="li-days"><button class="btn ">Directions</button></span>
          </div>
        </div>
      </section>
    </li>
    <?php } ?>
    
</ul>

<style>
.price-tag {
  position:absolute;
  padding:5px;
  color:#FFF;
  font-size:22px;
  font-weight:400;
  text-transform:uppercase;
  text-shadow:0 0 3px #000;
  left:0;
  top:0;
  z-index:1;
  opacity:.9;
}
</style>