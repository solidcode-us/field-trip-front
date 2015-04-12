<div class="add-person">
	<a href="javascript:void(0);" id="add-user" style="background-image:url(<?php echo base_url(); ?>public/assets/images/icons/add-btn.png);"></a>
</div>

<div id="people-going-nav" class="right-nav wide">
    <section class="dis-block padded">
    	<h3 style="float:left;margin:0;">Add People</h3>
        <button class="close exit"><i class="fa fa-times fa-lg"></i></button>
    </section>

    <div id="msg" style="opacity: 1;display:none" class="alert-success"></div>

    <form class="form-horizontal" style="padding:30px 15px 0;">
      <div class="control-group">
        <label for="vTitle" class="control-label">Name</label>
        <div class="controls">
          <input type="text" id="name" name="name" style="width:100%;" placeholder="Jane Tripper">
          <div id="error_name" style="display: none;" class="errUser">Please enter the name.</div>
        </div>
        
      </div>

      <div class="control-group">
        <label for="vWhere" class="control-label">Age</label>
        <div class="controls">
          <select class="age" name="age_range"  id="age_range">
              <option value="over">21+</option><option value="over">18 - 20</option>
              <option value="under">13 - 17</option><option value="under">0 - 12</option>
          </select>
        </div>
      </div>

      <div class="control-group new-user-data">
        <label for="vWhen" class="control-label">Email</label>
        <div class="controls">
          <input type="email" id="email" name="email" placeholder="example@field-trip.com">
          <div id="error_email" style="display: none;" class="errUser">Please enter email address.</div>
        </div>

      </div>

      <div class="control-group new-user-data">
        <label for="vDuration" class="control-label">Phone</label>
        <div class="controls">
          <input type="tel" id="phone" name="phone" placeholder="(305) 123-1234">
        </div>
      </div>

      <div class="control-group">
        <label for="vImage" class="control-label">Connection</label>
        <div class="controls">
          <select class="connection" name="connection_type" id="connection_type" style="width:auto;">
             <?php 
              foreach ($groups as $key => $value) { ?>
                 <option value="<?php echo $value->id?>" > <?php echo $value->name?> </option>
              <?php  }  
              ?>              
          </select>
          <div id="error_name" style="display: none;" class="errUser">Please enter the name.</div>
          <select class="fam subconnection_type" style="width:57%;display: none;">
            <option value="2">Mother</option>
            <option value="1">Father</option>
            <option value="4">Sister</option>
            <option value="3">Brother</option>
            <option value="5">Son</option>
            <option value="6">Daughter</option>
            <option value="7">Grandmother</option>
            <option value="18">Grandfather</option>
            <option value="24">Aunt</option>
            <option value="8">Uncle</option>
            <option value="0">Cousin</option>
            <option value="10">Nephew</option>
            <option value="11">Niece</option>
            <option value="12">Mother-in-law</option>
            <option value="13">Father-in-law</option>
            <option value="14">Brother-in-law</option>
            <option value="15">Sister-in-law</option>
            <option value="16">Son-in-law</option>
            <option value="17">Daughter-in-law</option>
          </select>
          <select style="display:none;width:57%;"  class="partner subconnection_type">
              <option value="20">Boyfriend</option>
              <option value="19">Girlfriend</option>
              <option value="23">Fiancée</option>
              <option value="21">Wife</option>
              <option value="22">Husband</option>
          </select>
           <select class="fam-young" style="display:none;">
            <option value="4">Sister</option>
            <option value="3">Brother</option>
            <option value="5">Son</option>
            <option value="6">Daughter</option>             
            <option value="24">Aunt</option>
            <option value="8">Uncle</option>
            <option value="0">Cousin</option>
            <option value="10">Nephew</option>
            <option value="11">Niece</option>
          
            <option value="14">Brother-in-law</option>
            <option value="15">Sister-in-law</option>
            <option value="16">Son-in-law</option>
            <option value="17">Daughter-in-law</option> 
          </select>
         
        </div>
      </div>
    </form>
    
    <div class="text-center dis-block padded" style="margin-bottom:20px;"><hr>
      <button class="btn btn-black addthisPerson"><i class="fa fa-user-plus"></i> Add this Person</button>
    </div>
</div>