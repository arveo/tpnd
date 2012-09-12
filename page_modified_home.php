<?php
/**
 * Template Name: Modified Home Page
 * The main template file for display new Topend website.
 *
 * @package WordPress
*/


/**
*	Get Current page object
**/
$page = get_page($post->ID);


/**
*	Get current page id
**/
$current_page_id = '';

if(isset($page->ID))
{
    $current_page_id = $page->ID;
}

$page_style = 'Right Sidebar';
$page_sidebar = get_post_meta($current_page_id, 'page_sidebar', true);

if(empty($page_sidebar))
{
	$page_sidebar = 'Page Sidebar';
}

$add_sidebar = FALSE;
if($page_style == 'Right Sidebar')
{
	$add_sidebar = TRUE;
	$page_class = 'sidebar_content';
}
else
{
	$page_class = "full_width";
}
get_header(); 
?>

	<div id="content_wrapper">
		<?php  wooslider( array( 'slider_type' => 'attachments', 'smoothheight' => 'true' ) ); ?>
		<!-- Begin content -->
		<div id="page_content_wrapper">
		
			<div class="inner">
			
			<!-- Begin main content -->
			<div class="inner_wrapper">
			    
			    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
			    	
			    	<div class="sidebar_content <?php echo $page_class; ?>">
                    
                    		<?php
							if($add_sidebar)
							{
						?>
							
								<div class="sidebar">
								
									<div class="content">
								
										<ul class="sidebar_widget">
										<?php dynamic_sidebar($page_sidebar); ?>
										</ul>
									
									</div>
							
								</div>
								<br class="clear"/>
						
								<div class="sidebar_bottom"></div>
							
						<?php
							}
						?>
			    	
			    			<?php do_shortcode(the_content()); ?>
			    			
			    	</div>

			    <?php endwhile; ?>

			
			</div>
			<!-- End main content -->
			</div>
			<br class="clear"/>
			
			</div>
		
		<br class="clear"/><br class="clear">
		</div>
	</div>

<?php get_footer(); ?>