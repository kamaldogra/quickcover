<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Samantha_Morel
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<section class="about_banner">
			<h1>Blog</h1>
		</section>

<section class="blog">
	<div class="flexible-center">				
		<?php
		
		if (have_posts()) {
  	 	while (have_posts()) { the_post();
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'thumbnail_size' );
		$url = $src[0];
    	?>
    	<div class="blog_single">
    		<a href="<?php the_permalink();?>">
				<img src="<?php echo $src[0];?>"> </a>
					<div class="blog_inner">
						<div class="blog_single_meta">						
							<?php $author_id = $post->post_author; ?> 
    						<img src="<?php echo esc_url( get_avatar_url($author_id)); ?>" />
							<?php echo get_the_author(); ?> <span><?php the_time('F jS, Y');?></span>						
						</div>
						<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
						<p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
						<hr>
						<b><?php echo do_shortcode('[post-views]') ?> views</b>
					</div>
		</div>                        
        <?php }  
 if(function_exists('wp_paginate')) {
    wp_paginate();
} 
		}
		 else {

    
   // get_template_part('template-parts/content/content', 'none');

		}
		?>

			
		</div>
</section>
<?php get_footer();