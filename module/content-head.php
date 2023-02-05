<section aria-label="Content Info" class="section-container content-head">
  <div class="content-head-action">
    <button title="Text" class="cha-button">
	  <div class="cha-icon"><?php require ($_SERVER['TRIPOD'].'img/icon/text.svg')?></div>
	  <div class="cha-label">Text</div>
	</button>
    <button title="Bacakan" class="cha-button">
	  <div class="cha-icon"><?php require ($_SERVER['TRIPOD'].'img/icon/sound.svg')?></div>
	  <div class="cha-label">Bacakan</div>
	</button>
	<div class="cha-container">
      <button title="Bacakan" class="cha-button">
        <div class="cha-icon"><?php require ($_SERVER['TRIPOD'].'img/icon/share.svg')?></div>
        <div class="cha-label">Bagikan</div>
      </button>
	  <div class="cha-share-list hide">
        <?php 
		  $share_array = array();
          $share_array[]=array('share_id'=>'facebook','share_label'=>'Facebook','share_link'=>'');
          $share_array[]=array('share_id'=>'instagram','share_label'=>'Instagram','share_link'=>'');
          $share_array[]=array('share_id'=>'twitter','share_label'=>'Twitter','share_link'=>'');
          $share_array[]=array('share_id'=>'tiktok','share_label'=>'Tiktok','share_link'=>'');
          $share_array[]=array('share_id'=>'whatsapp','share_label'=>'Whatsapp','share_link'=>'');
          foreach($share_array as $share_list){
        ?>
	    <a aria-label="Link_Title" title="Link_Title" class="cha-share-link cha-share-<?php echo($share_list['share_id'])?>" href="<?php echo($share_list['share_link'])?>">
		  <div class="cha-share-icon content_center">
		    <?php require ($_SERVER['TRIPOD'].'img/icon/'. $share_list['share_id'] .'-circle.svg')?>
		  </div>
		  <div class="cha-share-label content_center">
		    <span><?php echo($share_list['share_label'])?></span>
		  </div>
		</a>
		<?php } ?>
	  </div>
	</div>
  </div>
  
  <a aria-label="Link_Title" title="Link_Title" class="content-head-channel" href="<?php echo $channel; ?>/">
    <?php echo $random_channel[array_rand($random_channel)]; ?>
  </a>
  
  <h1 class="content-head-title"><?php echo $random_title[array_rand($random_title)]; ?></h1>
  
  <div class="content-head-misc">
    <div class="content-head-author">
      <div class="content-head-label">Penulis :</div>
      <a aria-label="Link_Title" title="Link_Title" class="content-head-name" href="author/"><?php echo $random_author[array_rand($random_author)]; ?></a>
    </div>
    <div class="content-head-author">
      <div class="content-head-label">Editor :</div>
      <a aria-label="Link_Title" title="Link_Title" class="content-head-name" href="author/"><?php echo $random_author[array_rand($random_author)]; ?></a>
    </div>
    <div class="content-head-date">00 September 0000</div>
    <a aria-label="Link_Title" title="Link_Title" class="content-head-date" href="<?php echo $channel; ?>/detail.php#comments">00 Comments</a>
  </div>
</section>