<div class="content-box <?php echo $box_layout; ?>-box">
  <?php if($box_layout == 'default') { ?>
    <div class="content-thumb">
      <a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame flex_ori thumb-loading" href="<?php echo $channel_link; ?>/detail.php">
        <?php if($image_size == 'big') { ?>
          <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
        <?php } ?>
        <?php if($image_size == 'default') { ?>
          <img alt="img_title" class="lazyload" data-original="img/sample/minisample-<?php echo rand(1,20); ?>.jpg"
          data-srcset="img/sample/minisample-<?php echo rand(1,20); ?>.jpg 640w, img/sample/sample-<?php echo rand(1,20); ?>.jpg 1920w" />
        <?php } ?>
      </a>
    </div>
  <?php } ?>
  
  <?php if($box_layout == 'order') { ?>
    <div class="content-order">
      <div class="content-order-box">#00</div>
    </div>
  <?php } ?>
  
  <div class="content-info">
    <a aria-label="Link_Title" title="Link_Title" class="content-info-title" href="<?php echo $channel_link; ?>/detail.php">
      <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
    </a>
    <div class="content-info-misc">
      <?php if($show_channel == 'yes') { ?>
        <a aria-label="Link_Title" title="Link_Title" class="content-info-channel" href="<?php echo $channel_link; ?>/">
          <?php echo $random_channel[array_rand($random_channel)]; ?>
        </a>
      <?php } ?>
      <?php if($show_date == 'yes') { ?>
        <div class="content-info-date">00 minggu lalu</div>
      <?php } ?>
    </div>
  </div>
</div>