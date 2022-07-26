<?php

/**
 * Plugin name: Qoutes APIs
 * Description: Get Qoutes from external APIs 
 * Author: Waleed Khan
 * version: 0.1.0
 * text-domain: task-apis
 */





defined( 'ABSPATH' ) or die( 'Unauthorized Access' );
add_shortcode('api_data', 'qoute_get_data');
function qoute_get_data() {

    $url = 'https://api.kanye.rest';
    
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
$html .= '<td><h3>Qoutes</h3></td>'; 
$html .= '</tr>';



foreach ($results as $value){


for ($x = 0; $x <= 4; $x++){
$html .= '<tr>';
$html .= '<td>'. $value.'</td>'; 
$html .= '</tr>';
}
}
$html .= '</table>';
return $html;
}	

/**
 * Register a custom menu page to view the information queried.
 */
function tasks_register_my_custom_menu_page() {
	add_menu_page(
		__( 'Qoutes API Test Settings', 'quote-apis' ),
		'Qoutes API Test',
		'manage_options',
		'api-test.php',
		'qoute_get_data',
		'dashicons-testimonial',
		16
	);
}

add_action( 'admin_menu', 'tasks_register_my_custom_menu_page' );