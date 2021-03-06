<?php get_header(); ?>

<section class="journal">
    <div class="left-side">

        <!-- Loop -->
        <?php if( have_posts() )  
            while( have_posts() ) :
                the_post(); ?>

        <!-- Blog Banner -->
        <div class="blog-banner-container" 
            style="background-image: 
            url(<?php echo get_the_post_thumbnail_url();?>)">
            <div class="blog-title">
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="blog-bottom-text">
                <p>
                <?php echo get_the_date() . " /"  ?>  BY <?php the_author(); ?>
                </p>
            </div>
        </div>
        <!-- Blog Content -->
        <div class="blog-content">
            <p><?php the_content(); ?></p>
            <div class="blog-content-bottom-links">
                <span class="blog-content-cat">Posted in → <?php the_category( ' , ' );?></span>
                <span class="blog-content-tag">Tagged → <?php the_tags( ' , ' );?> </span>
            </div>
            <div class="journal-button">
                <a href="#"><i class="fab fa-facebook-f"></i> Like</a>
                <a href="#"><i class="fab fa-twitter"></i> Tweet</a> 
                <a href="#"><i class="fab fa-pinterest-p"></i> Pin</a>
            </div>
        </div>
        
    <!-- Loop ends -->
    <?php endwhile;?>
        <?php the_posts_navigation();?>
    
    </div>

    <?php get_sidebar();?>

</section>

<?php get_footer();?>