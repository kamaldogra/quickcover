<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Samantha_Morel
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<section class="about_banner">    
	<h1><?php _e( 'Page Not Found', 'samanthamorel' ); ?></h1>
</section>
	<section class="about_text about_padding">
	<p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'samanthamorel' ); ?></p>		
	</section>
    <section class="form" style="background-color: <?php the_field('contact_bg_color', 'option'); ?>">
      <h2>
      Ready to take the step?
      </h2>
      <div class="flexible-center">
        <div class="form_left">          
          <p><?php the_field('contact_details', 'option'); ?></p>    
        </div>
        <div class="form_right">
        <?php echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');?>
         
        </div>
      </div>
    </section>
<?php
get_footer();
