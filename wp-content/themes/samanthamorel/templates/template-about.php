<?php
/*
 * Template Name: About
 */
get_header();
?>
      <?php if(get_field('show_sidebar')) {
       $side="side";
      }
      else{
        $side="";
      }
        ?>
<section class="about_banner" style="background-color: <?php the_field('about_bg_color') ?>;">
			<h1><?php the_field( "about_heading" ); ?></h1>
		</section>
		<section class="about_text about_padding <?php echo $side ?>" style="background-color: <?php the_field('about_bg_color') ?>;">
			<div class="flexible-center">
				<div class="about_text_left">
				<?php the_field( "about_left_content" ); ?>
				</div>
			
        <?php the_field( "about_full_width_content" ); ?>
				<p class="full"><?php the_field( "resume_description" ); ?></p>
				<hr>
				<h2><?php the_field( "resume_heading" ); ?></h2>
				<a href="<?php the_field( "upload_resume" ); ?>" target="_blank" style="background:<?php the_field('change_button_color', 'option'); ?>; color:<?php the_field('change_button_text_color', 'option'); ?>"><?php the_field( "button_text" ); ?> </a>
      </div>
      <?php if(get_field('show_sidebar')) {?>
<div class="sidebar">

<?php dynamic_sidebar('blog'); ?>
</div>
    <?php 
    } 
    ?>
    </section>
    <section class="form" style="background-color: <?php the_field('contact_bg_color', 'option'); ?>">
      <h2>
      Ready to take the step?
      </h2>
      <div class="flexible-center">
        <div class="form_left">          
          <p><?php the_field('contact_details', 'option'); ?></p>  
          <div class="social">
        <ul>
        <li><a href="<?php the_field('pt_link', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/pt.ico" alt="PT"></a></li>
          <li><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook"></a></li>
          <li><a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="Linkedin"></a></li>
          <li><a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-sketched.png" alt="Instagram"></a></li>
          
        </ul>
      </div>  
        </div>
        <div class="form_right">
        <?php echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');?>
         
        </div>
      </div>
    </section>
<?php
get_footer();
