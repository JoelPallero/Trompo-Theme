<?php
/**
 * Front page template
 *
 * @package hello-trompo
 */
get_header();
?>

<?php
// Reutilizamos la home del tema (sin obligar al usuario a asignar un template manualmente).
get_template_part('templates/home', 'trompo');
?>

<?php get_footer(); ?>

