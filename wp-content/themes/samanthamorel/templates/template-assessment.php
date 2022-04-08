<?php
/*
 * Template Name: Assessment
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
<style>
  .about .flexible-center a{
  background:<?php the_field('change_button_color', 'option'); ?>; 
  color:<?php the_field('change_button_text_color', 'option'); ?>
  }
</style>
<section class="about_banner" style="background-color: <?php the_field('assessment_bg_color') ?>;">
			<h1><?php the_title(); ?></h1>
		</section>
<section class="about <?php echo $side ?>" style="background-color: <?php the_field('assessment_bg_color') ?>;">
			<div class="flexible-center">
				<div class="about_left">
        <?php  $homeAbout = get_field( "ass_left_image" );
        if($homeAbout){ ?>
         <img src="<?php the_field( "ass_left_image" ); ?>" alt="Welcome" />       
        <?php  }  else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/ainslee.webp" alt="Welcome" />
          <?php  } ?>        
					<!-- <div class="welcome">
						Welcome
					</div> -->
				</div>

				<div class="about_right">
        <?php the_field( "ass_right_content" ); ?>				
				</div>
				<?php the_field( "ass_full_width_content" ); ?>	
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
