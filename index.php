<?php 
  $page='home';
  $channel='home';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['TRIPOD'].'inc/sample.php')?>
<?php require ($_SERVER['TRIPOD'].'inc/meta.php')?>
<?php require ($_SERVER['TRIPOD'].'inc/header.php')?>
<?php require ($_SERVER['TRIPOD'].'inc/menu.php')?>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		
		  <section aria-label="Terkini" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Terkini</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 10 ; $i++) { ?>
			    <?php $box_layout='default'; $show_channel='yes'; $show_date='yes'; 
				$image_size='default'; $channel_link='news';
				require ($_SERVER['TRIPOD'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		</div>
	  </div>
	
	
	
	
	
      <div class="column-right column-small">
        <div class="column-container column-sticky">
		
		  <section aria-label="Terpopuler" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Terpopuler</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $box_layout='order'; $show_channel='yes'; $show_date='yes'; 
				$image_size='default'; $channel_link='news';
				require ($_SERVER['TRIPOD'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		
		
		
		  <section aria-label="Tag Terpopuler" class="section-container tag-sidebar">
		    <div class="section-title">
			  <div class="section-title-name">Tag Terpopuler</div>
			</div>
		    <div class="tag-sidebar-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php require ($_SERVER['TRIPOD'].'module/tag-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		
		
		
		  <section aria-label="Pilihan Redaksi" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Pilihan Redaksi</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $box_layout='default'; $show_channel='yes'; $show_date='yes'; 
				$image_size='default'; $channel_link='news';
				require ($_SERVER['TRIPOD'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		
		</div>
	  </div>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['TRIPOD'].'inc/footer.php')?>
<?php require ($_SERVER['TRIPOD'].'inc/base-bottom.php')?>