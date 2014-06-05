	</div> <!-- end .main-content -->
	<?php
		if (!is_mobile()) {
			get_sidebar();
		}

		if (is_mobile() and !is_front_page()) {
			get_template_part('mobile-footer');
		}
	?>
</div> <!-- end .wrapper -->

<?php
	wp_reset_query();
	wp_footer();
?>
</body>
</html>