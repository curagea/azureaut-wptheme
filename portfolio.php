<?php
	/* Template Name: Portfolio */
	get_header();
?>

<h1>Portfolio</h1>
<?php
	query_posts('category_name=portfolio');
	if (have_posts()):
		while (have_posts()) : the_post();
?>
	<div class="chunk" id="post-<?php the_ID(); ?>">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<? echo get_image('thumbnail'); ?>
		<span class="meta date">
			<?= get('project-start') . ' &mdash; ' . get('project-end'); ?></span>
		<span class="meta tags"><a href="<?= get('project-link') ?>"><?= get('project-link') ?></a></span>
		<div class="description"><?php the_excerpt(); ?></div>
		<a class="more-link" href="<?php the_permalink() ?>">More about this project</a>
	</div>

<?php
	endwhile;
	else:
?>
	<p>Patience is a virtue...</p>
<?php endif; ?>

<?php get_footer(); ?>
