<?php
/*
 * set up scripts for theme
 */
add_action('wp_head','wp_angular_theme_js');

function wp_angular_theme_js(){
    wp_register_script('angular',get_template_directory_uri().'/js/angular.js');
    wp_register_script('angular-route',get_template_directory_uri().'/js/angular-route.js',array('angular'));
    wp_register_script('wp-angular-app',get_template_directory_uri().'/js/wp-angular-app.js',array('angular','angular-route'));
    wp_register_script('wp-angular-controllers',get_template_directory_uri().'/js/wp-angular-controllers.js',array('angular','angular-route'));

    wp_localize_script('angular','template_url',get_template_directory_uri());

    wp_enqueue_script('angular');
    wp_enqueue_script('angular-route');
    wp_enqueue_script('wp-angular-app');
    wp_enqueue_script('wp-angular-controllers');
}