<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="Tripodnews">
<link rel="preconnect" href="https://www.ov4rz.com/">
<link rel="dns-prefetch" href="https://www.ov4rz.com/" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<title>Tripodnews</title>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />

<link rel="preload" href="fonts/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXh0pg.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/tiny-slider.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" href="img/logo.webp" as="image">
<link rel="preload" href="img/logo.png" as="image">
<link rel="preload" href="img/logo-rodanesia.png" as="image">
<link rel="preload" href="img/logo-watchis.png" as="image">
<?php if($page == 'detail') { ?>
  <link rel="preload" href="img/sample/minisample-1.jpg" as="image">
  <link rel="preload" href="css/detail.css?<?php echo $anticache; ?>" as="style">
<?php } ?>
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
<link rel="preload" as="script" href="js/tiny-slider.js">

<meta property="fb:app_id" content="221947151281666" />

<style><?php require ($_SERVER['TRIPOD'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script src="js/tiny-slider.js"></script>
<script async>
  $("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
    $("script").each(function(){
      var get_script = $(this).attr("rancak-hold");
      $(this).attr('src', get_script);
    })
  });
</script>
<link rel="stylesheet" type="text/css" href="css/tiny-slider.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/rancak-desktop.css?<?php echo $anticache; ?>" media="(min-width:1024px)">
<?php if($page == 'detail') { ?>
  <link rel="stylesheet" type="text/css" href="css/detail.css?<?php echo $anticache; ?>"/>
<?php } ?>
</head>
<body>
<?php if($page != 'detail') { ?>
  <h1 class="hide">Tripodnews <?php echo $channel; ?></h1>
<?php } ?>