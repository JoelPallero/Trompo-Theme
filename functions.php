<?php

function hello_trompo_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 260,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('menus');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => __('Menú principal', 'hello-trompo'),
        'footer'  => __('Menú footer', 'hello-trompo'),
    ));
}
add_action('after_setup_theme', 'hello_trompo_setup');

function hello_trompo_assets() {
    $css_path = get_template_directory() . '/assets/css/main.css';
    $js_path  = get_template_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'hello-trompo-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        file_exists($css_path) ? (string) filemtime($css_path) : '1.0'
    );

    wp_enqueue_script(
        'hello-trompo-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists($js_path) ? (string) filemtime($js_path) : '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'hello_trompo_assets');

function hello_trompo_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'hello-trompo'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets de la barra lateral.', 'hello-trompo'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'hello_trompo_widgets_init');

function hello_trompo_page_url($slug, $fallback_path = '/') {
    $page = get_page_by_path($slug);
    if ($page instanceof WP_Post) {
        return get_permalink($page);
    }
    return home_url($fallback_path);
}


function hello_trompo_primary_fallback_menu() {
    echo '<ul class="main-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Inicio', 'hello-trompo') . '</a></li>';
    echo '<li><a href="' . esc_url(hello_trompo_page_url('soluciones', '/soluciones/')) . '">' . esc_html__('Soluciones', 'hello-trompo') . '</a></li>';
    echo '<li><a href="' . esc_url(hello_trompo_page_url('productos', '/productos/')) . '">' . esc_html__('Productos', 'hello-trompo') . '</a></li>';
    echo '<li><a href="' . esc_url(hello_trompo_page_url('nosotros', '/nosotros/')) . '">' . esc_html__('Nosotros', 'hello-trompo') . '</a></li>';
    echo '<li><a href="' . esc_url(hello_trompo_page_url('contacto', '/contacto/')) . '">' . esc_html__('Contacto', 'hello-trompo') . '</a></li>';
    echo '</ul>';
}

/**
 * Páginas “reales” para usar en menús, pero bloqueadas para edición.
 */
function hello_trompo_locked_meta_key() {
    return '_hello_trompo_locked';
}

function hello_trompo_locked_pages_spec() {
    return array(
        array('slug' => 'soluciones',   'title' => __('Soluciones', 'hello-trompo')),
        array('slug' => 'productos',    'title' => __('Productos', 'hello-trompo')),
        array('slug' => 'nosotros',     'title' => __('Nosotros', 'hello-trompo')),
        array('slug' => 'contacto',     'title' => __('Contacto', 'hello-trompo')),
        array('slug' => 'broadcast',    'title' => __('Broadcast', 'hello-trompo')),
        array('slug' => 'instrumentos', 'title' => __('Instrumentos', 'hello-trompo')),
    );
}

function hello_trompo_ensure_locked_pages_exist() {
    if (!function_exists('get_page_by_path') || !function_exists('wp_insert_post')) {
        return;
    }

    $created_any = false;
    foreach (hello_trompo_locked_pages_spec() as $spec) {
        $slug  = isset($spec['slug']) ? (string) $spec['slug'] : '';
        $title = isset($spec['title']) ? (string) $spec['title'] : '';
        if ($slug === '' || $title === '') {
            continue;
        }

        $existing = get_page_by_path($slug);
        if ($existing instanceof WP_Post) {
            if (!get_post_meta($existing->ID, hello_trompo_locked_meta_key(), true)) {
                update_post_meta($existing->ID, hello_trompo_locked_meta_key(), '1');
            }
            continue;
        }

        $page_id = wp_insert_post(
            array(
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_content' => '',
            ),
            true
        );

        if (!is_wp_error($page_id) && $page_id) {
            update_post_meta((int) $page_id, hello_trompo_locked_meta_key(), '1');
            $created_any = true;
        }
    }

    // Si se crearon páginas nuevas, refrescamos reglas de rewrite una sola vez.
    if ($created_any && function_exists('flush_rewrite_rules')) {
        flush_rewrite_rules(false);
    }
}
add_action('after_switch_theme', 'hello_trompo_ensure_locked_pages_exist');

