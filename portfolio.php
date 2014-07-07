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
		<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?= the_post_thumbnail(); ?>
		<p class="meta date">
			<?= get_post_meta(get_the_ID(), 'project-start', true); ?>
			&mdash;
			<?= get_post_meta(get_the_ID(), 'project-end', true); ?>
		</p>
		<p class="meta tags"><a href="<?= get_post_meta(get_the_ID(), 'project-link', true) ?>"><?= get_post_meta(get_the_ID(), 'project-link', true) ?></a></p>
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
