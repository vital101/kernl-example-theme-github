<?php

require 'theme_update_check.php';
$MyUpdateChecker = new ThemeUpdateChecker(
    'kernl-example-theme-github',
    'https://kernl.us/api/v1/theme-updates/5552a51540e6512d5296fb06/'
);

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}