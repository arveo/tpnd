<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Kratong
 */
?>
    
	<br class="clear"/>

	<div id="footer">
    <?php if (is_page('shop-wizard')) : ?>
    <div class="footer-search">
    	<h3>We Make Cars <span class="highlight">Awesome. Lets Start</span> With Yours.</h3>
        <div class="search-box">
        	<div class="car-make">Car Make: <span class="car-choice">Other</span></div>
            <a href="<?php echo (get_bloginfo('url') . '/shop') ?>" class="button footer-search-button">Customise</a>
        </div>
    </div>
    
    <br class="clear"/>
    <?php endif; ?>
	    <?php
	    	/**
	    	 * Get footer text
	    	 */
	
	    	$pp_footer_text = get_option('pp_footer_text');
	
	    	if(empty($pp_footer_text))
	    	{
	    		$pp_footer_text = '© 2011 Peerapong Pulpipatnan All Right Reserved.';
	    	}
	    	
	    	echo stripslashes(html_entity_decode($pp_footer_text));
	    ?>
	</div>
	
</div>

<?php
		/**
    	*	Setup Google Analyric Code
    	**/
    	include (TEMPLATEPATH . "/google-analytic.php");
?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>