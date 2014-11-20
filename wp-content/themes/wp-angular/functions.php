<?php
add_action('wp_head','wp_angular_theme_js');

function wp_angular_theme_js(){
    wp_register_script('angular',get_bloginfo('template_url').'/js/angular.js');
    wp_enqueue_script('angular');
}