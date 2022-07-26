<?php
/* Index Page */

get_header()

?>


<?php

 
$project_type = array(
    'post_type' => 'project',
    'posts_per_page' => 6 , 
    'order' => 'ASC', 
    'paged' => get_query_var('paged', 1),
    'post_status' => 'publish');

$post_num = new WP_Query($project_type); ?>
<div class="top"><div> 
<div class="container blog ">
<div class="row mt-5" >
<div class="block text-center"></div>

<?php

while ( $post_num->have_posts() ) { $post_num->the_post();?>

	 <div class="col-md-4 col-sm-12">
            <div class="service-item mb-4">
             <?php the_post_thumbnail('thumbi'); ?>
             <div class="text">
             <p class="content mt-3"><a href="<?php the_permalink(); ?>"><?php  the_title();?></a></p> </div>
             <div class="excerpt"> <?php the_excerpt() ?></div>
            </div>
            </div>

 
    
	<?php } 

	 echo paginate_links(array(
    'total' => $post_num->max_num_pages )); ?>
      

 