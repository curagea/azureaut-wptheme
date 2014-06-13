<?php
	get_header();
?>
<h1 class="mar-bot_0">Search results!</h1>
<p class="mar-bot_2"><em><?php printf( __( 'for: &ldquo;%s&rdquo;' ), '<span>' . get_search_query() . '</span>'); ?></em></p>

<section class="main">
<?
	if (have_posts()):
		while (have_posts()) : the_post();
?>
	<div class="chunk" id="post-<?php the_ID(); ?>">
		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<span class="meta date"><?php the_date(); ?></span>
		<div class="description"><?php the_excerpt(); ?></div>
	</div>

<?php endwhile; ?>

<?php else: ?>
	<p><?php _e('Oops, nothing found!'); ?></p>
<?php endif; ?>

</section>

<?php if (will_paginate()): ?>

	<ul class="pagination reset-list">
		<li class="previous"><?php next_posts_link('&laquo; Previous Entries') ?></li>
		<li class="future"><?php previous_posts_link('Next Entries &raquo;') ?></li>
	</ul>

<?php endif; ?>
<?php
	get_footer();
?>