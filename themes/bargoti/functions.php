<?php
if (!function_exists('bargoti_setup')):
    function bargoti_setup()
    {
        // Enable theme translation
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title
        add_theme_support('title-tag');

        // Enable support for post thumbnails
        add_theme_support('post-thumbnails');

        // Register primary navigation menu
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'bootstrapfast'),
        ));

        // Enable HTML5 support for WordPress core features
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Enable custom background support with default settings
        add_theme_support('custom-background', apply_filters('bootstrapfast_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Enable selective refresh for widgets
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'bargoti_setup');
?>
