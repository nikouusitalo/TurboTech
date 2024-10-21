<?php
function my_theme_enqueue_styles() {
    // Enqueue the compiled Tailwind CSS file
    wp_enqueue_style('tailwind', get_template_directory_uri(). 
        '/src/output.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>

