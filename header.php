<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php if ( is_single() ) ?><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> - <?php } ?><?php bloginfo('name'); ?></title>

<meta name="viewport" content="width=480" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/style.css" type="text/css" media="screen and (min-device-width:481px)" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/iphone.css" type="text/css" media="only screen and (max-device-width:480px)" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

<div id="header">
  <div id="headerimg">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  </div>
</div>
