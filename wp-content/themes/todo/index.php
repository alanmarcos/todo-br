<?php get_header(); ?>
<section class="header-wrapper">
  <div class="container">
    <h1>Blog</h1>
  </div>
</section>
<main id="content" class="container">
  <div class="posts-container">
    <div class="posts-wrapper">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="pagination-wrapper">
      <?php get_template_part( 'nav', 'below' ); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>