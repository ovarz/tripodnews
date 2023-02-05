<main class="section-container content-detail">
  <h2 class="content-summary"><?php echo $random_desc[array_rand($random_desc)]; ?></h2>

  <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
  <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
  
  <?php require ($_SERVER['TRIPOD'].'module/bacajuga.php')?>

  <h3><?php echo $random_desc[array_rand($random_desc)]; ?></h3>
  <ul>
    <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
    <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
    <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
  </ul>

  <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
  <?php require ($_SERVER['TRIPOD'].'module/quote.php')?>
  <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>

  <h4><?php echo $random_desc[array_rand($random_desc)]; ?></h4>
  <ol>
    <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
    <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
    <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
  </ol>
  
  <?php require ($_SERVER['TRIPOD'].'module/bacajuga.php')?>
  <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
  <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
  
  <div class="pagination">
    <a aria-label="Link_Title" title="Link_Title" class="pagination-button pagination-arrow content_center" href="<?php echo $channel; ?>/detail.php">
	  <?php require ($_SERVER['TRIPOD'].'img/icon/prev.svg')?>
	</a>
    <a aria-label="Link_Title" title="Link_Title" class="pagination-button content_center" href="<?php echo $channel; ?>/detail.php">
	  <span>1</span>
	</a>
    <a aria-label="Link_Title" title="Link_Title" class="pagination-button pagination-curr content_center" href="<?php echo $channel; ?>/detail.php">
	  <span>2</span>
	</a>
    <a aria-label="Link_Title" title="Link_Title" class="pagination-button content_center" href="<?php echo $channel; ?>/detail.php">
	  <span>3</span>
	</a>
    <div class="pagination-button content_center">
	  <span>...</span>
	</div>
    <a aria-label="Link_Title" title="Link_Title" class="pagination-button content_center" href="<?php echo $channel; ?>/detail.php">
	  <span>8</span>
	</a>
    <a aria-label="Link_Title" title="Link_Title" class="pagination-button pagination-arrow content_center" href="<?php echo $channel; ?>/detail.php">
	  <?php require ($_SERVER['TRIPOD'].'img/icon/next.svg')?>
	</a>
  </div>
</main>