function hello_trompo_maybe_seed_locked_pages() {
    if (!is_admin() || !current_user_can('manage_options')) {
        return;
    }

    $option_key = 'hello_trompo_locked_pages_seeded';
    if (get_option($option_key)) {
        return;
    }

    hello_trompo_ensure_locked_pages_exist();
    update_option($option_key, (string) time(), false);
}
add_action('admin_init', 'hello_trompo_maybe_seed_locked_pages');

function hello_trompo_is_locked_page($post_id) {
    $post_id = (int) $post_id;
    if ($post_id <= 0) {
        return false;
    }
    return (string) get_post_meta($post_id, hello_trompo_locked_meta_key(), true) === '1';
}

/**
 * Evita cambios por editor/builder: preserva contenido/título al guardar.
 * (Permite actualizaciones programáticas si definen `HELLO_TROMPO_ALLOW_LOCKED_UPDATE` en true.)
 */
function hello_trompo_block_locked_page_updates($data, $postarr) {
    if (defined('HELLO_TROMPO_ALLOW_LOCKED_UPDATE') && HELLO_TROMPO_ALLOW_LOCKED_UPDATE) {
        return $data;
    }

    if (!is_admin() || wp_doing_ajax() || wp_doing_cron() || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)) {
        return $data;
    }

    $post_id = isset($postarr['ID']) ? (int) $postarr['ID'] : 0;
    if ($post_id <= 0 || !hello_trompo_is_locked_page($post_id)) {
        return $data;
    }

    $current = get_post($post_id);
    if (!($current instanceof WP_Post)) {
        return $data;
    }

    $data['post_title']   = $current->post_title;
    $data['post_name']    = $current->post_name;
    $data['post_content'] = $current->post_content;
    $data['post_excerpt'] = $current->post_excerpt;

    return $data;
}
add_filter('wp_insert_post_data', 'hello_trompo_block_locked_page_updates', 10, 2);

function hello_trompo_locked_page_admin_notice() {
    global $pagenow, $post;
    if (!is_admin() || $pagenow !== 'post.php' || !($post instanceof WP_Post)) {
        return;
    }
    if (!hello_trompo_is_locked_page($post->ID)) {
        return;
    }
    echo '<div class="notice notice-info"><p><strong>' .
        esc_html__('Esta página está bloqueada por el theme.', 'hello-trompo') .
        '</strong> ' .
        esc_html__('Podés usarla en menús/enlaces, pero no se edita con constructores ni con el editor.', 'hello-trompo') .
        '</p></div>';
}
add_action('admin_notices', 'hello_trompo_locked_page_admin_notice');

function hello_trompo_hide_locked_page_edit_ui() {
    global $pagenow, $post;
    if (!is_admin() || $pagenow !== 'post.php' || !($post instanceof WP_Post)) {
        return;
    }
    if (!hello_trompo_is_locked_page($post->ID)) {
        return;
    }

    // Oculta UI típica de edición/builder; mantiene opciones generales (publicar, etc.).
    echo '<style>
      #postdivrich, #wp-content-editor-tools, #wp-content-wrap, #edit-slug-box { display:none !important; }
      .block-editor, .edit-post-layout, .edit-post-visual-editor { display:none !important; }
      #elementor-switch-mode, .elementor-switch-mode, .elementor-editor-active, .elementor-button { display:none !important; }
    </style>';
}
add_action('admin_head', 'hello_trompo_hide_locked_page_edit_ui');

function hello_trompo_mark_locked_pages_in_list($states, $post) {
    if ($post instanceof WP_Post && $post->post_type === 'page' && hello_trompo_is_locked_page($post->ID)) {
        $states[] = __('Trompo (bloqueada)', 'hello-trompo');
    }
    return $states;
}
add_filter('display_post_states', 'hello_trompo_mark_locked_pages_in_list', 10, 2);

/**
 * Si Elementor está activo, deshabilita edición para páginas bloqueadas.
 */
function hello_trompo_disable_elementor_on_locked_pages($can_edit, $post_id) {
    if (hello_trompo_is_locked_page($post_id)) {
        return false;
    }
    return $can_edit;
}
add_filter('elementor/document/is_editable', 'hello_trompo_disable_elementor_on_locked_pages', 10, 2);
