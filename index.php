<?php 
  $page='home';
  $channel='home';
  $slideshow='yes';
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
		
          <?php $show_channel='yes'; $channel_link='news'; $slide_number='5'; require ($_SERVER['TRIPOD'].'module/headline.php') ?>
				
				
		
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
		
		
		
          <?php 
            $channel_widget_array = array();
            $channel_widget_array[]=array('channel_widget_name'=>'News');
            $channel_widget_array[]=array('channel_widget_name'=>'Ekonomi');
            $channel_widget_array[]=array('channel_widget_name'=>'Sport');
            foreach($channel_widget_array as $channel_widget_list){
          ?>
		  <section aria-label="<?php echo($channel_widget_list['channel_widget_name'])?>" class="section-container content-list channel-widget">
		    <div class="section-title">
			  <div class="section-title-name"><?php echo($channel_widget_list['channel_widget_name'])?></div>
              <a aria-label="Link_Title" title="Link_Title" class="section-title-more" href="<?php echo $channel_link; ?>/">
                <span class="stm-label">Lihat Lainnya</span>
				<?php require ($_SERVER['TRIPOD'].'img/icon/more.svg')?>
              </a>
			</div>
			
			<div class="channel-widget-box">
			  <div class="channel-widget-big">
                <?php $box_layout='default'; $show_channel='no'; $show_date='yes'; 
                $image_size='big'; $channel_link='news';
                require ($_SERVER['TRIPOD'].'module/content-list.php') ?>
			  </div>
              <div class="content-list-container">
                <?php for ($i=1; $i <= 3 ; $i++) { ?>
                  <?php $box_layout='default'; $show_channel='no'; $show_date='yes'; 
                  $image_size='default'; $channel_link='news';
                  require ($_SERVER['TRIPOD'].'module/content-list.php') ?>
                <?php } ?>
              </div>
			</div>
		  </section>
		  <?php } ?>
		  
		</div>
	  </div>
	
	
	
	
	
      <div class="column-right column-small">
        <div class="column-container column-sticky">
		
		  <section aria-label="Berita Terpopuler" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Berita Terpopuler</div>
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