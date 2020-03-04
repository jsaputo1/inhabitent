<?php get_header(); ?>

<section class="journal">
    <div class="left-side">
    <h1>You searched for " <?php echo esc_html( get_search_query( false ) ); ?> ". Here are the results:</h1>

        <!-- Loop -->
        <?php if( have_posts() )  
            while( have_posts() ) :
                the_post(); ?>

            <h2><?php the_title();?></h2>
            <p>
            <?php echo wp_trim_words( get_the_content(), 40, '...' );?> 
            </p>
  
            
            <div class="journal-button">
                <a href="<?php the_permalink();?>">Read more →</a>
            </div>

        
    <!-- Loop ends -->
    <?php endwhile;?>
        <?php the_posts_navigation();?>
    
    </div>

    <?php get_sidebar();?>




</section>

    
<?php get_footer();?>