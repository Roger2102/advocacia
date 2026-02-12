<<<<<<< HEAD
<?php
function advocacia_enqueue_styles() {
    wp_enqueue_style('advocacia-style', get_stylesheet_uri());
}
=======
<?php
function advocacia_enqueue_styles() {
    wp_enqueue_style('advocacia-style', get_stylesheet_uri());
}
>>>>>>> 349cbebed3718f4b41499c5cbe54de18bba00b6b
add_action('wp_enqueue_scripts', 'advocacia_enqueue_styles');