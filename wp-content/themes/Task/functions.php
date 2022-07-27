
<?php

/* This is the function File */


?>



<?php

function task_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'task_custom_excerpt_length', 300 );


// Theme Supports

function task_theme_setup(){
	
    add_image_size( 'thumbi', 350, 350 );
    add_image_size( 'appoint', 522, 568 );
    add_image_size( 'partner', 180, 180 );
    add_image_size('post', 1024 , 1024 );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'widgets-block-editor' );
    add_theme_support( 'custom-logo');
    add_theme_support( 'title-tag' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );
    load_theme_textdomain( 'reve', get_template_directory() . '/languages' );
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    $args = array(
        'flex-width'    => true,
        'width'         => 1280,
        'flex-height'   => true,
        'height'        => 400,
        'header'   => true,
        
    );
    add_theme_support( 'custom-header', $args );
   
    }
add_action('after_setup_theme' , 'task_theme_setup');

 
 // register nav menu


function task_register_nav_menu()
{
        register_nav_menus( array(
            'header_menu' => __( 'Task' )
           
        ) );
}
add_action( 'init', 'task_register_nav_menu');



















require get_template_directory().'/inc/scripts.php'; // to include Block ip functions File 
require get_template_directory().'/blockIP.php'; // to include Block ip functions File  
require get_template_directory().'/custompost/project.php'; // to include Block ip functions File  


?>


