<?php
/* Template Name: Frontpage */
  get_header();
?>

<div class="frontpage">
  <div class="welcome-image">
    <img src="<? echo get_template_directory_uri() ?>/images/front-page.png" alt="">
  </div>
  <h1>Oh hi!</h1>
  <p class="intro mar-bot_3">
    I&rsquo;m Hannah, and welcome to my site. It has a name, &ldquo;Azure
    Autonomie&rdquo;, for reasons. Feel free to explore and discover here, and
    who knows - you might learn a thing or two <a href="/about">about me</a>.
  </p>

  <nav>
    <ul class="grid-parent">
      <li><a href="/journal" class="journal"><span>Journal</span></a></li>
      <li><a href="/pastime" class="pastime"><span>Pastime</span></a></li>
      <li><a href="/portfolio" class="portfolio"><span>Portfolio</span></a></li>
      <li><a href="/about" class="about"><span>About</span></a></li>
    </ul>
  </nav>
  <footer class="grid-100">
    <?php get_template_part('copyright') ?>
  </footer>

</div> <!-- end .frontpage -->

<?php get_footer() ?>