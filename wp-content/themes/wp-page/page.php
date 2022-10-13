<?php

/**
 * The most generic template file in hierarchy.
 *
 *
 */
?>

<?php get_header(); ?>

<section class="pt-6">
	<div class="container">
		<div class="row">
			<div class="col-12 pl-md-2 pb-md-5 pb-4 mb-2">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('resources/templates/content/content'); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>