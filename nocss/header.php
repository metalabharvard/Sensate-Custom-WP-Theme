<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">
<meta name="viewport" content="user-scalable=yes, width=device-width" />		
		<META name="description" content="Sensate is an online journal for innovative projects that engage new modes of media-based scholarship and critical practice.">
		<META name="keywords" content="digital humanities, new media, sensory ethnography, critical media practice, online journal, Sensory Ethnography Lab, Harvard, Film Studies Center, Lucien Castaing-Taylor, Jeffrey Schnapp, Ernst Karel, Jesse Shapins, Julia Yezbick, Mary Steedly, Anthropology, Visual Anthropology, Ethnography, media, video, sound, senses, ethnographic film, ethnomusicology">
<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>
<script src="<?php bloginfo('stylesheet_directory'); ?>/jquery.js"></script>
<?php wp_head(); ?>

</head>
<body>
<div id="content">


<div id="header">
	<div class="topnav">
				<A HREF="http://dirkweiss.com/sensate/wordpress/"><div class="homebtn"></div></a>
				<A HREF="http://dirkweiss.com/sensate/wordpress/"><div class="toptitle">Issue 1: PROPORTION</div></a>
				<div class="nav">
					<a href="http://dirkweiss.com/sensate/wordpress/about/" style="margin-left:10px;">ABOUT</a>
					<a href="http://sensate.tumblr.com"style="margin-left:130px;">BLOG</a>						
					<a href="http://dirkweiss.com/sensate/wordpress/collaborators/" style="margin-left:110px;">COLLABORATORS</a>
					<a href="http://dirkweiss.com/sensate/wordpress/contact/" style="margin-left:90px;">CONTACT</a>
				</div>
					<div class="searchbar"><A HREF="../advanced-search/">Advanced Search</a></div>
			</div>
</div>

