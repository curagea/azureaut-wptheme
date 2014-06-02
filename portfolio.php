<?php
/* Template Name: Portfolio */
  get_header();
?>

<div class="wrapper">

<div class="main-content">
  <h1>Portfolio</h1>
  <?php
    query_posts('category_name=portfolio');
    if (have_posts()):
      while (have_posts()) : the_post();
  ?>
    <div class="chunk" id="post-<?php the_ID(); ?>">
      <? echo get_image('thumbnail'); ?>
      <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
      <span class="meta date">
        <?= get('project-start') . ' &mdash; ' . get('project-end'); ?></span>
      <span class="meta tags"><a href="<?= get('project-link') ?>"><?= get('project-link') ?></a></span>
      <p class="description"><?php the_excerpt(); ?></p>
      <a class="more-link" href="<?php the_permalink() ?>">More about this project</a>
    </div>

  <?php 
    endwhile;
    else:
  ?>
    <p>Patience is a virtue...</p>
  <? endif; ?>
    
</div> <!-- end .main-content -->

<?php get_sidebar(); ?>

</div> <!-- end .wrapper -->

<?php wp_reset_query(); get_footer(); ?>
