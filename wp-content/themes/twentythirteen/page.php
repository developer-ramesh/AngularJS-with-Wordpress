<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<script>
	jQuery(document).ready(function($) {
    $('body').on('added_to_cart',function(e,data) {
        //alert('Added ' + data['div.widget_shopping_cart_content']);
        if ($('#hidden_cart').length == 0) { //add cart contents only once
            //$('.added_to_cart').after('<a href="#TB_inline?width=600&height=550&inlineId=hidden_cart" class="thickbox">View my inline content!</a>');
            $(this).append('<a href="#TB_inline?width=300&height=550&inlineId=hidden_cart" id="show_hidden_cart" title="<h2>Cart</h2>" class="thickbox" style="display:none"></a>');
            $(this).append('<div id="hidden_cart" style="display:none">'+data['div.widget_shopping_cart_content']+'</div>');
        }
        $('#show_hidden_cart').click();
    });
});
</script>

<div style="width: 90%;margin-left: 100px;">
<?php
     $args = array( 'post_type' => 'product', 'meta_key' => '_featured','posts_per_page' =>5,'columns' => '3','meta_value' =>'yes' );
     $loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	<li class="product">    
	    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
		<h3><?php the_title(); ?></h3><br /><span class="price"><?php echo $product->get_price_html(); ?></span><br />
		<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
		<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?></a>
		<!--<span class="motangan"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></span><br />-->
	<?php woocommerce_template_loop_add_to_cart(); ?>
	</li>
                <?php
            /**
             * woocommerce_pagination hook
             *
             * @hooked woocommerce_pagination - 10
             * @hooked woocommerce_catalog_ordering - 20
             */
            do_action( 'woocommerce_pagination' );
        ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>


<div style="width: 90%;margin-left: 100px;">
<?php
     
     $args = array(
    'post_type'      => 'product',
    'meta_query'     => array(
        'relation' => 'OR',
        array( // Simple products type
            'key'           => '_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
        ),
        array( // Variable products type
            'key'           => '_min_variation_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
        )
    )
);

///$loop=query_posts( $args );
     
     $loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	<li class="product">    
	    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
		<h3><?php the_title(); ?></h3><br /><span class="price"><?php echo $product->get_price_html(); ?></span><br />
		<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
		<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="100px" height="100px" />'; ?></a>
		<!--<span class="motangan"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></span><br />-->
	</li>
                <?php
            /**
             * woocommerce_pagination hook
             *
             * @hooked woocommerce_pagination - 10
             * @hooked woocommerce_catalog_ordering - 20
             */
            do_action( 'woocommerce_pagination' );
        ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>




	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>