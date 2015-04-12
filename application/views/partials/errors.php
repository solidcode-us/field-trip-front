<?php if ( validation_errors() ) { ?>
<ul class="validation_errors">
<?php echo validation_errors('<li>', '</li>'); ?>
</ul>
<?php } ?>