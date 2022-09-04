<?php

function cv_assets()
{
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.css", array(), "false", 'all');
    wp_enqueue_style("styles-reset", get_template_directory_uri() . "/assets/css/reset.css", array(), "false", 'all');
    wp_enqueue_style("cubeportfolio-styles", get_template_directory_uri() . "/assets/cubeportfolio/css/cubeportfolio.min.css", array(), "false", 'all');
    wp_enqueue_style("owl-styles", get_template_directory_uri() . "/assets/css/owl.theme.css", array(), "false", 'all');
    wp_enqueue_style("owl-carousel", get_template_directory_uri() . "/assets/css/owl.carousel.css", array(), "false", 'all');
    wp_register_style("google-font", "https://fonts.googleapis.com/css?family=Roboto:400,500,700,900", array(), false, 'all');
    wp_enqueue_style("styles", get_template_directory_uri() . "/assets/css/style.css", array("google-font", "bootstrap"), "false", 'all');
    wp_enqueue_style("color", get_template_directory_uri() . "/assets/css/colors/yellow.css", array(), "false", 'all');



    wp_enqueue_style("icon-fonts-awesome", get_template_directory_uri() . "/assets/icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css", array(), "false", 'all');
    wp_enqueue_style("icon-fonts-web-design", get_template_directory_uri() . "/assets/icon-fonts/web-design/flaticon.css", array(), "false", 'all');

    wp_enqueue_script("jquery-js", get_template_directory_uri() . "/assets/js/jquery-2.1.4.min.js");
    wp_enqueue_script("cubeportfolio-js", get_template_directory_uri() . "/assets/cubeportfolio/js/jquery.cubeportfolio.min.js");
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/assets/js/bootstrap.min.js");
    wp_enqueue_script("easytabs-js", get_template_directory_uri() . "/assets/js/jquery.easytabs.min.js");
    wp_enqueue_script("owl-carousel-js", get_template_directory_uri() . "/assets/js/owl.carousel.min.js");
    wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/main.js");

    wp_enqueue_script("jquery2-js", get_template_directory_uri() . "/assets/js/jquery.cookie-1.4.1.min.js");
    wp_enqueue_script("demo-js", get_template_directory_uri() . "/assets/js/Demo.js");
    wp_enqueue_style("colors-demo", get_template_directory_uri() . "/assets/css/Demo.min.css", array(), "false", 'all');
}

add_action("wp_enqueue_scripts", "cv_assets");


function cv_add_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => "Menu Principal",
            'menu-responsive' => "Menu responsive"
        )
    );
}

add_action("after_setup_theme", "cv_add_menus");


function cv_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        "height" => 230,
        "width" => 230,
        "flex-width" => true,
        "flex-height" => true
    ));
}

add_action("after_setup_theme", "cv_theme_supports");


function cv_add_custom_post_type()
{

    $labels = array(
        'name' => 'Portafolio',
        'singular_name' => 'Proyecto',
        'all_items' => 'Todos los proyectos',
        'add_new' => 'Añadir proyecto',
        'category' => 'Categorías'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Proyectos para listar en el catálogo.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'proyecto'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category'),
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-cart'
    );


    register_post_type('proyecto', $args);
}

add_action("init", "cv_add_custom_post_type");
