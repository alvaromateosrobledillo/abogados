<?php

function abogados_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => __('Menú principal', 'abogados'),
        )
    );
}
add_action('after_setup_theme', 'abogados_setup');

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
