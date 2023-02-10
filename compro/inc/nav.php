<nav>
  <?php 
    $nav_array = array();
    $nav_array[]=array('nav_name'=>'Home','nav_id'=>'home','nav_curr'=>'yes');
    $nav_array[]=array('nav_name'=>'Client','nav_id'=>'client','nav_curr'=>'no');
    $nav_array[]=array('nav_name'=>'Services','nav_id'=>'services','nav_curr'=>'no');
    $nav_array[]=array('nav_name'=>'News','nav_id'=>'news','nav_curr'=>'no');
    $nav_array[]=array('nav_name'=>'About','nav_id'=>'about','nav_curr'=>'no');
    $nav_array[]=array('nav_name'=>'Contact','nav_id'=>'contact','nav_curr'=>'no');
    foreach($nav_array as $nav_list){ 
  ?>
    <button title="<?php echo($nav_list['nav_name'])?>" id="<?php echo($nav_list['nav_id'])?>" 
	class="fancy-outside nav-button <?php if($nav_list['nav_curr'] == 'yes') { ?>nav-curr<?php } ?>">
      <div class="fancy-inside nav-button-frame content_center">
	    <div class="fancy-word"><?php echo($nav_list['nav_name'])?></div>
	  </div>
    </button>
  <?php } ?>
</nav>