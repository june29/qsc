<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
<?php
if(is_404()): echo 'Not Found - '; endif;
if(is_category()): echo single_cat_title().' カテゴリのエントリ'; endif;
if(is_tag()): echo single_tag_title().' タグを含むエントリ'; endif;
if(is_year()): echo get_the_time('Y年のエントリ'); endif;
if(is_month()): echo get_the_time('Y年m月のエントリ'); endif;
if(is_day()): echo get_the_time('Y年m月d日のエントリ'); endif;
if(is_search()): echo $s.' の検索結果 - '; endif;
if(is_single()): echo wp_title('', false); endif;
if(is_page()): echo wp_title('', false); endif;
if(wp_title('', false)) echo ' - ';
bloginfo('name'); ?></title>

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
  <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  <ul id="grobal-navigator">
    <li><a href="<?php echo get_option('home'); ?>/about">About</a></li>
    <li><a href="<?php echo get_option('home'); ?>/about">Archive</a></li>
    <li><a href="<?php echo get_option('home'); ?>/about">Tags</a></li>
  </ul>
</div>
