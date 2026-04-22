<?php
/**
 * Home sections
 *
 * @package hello-trompo
 */
?>

<main id="content" class="page-home-trompo">
  <section class="hero hero-home">
    <div class="container hero-grid">
      <div class="hero-copy reveal-up">
        <p class="eyebrow"><?php esc_html_e('Tecnología profesional + asesoramiento real', 'hello-trompo'); ?></p>
        <h1><?php esc_html_e('Equipamiento y soluciones audiovisuales para producciones que necesitan rendir al máximo.', 'hello-trompo'); ?></h1>
        <p class="hero-text"><?php esc_html_e('Rediseñamos la experiencia de Viditec para comunicar autoridad, ordenar la oferta y convertir mejor. Menos catálogo frío. Más claridad, foco comercial y confianza.', 'hello-trompo'); ?></p>

        <div class="hero-actions">
          <a class="btn btn-primary magnetic" href="<?php echo esc_url(hello_trompo_page_url('soluciones', '/soluciones/')); ?>"><?php esc_html_e('Ver soluciones', 'hello-trompo'); ?></a>
          <a class="btn btn-secondary magnetic" href="<?php echo esc_url(hello_trompo_page_url('contacto', '/contacto/')); ?>"><?php esc_html_e('Hablar con un asesor', 'hello-trompo'); ?></a>
        </div>

        <div class="hero-trust">
          <span><?php esc_html_e('Broadcast', 'hello-trompo'); ?></span>
          <span><?php esc_html_e('Streaming', 'hello-trompo'); ?></span>
          <span><?php esc_html_e('Producción', 'hello-trompo'); ?></span>
          <span><?php esc_html_e('Integración técnica', 'hello-trompo'); ?></span>
        </div>
      </div>

      <div class="hero-visual reveal-scale">
        <div class="visual-card visual-card-main floaty">
          <span class="visual-tag"><?php esc_html_e('Solución integral', 'hello-trompo'); ?></span>
          <h2><?php esc_html_e('Del equipo correcto al sistema completo.', 'hello-trompo'); ?></h2>
          <p><?php esc_html_e('Cámaras, audio, video, medición, instalación y acompañamiento técnico en un mismo ecosistema.', 'hello-trompo'); ?></p>
        </div>
        <div class="visual-stat stat-a">
          <strong data-counter="35">0</strong>
          <span><?php esc_html_e('años de trayectoria', 'hello-trompo'); ?></span>
        </div>
        <div class="visual-stat stat-b">
          <strong data-counter="4">0</strong>
          <span><?php esc_html_e('unidades de negocio', 'hello-trompo'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-dark">
    <div class="container value-grid">
      <article class="value-card reveal-up">
        <span class="value-index">01</span>
        <h3><?php esc_html_e('Equipamiento profesional', 'hello-trompo'); ?></h3>
        <p><?php esc_html_e('Tecnología confiable para cine, TV, streaming, corporativo e integración avanzada.', 'hello-trompo'); ?></p>
      </article>
      <article class="value-card reveal-up">
        <span class="value-index">02</span>
        <h3><?php esc_html_e('Integración técnica', 'hello-trompo'); ?></h3>
        <p><?php esc_html_e('Diseñamos flujos de trabajo y sistemas completos, listos para operar en entornos reales.', 'hello-trompo'); ?></p>
      </article>
      <article class="value-card reveal-up">
        <span class="value-index">03</span>
        <h3><?php esc_html_e('Soporte especializado', 'hello-trompo'); ?></h3>
        <p><?php esc_html_e('Asesoramiento antes, durante y después de la implementación para reducir errores y ganar confianza.', 'hello-trompo'); ?></p>
      </article>
    </div>
  </section>

  <section class="section">
    <div class="container section-heading reveal-up">
      <p class="eyebrow"><?php esc_html_e('Áreas principales', 'hello-trompo'); ?></p>
      <h2><?php esc_html_e('Una oferta clara, organizada por soluciones y no solo por productos.', 'hello-trompo'); ?></h2>
      <p><?php esc_html_e('Cada bloque está pensado para que el usuario entienda rápido qué resuelve Viditec y en qué contexto aplica.', 'hello-trompo'); ?></p>
    </div>

    <div class="container solution-grid">
      <article class="solution-card reveal-up">
        <div class="solution-media media-broadcast"></div>
        <div class="solution-body">
          <p class="solution-kicker"><?php esc_html_e('Broadcast', 'hello-trompo'); ?></p>
          <h3><?php esc_html_e('Infraestructura y tecnología para señales que no pueden detenerse.', 'hello-trompo'); ?></h3>
          <p><?php esc_html_e('Control rooms, switching, monitoreo, distribución, audio y video para operación intensiva.', 'hello-trompo'); ?></p>
          <a href="<?php echo esc_url(hello_trompo_page_url('broadcast', '/broadcast/')); ?>"><?php esc_html_e('Explorar área', 'hello-trompo'); ?></a>
        </div>
      </article>

      <article class="solution-card reveal-up">
        <div class="solution-media media-streaming"></div>
        <div class="solution-body">
          <p class="solution-kicker"><?php esc_html_e('Producción & streaming', 'hello-trompo'); ?></p>
          <h3><?php esc_html_e('Flujos de producción ágiles para contenidos en vivo y bajo demanda.', 'hello-trompo'); ?></h3>
          <p><?php esc_html_e('Equipos confiables para estudios, eventos, productoras y marcas que necesitan versatilidad.', 'hello-trompo'); ?></p>
          <a href="<?php echo esc_url(hello_trompo_page_url('soluciones', '/soluciones/')); ?>"><?php esc_html_e('Ver soluciones', 'hello-trompo'); ?></a>
        </div>
      </article>

      <article class="solution-card reveal-up">
        <div class="solution-media media-measure"></div>
        <div class="solution-body">
          <p class="solution-kicker"><?php esc_html_e('Instrumentos de medición', 'hello-trompo'); ?></p>
          <h3><?php esc_html_e('Precisión, respaldo técnico y servicio para entornos profesionales.', 'hello-trompo'); ?></h3>
          <p><?php esc_html_e('Representación oficial, laboratorio y asistencia para industrias donde medir bien es decidir mejor.', 'hello-trompo'); ?></p>
          <a href="<?php echo esc_url(hello_trompo_page_url('instrumentos', '/instrumentos/')); ?>"><?php esc_html_e('Conocer más', 'hello-trompo'); ?></a>
        </div>
      </article>
    </div>
  </section>

  <section class="section section-accent">
    <div class="container proof-grid">
      <div class="proof-copy reveal-up">
        <p class="eyebrow"><?php esc_html_e('Diferencial comercial', 'hello-trompo'); ?></p>
        <h2><?php esc_html_e('La diferencia no está solo en el equipo. Está en cómo resolvés el proyecto.', 'hello-trompo'); ?></h2>
        <p><?php esc_html_e('El nuevo enfoque presenta a Viditec como socio técnico: entiende la necesidad, recomienda mejor y acompaña la implementación para evitar compras mal definidas.', 'hello-trompo'); ?></p>
      </div>
      <div class="proof-points">
        <div class="proof-item reveal-up">
          <strong><?php esc_html_e('Más claridad', 'hello-trompo'); ?></strong>
          <span><?php esc_html_e('Arquitectura simplificada para que el usuario llegue antes a la solución.', 'hello-trompo'); ?></span>
        </div>
        <div class="proof-item reveal-up">
          <strong><?php esc_html_e('Más confianza', 'hello-trompo'); ?></strong>
          <span><?php esc_html_e('Mensajes que resaltan trayectoria, respaldo y acompañamiento.', 'hello-trompo'); ?></span>
        </div>
        <div class="proof-item reveal-up">
          <strong><?php esc_html_e('Más intención de contacto', 'hello-trompo'); ?></strong>
          <span><?php esc_html_e('CTAs visibles, discurso más claro y mayor percepción de valor.', 'hello-trompo'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container metrics-grid">
      <div class="metric reveal-up">
        <strong data-counter="250">0</strong>
        <span><?php esc_html_e('proyectos acompañados', 'hello-trompo'); ?></span>
      </div>
      <div class="metric reveal-up">
        <strong data-counter="120">0</strong>
        <span><?php esc_html_e('marcas y líneas de producto', 'hello-trompo'); ?></span>
      </div>
      <div class="metric reveal-up">
        <strong data-counter="98">0</strong>
        <span><?php esc_html_e('% foco en performance y servicio', 'hello-trompo'); ?></span>
      </div>
    </div>
  </section>

  <section class="section cta-band">
    <div class="container cta-band-inner reveal-scale">
      <div>
        <p class="eyebrow"><?php esc_html_e('Próximo paso', 'hello-trompo'); ?></p>
        <h2><?php esc_html_e('Si el proyecto es importante, la solución también tiene que serlo.', 'hello-trompo'); ?></h2>
        <p><?php esc_html_e('Usá esta base para seguir con páginas internas, catálogo, casos de éxito y contacto, manteniendo una línea visual más sólida y más vendedora.', 'hello-trompo'); ?></p>
      </div>
      <div class="cta-band-actions">
        <a class="btn btn-primary magnetic" href="<?php echo esc_url(hello_trompo_page_url('contacto', '/contacto/')); ?>"><?php esc_html_e('Solicitar propuesta', 'hello-trompo'); ?></a>
        <a class="btn btn-secondary magnetic" href="<?php echo esc_url(hello_trompo_page_url('productos', '/productos/')); ?>"><?php esc_html_e('Ver productos', 'hello-trompo'); ?></a>
      </div>
    </div>
  </section>
</main>
