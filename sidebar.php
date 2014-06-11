<?php
	$portfolio_id = get_cat_id('Portfolio');
	$pastime_id = get_cat_id('Pastime');
	$journal_id = get_cat_id('Journal');
	$is_pastime_post = post_is_in_descendant_category($pastime_id);
	$is_portfolio_post = post_is_in_descendant_category($portfolio_id);
	$is_journal_post = post_is_in_descendant_category($journal_id);
?>

<div class="sidebar">
	<div class="content sticky">
		<h3>Azure Autonomie</h3>

		<nav class="main-menu">
			<ul class="reset-list">
				<li>
					<h4><a href="<?php echo page_link('journal') ?>">Journal</a></h4>
					<?php
						if ($is_journal_post) {
							get_sidebar('journal');
						}
					?>
				</li>
				<li>
					<h4><a href="<?php echo page_link('pastime') ?>">Pastime</a></h4>
					<?php
						if ($is_pastime_post) {
							get_sidebar('pastime');
						}
					?>
				</li>
				<li>
					<h4><a href="<?php echo page_link('portfolio') ?>">Portfolio</a></h4>
					<?php
						if ($is_portfolio_post) {
							get_sidebar('portfolio');
						}
					?>
				</li>
				<li>
					<h4><a href="<?php echo page_link('about') ?>">About</a></h4>
					<?php
						if (is_page('about')) {
							get_sidebar('about');
						}
					?>
				</li>
			</ul>
		</nav>

		<div class="search-form">
			<?php get_search_form(); ?>
		</div>

		<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">
			RSS
		</a>

	</div>

	<footer class="sans-serif sticky">
		<?php get_template_part('copyright') ?>
	</footer>

</div>
