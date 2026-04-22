<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Saltar al contenido', 'hello-trompo'); ?></a>

<header class="site-header" data-header>
  <div class="container header-inner">
    <div class="brand-wrap">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
        <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
          the_custom_logo();
        } else {
          echo '<span class="logo-text">' . esc_html(get_bloginfo('name')) . '</span>';
        }
        ?>
      </a>
      <span class="brand-tagline"><?php bloginfo('description'); ?></span>
    </div>

    <button class="nav-toggle" type="button" aria-controls="site-navigation" aria-expanded="false" data-nav-toggle>
      <span></span><span></span><span></span>
      <span class="screen-reader-text"><?php esc_html_e('Abrir menú', 'hello-trompo'); ?></span>
    </button>

    <nav class="main-nav" id="site-navigation" aria-label="<?php echo esc_attr__('Navegación principal', 'hello-trompo'); ?>" data-nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'main-menu',
        'fallback_cb'    => 'hello_trompo_primary_fallback_menu'
      ));
      ?>
      <a class="header-cta btn btn-primary btn-sm" href="<?php echo esc_url(hello_trompo_page_url('contacto', '/contacto/')); ?>"><?php esc_html_e('Hablar con un asesor', 'hello-trompo'); ?></a>
    </nav>
  </div>
</header>
