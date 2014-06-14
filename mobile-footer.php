<nav class="circley-menu sans-serif">
	<ul class="reset-list">
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

<?php get_template_part('external-links') ?>

<footer class="grid-100 sans-serif">
	<?php get_template_part('copyright') ?>
</footer>
