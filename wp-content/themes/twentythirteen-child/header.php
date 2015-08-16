<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>  ng-app="myapp">
<!--<![endif]-->
<head>
<base href="/AngularJS-with-Wordpress/">
<!--<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script> -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> role="document">

    
<div style="min-height: 100px; width: 100%;border: 1px solid grey;background-color:rgb(166, 161, 161);">
	<?php 
	$top_menu= array('menu'=> 'my-test-menu','theme_location' => 'primary',
	'container' => '',
	);
	wp_nav_menu($top_menu); 
	?>
</div>