<?
  $journal_id = get_cat_id('journal');
 	$cats = get_categories("order=DESC&child_of=$journal_id");
?>

<?php if (!empty($cats)): ?>
<ul class="sub-menu">
	<li>
		<label for="archive">
			Explore the Past:
			<select name="archive" id="archive" size="1" onChange='document.location.href=this.options[this.selectedIndex].value;'>
				<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
				<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
			</select>
		</label>
	</li>
	<li>
		<a href="<?php echo page_link('journal') ?>">All</a>
	</li>
	<?php wp_list_categories("order=DESC&child_of=$journal_id&show_count=1&title_li=") ?>
</ul>
<?php endif; ?>


