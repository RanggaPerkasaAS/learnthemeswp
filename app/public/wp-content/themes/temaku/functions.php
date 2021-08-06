<?php
function temaku_theme_support(){
    //add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','temaku_theme_support');


function temaku_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Item"
    );
    register_nav_menus($locations);
}
add_action('init','temaku_menus');

function temaku_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('temaku-style', get_template_directory_uri() . "/style.css",array('temaku-bootstrap'),$version,'all' );
    wp_enqueue_style('temaku-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" ,array(),'1.0','all' );
    wp_enqueue_style('temaku-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'1.0','all' );

}

add_action('wp_enqueue_scripts', 'temaku_register_styles');

function temaku_register_scripts(){

    wp_enqueue_script('temaku-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1',true);
    wp_enqueue_script('temaku-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(),'1.16.0',true);
    wp_enqueue_script('temaku-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(),'3.4.1',true);
    wp_enqueue_script('temaku-main', get_template_directory_uri() . "/assets/js/main.js", array(),'1.0',true);
}

add_action('wp_enqueue_scripts', 'temaku_register_scripts');

function temaku_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => "sidebar widget area"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Foooter Area',
            'id' => 'footer',
            'description' => "Footer widget area"
        )
    );
}
add_action('widgets_init', 'temaku_widget_areas');

?>