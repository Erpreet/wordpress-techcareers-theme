<?php 

register_nav_menus(
    array(
            'main_menu' => 'Main Menu(Header)',
            'footer_menu' => 'Footer Menu',
    )
    );

    add_action('wp_enqueue_scripts', function() 
    {
            wp_enqueue_script(
                'techcareers-theme-scripts',

                get_theme_file_uri('/js/scripts.js'),

                array(),

                strftime(get_theme_file_uri('/js/scripts.js')),

                FALSE
            );

            wp_enqueue_style(
                'techcareers-theme-main-styles',
                get_theme_file_uri('/css/main.css'),
                strftime(get_theme_file_uri('/css/main.css')),
                'all'
            );
    });

