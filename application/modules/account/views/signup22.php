<div class="container"><div class="full-page-wrap"><div class="signup-div"><!-- MIDDLE AREA -->

            <h3 class="text-center">Sign Up</h3>

            <div class="alert alert-success" id="confirm_message" style="display: none"></div>
            <div class="alert alert-error" id="errors" style="display: none"></div>

            <?php if ($message) {
                echo '<div class="alert alert-success">' . $message . '</div>';
            } ?>

            <div class="form-horizontal" style="margin:15px 0 0;">
                <?php echo form_open("",array('id'=>'signup_form')); ?>
                <div id="alert_msg" class="alert" style="alignment-adjust: middle; display: none; text-align: justify;"></div> 

                <div class="control-group">
                    <label class="control-label" for="inputFName">First Name</label>
                    <div class="controls">
                        <?php echo form_input($first_name); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputLName">Last Name</label>
                    <div class="controls">
                        <?php echo form_input($last_name); ?>      
                        <div id="input_errors_username" style="color:#F00"></div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputBirthday">Date of Birth</label>
                    <div class="controls"> <?php # echo form_input($dob); ?>  
                        <?php
                        $useDate = 0;
                        $inName = "birthday";
                        /* create array so we can name months */
                        $monthName = ARRAY(1 => "January", "February", "March",
                            "April", "May", "June", "July", "August",
                            "September", "October", "November", "December");

                        /* if date invalid or not supplied, use current time */
                        IF ($useDate == 0) {
                            $useDate = TIME();
                        }

                        /* make month selector */
                        ECHO '<SELECT style="width: auto" name="bod_month" id=' . $inName . '_month >\n';
                        FOR ($currentMonth = 1; $currentMonth <= 12; $currentMonth++) {
                            ECHO "<OPTION VALUE=\"";
                            ECHO INTVAL($currentMonth);
                            ECHO "\"";
                            IF (INTVAL(DATE("m", $useDate)) == $currentMonth) {
                                ECHO " SELECTED";
                            }
                            ECHO ">" . $monthName[$currentMonth] . "\n";
                        }
                        ECHO "</SELECT>";

                        /* make day selector */
                        ECHO "<SELECT style='width: auto' name='bod_day' id=" . $inName . "_day>\n";
                        FOR ($currentDay = 1; $currentDay <= 31; $currentDay++) {
                            ECHO "<OPTION VALUE=\"$currentDay\"";
                            IF (INTVAL(DATE("d", $useDate)) == $currentDay) {
                                ECHO " SELECTED";
                            }
                            ECHO ">$currentDay\n";
                        }
                        ECHO "</SELECT>";

                        /* make year selector */
                        ECHO "<SELECT style='width: auto' name='bod_year' id=" . $inName . "_year>\n";
                        $startYear = DATE("Y", $useDate);
                        FOR ($currentYear = $startYear - 18; $currentYear >= $startYear - 80; $currentYear--) {
                            ECHO "<OPTION VALUE=\"$currentYear\"";
                            IF (DATE("Y", $useDate) == $currentYear) {
                                ECHO " SELECTED";
                            }
                            ECHO ">$currentYear\n";
                        }
                        ECHO "</SELECT>";
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputGender">Gender</label>
                    <div class="controls">
                        <label class="radio inline">
                            <input type="radio" name="gender" id="male" value="female" <?php echo $checked1;?>>
                            Female
                        </label>

                        <label class="radio inline">
                            <input type="radio" name="gender" id="female" value="male" <?php echo $checked;?>>
                            Male
                        </label>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                        <?php echo form_input($email); ?>     
                        <div id="input_errors_email" style="color:#F00"></div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPhone">Phone Number</label>
                    <div class="controls">
                        <?php echo form_input($phone); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPhone">Password</label>
                    <div class="controls">
                        <?php echo form_input($password); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPhone">Confirm Password</label>
                    <div class="controls">
                        <?php echo form_input($password_confirm); ?>
                    </div>
                </div>

                <div class="control-group" style="margin:30px 0;">
                    <div class="controls">
                        <?php //echo form_submit('submit', 'Sign Up', 'class="btn btn-lg btn-blue"'); ?> 
                        <a href="javascript:void(0);" class="btn btn-lg btn-blue" id="signup_btn">Sign Up</a>
"
                    </div>
                </div>
                        <?php echo form_close(); ?>
            </div>  

            <style>
                .full-page-wrap {border:none;}
                @media (min-width: 320px) and (max-width: 599px){
                    body, .full-page-wrap {background-color:#323943;}
                }
            </style>

            <script type="text/javascript">              

                $(function() {
//                    var day = $("#birthday_day").val();
//                    var month = $("#birthday_month").val();
//                    var year = $("#birthday_year").val();
//                    alert(day + month + year);
                    var tempdate = new Date();
	  
                    $( ".date" ).datepicker({ 
                        minDate: "-60Y -0D",
                        maxDate: "-16Y -0D",
                        changeMonth: true,
                        changeYear: true	  
                    });
	
                });

            </script>

        </div></div></div><!-- MIDDLE AREA END-->
        <script type="text/javascript">
 $("#signup_btn").click(function(){
      var data = $("#signup_form").serializeArray();
      var url = $("#signup_form").attr('action');
      $.ajax({
            type: "POST",
            data : data,
            url: url,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                    $("#alert_msg").removeClass('alert-error');
                    $("#alert_msg").html('');
                    $("#alert_msg").hide();
                },
            success: function(response) {
                
                if (response.status == '0')
                {
                    $("#alert_msg").show();
                    $("#alert_msg").removeClass('alert-success');
                    $("#alert_msg").addClass('alert-error');
                    $("#alert_msg").html(response.valid_errors);
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }
                if (response.status == '1')
                {
                    $("#alert_msg").show();
                    $("#alert_msg").addClass('alert-success');
                    $("#alert_msg").removeClass('alert-error');
                    $("#alert_msg").html(response.message);
                    $("#signup_form").find("input,:radio").each(function(){
                    $(this).val('');
                    $(this).prop('checked',false);
                    });
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }
            },
            complete: function() {
               
            }
        }); 
        return false;
    });
</script>