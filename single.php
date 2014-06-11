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
		<?php if ($is_portfolio_post): ?>
			<span class="meta date"><?= get('project-start') . ' &mdash; ' . get('project-end'); ?></span>
			<span class="meta tags"><a href="<?= get('project-link') ?>"><?= get('project-link') ?></a></span>
		<? elseif ($is_pastime_post): ?>
			<span class="meta tags"><?= get('creation-details')?></span>
		<? else: ?>
			<span class="meta date"><? the_date(); ?></span>
			<span class="meta tags"><? the_tags('') ?></span>
		<? endif; ?>
		<div class="content">
			<? if ($is_portfolio_post): ?>
				<? echo get_image('thumbnail'); ?>
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