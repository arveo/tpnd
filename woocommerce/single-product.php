<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @package WooCommerce
 * @since WooCommerce 1.0
 */

get_header('shop'); ?>

	<?php 
		/** 
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */	 
		do_action('woocommerce_before_main_content');
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/** 
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */	 
		// do_action('woocommerce_after_main_content'); 
	?>
	
	 	<div class="sidebar_wrapper woocommerce-product-sidebar">
            <div class="sidebar">
                <div class="content">
            
                    <ul class="sidebar_widget">
                    <?php dynamic_sidebar('product-sidebar'); ?>
                    </ul>
                
                </div>
            </div>
        </div>
       
    </div><!-- /.sidebar_content -->
	</div><!-- /#page_content_wrapper -->
</div><!-- /#content_wrapper -->
	
<?php get_footer('shop'); ?>