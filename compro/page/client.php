<section class="section-container client-container content_center">
  <div class="default-bg client-bg flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/client-bg-small.jpg"
    data-srcset="img/client-bg-small.jpg 640w, img/client-bg-medium.jpg 1024w, img/client-bg-big.jpg 1360w"/>
  </div>
  <div class="section-content client-content">
	<?php 
	  $client_array = array();
	  $client_array[]=array('client_id'=>'att','client_name'=>'at&t');
	  $client_array[]=array('client_id'=>'boa','client_name'=>'Bank of America');
	  $client_array[]=array('client_id'=>'chase','client_name'=>'chase');
	  $client_array[]=array('client_id'=>'hp','client_name'=>'HP');
	  $client_array[]=array('client_id'=>'ford','client_name'=>'Ford');
	  $client_array[]=array('client_id'=>'chevron','client_name'=>'Chevron');
	  $client_array[]=array('client_id'=>'ge','client_name'=>'GE');
	  $client_array[]=array('client_id'=>'walmart','client_name'=>'Walmart');
	  foreach($client_array as $client_list){ 
	?>
      <div class="client-box">
        <img alt="<?php echo($client_list['client_name'])?>" class="lazyload" data-original="img/client-<?php echo($client_list['client_id'])?>.png"/>
      </div>
	<?php } ?>
  </div>
</section>