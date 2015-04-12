<ul class="nav nav-tabs">
  <li class="active"><a href="#" data-toggle="tab" title="Users in your plan">Manage Users</a></li>
</ul>

<h4 class="tab-heading">Manage people in your membership plan.</h4>

<ul class="people text-left" style="padding:0;">
    <li>
      <a title="Add a user" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user.png);" data-toggle="modal" role="button" href="#add_user"><i class="fa fa-plus fa-3x"></i></a>
      <p class="muted">Add Someone</p>
    </li>

    <li>
      <a href="#open_people" role="button" data-toggle="modal" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_agent_1.png);" title="Barbra Streisand"></a>
      <p>Barbra Streisand</p>
    </li>
</ul>

<!-- Add User Modal -->
<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Add a User</h3>
  </div>
  
  <div class="modal-body">
    <form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="inputFname">First Name</label>
        <div class="controls">
          <input type="text" id="inputFname">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="inputLname">Last Name</label>
        <div class="controls">
          <input type="text" id="inputLname">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" id="inputEmail">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label">Membership</label>
        <div class="controls">
          <label class="radio inline"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Basic</label>
          <label class="radio inline"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Premium</label>
        </div>
      </div>
      
      <div class="control-group">
        <div class="controls">
          <h3><strong>$50</strong> <small>Due Monthly</small></h3>
        </div>
      </div>
    </form>
    <div class="dis-block">
    	<label class="checkbox" style="font-weight:300;"><input type="checkbox"> I agree to pay <strong>$50 per month</strong> for this person's membership plan.</label>
    </div>
  </div>
  
  <div class="modal-footer">
    <button class="btn btn-black" title="Add this User">Add</button>
  </div>
</div>
<!-- Add User Modal end-->

<!-- Open User Modal -->
<div id="open_people" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Barbra Streisand</h3>
  </div>
  
  <div class="modal-body" style="overflow:hidden;"><div style="position:relative;">
  
      <div class="user-profile-photo" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_agent_1.png);left:0;"></div>
      <span class="user-job" style="left:0;">Active</span>
      <div class="user-profile-info"><div class="plan-details" style="padding:0;">
        <table class="table">
          <tr><td class="muted">Membership</td> <td>Basic</td></tr>
          <tr><td class="muted">Cost</td> <td><strong>$50</strong> due monthly</td></tr>
          <tr><td class="muted">Email</td> <td>dara_tores@field-trip.com</td></tr>
          <tr><td class="muted">Last logged in</td> <td>Jul 14, 2014</td></tr>
        </table>
      </div></div>
      <ul class="info-bar" style="padding-bottom:0;font-weight:300;float:left;width:auto;">
        <li><span class="muted">Designed</span> 43</li>   
        <li><span class="muted">Itinerary</span> 21</li>
        <li><i class="fa fa-map-marker"></i>&nbsp;West Palm Beach, FL</li>      
      </ul>
  
  </div></div>
  
  <div class="modal-footer">
    <a class="btn" title="Suspend Account" href="#suspend_user" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-ban"></i> Suspend</a>
    <a href="#transfer_user" class="btn" title="Transfer Account" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-share"></i> Transfer</a>
    
    <a href="#user_plan_change" class="btn btn-black" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true">Change Plan</a>
  </div>
</div>
<!-- Open User Modal end-->

<!-- Suspend User Modal -->
<div id="suspend_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Suspend Account</h3>
  </div>
  
  <div class="modal-body" style="font-size:16px;">
    <p>Are you sure you want to suspend <strong>Barbra Streisand</strong>'s account?</p>
  </div>
  
  <div class="modal-footer">
    <button class="btn btn-black">Yes</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true" href="#open_people" role="button" data-toggle="modal">No</button>
  </div>
  
</div>
<!-- Suspend User Modal end-->

<!-- Transfer User Modal -->
<div id="transfer_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Transfer Account</h3>
  </div>
  
  <div class="modal-body">
    <h3>Transfer to:</h3>
    <form class="form-horizontal" style="margin-top:20px;">
      <div class="control-group">
        <label class="control-label" for="inputFname">First Name</label>
        <div class="controls">
          <input type="text" id="inputFname">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="inputLname">Last Name</label>
        <div class="controls">
          <input type="text" id="inputLname">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" id="inputEmail">
        </div>
      </div>
    </form>
  </div>
  
  <div class="modal-footer">
    <button class="btn btn-black">Transfer</button>
  </div>
  
</div>
<!-- Transfer User Modal end-->

<!-- Membership Plans Modal -->
<div id="user_plan_change" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Membership Plans</h3>
  </div>
  
  <div class="modal-body">

    <section class="col-2 text-center">
      <div class="plan-box">
        <h4>Premium</h4>
        <div class="price-div">
          <div class="plan-price">$<span class="dollar">150</span> <span class="interval">/year</span></div>
        </div>
        <p>Frequent traveller</p>
        <p class="for-what">Maximize time spent off the plane.</p>
        <a href="#change_plan_user" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true" class="btn btn-green" title="Select this plan">Upgrade</a>
      </div>
    </section>
    
    <section class="col-2 text-center">
      <div class="plan-box">
        <h4>Elite</h4>
        <div class="price-div">
          <div class="plan-price">$<span class="dollar">350</span> <span class="interval">/year</span></div>
        </div>
        <p>Extensive traveller</p>
        <p class="for-what">Get the most out of life.</p>
        <p class="for-what color-red" style="font-size:12px;margin-top:17px;">You need to upgrade your plan first before you can upgrade this user.</p>
      </div>
    </section>

  </div>
  
</div>
<!-- Membership Plans Modal end-->

<!-- Change Plan Modal -->
<div id="change_plan_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    <h3 id="myModalLabel">Change Plan</h3>
  </div>
  
  <div class="modal-body" style="font-size:16px;">
    <h3 style="font-weight:300;">Are you sure you want to change your plan to <strong>Premium Membership</strong>?</h3>
    <br><br>
    <small class="dis-block muted">By clicking "Yes" you agree to change this user's plan and pay <strong>$150 monthly</strong>.</small>
  </div>
  
  <div class="modal-footer">
    <button class="btn btn-black">YES</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true" href="#user_plan_change" role="button" data-toggle="modal">No</button>
  </div>
  
</div>
<!-- Change Plan Modal END-->
