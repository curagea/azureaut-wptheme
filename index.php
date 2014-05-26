<?php

  get_header();
  print naked_nav($post);
  
?>
  <!-- <div id="main-menu">
    <ul>
      <li id="journal" class="current"><a href="/journal/" >Journal</a></li>
      <li id="portfolio"><a href="/portfolio/" >Portfolio</a></li>
      <li id="pastime"><a href="/pastime/">Pastime</a></li>
      <li id="about"><a href="/about/">About</a></li>                                    
    </ul>
  </div> -->
  <div id="main-content">
  <h2>Journal<? if (is_month()):?> &mdash; <? the_time('F Y'); endif; ?></h2>
  <?
  if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <div class="chunk" id="post-<?php the_ID(); ?>">
    
      <h3 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
      <span class="meta date">Published: <?php the_date(); ?></span>
      <span class="meta tags"><? the_tags('') ?></span>
      <div class="description"><?php the_excerpt(); ?></div>
     
      <a class="more-link" href="<?php the_permalink() ?>">More</a>
    </div>

    <?php endwhile; ?>

    <?php else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <?php if (will_paginate()): ?>
  
        <ul id="pagination">
          <li class="previous"><?php next_posts_link('&laquo; Previous Entries') ?></li>
          <li class="future"><?php previous_posts_link('Next Entries &raquo;') ?></li>
        </ul>
    
    <?php endif; ?>
  </div> <!-- end main-content -->
  <div id="sub-menu">
    <? 
        get_sidebar('journal');
    ?>
  </div>
  </div> <!-- end wrapper -->
  <?php wp_reset_query(); ?>
  
  <?php
  get_footer();
?>