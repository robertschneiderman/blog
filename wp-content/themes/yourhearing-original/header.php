<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Portfolio Blog
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />	

	<script src="https://use.typekit.net/uqn5ezm.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>	
	<script>(function(){document.documentElement.className='js'})();</script>

</head>
<body <?php body_class(); ?> >

	<?php $sprite = get_site_url() . "/wp-content/plugins/svg-spritemap/defs.svg"; ?>		
