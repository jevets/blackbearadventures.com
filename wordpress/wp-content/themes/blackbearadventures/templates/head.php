<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <?php /*
  <script type="text/javascript" src="//use.typekit.net/bnx7cgt.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>  
  */ ?>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "513e7a03-b0bf-4db3-96be-483679c5a583", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
