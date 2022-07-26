<?php 

/* This is the Script File to include Scripts */


 ?>

<?php 


function task_theme_scripts() {

    wp_enqueue_style('style', get_stylesheet_uri());


}

add_action('wp_enqueue_scripts','task_theme_scripts' );