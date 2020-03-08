<?php get_header();?>
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<div class="content-container">

    <div class="single-product">
            <?php the_post_thumbnail(); ?>
        <div class="single-product-text">
            <h2><?php the_title(); ?></h2>
           <h3> <?php echo '$' . get_field('price');?></h3>
            <p><?php the_content(); ?></p>
                <div class="product-button">
                <a href="#"><i class="fab fa-facebook-f"></i> Like</a>
                <a href="#"><i class="fab fa-twitter"></i> Tweet</a> 
                <a href="#"><i class="fab fa-pinterest-p"></i> Pin</a>
                </div>
        </div>
    </div>
           
    <!-- Loop ends -->
    <?php endwhile;?>
    <?php the_posts_navigation();?>
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</div>
<?php get_footer();?>