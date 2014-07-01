<?php
/* Template Name: Frontpage */
	get_header();
?>

<div class="frontpage">
	<div class="welcome-image">
		<img src="<?php echo get_template_directory_uri() ?>/images/front-page.png" alt="">
	</div>
	<section class="text-centered">
		<h1>Oh hi!</h1>
		<p class="intro mar-bot_1">
			I&rsquo;m Hannah, and welcome to my site, mysteriously named &ldquo;Azure
			Autonomie&rdquo;. Do explore and discover within, and
			who knows &mdash; you might learn a thing or two <a href="/about">about me</a>.
		</p>
	</section>

	<nav class="circley-menu sans-serif">
		<ul class="text-centered reset-list">
			<li>
				<a href="<?php echo page_link('journal') ?>" class="journal">
					<i></i><span>Journal</span>
				</a>
			</li>
			<li>
				<a href="<?php echo page_link('pastime') ?>" class="pastime">
					<i></i><span>Pastime</span>
				</a>
			</li>
			<li>
				<a href="<?php echo page_link('portfolio') ?>" class="portfolio">
					<i></i><span>Portfolio</span>
				</a>
			</li>
			<li>
				<a href="<?php echo page_link('about') ?>" class="about">
					<i></i><span>About</span>
				</a>
			</li>
		</ul>
	</nav>
	<footer class="grid-100 sans-serif">
		<?php get_template_part('copyright') ?>
	</footer>
</div> <!-- end .frontpage -->

	</div> <!-- end .main-content -->
</div> <!-- end .wrapper -->

<?php
	wp_reset_query();
	wp_footer();
?>
	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/selectivizr-min.js"></script>
	<![endif]-->
</body>
</html>