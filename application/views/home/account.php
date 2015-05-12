<!-- HEADER -->
<?php $this->load->view('partials/home_header.php'); ?>
<!-- HEADER END-->

  
<!-- BANNER -->
<div class="banner banner-nav"><div class="container">
  <div class="tnav">
    <a href="<?php echo base_url(); ?>"><img class="pull-left" src="<?php echo base_url()?>/public/assets/images/logo2.png" alt="Field-Trip! Logo"></a>
    <ul class="menu-box">
     <li><a href="<?php echo base_url(); ?>home/itinerary">My Itinerary</a></li>
     <li><a href="<?php echo base_url(); ?>home/account" title="My Account">Hello, Jennifer</a></li>
    </ul>
  </div>
</div></div>
<!-- BANNER END -->

<!-- INFOMATION & BOOKING -->
<div class="sec-block exp"><div class="container">    
    <h2>Your Account</h2>
    <!-- Account -->
    <div class="well-box-in">
      <form class="form-horizontal">
        <div class="control-group">
          <label for="fname" class="control-label">Name</label>
          <div class="controls">
            <input type="text" value="Jennifer" id="fname" style="border-bottom-right-radius:0;border-top-right-radius:0;float:left;width:150px;">
            <input type="text" value="Queen" style="border-bottom-left-radius:0;border-left:medium none;border-top-left-radius:0;width:150px;">
            <span class="help-block">Enter your real name. <a href="#name_learn_more" role="button" data-toggle="modal">Learn More</a></span>
          </div>
        </div>

        <div class="control-group">
          <label for="email" class="control-label">Email</label>
          <div class="controls">
            <input type="email" value="user1@field-trip.com" id="email">
            <span class="help-block">Email will not be publicly displayed.</span>
          </div>
        </div>

        <div class="control-group">
          <label for="phone" class="control-label">Phone number</label>
          <div class="controls">
            <input type="text" value="(305) 123-4567" id="phone">
            <span class="help-block">Phone number will not be publicly displayed.</span>
          </div>
        </div>

        <div class="control-group">
          <label for="language" class="control-label">Language</label>
          <div class="controls">
            <select id="language"><option>English</option><option>Spanish</option><option>French</option></select>
          </div>
        </div>
      </form>
      <div class="dis-block" style="margin:20px 0 0;"><button class="btn">Save Changes</button></div>
    </div>
    <!-- Account END -->

    <!-- Password -->
    <h4 class="tab-heading">Change your password or recover your current one.</h4>
    <div class="well-box-in">
      <form class="form-horizontal">
        <div class="control-group">
          <label for="currentPassword" class="control-label">Current Password</label>
          <div class="controls">
            <input type="password" id="currentPassword" autocomplete="off">
            <span class="help-block"><a href="#">Forgot your password?</a></span>
          </div>
        </div>
      
        <div class="control-group">
          <label for="newPassword" class="control-label">New Password</label>
          <div class="controls">
            <input type="password" id="newPassword">
          </div>
        </div>
      
        <div class="control-group">
          <label for="verifyPassword" class="control-label">Verify Password</label>
          <div class="controls">
            <input type="password" id="verifyPassword">
          </div>
        </div>
      </form>
      <div class="dis-block" style="margin:20px 0 0;"><button class="btn">Save Changes</button></div>
    </div>
    <!-- Password END -->

    <!-- Payment Methods -->
    <h4 class="tab-heading">Change your stored credit cards information.</h4>
    <div class="well-box-in">
      <table class="table table-striped table-hover">
        <thead>
          <th>Payment Method</th>
          <th>Status</th>
          <th>Last Charged</th>
          <th>Actions</th>
        </thead>
        <tbody>
          <tr>
            <td><i class="fa fa-cc-visa fa-lg" style="margin-right:5px;"></i> My Credit Card - 0987</td>
            <td>Active</td>
            <td>7/3/2014</td>
            <td style="width:200px;">
              <button class="btn" title="Update Payment Method"><i class="fa fa-pencil-square-o"></i> Update</button>
              <button class="btn" title="Delete Payment Method"><i class="fa fa-trash-o"></i> Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="dis-block" style="margin:20px 0 0;"><button class="btn" title="Add Payment Method">Add Payment</button></div>
    </div>
    <!-- Payment Methods END -->
  
    <!-- Payment History -->
    <h4 class="tab-heading">View your payment history.</h4>
    <div class="well-box-in">
      <table class="table table-striped table-hover">
        <thead>
          <th>Receipt #</th>
          <th>Details</th>
          <th>Date</th>
          <th>Amount</th>
        </thead>
        <tbody>
          <tr>
            <td><a href="#">707151021</a></td>
            <td>Booking - Activity - Millionaire's Row Cruise®</td>
            <td>7/3/2014</td>
            <td style="width:200px;">$300</td>
          </tr>
          <tr>
            <td><a href="#">707151020</a></td>
            <td>Booking - Event - One Direction: Where We Are Tour</td>
            <td>7/2/2014</td>
            <td style="width:200px;">$1,038.40</td>
          </tr>
          <tr>
            <td><a href="#">707151019</a></td>
            <td>Membership - Premium Plan - Renewal - Monthly (recurring)</td>
            <td>7/1/2014</td>
            <td style="width:200px;">$150</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Payment History END -->

</div></div>
<!-- INFOMATION & BOOKING END -->


<script  src="<?php echo base_url(); ?>public/assets/js/page_home_exp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_home_exp.css"> 


<style>
body {background-color:#FFF;}
.sec-block.exp h2 {text-align:left;}
.tab-heading {color:#999;margin:0 0 5px;}
.table th {text-align: left;}
</style>


<!-- FOOTER -->
<?php $this->load->view('partials/home_footer.php'); ?>
<!-- FOOTER END-->