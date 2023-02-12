<section class="section-container services-container content_center">
  <div class="default-bg services-bg flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/services-bg-small.jpg"
    data-srcset="img/services-bg-small.jpg 640w, img/services-bg-medium.jpg 1024w, img/services-bg-big.jpg 1360w"/>
  </div>
  <div class="section-content services-content">
    <div class="services-left">
	  <div class="services-logo flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/logo.png"/>
	  </div>
	</div>
	<div class="services-right">
      <?php 
        $services_array = array();
        $services_array[]=array('services_id'=>'crisis','services_name'=>'Crisis Communications');
        $services_array[]=array('services_id'=>'media','services_name'=>'Media Relations');
        $services_array[]=array('services_id'=>'pr','services_name'=>'PR Litigation');
        $services_array[]=array('services_id'=>'csr','services_name'=>'CSR Communications');
        foreach($services_array as $services_list){ 
      ?>
	    <button title="<?php echo($services_list['services_name'])?>" id="<?php echo($services_list['services_id'])?>" class="fancy-outside services-button">
          <div class="fancy-inside services-button-frame content_center">
            <div class="fancy-word"><?php echo($services_list['services_name'])?></div>
          </div>
        </button>
      <?php } ?>
	</div>
  </div>
</section>

<script>servicestab();</script>