<?php
/* 
Template Name:CMS Temp
*/
get_header(); ?>

<div style="min-height: 400px;width: 100%;">


<?php
while ( have_posts() ) : the_post();
?>


<?php the_content(); endwhile; ?>


</div>




<?php get_footer(); ?>