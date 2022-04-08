<?php
/*
 * Template Name: Home
 */
get_header();
?>
<style>
  .about .flexible-center a{
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
  <div class="banner" style="background-color: <?php the_field('bg_banner') ?>;">
    <div class="flexible-center">
        <div class="banner_left">
        <?php $value = get_field( "left_heading" );
        if(isset($value)) { ?>
         <h1 style="background-color: <?php the_field('heading_bg_color') ?>; color:<?php the_field('heading_text_color') ?>;"><?php the_field( "left_heading" ); ?></h1>
        <?php  } ?>          
        <a href="<?php the_field('link_left_block_1') ?>"><div class="banner_cta" style="background-color: <?php the_field('bg_left_block_1') ?>; color:<?php the_field('select_text_1') ?>;">
          <?php the_field( "left_block_1" ); ?>     
          </div></a>       
          <a href="<?php the_field('link_left_block_2') ?>"> <div class="banner_offering" style="background-color: <?php the_field('bg_left_block_2') ?>;color:<?php the_field('select_text_2') ?>;">
         <?php the_field( "left_block_2" ); ?>             
          </div></a>

          <a href="<?php the_field('link_left_block_3') ?>">   <div class="banner_covid" style="background-color: <?php the_field('bg_left_block_3') ?>;color:<?php the_field('select_text_3') ?>;">
         <?php the_field( "left_block_3" ); ?>         </div>  </a>  
        
        </div>
        <div class="banner_right">
        <?php  $banner = get_field( "right_block_image" );
        if($banner){ ?>
         <img src="<?php the_field( "right_block_image" ); ?>" alt="Banner Image" />       
        <?php  }  else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/banner.webp" alt="Banner Image" />
          <?php  } ?>
          <div class="banner_right_text">
            <h2>
            <?php the_field( "right_block_heading" ); ?>​
            </h2>
            <p><?php the_field( "right_block_sub_heading" ); ?></p>
          </div>
        </div>
    </div>
  </div>

    <section class="about <?php echo $side ?>" style="background-color: <?php the_field('bg_home_about') ?>;">
      <div class="flexible-center">
        <div class="about_left" style="background-image: url(<?php the_field( "home_about_img" ); ?>);background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
        <?php  /*$homeAbout = get_field( "home_about_img" );
        // if($homeAbout){ ?>
        //  <img src="<?php the_field( "home_about_img" ); ?>" alt="Welcome" />       
        // <?php  }  else { ?>
        //   <img src="<?php echo get_template_directory_uri(); ?>/images/welcome.webp" alt="Welcome" />
        //   <?php  } */?>
          <div class="welcome">
          <?php the_field( "home_about_heading" ); ?>
          </div>
        </div>

        <div class="about_right">
        <?php the_field( "home_about_content" ); ?>
        </div>
        <?php the_field( "home_full_width_content" ); ?>
      </div>
      <?php if(get_field('show_sidebar')) {?>
<div class="sidebar">

<?php dynamic_sidebar('blog'); ?>
</div>
    <?php 
    } 
    ?>

      <div id="therapy-services"></div>
</section>
<section class="services" style="background-color: <?php the_field('bg_home_therapy') ?>;">
      <h2>
      <?php the_field( "therapy_heading" ); ?>
      </h2>
      <?php if( have_rows('therapies') ): ?>
      <div class="flexible-center">
      <?php while( have_rows('therapies') ) : the_row(); ?>   
        
        <div class="services_single"><a href="<?php the_sub_field( "therapy_select_link" ); ?>">
          <img src="<?php the_sub_field( "therapy_image" ); ?>" />
          <h3><?php the_sub_field( "therapy_title" ); ?></h3> </a>
        </div>
       
        <?php  endwhile; ?>
        
      </div>
      <?php  else :
   
  endif; ?>
  <?php the_field( "therapy_description" ); ?>
     
    </section>
<section class="about" style="background-color: <?php the_field('bg_home_cert') ?>;">
	 
      <div class="flexible-center about_inner">
      <a href="<?php the_field( "psychology_today_link" ); ?>" target="_blank">
      <?php  $pt = get_field( "psychology_today" );
        if($pt){ ?>
         <img src="<?php the_field( "psychology_today" ); ?>" alt="Psychology Today" />       
        <?php  }  else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/pt.webp" alt="Psychology Today" />
          <?php  } ?>  </a>      
          <img src="<?php the_field( "contact_logo" ); ?>" alt="logo" /> 
        <a href="<?php the_field( "therapyden_link" ); ?>" target="_blank">
        <?php  $td = get_field( "therapyden_image" );
        if($td){ ?>
         <img src="<?php the_field( "therapyden_image" ); ?>" alt="Therapyden" />       
        <?php  }  else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/therapyden-web-badge.png" alt="Therapyden" />
          <?php  } ?>    </a>    
      </div>
      <div class="flexible-center">
	 	<?php the_field( "licence_description" ); ?>
	 </div>
      
    </section>

    

    <section class="form" style="background-color: <?php the_field('contact_bg_color', 'option'); ?>">
      <h2>
        Reach Out.
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
