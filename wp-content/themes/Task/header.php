<?php 
header("Access-Control-Allow-Origin: *"); 
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha512-k78e1fbYs09TQTqG79SpJdV4yXq8dX6ocfP0bzQHReQSbEghnS6AQHE2BbZKns962YaqgQL16l7PkiiAHZYvXQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <?php wp_head(); ?>


</head>

<body>



    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <?php the_custom_logo() ?>
            </h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <?php
                                            wp_nav_menu( array( 
                                            'theme_location' => 'header_menu', 
                                            'menu_class' => 'navbar' ) ); 
                                     ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>