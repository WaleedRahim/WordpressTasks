<?php 


get_header();




?>


<?php 

if (have_posts() ) :
while ( have_posts() ) : the_post(); ?>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 mt-5 ">
            <?php the_post_thumbnail( ) ?>
            </div>

            <div class="row">
            <p class="content mt-3"><a href="<?php the_permalink(); ?>"><?php  the_title();?></a></p> </div>
            <div class="content col-md-6 mt-5 pl-4">
            <p class = "mb-1"> <?php the_content() ?> </p>
            </div>

        </div>

      <?php } ?>

 



?>