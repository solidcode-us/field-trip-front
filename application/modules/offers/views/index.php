<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="offers">

<section class="sidebar">  
  <?php $this->load->view('offers/navs/nav_activities.php'); ?>
</section>

<section class="page-content">
<div class="tab-content" >
    <!-- List -->
    <div class="tab-pane fade in active" id="list_view">
        <?php $this->load->view('offers/lists/list_activities.php'); ?>
    </div>
    <!-- List END -->
  
    <!-- Map -->
    <div class="tab-pane fade" id="map_view" style=" display:inline-block;">
      <?php $this->load->view('partials/lists/map.php'); ?>
    </div>
    <!-- Map END -->

    <!-- Who's going -->
    <div class="tab-pane fade" id="who">
      <?php $this->load->view('partials/lists/people_going.php'); ?>
    </div>
    <!-- Who's going END -->

    <!-- Looking for -->
    <div class="tab-pane fade" id="wants">
      <?php $this->load->view('offers/wants/wants_todo.php'); ?>
    </div>
    <!-- Looking for END -->
</div>
</section>

</div>

<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->