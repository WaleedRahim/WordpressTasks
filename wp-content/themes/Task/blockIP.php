<?php

/**
 * Task 1
 * The IP Block functions and definitions
 **/


add_action( 'init', 'block_ip_address' ); // This hook triggers on wordpress initialization

function block_ip_address(){


$ip_list = array(
        '^77\.29\.',
        '203.215.161.2' //This is my IP Addres for checking purpose i Added this
);

if (isset($_SERVER['HTTP_CLIENT_IP']))
{
    $user_ip = $_SERVER['HTTP_CLIENT_IP'];
} else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
    $user_ip = $_SERVER['HTTP_X_FORWARDED'];
} else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
    $user_ip = $_SERVER['HTTP_FORWARDED_FOR'];
} else if(isset($_SERVER['HTTP_FORWARDED'])) {
    $user_ip = $_SERVER['HTTP_FORWARDED'];
} else if(isset($_SERVER['REMOTE_ADDR']))  {
    $user_ip = $_SERVER['REMOTE_ADDR'];
}

        $blocked = false;

        foreach($ip_list as $ip)
        {
            if($user_ip == $ip)
            {
                $blocked = true;
                break;
             }

             
        }

        if($blocked == true)
    {
        header('Location: "https:google.com"'); // we can add custom 404 page URl Here
        
    }
 

}

