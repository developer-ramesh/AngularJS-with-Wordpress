<?php
/* 
Template Name:CMS Temp
*/
get_header(); ?>



<div style="min-height: 100px; width: 100%;border: 1px solid grey;background-color:rgb(166, 161, 161);">
	<?php 
	$top_menu= array('menu'=> 'my-test-menu','theme_location' => 'primary',
	'container' => '',
	);
	wp_nav_menu($top_menu); 
	?>
</div>

<?php
while ( have_posts() ) : the_post();
?>


<?php the_content(); endwhile; ?>

<div ng-show="loading" class="loading" style="text-align: center;"><img src="http://localhost/AngularJS-with-Wordpress/wp-content/themes/twentythirteen-child/images/ajax-loader.gif">LOADING...</div>

<?php //include 'test.php'; ?>


<div style="min-height: 100px; width: 100%;border: 1px solid grey;background-color:rgb(166, 161, 161);">
	<h4 style="text-align: center;">Footer!!!</h4>
</div>

<?php get_footer(); ?>