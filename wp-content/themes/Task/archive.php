 <?php

/*
This is page for single page


*/

get_header();?>

?>


<div class="container">
<?php
while ( have_posts() ) :
	the_post(); ?>

        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-6 mt-5 ">
            <?php the_post_thumbnail( ) ?>
            </div>

            <div class="row">
            <div class="content col-md-6 mt-5 pl-4">
            <p class = "mb-1"> <?php the_content() ?> </p>
            </div>

        </div>

      </div>

</div>
<?php
	
    
 endwhile; 

?>