<?php 
  $defaultThumb = ( get_bloginfo('template_directory') . '/images/default-post-image.jpg' );
  $thumb = get_the_post_thumbnail_url();  
  $actualThumb = $thumb ? $thumb : $defaultThumb
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h2>
    <a href="<?php the_permalink(); ?>">
      <div class="image-wrapper">
        <img src="<?php echo $actualThumb; ?>" ?>
      </div>
      <div class="title">
        <?php the_title(); ?>
      </div>
      <div class="meta">
        <time>10/03/2020</time>
        <span>Leia Mais</span>
      </div>
    </a>
  </h2>
</article>