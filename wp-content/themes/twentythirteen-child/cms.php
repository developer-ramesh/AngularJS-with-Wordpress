<?php
/* 
Template Name:CMS Temp
*/
//get_header(); ?>

<?php
while ( have_posts() ) : the_post();
?>


<?php the_content(); endwhile; ?>


<?php //get_footer(); ?>