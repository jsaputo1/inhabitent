<?php get_header(); ?>
<section class="find-us">
    <div class="left-side">

    <?php if( have_posts() ) :

    //The WordPress Loop: loads post content 
        while( have_posts() ) :
            the_post(); ?>
        
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        
        <!-- Loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

    <?php else : ?>
            <p>No posts found</p>
    <?php endif;?>
    </div>

    <?php get_sidebar();?>

    </div>
</section>
<?php get_footer();?>

