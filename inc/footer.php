<footer class="content_center">
  <span class="width-max">
    <div class="footer-main">
	  <div class="footer-logo flex_ori thumb-loading">
	    <img alt="Logo Tripodnews" class="lazyload" data-original="img/logo.png" />
	  </div>
	  <div class="footer-socmed">
	    <div class="footer-socmed-label">Connect with us</div>
		<div class="footer-socmed-list">
          <?php 
            $follow_array = array();
            $follow_array[]=array('follow_id'=>'facebook','follow_name'=>'Facebook','follow_link'=>'');
            $follow_array[]=array('follow_id'=>'twitter','follow_name'=>'Twitter','follow_link'=>'');
            $follow_array[]=array('follow_id'=>'instagram','follow_name'=>'Instagram','follow_link'=>'');
            $follow_array[]=array('follow_id'=>'youtube','follow_name'=>'Youtube','follow_link'=>'');
            foreach($follow_array as $follow_list){
          ?>
            <a aria-label="<?php echo($follow_list['follow_name'])?>" title="<?php echo($follow_list['follow_name'])?>" class="footer-socmed-link content_center"
            href="<?php echo($follow_list['follow_link'])?>">
			  <img alt="<?php echo($follow_list['follow_name'])?>" class="lazyload" data-original="img/icon/footer-<?php echo($follow_list['follow_id']); ?>.png" />
            </a>
          <?php } ?>
		</div>
	  </div>
	</div>
	
	<div class="footer-menu">
      <?php 
        foreach($kanal_array as $kanal_list){
      ?>
        <a aria-label="<?php echo($kanal_list['kanal_name'])?>" title="<?php echo($kanal_list['kanal_name'])?>" class="footer-link"
        href="<?php echo($kanal_list['kanal_link'])?>">
          <?php echo($kanal_list['kanal_name'])?>
        </a>
      <?php } ?>
	</div>
	
	<div class="footer-info">
      <?php 
        $footer_array = array();
        $footer_array[]=array('footer_name'=>'Tentang Kami','footer_link'=>'tentang-kami');
        $footer_array[]=array('footer_name'=>'Redaksi','footer_link'=>'redaksi');
        $footer_array[]=array('footer_name'=>'Pedoman Media Siber','footer_link'=>'pedoman-media-siber');
        $footer_array[]=array('footer_name'=>'Iklan','footer_link'=>'iklan');
        $footer_array[]=array('footer_name'=>'RSS','footer_link'=>'rss');
        $footer_array[]=array('footer_name'=>'Kontak','footer_link'=>'kontak');
        foreach($footer_array as $footer_list){
      ?>
        <a aria-label="<?php echo($footer_list['footer_name'])?>" title="<?php echo($footer_list['footer_name'])?>" class="footer-link" 
        href="informasi/<?php echo($footer_list['footer_link'])?>.php">
          <?php echo($footer_list['footer_name'])?>
        </a>
      <?php } ?>
	</div>
  </span>
</footer>