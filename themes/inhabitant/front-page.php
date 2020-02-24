
       <?php get_header(); ?>


<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


<div class="hero-banner">
    
<?php the_post_thumbnail(); ?>
 

        <img src="wp-content/themes/inhabitant/images/logos/inhabitent-logo-full.svg" id="main-logo">
    </div>
    


    
    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>

