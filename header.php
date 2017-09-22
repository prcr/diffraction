<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="page">

<div id="header">
	<div id="header-left">
	 	<a href="<?php echo get_option('home'); ?>/"><img id="title" src="<?php bloginfo('template_directory'); ?>/images/header.png" alt="<?php bloginfo('description') ?>"/></a>
 	</div>
 	
 	<div id="header-right">
 	<ul id="nav">
		<li class="nav-about"><a href="<?php bloginfo('url'); ?>/about/"><img class="menu" src="<?php bloginfo('template_directory'); ?>/images/menu-about.png" alt="about"/></a>
		</li>
	 	<li class="nav-archives"><a href="<?php bloginfo('url'); ?>/archives/"><img class="menu menu-margin" src="<?php bloginfo('template_directory'); ?>/images/menu-archives.png" alt="archives"/></a>
		</li>
	</ul>
	</div>
	
	<div style="clear:both;"></div>
</div>