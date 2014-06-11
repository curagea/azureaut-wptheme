<?php
/* Template Name: About */
	get_header();
?>

<?php
	query_posts('pagename=about');
	while (have_posts()) : the_post();
?>
	<h1>About Me</h1>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
