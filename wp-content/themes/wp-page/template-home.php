<?php
/**
 * Template Name: Home
 *
 * 
 */
	get_header();
		while (have_posts()) : the_post();
			while (have_rows('page_home_content')) : the_row();
				if(get_row_layout() == 'section_hero'):
					get_template_part('resources/templates/global/hero-component');
				;?>
				<main id="main">
				<?php
				elseif (get_row_layout() == 'section_about') :
					get_template_part('resources/templates/sections/home/about-component');
				elseif (get_row_layout() == 'section_values'):
					get_template_part('resources/templates/sections/home/value-component');
				elseif (get_row_layout() == 'section_count') :
					get_template_part('resources/templates/sections/home/count-component');
				elseif (get_row_layout() == 'section_features') :
					get_template_part('resources/templates/sections/home/features-component');
				elseif (get_row_layout() == 'section_team') :
					get_template_part('resources/templates/sections/home/team-component');
				elseif (get_row_layout() == 'section_slider') :
					get_template_part('resources/templates/sections/home/slider-component');
				elseif (get_row_layout() == 'section_contact') :
					get_template_part('resources/templates/sections/home/contact-component');
				endif;
			endwhile;
			?>
			</main>
			<?php
		endwhile;
	get_footer();
?>
