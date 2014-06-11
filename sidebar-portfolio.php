<?
  $portfolio_id = get_cat_id('portfolio');
 	$cats = get_categories("order=DESC&child_of=$portfolio_id");
?>

<?php if (!empty($cats)): ?>

<ul class="sub-menu">
	<li>
		<a href="<?php echo page_link('portfolio') ?>">All</a>
	</li>
	<?php wp_list_categories("order=DESC&child_of=$portfolio_id&show_count=1&title_li=")?>
</ul>

<?php endif; ?>