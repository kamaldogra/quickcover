<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Samantha_Morel
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link
			href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,500&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
		/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		//wp_body_open();
		?>
<nav class="navbar navbar-fixed-top">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php the_field('client_portal_link', 'option'); ?>" target="_blank"><?php the_field('client_portal_text', 'option'); ?></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">

		<?php	wp_nav_menu( array('menu'   => 'Main Menu', 'menu_class' => 'nav navbar-nav') ); ?>				
		<ul class="nav navbar-nav navbar-right">
					<li style="background:<?php the_field('access_client_portal_color', 'option'); ?>;"><a href="<?php the_field('client_portal_link', 'option'); ?>" target="_blank" style="color:<?php the_field('access_client_portal_text_color', 'option'); ?>"><?php the_field('client_portal_text', 'option'); ?></a></li>
		</ul>
			</div>
			
		</nav>

		<?php
		
