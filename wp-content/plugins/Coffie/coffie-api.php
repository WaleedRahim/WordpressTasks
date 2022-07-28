<?php

/**
 * Plugin name: Coffie APIs
 * Author: Waleed Khan
 * version: 0.1.0
 * text-domain: task-api
 */





defined( 'ABSPATH' ) or die( 'Unauthorized Access' );
add_shortcode('coffie_data', 'hs_give_me_coffie');
function hs_give_me_coffie() {

    $url = 'https://coffee.alexflipnote.dev/random.json';
    
  $arguments = array(
        'method' => 'GET'
     );

 $response = wp_remote_get( $url, $arguments );

	if ( is_wp_error( $response ) ) {
	 	$error_message = $response->get_error_message();
	 	return "Something went wrong: $error_message";
	} 


	$results = json_decode( wp_remote_retrieve_body( $response ) );
 


$html = '';
$html .= '<table>';
$html .= '<tr>';
$html .= '<td>Direct Link To Coffie Cup</td>'; 
$html .= '</tr>';



foreach ($results as $val){



$html .= '<tr>';
$html = '<td><a href="'.$val.'">'.$val.'</a></td>';
$html .= '</tr>';
}
$html .= '</table>';
return $html;
}	


function task_register_custom_menu_page() {
	add_menu_page(
		__( 'Coffie API Settings', 'coffie-api' ),
		'Coffie API Test',
		'manage_options',
		'api-coffie.php',
		'coffie_get_data',
		'dashicons-testimonial',
		18
	);
}

add_action( 'admin_menu', 'task_register_custom_menu_page' );