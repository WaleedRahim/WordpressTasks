 
<?php

/**
 * Plugin name: Project End Points
 * Author: Waleed Khan
 * version: 0.1.0
 * text-domain: task-endpoints
 */


?>

<?php 

defined( 'ABSPATH' ) or die( 'Unauthorized Access' );
add_action('rest_api_init','projectapi');
function projectapi(){

register_rest_route( 'waled/', 'arcitecture', $args = array(

'method' => 'GET',
'callback' => 'get_project_information'


) );

}

function get_project_information(){

	$details = [];
	$articl_posts = get_posts( array(
    // 'taxonomy' => 'projecttype',
    'hide_empty' => false,
    'post_type' => 'project',
    'post_status' => 'publish'
) );

foreach ($articl_posts as $post){

$details[] = array(

	'id' => $post->ID,
	'title' => $post->post_title,
 

);



}

	return rest_ensure_response($details);
}





?>


