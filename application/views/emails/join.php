Welcome <?php echo $username; ?>,<br><br>

Thanks for signing up. Please click the following link to acitvate your account.<br><br>

<?php echo anchor('account/verify/'.$salt); ?>