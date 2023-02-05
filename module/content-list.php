<div class="content-box">
  <?php if($show_thumbnail == 'yes') { ?>
    <div class="content-thumb">
      <a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame flex_ori thumb-loading" href="<?php echo $channel_link; ?>/detail.php">
        <?php if($image_size == 'big') { ?>
          <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
        <?php } ?>
        <?php if($image_size == 'default') { ?>
          <img alt="img_title" class="lazyload" data-original="img/sample/minisample-<?php echo rand(1,20); ?>.jpg"
          data-srcset="img/sample/minisample-<?php echo rand(1,20); ?>.jpg 640w, img/sample/sample-<?php echo rand(1,20); ?>.jpg 1920w" />
        <?php } ?>
		<?php if($channel_link == 'video' || $channel_link == 'foto') { ?>
		<div class="media-icon content_center">
		  <?php if($channel_link == 'video') { ?>
		    <?php require ($_SERVER['TRIPOD'].'img/icon/play-circle.svg')?>
		  <?php } ?>
		  <?php if($channel_link == 'foto') { ?>
		    <?php require ($_SERVER['TRIPOD'].'img/icon/camera.svg')?>
		  <?php } ?>
		</div>
        <?php } ?>
      </a>
    </div>
  <?php } ?>
  
  <div class="content-info">
    <a aria-label="Link_Title" title="Link_Title" class="content-info-title" href="<?php echo $channel_link; ?>/detail.php">
      <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
    </a>
    <div class="content-info-misc">
      <?php if($show_author == 'yes') { ?>
        <a aria-label="Link_Title" title="Link_Title" class="content-info-author" href="author/">
          <?php echo $random_author[array_rand($random_author)]; ?>
        </a>
      <?php } ?>
      <?php if($show_channel == 'yes') { ?>
        <a aria-label="Link_Title" title="Link_Title" class="content-info-channel" href="<?php echo $channel_link; ?>/">
          <?php echo $random_channel[array_rand($random_channel)]; ?>
        </a>
      <?php } ?>
      <?php if($show_date == 'yes') { ?>
        <div class="content-info-date">20 Sep 2022</div>
      <?php } ?>
      <?php if($show_time == 'yes') { ?>
        <div class="content-info-time desktop-only">00:00 WIB</div>
      <?php } ?>
      <?php if($show_comment == 'yes') { ?>
        <div class="content-info-comment">
		  <?php require ($_SERVER['TRIPOD'].'img/icon/comment.svg')?>
		  <span>00</span>
		</div>
      <?php } ?>
    </div>
    <?php if($show_description == 'yes') { ?>
      <div class="content-info-desc desktop-only"><?php echo $random_desc[array_rand($random_desc)]; ?></div>
    <?php } ?>
  </div>
</div>