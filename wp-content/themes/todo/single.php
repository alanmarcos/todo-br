<?php get_header(); ?>
<?php $thumb = get_the_post_thumbnail_url(); ?>

<section class="header-wrapper">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p><?php echo get_the_date('d/m/Y'); ?></p>
  </div>
</section>

<?php if($thumb): ?>
  <div class="featured-image-wrapper">
    <img src="<?php echo $thumb ?>" alt="<?php the_title() ?>" />
  </div>
<?php endif; ?>

<div class="container">
  <div class="the-content">
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer(); ?>