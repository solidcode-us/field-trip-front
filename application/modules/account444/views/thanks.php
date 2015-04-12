<style> 
.errUser { color:#CC0000 !important; text-align:left;margin:5px; text-align:left;} 
.redborder {border: 1px solid #DC3400 !important;}
</style>
<div class="container">
	<div class="full-page-wrap"><div class="signup-div"><!-- MIDDLE AREA -->
            <h3 class="text-center"  style="margin-top:20px">Thank You</h3>
           
            <div class="form-horizontal" style="margin:25px 0 0 220px;">
                <div id="alert_msg" class="alert alert-error" style="alignment-adjust: middle; display: none; text-align: justify;"></div>
                <?php if(!empty($thankInfo)) { ?>
                <div id="infoMessage" class=""><?php echo $thankInfo;?></div>
                <?php  } ?>
            <style>
			
                .full-page-wrap {border:none;}
                @media (min-width: 320px) and (max-width: 599px){
                    body, .full-page-wrap {background-color:#323943;}
                }
            </style>

        </div></div></div><!-- MIDDLE AREA END-->
