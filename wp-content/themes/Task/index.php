<?php
/* Index Page */

get_header()

?>


<?php


global $current_user;



if (is_user_logged_in()) {


$article_terms = get_terms( array(
    'taxonomy' => 'projecttype',
    'hide_empty' => true,
) );


if ( empty( $article_terms ) || ! is_array( $article_terms ) ) {
    return;
}
$links = array();
    $project_type = array(
    'post_type' => 'project',
    'taxonomy' => 'projecttype',
    'posts_per_page' => 3 , 
    'order' => 'DSC', 
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
  <?php
 foreach ( $article_terms as $key => $article_term ) {
        ?>
        <a class="entry-footer-link text-black-50 btn border border-secondary mb-2 mr-2" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
                <?php echo esc_html( $article_term->name ); ?>
        </a>
    <?php }?>
           

            </div>
            </div>
<?php }
 




}



else { 

$article_terms = get_terms( array(
    'taxonomy' => 'projecttype',
    'hide_empty' => false,
) );


if ( empty( $article_terms ) || ! is_array( $article_terms ) ) {
    return;
}

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
             <?php
 foreach ( $article_terms as $key => $article_term ) {
        ?>
        <a class="entry-footer-link text-black-50 btn border border-secondary mb-2 mr-2" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
                <?php echo esc_html( $article_term->name ); ?>
        </a>
    <?php }?>
            </div>
            </div>

    <?php }

     echo paginate_links(array(
    'total' => $post_num->max_num_pages )); 


}

?>

 




  

      

 