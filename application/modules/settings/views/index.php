<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="profile">

<section class="sec-left">

  <section class="well-box-in" style="padding:0;overflow:hidden;">
    <ul class="nav nav-pills" style="border-color:#FFF;">
      <li class="active"><a href="#preferences_1" data-toggle="tab" title="Things i Love, Like, and Don't like">Interests <i class="fa fa-angle-right"></i></a></li>
      <!--<li><a href="#preferences_2" data-toggle="tab" title="Things i Love, Like, and Don't like">Diet <i class="fa fa-angle-right"></i></a></li>-->
      
      <li class="section">Account Settings</li>
      <li><a href="#account_1" data-toggle="tab" title="Change your basic account and language settings.">Account <i class="fa fa-angle-right"></i></a></li>
      <li><a href="#account_2" data-toggle="tab" title="Change your password or recover your current one.">Password <i class="fa fa-angle-right"></i></a></li>
      <!--<li><a href="#account_3" data-toggle="tab" title="Control how Field-Trip! communicates with you.">Notifications <i class="fa fa-angle-right"></i></a></li>
      <li><a href="#account_4" data-toggle="tab" title="Change your security and privacy settings.">Privacy <i class="fa fa-angle-right"></i></a></li>
      <li><a href="#account_5" data-toggle="tab" title="These are the apps that can access your Field-Trip account.">Apps <i class="fa fa-angle-right"></i></a></li>-->
      
      <li class="section">Billing</li>
      <li><a href="#billing_plan" data-toggle="tab" title="Membership Plan">Membership <i class="fa fa-angle-right"></i></a></li>
      <li><a href="#billing_payment" data-toggle="tab" title="Payment Methods">Payment Methods <i class="fa fa-angle-right"></i></a></li>
      <li><a href="#billing_history" data-toggle="tab" title="Payment History">Payment History <i class="fa fa-angle-right"></i></a></li>
    </ul>
  </section>
  
</section>

<section class="sec-right">
  <div class="tab-content settings-content" style="padding:0 20px;">
      <!-- Preferences -->
        <?php $this->load->view('settings/preferences.php'); ?>
      <!-- Preferences END -->
  
      <!-- Account -->
        <?php $this->load->view('settings/account.php'); ?>
      <!-- Account END -->
  
      <!-- Notifications -->
      <div class="tab-pane fade" id="notif">
        <?php $this->load->view('settings/notif.php'); ?>
      </div>
      <!-- Notifications END -->
    
      <!-- Billing -->
        <?php $this->load->view('settings/billing.php'); ?>
      <!-- Billing END -->
  </div>
</section>

</div>

<style>
.sec-left .nav-pills {float:left;margin:0;}
.sec-left .nav-pills > li,
.sec-left .nav-pills > li > a {width:100%;text-align:left;float:left;margin:0;border-radius:0;}
.sec-left .nav-pills li .badge,
.sec-left .nav-pills li .fa-angle-right {float:right;}

.sec-left .nav-pills .section {
    border-bottom: 1px solid #dedede;
    color: #555;
    font-size: 14px;
    font-weight: 600;
    line-height: normal;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}

.nav-tabs {border-bottom: 1px solid #ddd;font-size:20px;font-weight:300;margin:0 0 10px;}
.nav-tabs > li > a {padding: 2px 12px 5px;}

.tab-content .tab-heading {color:#999;margin-bottom:15px;}

.tab-sec-heading {margin:20px 0 0;float:left;width:100%;padding:0 7.5px;font-size:13px;font-weight:700;color:#555;}

.list-data {width:414px;}
.list-data button {margin-top:15px;}

.users-list .user-img {border-color:#FFF;border-radius: 12px;}

.checkbox {font-size:14px;font-weight:300;}

.table th {text-align:left;}

select {font-weight:400;}

@media (min-width: 320px) and (max-width: 599px){
.nav-pills li {width:100%; padding:0 10px;}
#account .tab-pane,
#notif .tab-pane,
#billing .tab-pane {padding-left:15px; padding-right:15px;}
.nav-tabs {font-size:14px;font-weight:400;}

}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_user.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->