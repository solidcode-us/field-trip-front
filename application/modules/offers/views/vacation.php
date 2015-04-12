<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="offers"><div class="tab-content">
    <!-- View Vacations -->
    <div class="tab-pane fade in active" id="view_vacations">
        <?php $this->load->view('offers/lists/view_vacations.php'); ?>
    </div>
    <!-- View Vacations END -->
  
    <!-- View Content -->
    <div class="tab-pane fade" id="view_content">
      <section class="sidebar">  
        <?php $this->load->view('offers/navs/nav_vacation.php'); ?>
      </section>
      
      <section class="page-content">
        <div class="dis-block vacation-title" style="padding:0 20px 20px;">
          <a href="#view_vacations" data-toggle="tab" title="My Vacations"><i class="fa fa-arrow-circle-left"></i></a>
          <input type="text" value="Spring Break 2015" id="vacation-title-input" title="Click to edit Title">
          <button class="btn btn-info btn-sm" id="vacation-title-save">Save</button>
        </div>
        
        <div class="tab-content">
            <!-- List -->
            <div class="tab-pane fade in active" id="list_view">
                <?php $this->load->view('offers/lists/list_vacation.php'); ?>
            </div>
            <!-- List END -->
          
            <!-- Map -->
            <div class="tab-pane fade" id="map_view">
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
              <?php $this->load->view('offers/wants/wants_vacation.php'); ?>
            </div>
            <!-- Looking for END -->
        </div>
      </section>
    </div>
    <!-- View Content END -->
</div></div>

<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->