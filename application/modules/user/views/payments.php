<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<header class="page-header" style="border:none;">
  <h1>Payments</h1>
</header>

<ul class="nav nav-pills">
  <li class="active"><a href="#pay_incoming" data-toggle="tab">Incoming</a></li>
  <li><a href="#pay_outgoing" data-toggle="tab">Outgoing</a></li>
  <li><a href="#pay_billing" data-toggle="tab">Billing</a></li>
</ul>

<div class="tab-content">
  <!-- Incoming -->
  <div class="tab-pane fade in active" id="pay_incoming">
    <table class="table table-striped">
    <!-- Payments History -->
      <thead>
       <th>Order #</th>
       <th>Description</th>
       <th>Date</th>
       <th>Amount</th>
      </thead>
      <tbody>
        <tr>
            <td>1453000432</td>
            <td>Travel Package: Go to Miami</td>
            <td>3/24/2014</td>
            <td><strong>$1,234</strong></td>
        </tr>
        <tr>
            <td>98345000431</td>
            <td>Adventure: Jet Ski Tours</td>
            <td>3/11/2014</td>
            <td><strong>$185</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Incoming END -->

  <!-- Outgoing -->
  <div class="tab-pane fade" id="pay_outgoing">
    <table class="table table-striped">
        <!-- Payments History -->
          <thead>
           <th>Transaction #</th>
           <th>Description</th>
           <th>Date</th>
           <th>Amount</th>
          </thead>
          <tbody>
            <tr>
                <td>000432</td>
                <td>Vizcaya Museum and Gardens</td>
                <td>3/24/2014</td>
                <td><strong>$90</strong></td>
            </tr>
            <tr>
                <td>000431</td>
                <td>Fairchild Tropical Botanic Garden</td>
                <td>3/11/2014</td>
                <td><strong>$125</strong></td>
            </tr>
          </tbody>
        </table>
  </div>
  <!-- Outgoing END -->

  <!-- Billing -->
  <div class="tab-pane fade" id="pay_billing">
    
    <div class="well col-2">
        <div class="col-2">
        <h4><strong>Address</strong></h4>
        <h4>123 Wall St, Apt 600<br>New York, NY 12345</h4>
        </div>
        
        <div class="col-2">
        <h4><strong>Phone</strong></h4>
        <h4>(123) 456-7890</h4>
        </div>
        
        <div style="text-align:center;clear:both;padding-top:20px;"><button class="btn btn-black">Update</button></div>
        
        <hr>
    
        <table class="table table-hover">
        <!-- Payment Methods -->
          <thead>
            <th></th>
           <th>Payment Method</th>
           <th>Status</th>
           <th>Last Charged</th>
           <th></th>
          </thead>
          <tbody>
            <tr>
                <td class="td-img">
                    <img style="width:100%;" src="<?php echo base_url(); ?>public/assets/images/img_pay_mastercard.png">
                </td>
                <td>
                <p><strong>My Debit Card</strong></p>
                <p style="margin:0;">MasterCard############1048</p>
                </td>
                <td>Active</td>
                <td>3/24/2014</td>
        
                <td style="text-align:right;">
                  <div class="btn-group">
                    <a class="dropdown-toggle btn " data-toggle="dropdown" href="#"><i class="fa fa-cog"></i>&nbsp;<i class="fa fa-caret-up"></i></a>
                    <ul class="dropdown-menu pull-right text-left" role="menu" aria-labelledby="dLabel" style="bottom: 100%; top:auto;">
                      <li><a tabindex="-1" href="#">Delete</a></li>
                      <li><a tabindex="-1" href="#">Update</a></li>
                      <li><a tabindex="-1" href="#">Set as Alternate</a></li>
                    </ul>
                  </div>
                </td>
            </tr>
            <tr>
                <td class="td-img">
                    <img style="width:100%;" src="<?php echo base_url(); ?>public/assets/images/img_pay_visa.png">
                </td>
                <td>
                <p><strong>My Credit Card</strong></p>
                <p style="margin:0;">Visa############1048</p>
                </td>
                <td>Active</td>
                <td>3/13/2014</td>
        
                <td style="text-align:right;">
                  <div class="btn-group">
                    <a class="dropdown-toggle btn " data-toggle="dropdown" href="#"><i class="fa fa-cog"></i>&nbsp;<i class="fa fa-caret-up"></i></a>
                    <ul class="dropdown-menu pull-right text-left" role="menu" aria-labelledby="dLabel" style="bottom: 100%; top:auto;">
                      <li><a tabindex="-1" href="#">Delete</a></li>
                      <li><a tabindex="-1" href="#">Update</a></li>
                      <li><a tabindex="-1" href="#">Set as Primary</a></li>
                    </ul>
                  </div>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <div class="well col-2">
      <h3><strong>My current plan</strong></h3>
      <h2><strong>1</strong> <small>listing</small></h2>
      <h2><strong>20 Offers</strong><small>/year</small></h2>
      
      <hr>
      <h3><strong>Upgrade</strong></h3>
      <table class="table">
        <tr>
            <td><h4><strong>Free</strong></h4></td>
            <td><h4><strong>1</strong> <small>listing</small></h4></td>
            <td><h4><strong>20 Offers</strong><small>/year</small></h4></td>
            <td><h4><strong>Your Plan</strong></h4></td>
        </tr>
        <tr>
            <td><h4><strong>$50</strong><small>/year</small></h4></td>
            <td><h4><strong>5</strong> <small>listing</small></h4></td>
            <td><h4><strong>50 Offers</strong><small>/year</small></h4></td>
            <td><button class="btn btn-black">Upgrade</button></td>
        </tr>
      </table>
    </div>

  </div>
  <!-- Billing END -->

</div>

<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->