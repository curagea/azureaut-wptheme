<?php
	$portfolio_id = get_cat_id('Portfolio');
	$pastime_id = get_cat_id('Pastime');
	$journal_id = get_cat_id('Journal');
	$is_pastime_post = post_is_in_descendant_category($pastime_id);
	$is_portfolio_post = post_is_in_descendant_category($portfolio_id);
	$is_journal_post = post_is_in_descendant_category($journal_id);

	$menu_icons_img = get_template_directory_uri() . '/images/menu-icons.png';
?>

<div class="sidebar">
	<div class="content">
		<h3>Azure Autonomie</h3>

		<nav>
			<ul class="reset-list main-menu">
				<li>
					<h4 class="journal">
						<i><img class="sprite" alt="" width="0" height="1" src="<?php echo $menu_icons_img; ?>"></i>
						<a href="<?php echo page_link('journal') ?>">Journal</a>
					</h4>
					<?php
						if ($is_journal_post) {
							get_sidebar('journal');
						}
					?>
				</li>
				<li>
					<h4 class="pastime">
						<i><img class="sprite" alt="" width="0" height="1" src="<?php echo $menu_icons_img; ?>"></i>
						<a href="<?php echo page_link('pastime') ?>">Pastime</a>
					</h4>
					<?php
						if ($is_pastime_post) {
							get_sidebar('pastime');
						}
					?>
				</li>
				<li>
					<h4 class="portfolio">
						<i><img class="sprite" alt="" width="0" height="1" src="<?php echo $menu_icons_img; ?>"></i>
						<a href="<?php echo page_link('portfolio') ?>">Portfolio</a>
					</h4>
					<?php
						if ($is_portfolio_post) {
							get_sidebar('portfolio');
						}
					?>
				</li>
				<li>
					<h4 class="about">
						<i><img class="sprite" alt="" width="0" height="1" src="<?php echo $menu_icons_img; ?>"></i>
						<a href="<?php echo page_link('about') ?>">About</a>
					</h4>
					<?php
						if (is_page('about')) {
							get_sidebar('about');
						}
					?>
				</li>
			</ul>
		</nav>

		<?php get_template_part('external-links') ?>

		<div class="search-form">
			<?php get_search_form(); ?>
		</div>

	</div>

	<footer class="sans-serif">
		<?php get_template_part('copyright') ?>
	</footer>

</div>
