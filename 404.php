<?php
/** The 404 error page */
	get_header();
?>

<h1>Uh-oh!</h1>
<p>
	That's strange. I can't find what you're looking for. Maybe it went somewhere
	else, or it never existed in the first place. Whatever the reason, I'm sure you
	can find it using the search form, or check the main menu.
</p>
<img class="image-404" src="<? echo get_template_directory_uri() ?>/images/404.png" />

<?php get_footer(); ?>