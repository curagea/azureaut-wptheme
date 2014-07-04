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

	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/selectivizr-min.js"></script>
	<![endif]-->

<?php
	wp_reset_query();
	wp_footer();
?>
</body>
</html>