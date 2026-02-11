<?php
function advocacia_enqueue_styles() {
    wp_enqueue_style('advocacia-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'advocacia_enqueue_styles');