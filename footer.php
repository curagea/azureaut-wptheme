	</div> <!-- end .main-content -->
	<?php get_sidebar(); ?>

</div> <!-- end .wrapper -->

<?php 
	if (is_mobile()) {
		get_template_part('mobile-footer');
	}

	wp_reset_query();
	wp_footer();
?>
</body>
</html>