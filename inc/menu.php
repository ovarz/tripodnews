<menu class="menu-main content_center">
  <span class="width-max">
	<?php 
	  foreach($kanal_array as $kanal_list){
	?>
	  <a aria-label="<?php echo($kanal_list['kanal_name'])?>" title="<?php echo($kanal_list['kanal_name'])?>" 
	  href="<?php echo($kanal_list['kanal_link'])?>"
	  class="menu-link <?php if($channel == $kanal_list['kanal_id']) { ?>menu-curr<?php } ?> content_center">
		<span class="menu-label"><?php echo($kanal_list['kanal_name'])?></span>
	  </a>
	<?php } ?>
  </span>
</menu>