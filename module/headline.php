<section aria-label="Headline" class="headline">
  <style><?php require ($_SERVER['TRIPOD'].'css/headline.css')?></style>
  <div class="headline-container headline-slideshow">
    <?php for ($i=1; $i <= $slide_number; $i++) { ?>
      <?php $box_layout='default'; $show_date='yes'; $image_size='big';
      require ($_SERVER['TRIPOD'].'module/content-list.php') ?>
    <?php } ?>
  </div>
  <script>
    var slider = tns({
      container:'.headline-slideshow',
      speed:333,
      items:1,
      gutter:5, 
      edgePadding:0,
      controls:true,
      nav:true,
	  navPosition:'bottom',
      mouseDrag:true,
      autoplay:false,
    });
  </script>
</section>