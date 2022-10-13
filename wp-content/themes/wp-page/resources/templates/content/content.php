<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'post_image'); ?>
<article class="blog__post blog__post-content">
	<div class="blog__post-img">
		<?php if ($thumbnail) : ?>
			<img src="<?php echo $thumbnail[0]; ?>" alt="" class="img-fluid">
		<?php endif; ?>
	</div>
	<header>
		<h1 class="blog__post-title p-0"><?php the_title(); ?></h1>
	</header>
	<?php the_content(); ?>
</article>