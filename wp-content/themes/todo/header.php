<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/images/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory') ?>/site.webmanifest">
  <link rel="mask-icon" href="<?php bloginfo('template_directory') ?>/images/safari-pinned-tab.svg" color="#41a550">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
  <?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
      function theme_slug_render_title() {
  ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php
      }
      add_action( 'wp_head', 'theme_slug_render_title' );
  endif; ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header class="header">
    <div class="container">
      <div class="logo-wrapper">
        <a href="<?php bloginfo('home') ?>" title="To Do">
          <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" width="67" height="76" />
        </a>
      </div>
      <div class="button-wrapper">
        <button id="menu-button">
          <img src="<?php bloginfo('template_directory') ?>/images/menu.svg" width="18" height="12" />
        </button>
      </div>
      <div class="menu-wrapper" id="menu-wrapper">
        <button id="close-button" class="close-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.1 90.1">
            <path d="M55.8 45l32.1 32.1c3 3 3 7.7 0 10.7s-7.7 3-10.7 0L45 55.8 12.9 87.9c-3 3-7.7 3-10.7 0s-3-7.7 0-10.7l32.1-32.1-32-32.2c-3-3-3-7.7 0-10.7s7.7-3 10.7 0l32 32.1 32.2-32c3-3 7.7-3 10.7 0s3 7.7 0 10.7L55.8 45z" fill-rule="evenodd" clip-rule="evenodd"/>
          </svg>
        </button>
        <nav>
          <ul>
            <li><a href="<?php bloginfo('home') ?>/#conheca-a-todo">Conheça a To Do</a></li>
            <li><a href="<?php bloginfo('home') ?>/#quem-servimos">Quem Servimos</a></li>
            <li><a href="<?php bloginfo('home') ?>/#tudo-isso-e-todo">Tudo isso é To Do</a></li>
            <li><a href="<?php echo get_post_type_archive_link('post') ?>">Blog</a></li>
            <li><a href="<?php bloginfo('home') ?>/#fale-conosco">Fale Conosco</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>