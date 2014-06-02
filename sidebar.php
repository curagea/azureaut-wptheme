<? if (!is_mobile()): ?>
<div class="sidebar" id="sidebar">
	<div id="content">
		<h2>Azure Autonomie</h2>

		<nav class="main-menu">
			<ul>
				<li>
					<h4>Journal</h4>
					<ul class="sub-menu">
						<li>Happy</li>
						<li>Sad</li>
					</ul>
				</li>
				<li>
					<h4>Pastime</h4>
					<ul class="sub-menu">
						<li>Literature</li>
						<li>Music</li>
					</ul>
				</li>
				<li>
					<h4>Portfolio</h4>
					<ul class="sub-menu">
						<li>Design</li>
						<li>Illustration</li>
					</ul>
				</li>
				<li>
					<h4>About</h4>
				</li>
			</ul>
		</nav>

		<footer>
			<?php get_template_part('copyright') ?>
		</footer>

	</div>
</div>
<?php endif; ?>