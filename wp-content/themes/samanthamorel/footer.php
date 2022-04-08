<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Samantha_Morel
 * @since Twenty Twenty 1.0
 */

?>
	 <section class="footer" style="background-color: <?php the_field('footer_bg_color', 'option'); ?>">
      <p><?php the_field('copyright_content', 'option'); ?></p>
    </section>
    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>
