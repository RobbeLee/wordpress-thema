<?php
    function themaRobbe_bronnen(){
        wp_enqueue_script('robbes-scripts', get_theme_file_uri('jas/main.js'), NULL, '1.0', true);
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'themaRobbe_bronnen');

    //registration
    register_nav_menus( array (
        'hoofd' => __('Hoofd Menu'),
        'footer' => __('Footer Menu')
    ));

    function themaRobbe_widgets() {
        register_sidebar( array( 
        'name'          => __( 'Widget aside' ),
        'id'            => __('widget_aside'),    // ID should be LOWERCASE  ! ! !
        'description'   => 'Hier de widget voor de aside',
        'class'         => 'widget__aside',
        'before_title'  => '<h4 class="widget__title">',
        'after_title'   => '</h4>' ));
    }
    add_action('widgets_init', 'themaRobbe_widgets');
?>