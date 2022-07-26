<?php 

/* Template Name: API */

get_header();

?>


<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <div class="block text-center">
                        <div class="mb-5">
                          <header class="entry-header">
                           <h1 class="entry-title"><?php the_title(); ?></h1>
                          </header>
                        </div>  
                      </div> 
                    </div>
                    </div>
                </div>
        </div>
   
  <div class="container">
    <?php
       while ( have_posts() ) :
        the_post(); ?>
              <div class="row mb-5">
                <div class="content col-lg-12">
                <p class="mt-4"> <?php the_content() ?> </p>
                </div>
	            </div>
		</div>
	
	</div>
<?php
endwhile; 
?> 
