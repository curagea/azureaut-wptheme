<?php
/* Template Name: Pastime */
	get_header();
?>
<h1>Pastime</h1>
<?
	query_posts('category_name=pastime');
	if (have_posts()):
		while (have_posts()) : the_post();
?>
	<div class="chunk" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?= the_post_thumbnail(); ?>
		<span class="meta tags">
			<?= get_post_meta(get_the_ID(), 'creation-details', true)?>
		</span>
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