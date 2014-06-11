<?php
	$pastime_id = get_cat_id('pastime');
	$cats = get_categories("order=DESC&child_of=$pastime_id");
?>

<?php if (!empty($cats)): ?>

<ul class="sub-menu">
	<li>
		<a href="<?php echo page_link('pastime') ?>">All</a>
	</li>
	<? wp_list_categories("order=DESC&child_of=$pastime_id&show_count=1&title_li=")?>
</ul>

<?php endif; ?>