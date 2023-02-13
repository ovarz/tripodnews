<?php 
  $page='home';
  $channel='home';
  $slideshow='yes';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['TRIPOD'].'inc/meta.php')?>
<?php require ($_SERVER['TRIPOD'].'inc/nav.php')?>
<div class="rancak-container">
  <?php require ($_SERVER['TRIPOD'].'page/home.php')?>
</div>
<?php require ($_SERVER['TRIPOD'].'inc/base-bottom.php')?>