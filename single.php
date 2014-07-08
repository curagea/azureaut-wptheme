<?php
	get_header();
	$portfolio_id = get_cat_id('portfolio');
	$pastime_id = get_cat_id('pastime');
	$is_portfolio_post = post_is_in_descendant_category($portfolio_id);
	$is_pastime_post = post_is_in_descendant_category($pastime_id);
?>
<?php
	if (have_posts()):
		while (have_posts()) : the_post();
?>
	<div class="entry" id="post-<?php the_ID(); ?>">

		<h1 class="post-title"><?php the_title(); ?></h1>
		<div class="content">
			<?php if ($is_portfolio_post): ?>
				<?= the_post_thumbnail(); ?>
				<p class="meta date"><?= get_post_meta(get_the_ID(), 'project-start', true) . ' &mdash; ' . get_post_meta(get_the_ID(), 'project-end', true); ?></p>
				<p class="meta tags"><a href="<?= get_post_meta(get_the_ID(), 'project-link', true) ?>"><?= get_post_meta(get_the_ID(), 'project-link', true) ?></a></p>
			<? elseif ($is_pastime_post): ?>
				<p class="meta tags"><?= get_post_meta(get_the_ID(), 'creation-details', true)?></p>
			<? else: ?>
				<p class="meta date"><? the_date(); ?></p>
				<p class="meta tags"><? the_tags('') ?></p>
			<? endif; ?>

			<?php the_content(__('(more...)')); ?>
		</div>
		<p class="post-meta">Categories: <?php the_category(', ') . edit_post_link(__('Edit'), ' | '); ?></p>

	</div>

	<ul class="pagination reset-list">
		<li class="previous"><?php next_post_link('&laquo; %link', '%title') ?></li>
		<li class="future"><?php previous_post_link('%link &raquo;', '%title') ?></li>
	</ul>

<?php
		comments_template();
		endwhile;
	else:
?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php
	get_footer();
?>