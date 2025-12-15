<?php

function abogados_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'custom-logo',
        array(
            'height'               => 64,
            'width'                => 240,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );
    register_nav_menus(
        array(
            'primary' => __('Menú principal', 'abogados'),
        )
    );
}
add_action('after_setup_theme', 'abogados_setup');

/**
 * Keep the custom logo aligned and sized consistently.
 */
function abogados_custom_logo_html($html) {
    $html = str_replace('class="custom-logo"', 'class="custom-logo h-12 w-auto"', $html);
    $html = str_replace('class="custom-logo-link"', 'class="custom-logo-link inline-flex items-center"', $html);

    return $html;
}
add_filter('get_custom_logo', 'abogados_custom_logo_html');

/**
 * Tracking scripts and external compliance tools.
 */
function abogados_tracking_scripts() {
    $gtag_id = 'G-K7S4G4HM66';

    wp_enqueue_script(
        'abogados-gtag',
        'https://www.googletagmanager.com/gtag/js?id=' . rawurlencode($gtag_id),
        array(),
        null,
        false
    );
    wp_script_add_data('abogados-gtag', 'async', true);
    wp_add_inline_script(
        'abogados-gtag',
        "window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{$gtag_id}');"
    );

    wp_enqueue_script(
        'abogados-usercentrics-ppg',
        'https://policygenerator.usercentrics.eu/api/privacy-policy',
        array(),
        null,
        false
    );

    wp_enqueue_script(
        'abogados-cookiebot',
        'https://consent.cookiebot.com/uc.js',
        array(),
        null,
        false
    );
}
add_action('wp_enqueue_scripts', 'abogados_tracking_scripts', 5);

/**
 * Add the required attributes for external scripts.
 */
function abogados_script_loader_tag($tag, $handle, $src) {
    if ('abogados-usercentrics-ppg' === $handle) {
        return '<script id="usercentrics-ppg" privacy-policy-id="ec1abe1b-17de-4a19-9b9a-98e6f1c952da" src="' . esc_url($src) . '"></script>';
    }

    if ('abogados-cookiebot' === $handle) {
        return '<script id="Cookiebot" src="' . esc_url($src) . '" data-cbid="e53609b9-3b4b-400f-89e3-3089efb742ed" data-blockingmode="auto" type="text/javascript"></script>';
    }

    return $tag;
}
add_filter('script_loader_tag', 'abogados_script_loader_tag', 10, 3);

function abogados_assets() {
    wp_enqueue_style(
        'abogados-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'abogados-style',
        get_stylesheet_uri(),
        array('abogados-fonts'),
        '1.0'
    );

    $tailwind_path = get_template_directory() . '/assets/css/tailwind.build.css';
    if ( file_exists( $tailwind_path ) ) {
        wp_enqueue_style(
            'abogados-tailwind',
            get_template_directory_uri() . '/assets/css/tailwind.build.css',
            array('abogados-fonts'),
            filemtime($tailwind_path)
        );
    }

    wp_enqueue_script(
        'abogados-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'abogados_assets');

/**
 * Utility: add classes to menu links and items via wp_nav_menu args.
 */
function abogados_nav_link_class($atts, $item, $args) {
    if (isset($args->link_class)) {
        $existing = isset($atts['class']) ? $atts['class'] . ' ' : '';
        $atts['class'] = trim($existing . $args->link_class);
    }

    if (isset($args->link_active_class) && in_array('current-menu-item', (array) $item->classes, true)) {
        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $args->link_active_class : $args->link_active_class;
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'abogados_nav_link_class', 10, 3);

function abogados_nav_item_class($classes, $item, $args) {
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->li_active_class) && in_array('current-menu-item', (array) $item->classes, true)) {
        $classes[] = $args->li_active_class;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'abogados_nav_item_class', 10, 3);
