
<?php get_header(); ?>

<div class="content-container">
<!-- header -->
<div class="product-header">
    <h1>Shop Stuff</h1>
    <p><?php wp_nav_menu(array(
            'theme_location' => 'product'
            )) ;?>  
</div>


    <section class="product-page">

        <!-- Loop -->
        <?php if( have_posts() ) :
    //The WordPress Loop: loads post content 
        while( have_posts() ) :
            the_post(); ?>

        <!-- Products -->
        <div class="item-container">
            <div class="shop-pic">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="product">
                <span class="title"><?php the_title(); ?></span>
                <span class="price"> <?php echo '$' . get_field('price');?></span>
            </div>
        </div>

        

    <!-- Loop ends -->
    <?php endwhile;?>
        <?php the_posts_navigation();?>
    <?php else : ?>
            <p>No posts found</p>
    <?php endif;?>
    </section>
</div>
<?php get_footer();?>

