<?php

/**
 * This is the template that displays all of the <head> section and <header> section.
 *
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<?php the_field('code_head', 'options'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php the_field('code_body', 'options'); ?>
	<div id="app">
		<?php get_template_part('resources/templates/partials/header/header'); ?>