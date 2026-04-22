<footer class="site-footer">
  <div class="container footer-top">
    <div>
      <p class="footer-kicker"><?php esc_html_e('Hello Trompo para Viditec', 'hello-trompo'); ?></p>
      <h2 class="footer-title"><?php esc_html_e('Tecnología profesional para proyectos que no pueden fallar.', 'hello-trompo'); ?></h2>
    </div>
    <a class="btn btn-primary" href="<?php echo esc_url(hello_trompo_page_url('contacto', '/contacto/')); ?>"><?php esc_html_e('Solicitar asesoramiento', 'hello-trompo'); ?></a>
  </div>

  <div class="container footer-bottom">
    <div>
      <p>&copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?></p>
      <p class="footer-copy"><?php esc_html_e('Soluciones audiovisuales, broadcast, integración técnica y soporte especializado.', 'hello-trompo'); ?></p>
    </div>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'footer',
      'container'      => false,
      'menu_class'     => 'footer-menu',
      'fallback_cb'    => false
    ));
    ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
