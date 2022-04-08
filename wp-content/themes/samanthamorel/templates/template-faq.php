<?php
/*
 * Template Name: Faq
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
  .flexible-center ul{ width:100%; margin-top:10px;}
  .flexible-center ul li{ width:48%; display:inline-block;}

</style>
<section class="about_banner" style="background-color: <?php the_field('faq_bg_color') ?>;">
			<h1><?php the_title(); ?></h1>
		</section>
<section class="about <?php echo $side ?>" style="background-color: <?php the_field('faq_bg_color') ?>;">
			<div class="flexible-center">				
				<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  the_content();
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
endif;  ?>    
		

      <div class="panel-group" id="accordion">

      <?php

$faq=1;

if (have_rows('faqs')) : 
  while (have_rows('faqs')) : the_row();
  if($faq==1)
  {
    $f="in";

  }
  else{
    $f="";
  }
?>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a onclick="loadMap()" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $faq ?>"><?php the_sub_field('faq_heading') ?></a>
        </h4>
      </div>
      <div id="collapse<?php echo $faq ?>" class="panel-collapse collapse <?php echo $f; ?>">
        <div class="panel-body"><?php the_sub_field('faq_text') ?></div>
      </div>
    </div>
    <?php
    $faq++;
			endwhile;

		else :

		// no rows found

		endif;

		?>
   	</div>
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
get_footer();?>