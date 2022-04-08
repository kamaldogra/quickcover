<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Samantha_Morel
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<style>
  .about_text a{
  background:<?php the_field('change_button_color', 'option'); ?>; 
  color:<?php the_field('change_button_text_color', 'option'); ?>
  }
</style>
<?php if(get_field('show_sidebar')) {
       $side="side";
      }
      else{
        $side="";
      }
        ?>
<?php if(get_field('show_sidebar')) {?>
<style>
.about_text 
{
  display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.blog_left
{
  width: 70%;
    padding-right: 5%;
}

@media screen and (max-width:767px)
{
  .blog_left
{
  width: 100%;
    padding-right: 0;
}

}
</style>

<?php } ?>
<?php if(!is_page(297)){ ?>
<section class="about_banner">    
	<h1><?php the_title(); ?></h1>
</section>
<?php }?>
	<section class="about_text about_padding <?php echo $side ?>">
<?php if(is_singular( 'post' )){ ?>
<div class="blog_left">
          <div class="blog_single_meta">
            <?php $author_id = $post->post_author; ?> 
            <img src="<?php echo esc_url( get_avatar_url($author_id)); ?>" />
            <?php echo get_the_author(); ?> <span><?php the_time('F jS, Y');?></span>  
                 
          </div>
          <?php the_content(); ?>   
          </div>
<?php if(get_field('show_sidebar')) {?>
<div class="sidebar">

<?php dynamic_sidebar('blog'); ?>
</div>
    <?php 
    } }  else { ?>
			<div class="flexible-center">
	<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
	the_content();
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
endif;

}?>			
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
<?php get_footer(); 
