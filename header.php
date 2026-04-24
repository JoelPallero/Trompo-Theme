<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <nav id="nav">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hello-trompo
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=Montserrat:wght@300;400;500;600&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div id="cur"></div>
  <div id="cur-r"></div>

  <!-- NAV -->
  <nav id="nav">
    <a class="nav-logo" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="https://trompotest.com.ar/bodegaslopez/wp-content/uploads/2026/04/logo-gris.png"
        onerror="this.style.display='none';this.nextElementSibling.style.display='flex'" alt="Bodegas López logo">
    </a>
    <ul class="nav-links">
      <li><a href="#bodega">La Bodega</a></li>
      <li><a href="#vinos">Los Vinos</a></li>
      <li><a href="#terroir">Terroir</a></li>
      <li><a href="#restaurant">Restaurant</a></li>
      <li><a href="#experiencias">Experiencias</a></li>
    </ul>
    <a href="#contacto" class="nav-cta">Contacto</a>
  </nav>