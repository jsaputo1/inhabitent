<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


<div class="product-grid">
    <div class="product-grid-item">
        <div class="thumbnail-wrapper">

    <h2><?php the_title(); ?>The title</h2>
    <h3><?php the_permalink();?>The permalink</h3>
    <?php the_content(); ?><h4>The Content</h4>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>