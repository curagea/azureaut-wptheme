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
				<div class="meta date"><?= get_post_meta(get_the_ID(), 'project-start', true) . ' &mdash; ' . get_post_meta(get_the_ID(), 'project-end', true); ?></div>
				<div class="meta tags"><a href="<?= get_post_meta(get_the_ID(), 'project-link', true) ?>"><?= get_post_meta(get_the_ID(), 'project-link', true) ?></a></div>
			<? elseif ($is_pastime_post): ?>
				<div class="meta tags"><?= get_post_meta(get_the_ID(), 'creation-details', true)?></div>
			<? else: ?>
				<div class="meta date"><? the_date(); ?></div>
				<div class="meta tags"><? the_tags('') ?></div>
			<? endif; ?>

			<?php the_content(__('(more...)')); ?>
		</div>
		<div class="post-meta">Categories: <?php the_category(', ') . edit_post_link(__('Edit'), ' | '); ?></div>

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